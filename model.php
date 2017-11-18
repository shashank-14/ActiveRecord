<?php
include 'dbConn.php';

class model {
    protected $tableName;
    public function save()
    {
        if ($this->id == '') {
            $sql = $this->insert();
        } else {
            $sql = $this->update();
        }
    }
    private function insert() {
        $tableName = get_called_class();
        $this->id=12;
        $array = get_object_vars($this);
        array_pop($array);
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        //echo $columnString1;
        $valueString = "'".implode("','", $array)."'";
        //echo $valueString;
        $sql= 'INSERT INTO '.$tableName.' ('.$columnString1.')'.' VALUES '.'('.$valueString.')';
        //echo $sql;
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        echo 'I just saved record' . $this->id;
    }
    private function update() {
        $sql = 'sometthing';
        return $sql;
        echo 'I just updated record' . $this->id;
    }
    public function delete() {
        echo 'I just deleted record' . $this->id;
    }
}
class account extends model {
  public $id;
	public $email;
	public $fname;
	public $lname;
	public $phone;
	public $birthday;
	public $gender;
	public $password;

 public function __construct()
    {
        $this->tableName = 'accounts';
    }
}


?>