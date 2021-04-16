
 <!DOCTYPE html>
<html>
<head>
	<title>Whistle Blower - BlockChain</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.core.js" integrity="sha256-tsIbwIT+4qFYQl3lJqYOZst6ot+JaR73T5eusuTukXM=" crossorigin="anonymous"></script>
 
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<style type="text/css">
	.hide{
		display: none;
	}
</style>
</head>
<body>
<?php include "header.php"; ?>
<div style="margin-top: 200px;">
  <div id="container" style="min-width: 310px; height: 500px; max-width: 600px; margin: 0 auto"></div>
</div>

<div class="container" style="margin-top: 100px;">
	<div class="col-md-6" style="float: center;">
	<!--	<select class="form-control company" onchange="onChange()">
				<option value="">Select Company</option>
				<option value="FixNix">FixNix</option>
				<option value="Pied Piper">Pied Piper</option>
				<option value= "Hooli">Hooli</option>
			</select></div>
<br><br><br><br><hr/> -->
	<div class="form-group recordslist hide">
		


    <table class="table table-stripped">
			<thead>
				<th>Tip No</th>
				<th>Incident</th>
				<th>Monetory value of Fraud</th>
				<th>Place of Occarance</th>
				<th>Reward</th>
			</thead>
			<tbody id="tbody">
			</tbody>
		</table>
		
	</div>
	<div>
		<p id ="norecords" class= "hide">No records found !!!</p>
	</div>
</div>