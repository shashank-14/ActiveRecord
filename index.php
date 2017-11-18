<?php

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
     echo 'Existing Accounts Records.<br>';
     accounts::findAll();
     echo '<br>';
     
     echo 'Creating new id 13 in accounts table.<br>';
     $record = new account();
     $record->id='';
     $record->email='abc@gmail.com';
     $record->fname='abc';
     $record->lname='xyz';
     $record->phone='974-555-5555';
     $record->birthday='2000-05-05';
     $record->gender='male';
     $record->password='123';
     $record->save();
     echo 'After adding record.<br>';
     accounts::findAll();
     echo '<br>';
     
     echo 'Searching new created id 13 in accounts table.<br>';
     $id=13;
     accounts::findOne($id);
     
     echo '<br>';
     echo 'updating details of id=13.<br>';
     $record = new account();
     $record->id=13;
     $record->email='xyz@gmail.com';
     $record->fname='qqq';
     $record->lname='www';
     $record->phone='923-111-1111';
     $record->birthday='1999-02-03';
     $record->gender='female';
     $record->password='123';
     $record->save();
     echo 'After update.<br>';
     accounts::findOne($id);
     echo '<br>';
     //print_r($record1);
    
    echo 'To delete id=13 from accounts.<br>';
    $record=new account();
    $record->id=13;
    $record->delete();
    echo 'After Delete id=13.<br>';
    accounts::findAll();
    }
   
}

?>