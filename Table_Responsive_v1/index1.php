<?php
include("data.php");
 error_reporting(0);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data | entry</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Merriweather);
*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  background: #f1f1f1;
  font-family: 'Merriweather', sans-serif;
  padding: 1em;
}

h1{
  text-align: center;
  color: #a8a8a8;
  text-shadow: 1px 1px 0 white;
}
p{
  text-align: center;
  color: #e74c3c;
  text-shadow: 1px 1px 0 white;
}

form {
  max-width: 600px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea, form select {
  border: 0;
  outline: 0;
  padding: 1em;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: 'Merriweather', sans-serif;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  resize: none;
}
form input:focus, form textarea:focus, form select:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #input-submit {
  color: white;
  background: #e74c3c;
  cursor: pointer;
}
form #input-submit:hover {
  -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
}
form textarea {
  height: 126px;
}

.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right {
  width: 50%;
}

.left {
  margin-right: 2%;
}

@media (max-width: 480px) {
  .half {
    width: 100%;
    float: none;
    margin-bottom: 0;
  }
}
/* Clearfix */
.cf:before,
.cf:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.cf:after {
  clear: both;
}
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element: */
}
.select-selected {
  background-color: DodgerBlue;
}

</style>
<body>
    <h1>Add data you had</h1>
    <p>I promise I won't enter false data</p>
<form class="cf" method="post">
  <div class="half left cf">
    <input type="text" id="input-name" name="name" placeholder="Name">
    <select name=slist id = "statesname">
    	<option value="" disabled selected hidden>Choose state</option>
			<script language="javascript">
				var states = new Array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu","Telangana", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");

				for(var hi=0; hi<states.length; hi++)
					document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
		</script>
	</select>
 


    <select name=reslist id = "selectedres">
    	<option value="" disabled selected hidden>Choose service</option>
		<script language="javascript">
			var states = new Array("OXYGEN REFILL", "PLASMA DONOR's", "Covid beds", "covid testing home collection", "doctors", "medical store","Ambulance services","Sanitization services");

			for(var hi=0; hi<states.length; hi++)
				document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
		</script>
	</select>
    


  </div>
  <div class="half right cf">
    <!-- <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea> -->
    <input type="text" id="input-phonenumber" name="phonenumber" placeholder="Phone number">
    <input type="text" id="input-location" name= "location" placeholder="Location">
    <input type="text" id="input-description" name="description" placeholder="short note (15)">
  </div>

  <input type="submit" value="Submit" name="submit" id="input-submit">
  <!-- <input type="button" name="showtable" id="input-submit" value="show table"> -->
</form>
</body>
</html>
<?php
function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

// $connection = mysqli_connect("localhost","id16802110_root","Sanjay&sanju1");
// $db = mysqli_select_db($connection,'id16802110_covid_res');

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$state = $_POST['slist'];
	$service = $_POST['reslist'];
	$phonenumber = $_POST['phonenumber'];
	$location = $_POST['location'];
	$note = $_POST['description'];

	if(empty($name)){
		function_alert("Enter name");
	}
	elseif (empty($state)) {
		# code...
		function_alert("select valid state");
	}
	elseif (empty($service)) {
		# code...
		function_alert("Select valid services");
	}
	elseif (empty($phonenumber) or strlen($phonenumber) != 10) {
		# code...
		function_alert("Enter valid number");
	}
	elseif (empty($location)) {
		# code...
		function_alert("Enter valid location");
	}
	else{
		$query = "INSERT INTO `project_table`(`name`,`phonenumber`,`state`,`location`,`service`,`note`) VALUES ('$name','$phonenumber','$state','$location','$service','$note');";
	$query_run = mysqli_query($connection,$query);
	}
	if($query_run)
	{
		// echo 'data inserted';
		function_alert("data inserted");
	}
	else{
		function_alert("Error occured! chech values again");
	}

	
}
?>