<!DOCTYPE html>
<html lang="en">
<head>
	<title>covid-19 services | get contact number</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="col-md-12 mb-3">
					<form method="post">
						<div class="row">
							<div class="col-md-3">
							<!-- <select name=slist2 id = "statesname1" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round">
								<option value="" disabled selected hidden>Select state</option>
									<script language="javascript">
										var states = new Array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu","Telangana", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");
										for(var hi=0; hi<states.length; hi++)
											document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
									</script>
							</select> -->
							</div>
							

							<!-- <div class="col-md-3">
								<a><button type="submit" class="btn mb-2 mb-md-0 btn-primary btn-block " name = "button1">Search
								</button></a>
							</div> -->
						</div>
					</div>
					</form>

				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th>Name</th>
								<th>Phone number</th>
								<th>State</th>
								<th>Location</th>
								<th>Service</th>
								<th>Note</th>
								<!-- <th class="column6">Total</th> -->
							</tr>
						</thead>
						<tbody>
							
							<?php
								
								$conn = mysqli_connect("localhost", "root", "", "covid_res");
								if($conn-> connect_error){
									die("Connection failed:". $conn-> connect_error);
								}
								
									$sql = "SELECT name,phonenumber,state,location,service,note from project_table where service='Sanitization services' ORDER BY service ASC ;";
									$result = $conn-> query($sql);
									if($result-> num_rows > 0)
									{
										while($row = $result-> fetch_assoc()){
											echo "<tr>
											<td>".$row["name"]."</td>
											<td>".$row["phonenumber"]."</td>
											<td>".$row["state"]."</td>
											<td>".$row["location"]."</td>
											<td>".$row["service"]."</td>
											<td>".$row["note"]."</td>
											</tr>";
										}
									
									}
									else{
										echo "0 results ";
									}
								
								$conn-> close();
								?>
						</tbody>
					</table>
				</div>
				<br>
				
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>