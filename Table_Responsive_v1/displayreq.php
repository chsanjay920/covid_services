<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
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
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="col-md-12 mb-3">
						<div class="row">
							<div class="col-md-3">
								<a href="index.php"><button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" >REQUESTS Table
								</button></a>
							</div>
							<div class="col-md-3">
								<a href="index1.php"><button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" >Request's
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
								<th>REQUESTS</th>
							
								<!-- <th class="column6">Total</th> -->
							</tr>
						</thead>
						<tbody>
							
							<?php
								$conn = mysqli_connect("localhost", "root", "", "covid_res");
								if($conn-> connect_error){
									die("Connection failed:". $conn-> connect_error);
								}

								$sql = "SELECT NAME,PHONENUMBER,REQUEST from request_table";
								$result = $conn-> query($sql);
								// $sort = "SELECT * FROM res ORDER BY location ASC;";
								// $temp=$conn-> query($sort);
							
								if($result-> num_rows > 0)
								{
									while($row = $result-> fetch_assoc()){
										echo "<tr>
										<td>".$row["NAME"]."</td>
										<td>".$row["PHONENUMBER"]."</td>
										<td>".$row["REQUEST"]."</td>
										</tr>";
									}
								
								}
								else{
									echo "0 results ";
								}
								$conn-> close();
								?>
							
								<!-- <tr>
									<td class="column1">Hyderabad</td>
									<td class="column2">200398</td>
									<td class="column3">Oxygen supply</td>
									<td class="column4">821536587</td>
									<td class="column5">chintala sanjay</td>
									 
								</tr>
								<tr>
									<td class="column1">Hyderabad</td>
									<td class="column2">200398</td>
									<td class="column3">Oxygen supply</td>
									<td class="column4">821536587</td>
									<td class="column5">chintala sanjay</td>
									 
								</tr> -->
								
								
						</tbody>
					</table>
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