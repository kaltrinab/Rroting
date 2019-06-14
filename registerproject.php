<?php include("header.php");?>
<style>
/*FORM*/
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
        	
    <!-- FORM-->
    <div class="form-style-2">
		<div class="form-style-2-heading">Provide information</div>
			<form action="registerproject.php" method="post">
            <label for="pro_id"><span>Project ID <span class="required">*</span></span><input type="text" class="input-field" name="pro_id" value="" /></label>
			<label for="pro_name"><span>Project Name <span class="required">*</span></span><input type="text" class="input-field" name="pro_name" value="" /></label>
            <label><span>Clients</span><input type="text" name="pro_client" class="input-field" value="" maxlength="20" /></label>
            <label style="width:400px;"><span>Start Date</span><input type="Date" name="pro_startdate" class="input-field" value="" ></label>
			<label style="width:400px;"><span>End Date</span><input type="Date" name="pro_enddate" class="input-field" value="" ></label>
			<label for="field4"><span>Category</span>
              <select name="pro_category" class="select-field">
                        <option>Mobile Application</option>
                        <option>Flyers</option>
                        <option>Web</option>
                        <option>Software</option>
						  </select> 
            <!--<input type="text" name="pro_category" class="select-field"></label>-->
			<label for="field5"><span>Description <span class="required">*</span></span><textarea name="pro_description" class="textarea-field"></textarea></label>
            <label><span>Cost</span><input type="text" name="pro_cost" class="input-field" value="" maxlength="20" /></label>
			<label><span>Supervisor</span><input type="text" name="pro_supervisor" class="input-field" value="" maxlength="20" /></label>
			<label><span>Participants</span><input type="text" name="Participants" class="input-field" value="" maxlength="20" /></label> 
      <label><span>Estimated Time</span><input type="text" name="Participants" class="input-field" value="" maxlength="20" /></label> 
	<!--Butonat per form -->
		<div style="display: inline-block;">
      <label><span> </span><input style="display: inline-block;"type="submit" name="submit" value="Submit" /></label>
      <label style="display: inline-block;"><span> </span><input type="button" value="List"></label>
			<label><span> </span><input style="display: inline-block;"type="button" value="Edit"></label>
			
		</div>
			</form>
    </div>
    </div>

<?php

$pro_category=$_POST['pro_category'];

if(isset($_POST['submit'])){
$sql = "INSERT INTO projects VALUES ('$_POST[pro_id]','$_POST[pro_name]','$_POST[pro_client]','$_POST[pro_startdate]','$_POST[pro_enddate]','$_POST[pro_category]', '$_POST[pro_description]','$_POST[pro_cost]','$_POST[pro_supervisor]')";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));	
}
?>

 
