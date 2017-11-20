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
     $display='';
     $display= '<h3>Existing Accounts Records.</h3><br>';
     display::printThis($display);
     accounts::findAll();
     $display= '<br>';
     display::printThis($display);
     
     $display='';
     $display= '<h3>Creating new id 13 in accounts table.</h3><br>';
     display::printThis($display);
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
     $display= 'After adding record.<br>';
     display::printThis($display);
     accounts::findAll();
     $display= '<br>';
     display::printThis($display);
     
     $display='';
     $display= '<h3>Searching new created id 13 in accounts table.</h3><br>';
     display::printThis($display);
     $id=13;
     accounts::findOne($id);
     
     $display='';
     $display.= '<br>';
     $display.= '<h3>updating details of id=13.</h3><br>';
     display::printThis($display);
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
     $display= 'After update.<br>';
     display::printThis($display);
     accounts::findOne($id);
     $display= '<br>';
     display::printThis($display);
     
     $display='';
    $display= '<h3>To delete id=13 from accounts.</h3><br>';
    display::printThis($display);
    $record=new account();
    $record->id=13;
    $record->delete();
    $display= 'After Delete id=13.<br>';
    display::printThis($display);
    accounts::findAll();
    $display='';
    $display.= '<br>';
    $display.='-------------------------------------------------------------------------------------------------------------------------------------------------';
    $display.= '<br>';
    display::printThis($display);
     
     $display='';
    $display.= '<h3>Existing Todos Records.</h3><br>';
     display::printThis($display);
     todos::findAll();
     $display= '<br>';
     display::printThis($display);
     
     $display='';
     $display= '<h3>Creating new id 13 in todos table.</h3><br>';
     display::printThis($display);
     $record = new todo();
     $record->id='';
     $record->owneremail='abc@gmail.com';
     $record->ownerid='7';
     $record->createddate='2017-09-09 00:00:00';
     $record->duedate='2017-10-10 00:00:00';
     $record->message='Active Record';
     $record->isdone='0';
     $record->save();
     $display= 'After adding record.<br>';
     display::printThis($display);
     todos::findAll();
     $display= '<br>';
     display::printThis($display);
     
     $display='';
     $display.= '<h3>Searching new created id 13 in todos table.</h3><br>';
     display::printThis($display);
     $id=13;
     todos::findOne($id);
     
     $display='';
     $display.= '<br>';
     $display.= '<h3>Updating details of id=13.</h3><br>';
     display::printThis($display);
     $record = new todo();
     $record->id=13;
     $record->owneremail='xyz@gmail.com';
     $record->ownerid='2';
     $record->createddate='2017-07-07 00:00:00';
     $record->duedate='2017-08-08 00:00:00';
     $record->message='Active Record update';
     $record->isdone='1';
     $record->save();
     $display= 'After update.<br>';
     display::printThis($display);
     todos::findOne($id);
     $display= '<br>';
    display::printThis($display);
     
     $display='';
    $display.= '<h3>To delete id=13 from todos.</h3><br>';
    display::printThis($display);
    $record=new todo();
    $record->id=13;
    $record->delete();
    $display= 'After Delete id=13.<br>';
    display::printThis($display);
    todos::findAll();
    $display= '<br>';
     display::printThis($display);
    
    }
   
}

?>