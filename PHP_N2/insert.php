<?php
include('header.php');
?>

<div class="container-fluid bg-3 text-center">
   <h3>QUẢN LÝ SINH VIÊN</h3>
   <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Records</a>
   <br>


   <div class="panel panel-primary">
      
      <form class="form-horizontal" method="post" id="frm_add">
         <div class="panel-body">

            <div class="form-group">
               <label class="control-label col-sm-2">Std_Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="name" id="std_name" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">std_class:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="class" id="std_class" required>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-2">std_score:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="score" id="std_score" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2"> </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="btnAdd">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
