<?php 
include('header.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->addStudent();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div id="msg">
<div class="container-fluid bg-3 text-center">    
  <h3>Quản lý học sinh</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> Home</a>
  <br>
  
  <div class="panel panel-primary">
     
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Std_Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="name" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">std_class:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="class" required>
               </div>
            </div>
            
            <div class="form-group">
               <label class="control-label col-sm-2">std_score:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                   <input class="form-control" type="text" name="score" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit"  value="Submit">
               </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 
</div>
