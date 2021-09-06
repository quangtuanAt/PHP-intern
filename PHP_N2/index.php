<?php
include('header.php');
if (isset($_POST['update'])) {
  $student = $obj->getStudentById();
  $_SESSION['student'] = pg_fetch_object($student);
  echo '<script type="text/javascript">';
  echo 'window.location.href = "edit.php";';
  echo '</script>';
}
?>
<script>
  $(document).ready(function() {
    $.ajax({
      method: 'GET',
      url: 'ajax.php',
      data: {
        'action': 'list',
      },
      success: function(response) {

        var students = JSON.parse(response);

        var body = '';

        $.each(students, function(index, std) {
          body += `<tr align="left">
                      <td >${std.std_id}</td>
                      <td>${std.std_name}</td>
                      <td>${std.std_class}</td>
                      <td>${std.std_score}</td>
                    
                      <td>
                          <form method="post">
                              <input type="submit" id = "btnUpdate" class="btn btn-success" name= "update" value="Update">   
                              <input type="button" id="btn_delete" class="btn btn-danger" name= "delete" value="Delete">
                              <input type="hidden" id = "std_id"  value="${std.std_id}" name="id">
                            
                          </form>
                      </td>
                    </tr>`;
        });
        $('tbody').html(body);

      },
    })

  });
</script>
<div class="container-fluid bg-3 text-center">
  <h3>QUẢN LÝ SINH VIÊN </h3>
  <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> ADD Student</a>
  <div>
    <input type="text" name="searchName" id="searchName" placeholder="Seach by name">
    <input type="submit" value="Search" class="btn btn-primary" name="search" id="btn_search"></input>
  </div>


  <br>

  <div class="panel panel-primary">


    <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr class="active">
            <th>std_id</th>
            <th>std_name</th>
            <th>std_class</th>
            <th>std_score</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>

  </div>
</div>