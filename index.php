<?php

//require 'collection.php';
//require 'model.php';

class Manage{
  public static function autoload($class){
    include $class.'.php';
  }
}

spl_autoload_register(array('Manage','autoload'));



ini_set('display_errors', 'On');
error_reporting(E_ALL);

$obl=new main();

class main{

  public function __construct(){
     echo 'Accounts Records.<br>';
     accounts::findAll();
     
     echo 'Creating new id 13 in accounts table.<br>';
     $record = new account();
     //$record->id='';
     $record->email='abc@gmail.com';
     $record->fname='abc';
     $record->lname='xyz';
     $record->phone='974-555-5555';
     $record->birthday='2000-05-05';
     $record->gender='male';
     $record->password='123';
     //$record->save();
     
     echo 'Searching new created id 13 in accounts table.<br>';
     $id=13;
     $record1=accounts::findOne($id);
     print_r($record1);
     
     echo '<br>';
     echo 'updating email of id=13.<br>';
     $record = new account();
     $record->id=13;
     $record1=accounts::findOne($id);
     $record=$record1;
     $record1->email='xyz@gmail.com';
     $record1->save();
    }
    
   
}

?>