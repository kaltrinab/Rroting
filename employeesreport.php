
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
<h1><i class="fa fa-address-book"></i>   EMPLOYEE  REPORTS</h1><hr>
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">
      <div class="card" style="text-align: center;">      

<?php    
$query = "SELECT * FROM employees";
$result = mysqli_query($connection,$query);
$employees = "<select name='emp_id'>\n";
while($row = mysqli_fetch_array($result)) {
    $employees .= "<option value='".$row['emp_id']."'>".$row['emp_first_name']." ". $row['emp_last_name']."</option\n>";
}
$employees .= "</select>\n";
?>


      <form action="" method="POST">
      <?=$employees;?><br>
        <input type="submit" name="search" value="Search Data">
      </form>
<?php
  if(isset($_POST['search']))
  {
    $emp_id=$_POST['emp_id'];
    $query = "SELECT * FROM employees where emp_id='$emp_id' ";
    $result = mysqli_query($connection,$query);

    $table = "<table>";
    $table .= "<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Position</th>
    <th>Level</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
      $table .= "<tr>
     <td>".$row['emp_first_name'] ."</td>
     <td>".$row['emp_last_name']."</td>
     <td>".$row['emp_gender']."</td>
     <td>".$row['emp_position']."</td>
     <td>".$row['emp_level']."</td>
     
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