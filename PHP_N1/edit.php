<?php 
include('header.php');
$student = $_SESSION['student'];
if(isset($_POST['update']) and !empty($_POST['update'])){
$ret_val = $obj->updateStudent();
if($ret_val==1){
   echo '<script type="text/javascript">'; 
   echo 'alert("Record Saved Successfully");'; 
   echo 'window.location.href = "index.php";';
   echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>CRUD Example Using PHP OOPS And PostgreSQL</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
        <div class="panel-heading">CRUD Example Using PHP OOPS And PostgreSQL</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">             
             <div class="form-group">
               <label class="control-label col-sm-2">std_name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$student->std_name?>"type="text" name="name" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">std_class:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$student->std_class?>"type="text" name="class" required>
               </div>
            </div>            
            <div class="form-group">
               <label class="control-label col-sm-2">std_score:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                   <input class="form-control" value= "<?=$student->std_score?> " type="text" name="score" required>
               </div>
               <input type="hidden" value="<?=$student->std_id?>" name="std_id">
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                 <input type="submit" class="btn btn-success" name="update" value="Update">                    
                </div>
            </div> 
        </div>      
</form>
</div>
</div> 