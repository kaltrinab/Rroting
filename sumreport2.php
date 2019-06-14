
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
      <?php    
        if(isset($_GET['search']))
        {
          $emp_id= (int) $_GET['emp_id'];
        } else {
          $emp_id = 0;
        }

$query = "SELECT * FROM employees";
$result = mysqli_query($connection,$query);
$employees = "<select name='emp_id'>\n";
while($row = mysqli_fetch_array($result)) {

  $selected =  ($row['emp_id'] == $emp_id) ? " selected " : "";

    $employees .= "<option  $selected value='".$row['emp_id']."'>".$row['emp_first_name']." ". $row['emp_last_name']."</option\n>";
}
$employees .= "</select>\n";
?>

<h1><i class="fa fa-address-book"></i>   List of the Projects based on Employee Reports</h1><hr>
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">
      <div class="card" style="text-align: center;">      

      <form action="" method="GET">

      <?=$employees; ?>
        <br>
        <input type="submit" name="search" value="Search Data">
      </form>
<?php
  if(isset($_GET['search']))
  {
    $emp_id= (int) $_GET['emp_id'];
    
    //Lista e projekteve sipas punetorit te caktuar
    $query1="select * from tasks
    WHERE tsk_status = 4
    AND tsk_employee ='$emp_id' ";

    $query = "select SUM(tsk_duration) AS TotalDuration from tasks
    WHERE tsk_status = 4
    AND tsk_employee ='$emp_id' ";
    $result = mysqli_query($connection,$query);
    $result1=mysqli_query($connection,$query1);


    $table = "<table>";
    $table .= "<tr>
    
    
    <th>Task Name</th>
    <th>Task Date</th>
    <th>Task Duration</th>
    
    
    </tr>";
    while($row = mysqli_fetch_array($result1))
    {
     $table .= "<tr>
     
     <td>".$row['tsk_title']."</td>
     <td>".$row['tsk_start_date']."</td>
     <td>".$row['tsk_duration']."</td>
     
     
     </tr>";
     
        }
        while($row = mysqli_fetch_array($result))
        {
            $table .= "<tr>
            <td>Total Duration: </td>
            <td> </td>
            <td>".$row['TotalDuration']."</td>
            
            
            
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