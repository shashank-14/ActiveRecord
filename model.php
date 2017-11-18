<?php

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
        $modelName1=static::$modelName;
        $tableName = $modelName1::tableName();
        $this->id=13;
        $array = get_object_vars($this);
        array_pop($array);
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        $valueString = "'".implode("','", $array)."'";
        $sql= 'INSERT INTO '.$tableName.' ('.$columnString1.')'.' VALUES '.'('.$valueString.')';
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        echo 'I just saved record' . $this->id;
    }
    private function update() {
        $modelName1=static::$modelName;
        $tableName = $modelName1::tableName();
        $record1=$tableName::findOne($this->id);
        $array = get_object_vars($record1);
        array_pop($array);
        print_r($array);
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        $valueString = "'".implode("','", $array)."'";
        echo 'I just updated record' . $this->id;
    }
    public function delete() {
        echo 'I just deleted record' . $this->id;
    }
    
}

?>