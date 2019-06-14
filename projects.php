<?php include("header.php");?>
<style>
.form-style-2{
  border: none;
  padding: 8px 15px 8px 15px;
  background: #FF8500;
  color: #fff;
  box-shadow: 1px 1px 4px #DADADA;
  -moz-box-shadow: 1px 1px 4px #DADADA;
  -webkit-box-shadow: 1px 1px 4px #DADADA;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  display: inline;
	width:90px;
	height:60px;
}
</style>

  <h1><i class="fa fa-folder"></i>          PROJECTS</h1><hr>
  <div class="container">
    <div class="top">
      
<?php
  $query = "select * from projects
  inner join projects_employees on pro_id = pre_project
  inner join employees on emp_id = pre_employee 
  WHERE emp_id = '".$_SESSION['emp_id']."'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	?>

<?php
	$query1="select tct_name from task_categories
	inner join tasks on tct_id = tsk_category";
	$result1 = mysqli_query($connection, $query) or die(mysqli_error($connection));
?>

<select name="projects">
<?php
while($rows = $result->fetch_assoc())
{
	$pro_name = $rows['pro_name'];
	echo "<option value='$pro_name'>$pro_name</option>";
}
?>
</select>

<form name="add_name" id="add_name">
					<div class="table-responsive">
					<br>
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<th>Task Name</th>
								<th>Task Description</th>
								<th>Task Category</th>
								<th>Task Date</th>
								<th>Task Duration</th>
								<th>Task Status</th>
								
							</tr>
							<tr>
								<td><input type="text" name="tsk_title"  class="form-control name_list" /></td>
								<td><input type="text" name="tsk_title"  class="form-control name_list" /></td>
								<td>
									<select name="tasks">
									 <option></option>
									 <option>work</option>
									 <option>lunch</option>
									 <option>game</option>
										<?php
											while($rows1 = $result1->fetch_assoc())
												{
													$task_category = $rows1['task_category'];
													echo "<option value='$task_category'>$task_category</option>";
												}
										?>
										</select>
									</td>
								
								<td><input type="date" name="tsk_start_date"/></td>
								<td><input type="time"/></td>	
								<td>
									<select name="task_statuses">
										<option></option>
										<option>Approved</option>
										<option>Done</option>
										<option>In Progress</option>
										<option>To Do</option>
									</select>
								</td>
								<td><button type="button" name="add" id="add" class="form-style-2">Add More</button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="form-style-2" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="tct_name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><input type="text" name="tsk_title"  class="form-control name_list" /></td></td><td><select name="tasks"> <option></option><option>work</option></select></td><td><input type="date" name="tsk_start_date"/></td><td><input type="time"/></td><td><select name="task_statuses"><option></option><option>Approved</option><option>Done</option><option>In Progress</option><option>To Do</option></select></td>	<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Delete</button></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>
<hr>

<?php include('footer.php'); ?>
