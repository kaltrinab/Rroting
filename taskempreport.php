
<?php include("header.php"); ?>
<style>
input{
	width: 40%;
	height:5%;
	border:1px;
	border-radius:05px;	
	padding: 8px 15px 8px 15px;
	margin: 10px 0px 15px 0px;
	box-shadow: 1px 1px 2px 1px grey;
}
</style>
<h1><i class="fa fa-address-book"></i>   List of the Project Tasks Reports</h1><hr>
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">
      <div class="card" style="text-align: center;">      

      <form action="" method="POST">
        <input type="text" name="emp_id" placeholder="Enter ID To Search"/><br>
        <input type="submit" name="search" value="Search Data">
      </form>
<?php
  if(isset($_POST['search']))
  {
    $emp_id=$_POST['emp_id'];
    //Lista e punetoreve sipas projektit te caktuar
    $query = "select * from tasks
    inner join projects on pro_id = tsk_project
    WHERE tsk_employee  ='$emp_id' ";
    $result = mysqli_query($connection,$query);

    
    $table = "<table>";
    $table .= "<tr>
    <th>Project Name</th>
    <th>Task Name</th>
    <th>Start Date</th>
    <th>Task Description</th>
    <th>Duration</th>
    
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
      $table .= "<tr>
     <td>".$row['pro_name'] ."</td>
     <td>".$row['tsk_title']."</td>
     <td>".$row['tsk_start_date']."</td>
     <td>".$row['tsk_description']."</td>
     <td>".$row['tsk_duration']."</td>
     
     
     </tr>";

    }
      $table .= "</table>";
      echo $table;
  }      
?>

<hr>
      </div>
     </div>
    </div>
  </div>