<?php
include_once('connection.php'); 
class Db_Class{
    private $table_name = 'student';
    
    function addStudent(){
        $sql = "INSERT INTO ".$this->table_name."(std_name, std_class, std_score)"."VALUES('".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['class'])."','".$this->cleanData($_POST['score'])."')";
        return pg_affected_rows(pg_query($sql));
    }

    
    function getStudents(){             
        $sql ="select * from " . $this->table_name . " ORDER BY std_id DESC";
        return pg_query($sql);
    } 

    function getStudentById(){    
  
        $sql ="select * from " . $this->table_name . "  where std_id=".$this->cleanData($_POST['std_id']);
        return pg_query($sql);
    } 

    function deleteStudent(){    
  
         $sql ="delete from " . $this->table_name . "  where std_id=".$this->cleanData($_POST['std_id']);
        return pg_query($sql);
    } 
    function updateStudent(){       
     
        $sql = "update student set std_name='" .$this->cleanData($_POST['name']). "',std_class='".$this->cleanData($_POST['class'])."', std_score =".$this->cleanData($_POST['score'])." where std_id = ".$this->cleanData($_POST['std_id']);
        return pg_affected_rows(pg_query($sql));        
    }
    function searchStudent(){
        $sql = "select * from ".$this->table_name." where std_name like '%".$this->cleanData($_POST['searchName']). "%'";
        return pg_query($sql);
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>