<?php include('header.php'); ?>
<?php


$id = (int) $_GET['id'];

$query = "SELECT * FROM `tasks` 
inner join projects ON pro_id = tsk_project
inner join task_statuses ON tsk_status = tas_id
inner join task_categories ON tsk_category = tct_id
where pro_id = '$id'";


$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count > 0){
  echo "<table class='table'>";
  echo "<tr><td>Titulli</td><td>Kategoria</td><td>Statusi</td></tr>";
  $emri_projektit = "";
    while ($row=mysqli_fetch_assoc($result)) {
        if ($emri_projektit == "") {
            $emri_projektit =  $row['pro_name'];
            echo "<h1>".$emri_projektit."</h1>";
        }
 
        // tsk_id
        // tsk_title
        // tsk_category
        // tsk_status

      echo "<td><a href='opentask.php?id=".$row['tsk_id']."'>".$row['tsk_title']."</a></td>";
      echo "<td>".$row['tct_name']."</td>";
      echo "<td>".$row['tas_name']."</td>";
      echo "<tr>";

      echo "</tr>";
    }
    echo "</table>";
  }
else {
  echo "There are no tasks in this project";
}

?>
<?php include('footer.php'); ?>