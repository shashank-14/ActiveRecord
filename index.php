<?php

//require 'collection.php';
//require 'model.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$obl=new main();

class main{

  public function __construct(){
     echo 'Accounts Records.<br>';
     //accounts::findAll();
     
     /*echo 'Creating new id 11 in accounts table.<br>';
     $record = new accounts();
     $record->id='';
     $record->email='abc@gmail.com';
     $record->fname='abc';
     $record->lname='xyz';
     $record->phone='974-555-5555';
     $record->birthday='2000-05-05';
     $record->gender='male';
     $record->password='123';
     $record->save();*/
     
     echo 'Searching new created id 11 in accounts table.<br>';
     $id=11;
     accounts::findOne($id);

   
    }
    
   
}

?>