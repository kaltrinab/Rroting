<?php include('header.php'); ?>

<!-- Page content -->
<div class="main">

  <h1><i class="fa fa-home"></i>          HOME</h1><hr>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="card" style="text-align: center;">      
  <img src="Images/front i adm.png" alt="John">
  <h1><?php echo  $_SESSION['emp_name']; ?></h1>
  <p class="title">CEO & Founder, Rrota</p>
  <p>Lorem ipsum dolor sit amet</p>
  <button style="background-color:white "><a href="settings"><i class="fa fa-cog"></i></button></a>
  <button style="background-color:white "><a href="login.html"><i class="fa fa-sign-out"></i></button></a>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  
  <div class="row">
    <div class="text-justify col-sm-4"><h3 style="text-align:center;">PROJECTS</h3></div>

    <?php
$query = "select * from projects
inner join projects_employees on pro_id = pre_project
inner join employees on emp_id = pre_employee
WHERE emp_id = '".$_SESSION['emp_id']."'";


$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count > 0){
  echo "<table class='table'>";
    while ($row=mysqli_fetch_assoc($result)) {
      echo "<tr><td><a href='openproject.php?id=".$row['pro_id']."'>".$row['pro_name']."</a></td><td>".date("d.m.Y", strtotime($row['pro_startdate']))."</td><td>".date("d.m.Y", strtotime($row['pro_enddate']))."</td></tr>";
    }
    echo "</table>";
  }
else {
  echo "This employee isn't assigned any projects";
}



?>
  </div>  
  
  <hr>
</div>
  </div>


</div>
<?php include('footer.php');?>
