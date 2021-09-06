
$(document).ready(function () {

	// search
	$("#btn_search").on('click', function () {
		var searchName = $("#searchName").val();
		$.ajax({
			method: 'GET',
			url: 'ajax.php',
			data: {
				'action': 'search',
				'searchName': searchName,
			},
			success: function (response) {

				var students = JSON.parse(response);

				var body = '';

				$.each(students, function (index, std) {
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
	})


	// delete
	$('.table').on('click', '#btn_delete', function () {
		var conn = confirm('Do you want to delete?');
		var std_id = $('#std_id').val();
		if (conn == true) {
			$.ajax({
				method: 'POST',
				url: 'ajax.php',
				data: {
					'action': 'delete',
					'id': std_id
				},
				success: function (response) {
					alert('successfuly')
					location.reload();

				},
			})
		}
	});

	//add
	$("#btnAdd").on("click", function () {
		var std_name = $('#std_name').val();
		var std_class = $('#std_class').val();
		var std_score = $('#std_score').val();
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: {
				'action': 'add',
				'name': std_name,
				'class': std_class,
				'score': std_score

			},
			success: function (response) {
				alert("add successfully")
				window.location.href = "index.php";
			},
			error: function () {
				window.alert('ADD failse')
			}

		});

	});

	// update
	$("#btnUpdate").on("click", function () {
		var std_name = $('#std_name').val();
		var std_class = $('#std_class').val();
		var std_score = $('#std_score').val();
		var std_id = $('#std_id').val();
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: {
				'action': 'update',
				'name': std_name,
				'class': std_class,
				'score': std_score,
				'id': std_id


			},
			success: function (response) {
				alert("update successfully")
				window.location.href = "index.php";
			},
			error: function () {
				window.alert('update failse')
			}

		});


	})




});
