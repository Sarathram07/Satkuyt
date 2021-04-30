
<?php
	include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
	<!-- Bootstarp CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
 
<!-- Bootstarp Js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstarpcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


<!-- google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">


	<title> Satyukt </title>
<body>

	<div class="container-fluid bg-light p-5 text-center my-3">
	<h1> COVID-19 Tracker </h1>
	</div>
	
	<div class="container-fluid">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col"> Countries </th>
				<th scope="col"> Confirmed </th>
				<th scope="col"> Recovered </th>
				<th scope="col"> Deaths </th>
			</tr>
		</thead>
		
		<tbody>
			<?php
				foreach($data as $key => $value){
					$increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
			?> 
				<tr>
					<th>
						<?php echo $key;?> </th>
						<td>
							<?php echo $value[$days_count]['confirmed'];?>
						</td>
						<td>
							<?php echo $value[$days_count]['Recovered'];?>
						</td>
						<td>
							<?php echo $value[$days_count]['Deaths'];?>
						</td>
					
				</tr>
			<?php }?>
			
		</tbody>
	</div>


</body>
</html>