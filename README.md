#phpmvc

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/vincentlau0493/php-mvc?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

A simple low-level php mvc framework, which is inspired by Express.js. The framework is configured by controller, model, view and route without template engine. Don't bother to learn anything new. Everything in this framework is based on php.


## Getting started

First of all, please make sure npm installed. In your shell, install with npm globally:

```sh
npm install -g phpmvc
```

Then you can use 'phpmvc' as command line tool to build your php project:

```sh
$ cd {YOUR_PATH}/htdocs/
$ phpmvc projectname
```

Hit the enter and you will see:

```sh
   create : /Users/user/Desktop/projectname
   create : /Users/user/Desktop/projectname/.htaccess
   create : /Users/user/Desktop/projectname/public
   create : /Users/user/Desktop/projectname/public/.htaccess
   create : /Users/user/Desktop/projectname/public/index.php
   create : /Users/user/Desktop/projectname/public/javascripts
   create : /Users/user/Desktop/projectname/public/images
   create : /Users/user/Desktop/projectname/application
   create : /Users/user/Desktop/projectname/application/routes.php
   create : /Users/user/Desktop/projectname/public/stylesheets
   create : /Users/user/Desktop/projectname/config
   create : /Users/user/Desktop/projectname/config/config.php
   create : /Users/user/Desktop/projectname/tmp
   create : /Users/user/Desktop/projectname/lib
   create : /Users/user/Desktop/projectname/lib/Controller.class.php
   create : /Users/user/Desktop/projectname/lib/Model.class.php
   create : /Users/user/Desktop/projectname/lib/Router.class.php
   create : /Users/user/Desktop/projectname/lib/SQLQuery.class.php
   create : /Users/user/Desktop/projectname/lib/Template.class.php
   create : /Users/user/Desktop/projectname/lib/utility.php
   create : /Users/user/Desktop/projectname/application/controllers
   create : /Users/user/Desktop/projectname/application/controllers/ErrorController.php
   create : /Users/user/Desktop/projectname/application/controllers/StaticController.php
   create : /Users/user/Desktop/projectname/application/views
   create : /Users/user/Desktop/projectname/application/views/404.php
   create : /Users/user/Desktop/projectname/application/views/footer.php
   create : /Users/user/Desktop/projectname/application/views/header.php
   create : /Users/user/Desktop/projectname/application/views/index.php
   create : /Users/user/Desktop/projectname/application/models
   create : /Users/user/Desktop/projectname/application/models/ExampleModel.php
   create : /Users/user/Desktop/projectname/tmp/logs
   create : /Users/user/Desktop/projectname/tmp/logs/error.log

Enjoy your MVC Framework!
```
Turn on your server and request 'localhost/projectname', then enjoy the framework!


## Project Structure
```
YOURPROJECT/
├── application/
│   ├── controllers/               #your controllers
│   │   ├── ErrorController.php
│   │   └── StaticController.php
│   ├── models/                    #your models
│   │   └── ExampleModel.php
│   ├── views/                     #your views
│   │   ├── 404.php
│   │   ├── footer.php
│   │   ├── header.php
│   │   └── index.php
│   └── routes.php
├── config/
│   └── config.php                 #your db config
├── lib/
│   ├── Controller.class.php
│   ├── Model.class.php
│   ├── Router.class.php
│   ├── SQLQuery.class.php
│   ├── Template.class.php
│   └── utility.php
├── public/                        #your static files
│   ├── .htaccess
│   ├── index.php                  #This is IMPORTANT, don't remove it
│   ├── images/
│   ├── javascripts/
│   └── stylesheets/
├── temp/
│   ├── logs/
│   │   └── error.log              #error log
└── .htaccess

```



