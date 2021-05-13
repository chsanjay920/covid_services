<?php
// include("data.php");
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
    <h1>Enter Request</h1>
    <p>I promise I won't enter false request</p>
<form class="cf" method="post">
  <div class="half left cf">
    <input type="text" id="input-name" name="name1" placeholder="Name">

  </div>
  <div class="half right cf">
    <input type="text" id="input-phonenumber" name="phonenumber1" placeholder="Phone number">
  </div>
  <div class="requestbox">
    <input type="text" id="input-request" name="request" placeholder="Request">
  </div>

  <input type="submit" value="Submit" name="insert" id="input-submit">
</form>
</body>
</html>
<?php
function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$connection  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'covid_res');
if(isset($_POST['insert']))
{
  $username = $_POST['name1'];
  $phnumber = $_POST['phonenumber1'];
  $req = $_POST['request'];

  $query = "INSERT INTO `request_table`(`NAME`,`PHONENUMBER`,`REQUEST`) VALUES ('$username','$phnumber','$req')";
  $query_rum = mysqli_query($connection,$query);

  if($query_rum){
    // echo "Added";
    function_alert("Request Added");
  }
  else{
    function_alert("Some Error Occured");
  }
}

?>