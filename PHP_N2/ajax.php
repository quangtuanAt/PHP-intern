<?php
include_once('connection.php');
$action = $_REQUEST['action'];
switch($action){
    case 'search': {
        function getStudentByName()
        {
    
            $sql = "select * from student where std_name LIKE '%" . cleanData($_GET['searchName']) . "%'";
            return pg_query($sql);
        }
        $students = getStudentByName();
        $student = pg_fetch_all($students);
        echo json_encode($student);
        die();
    }

    case 'add': {
        function addStudent()
        {
            $sql = "INSERT INTO student (std_name, std_class, std_score)" . "VALUES('" . cleanData($_POST['name']) . "','" . cleanData($_POST['class']) . "','" . cleanData($_POST['score']) . "')";
            return pg_affected_rows(pg_query($sql));
        }
    
        addStudent();
        die();
    }

    case "delete": {
        function deleteStudent()
        {
    
            $sql = "delete from student  where std_id=" . cleanData($_POST['id']);
            return pg_query($sql);
        }
        deleteStudent();
  
    }


    case 'update': {

        function updateStudent()
        {
    
            $sql = "update student set std_name='" . cleanData($_POST['name']) . "',std_class='" . cleanData($_POST['class']) . "', std_score =" . cleanData($_POST['score']) . " where std_id = " . cleanData($_POST['id']);
            return pg_affected_rows(pg_query($sql));
        }
    
        updateStudent();
        die();
    }

    case 'list': {
        function getStudents(){             
            $sql ="select * from student ORDER BY std_id DESC";
            return pg_query($sql);
        } 
        $students = getStudents();
        $student = pg_fetch_all($students);
        echo json_encode($student);
        die();
    }
}


function cleanData($val)
{
    return pg_escape_string($val);
}
