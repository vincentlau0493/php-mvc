	
<?php
 
class SQLQuery {
    static protected $_dbHandle;
    protected $_result;
 
    /** Connects to database **/
 
    function connect($address, $account, $pwd, $name) {
        // self::$_dbHandle = mysql_connect($address, $account, $pwd);
        // if (self::$_dbHandle != 0) {
        //     if (mysql_select_db($name, self::$_dbHandle)) {
        //         return 1;
        //     }
        //     else {
        //         return 0;
        //     }
        // }
        // else {
        //     return 0;
        // }
        self::$_dbHandle = mysqli_connect($address, $account, $pwd, $name) or die("Error " . mysqli_error(self::$_dbHandle));


    }
 
    /** Disconnects from database **/
 
    function disconnect() {
        if (mysqli_close(self::$_dbHandle) != 0) {
            return 1;
        }  else {
            return 0;
        }
    }
     
    function selectAll() {
        $query = 'select * from `'.$this->_table.'`';
        return $this->query($query);
    }
     
    function select($id) {

        // $prefix = substr($this->_table, 0, -1) . '_';
        // $query = 'select * from `'.$this->_table.'` where `' . $prefix . 'id` = \''. $id .'\'';
        $query = 'select * from `'.$this->_table.'` where `' . '' . 'id` = \''. $id .'\'';        
        return $this->query($query, 1);    
    }
 
     
    /** Custom SQL Query **/
 
    function query($query, $singleResult = 0) {
 
        // $this->_result = mysql_query($query, self::$_dbHandle);
        $this->_result = mysqli_query(self::$_dbHandle, $query);

        if (preg_match("/select/i",$query)) {
            $result = array();
            $table = array();
            $field = array();
            $tempResults = array();
            $numOfFields = mysqli_num_fields($this->_result);
            for ($i = 0; $i < $numOfFields; ++$i) {
                $finfo = mysqli_fetch_field($this->_result);

                array_push($table,$finfo->table);
                array_push($field,$finfo->name);
            }
     
             
            while ($row = mysqli_fetch_row($this->_result)) {
                  for ($i = 0;$i < $numOfFields; ++$i) {
                      // $table[$i] = trim(ucfirst($table[$i]),"s");
                      $tempResults[$table[$i]][$field[$i]] = $row[$i];
                  }
                  if ($singleResult == 1) {
                      mysqli_free_result($this->_result);
                      return $tempResults;
                  }
                  array_push($result,$tempResults);
              }
              mysqli_free_result($this->_result);
              return($result);
        }

        if (preg_match("/insert/i", $query)) {
            return mysqli_insert_id(self::$_dbHandle);
        }
         
 
    }


    function realEscapeString($str) {
        return self::$_dbHandle->real_escape_string($str);
    }
 
    /** Get number of rows **/
    function getNumRows() {
        return mysqli_num_rows($this->_result);
    }
 
    /** Free resources allocated by a query **/
 
    function freeResult() {
        mysqli_free_result($this->_result);
    }
 
    /** Get error string **/
 
    function getError() {
        return mysqli_error(self::$_dbHandle);
    }


}