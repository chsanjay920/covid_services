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
						<div class="row">
							<div class="col-md-3">
								<a href="index1.php"><button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" >Add Service data
								</button></a>
							</div>
							<div class="col-md-3">
								<a href="displayreq.php"><button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" >Request's
								</button></a>
							</div>
							
							<div class="col-md-3">
								<a href="addreq.php"><button type="button" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round">Add Request
								</button></a>
							</div>
						</div>
					</div>

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

								$sql = "SELECT name,phonenumber,state,location,service,note from project_table";
								$result = $conn-> query($sql);
								// $sort = "SELECT * FROM res ORDER BY location ASC;";
								// $temp=$conn-> query($sort);
							
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
				<div class="col-md-12 mb-3">
						<div class="row">
							<div class="col-md-3">
								<a href="filter.html"><button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" >Fliter Services
								</button></a>
							</div>
						</div>
					</div>
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