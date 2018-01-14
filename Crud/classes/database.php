<?php

    class Database
    {
       private $objCon;
       
       function __construct($connection) 
       {
           $this->objCon = $connection;
       }
       
       public function save($table, Array $valuesArray)
       {
           $fields = "";
           $values = "";
           
           foreach($valuesArray as $key => $value) {
               $fields .= $key . ",";
               $values .= "'" . $value . "', ";
           }
           
           $fields = rtrim($fields, ", ");
           $values = rtrim($values, ", ");
           
           echo $sql = "INSERT INTO $table ($fields) VALUES ($values)";
           $this->objCon->query($sql);
       }
       
    }

?>
