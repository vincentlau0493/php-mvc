#phpmvc

A simple low-level php mvc framework, which is inspired by Express.js. The framework is configured by controller, model, view and route without template engine. Don't bother to learn anything new. Everything in this framework is based on php.


## Getting started

First of all, please make sure npm installed. In your shell, install with npm globally:

```sh
npm install -g phpmvc
```

Then you can use 'phpmvc' as command line tool to build your php project:

```sh
$ cd {YOUR_PATH}/htdocs/
$ phpmvc getstart
```

Hit the enter and you will see:

```sh
   create : /Users/user/Desktop/getstart
   create : /Users/user/Desktop/getstart/.htaccess
   create : /Users/user/Desktop/getstart/public
   create : /Users/user/Desktop/getstart/public/.htaccess
   create : /Users/user/Desktop/getstart/public/index.php
   create : /Users/user/Desktop/getstart/public/javascripts
   create : /Users/user/Desktop/getstart/public/images
   create : /Users/user/Desktop/getstart/application
   create : /Users/user/Desktop/getstart/application/routes.php
   create : /Users/user/Desktop/getstart/public/stylesheets
   create : /Users/user/Desktop/getstart/config
   create : /Users/user/Desktop/getstart/config/config.php
   create : /Users/user/Desktop/getstart/tmp
   create : /Users/user/Desktop/getstart/lib
   create : /Users/user/Desktop/getstart/lib/Controller.class.php
   create : /Users/user/Desktop/getstart/lib/Model.class.php
   create : /Users/user/Desktop/getstart/lib/Router.class.php
   create : /Users/user/Desktop/getstart/lib/SQLQuery.class.php
   create : /Users/user/Desktop/getstart/lib/Template.class.php
   create : /Users/user/Desktop/getstart/lib/utility.php
   create : /Users/user/Desktop/getstart/application/controllers
   create : /Users/user/Desktop/getstart/application/controllers/ErrorController.php
   create : /Users/user/Desktop/getstart/application/controllers/StaticController.php
   create : /Users/user/Desktop/getstart/application/views
   create : /Users/user/Desktop/getstart/application/views/404.php
   create : /Users/user/Desktop/getstart/application/views/footer.php
   create : /Users/user/Desktop/getstart/application/views/header.php
   create : /Users/user/Desktop/getstart/application/views/index.php
   create : /Users/user/Desktop/getstart/application/models
   create : /Users/user/Desktop/getstart/application/models/ExampleModel.php
   create : /Users/user/Desktop/getstart/tmp/logs
   create : /Users/user/Desktop/getstart/tmp/logs/error.log

Enjoy your MVC Framework!
```
Turn on your server and request 'localhost/getstart', then enjoy the framework!


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



