<?php
include('header.php');
 $students = $obj->getStudents();
if (isset($_POST['update'])) {
  $student = $obj->getStudentById();
  $_SESSION['student'] = pg_fetch_object($student);
  echo '<script type="text/javascript">';
  echo 'window.location.href = "edit.php";';
  echo '</script>';
}
if (isset($_POST['delete'])) {
  $ret_val = $obj->deleteStudent();
  if ($ret_val == 1) {

    echo "<script language='javascript'>";
    echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
    echo "</script>";
  }
}
if (isset($_POST['search'])) {
  $students = $obj->searchStudent();
  echo "<script language='javascript'>";
  echo "alert('The student has been find'){
         window.location.reload();
     }";
  echo "</script>";
}
?>
<div class="container-fluid bg-3 text-center">
  <h3>CRUD Example Using PHP OOPS And PostgreSQL</h3>
  <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Add Record</a>
  <form method="post">
    <input type="text" name="searchName" placeholder="Seach by name">
    <input type="submit" value="Search" name="search"></input>
  </form>
  <br>

  <div class="panel panel-primary">
    <div class="panel-heading">CRUD Example Using PHP OOPS And PostgreSQL</div>

    <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr class="active" >
            <th>std_id</th>
            <th>std_name</th>
            <th>std_class</th>
            <th>std_score</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($student = pg_fetch_object($students)) : ?>
            <tr >
              <td><?= $student->std_id ?></td>
              <td><?= $student->std_name ?></td>
              <td><?= $student->std_class ?></td>
              <td><?= $student->std_score ?></td>
              <td>
                <form method="post">
                  <input type="submit" class="btn btn-success" name="update" value="Update">
                  <input type="submit" onClick="return confirm('Please confirm deletion');" class="btn btn-danger" name="delete" value="Delete">
                  <input type="hidden" value="<?= $student->std_id ?>" name="std_id">
                </form>


              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>