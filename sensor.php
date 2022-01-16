<?php
	/*<h2 class="text-center">Sensor de Pasos Cantidad de Pasos vs. Tiempo</h2>
	$username="user_sensor";
	$password="user_pass_301";
	$database="sensor";

	mysqli_connect("localhost", $username, $password, $database);
	//mysqli_select_db($database) or die ( "Unable to make it happen Cap'n");

	$query = "SELECT id, datetime, cantidad_pasos FROM tsensor";
	$result = mysqli_query($query, MYSQLI_USER_RESULT);
	$dateSensor = array();
	$index = 0;

	while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
	{
		$dateSensor[$index]=$row;
		$index++;
	}

	echo json_encode($dateSensor, JSON_NUMERIC_CHECK);

	mysqli_close();
	*/

	$mysqli = new mysqli("localhost","user_sensor","user_pass_301","sensor");

	// Check connection
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
	$index = 0;
	$dateSensor = array();
	// Perform query
	if ($result = $mysqli -> query("SELECT datetime, cantidad_pasos FROM tsensor")) {
	  //echo "Returned rows are: " . $result -> num_rows;
	  // Free result set
	  //$result -> free_result();
		while($row = $result -> fetch_row())
		{
			//printf("%s %s %s <br>", $row[0], $row[1], $row[2]);
			$dateSensor[$index]=$row;
			$index = $index + 1;
		}
		$result -> free_result();
	}
	//echo json_encode($dateSensor, JSON_NUMERIC_CHECK);
	$mysqli -> close();
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Datos</title>
		<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data-2012-2022.min.js"></script>

	</head>
	<body>

<script type="text/javascript">
$(function () {

	$('#container').highcharts({
		chart: {
			type: 'line'
		},

		time: {
			timezone: 'Bolivia/La Paz'
			},
			title: {
			text: 'Cantidad de pasos vs Tiempo'
		},

		xAxis: {
			title: {
			text: 'Tiempo'
			},
			type: 'datetime',
		},
		yAxis: {
			title: {
			text: 'Cantidad Pasos'
			}
		},
		series: [{
			name: 'Pasos',
			data: <?php echo json_encode($dateSensor, JSON_NUMERIC_CHECK);?>
		}]
	});
});

</script>
<script src="charts/js/highcharts.js"></script>
<script src="charts/js/modules/exporting.js"></script>

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-body">
<div id="container"></div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>

