# DBManager
A PHP class built for easily interacting with a database

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)
### Usage

DBManager easily incorporates into your existing application.
Drop the file in your web enviroment and call it in the script you want to use it.

```php
require_once("/path/to/DBManager.php");
```

Create a global variable to access class functions

```php
$db = new DBManager;
```

####Inserting a record

Syntax
```php
Insert("table_name",array("key" => "value"));
```

Example
```php
require_once("/path/to/DBManager.php");

$db = new DBManager;

$data = array(
	"parameter1" => "value1",
	"parameter2" => "value2"
);

$db->Insert("my_table_name",$data);
```

### Development

Want to contribute? Great!

This has been a personal project I have been working on for a while and trying to perfect. I have a v1 build that I have added on and revised for the last few months but I wanted to have a fresh clean rewrite with hopefully all the better parts.

I am completely open to contributions I only ask that we open an issue and discuss changes and improvements :)
### Todos

 - Build basic functions
    -INSERT,UPDATE,SELECT,DROP,DELETE
 - Version1 will be built with MYSQL and then V2 will be ported to MYSQLi