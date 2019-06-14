<?php include("header.php");?>
<style>
.form-style-2{
  max-width: 80%;
  padding: 20px 12px 10px 20px;
  font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
  font-weight: bold;
  font-style: italic;
  border-bottom: 2px solid #ddd;
  margin-bottom: 20px;
  font-size: 15px;
  padding-bottom: 3px;
}
.form-style-2 label{
  display: block;
  margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
  width: 100px;
  font-weight: bold;
  float: left;
  padding-top: 8px;
  padding-right: 5px;
}
.form-style-2 span.required{
  color:red;
}
.form-style-2 .tel-number-field{
  width: 40px;
  text-align: center;
}
.form-style-2 input.input-field, .form-style-2 .select-field{
  width: 48%; 
}
.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  border: 1px solid #C2C2C2;
  box-shadow: 1px 1px 4px #EBEBEB;
  -moz-box-shadow: 1px 1px 4px #EBEBEB;
  -webkit-box-shadow: 1px 1px 4px #EBEBEB;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  padding: 7px;
  outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
  border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
  height:100px;
  width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
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
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
  background: #EA7B00;
  color: #fff;
}
</style>

<div class="form-style-2">
	<div class="form-style-2-heading">Provide information</div>
		<form action="registerclient.php" method="post">
        <label for="pro_id"><span>Client ID <span class="required">*</span></span><input type="text" class="input-field" name="cli_id" value="" /></label>
		  	<label for="pro_name"><span>Client Name <span class="required">*</span></span><input type="text" class="input-field" name="cli_name" value="" /></label>
        <label><span>Address </span><input type="text" name="cli_address" class="input-field" value="" /></label>
    <div style="display: inline-block;">
			  
        <label><span> </span><input style="display: inline-block;"type="submit" name="submit" value="Submit" /></label>
        <label style="display: inline-block;"><span> </span><input type="button" name="List" value="List" ></label>
			  <label><span> </span><input style="display: inline-block;"type="button" value="Edit"></label>
			  
		</div>
		</form>
  </div>
</div>

<?php
if(isset($_POST['submit'])){
$sql = "INSERT INTO clients VALUES ('$_POST[cli_id]','$_POST[cli_name]','$_POST[cli_address]')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));	
}
?>
<!-- //Listo Klientin

// if (isset($_POST['List']))
// {
// $cli_name= $_POST['cli_name'];
// $query = "SELECT * FROM clients WHERE 'cli_name = $cli_name LIMIT 1'";
// $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  
//   if(mysqli_num_rows($result) > 0)
//   {
//   while ($row=mysqli_fetch_array($result))
//   {
//     $cli_id = $row['cli_id'];
//     $cli_address = $row['cli_address'];
//   }
//   }else{
//     echo "Undefined";
//     $cli_id = "";
//     $cli_address = "";
//   }
//     mysqli_free_result($result);
//     mysqli_close($connection);
// }
//   else 
//   {
//     $cli_id = "";
//     $cli_address = "";
//   } 
    -->

