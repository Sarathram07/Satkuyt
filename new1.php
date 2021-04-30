
<?php
	include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	
<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

   <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- My Stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- My jQuery -->
<script src="main.js"></script>

<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</head>

	<title> Satyukt </title>
<body>

	<div class="container-fluid bg-light p-5 text-center my-3">
	<h1> COVID-19 Tracker </h1>
	</div>
	<div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deaths</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>
	
	<canvas id="myChart"></canvas>
	<div class="container-fluid">
	 <div class="table-responsive">
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
		</table>
	</div>
	</div>


</body>
</html>