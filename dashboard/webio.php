<!doctype html>
<html lang="de">
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>
		<script src="https://code.highcharts.com/es5/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		<script src="https://code.highcharts.com/modules/accessibility.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    	<script src="https://code.highcharts.com/stock/modules/stock.js"></script>

		<script src="lib/raphael-2.1.4.min.js"></script>
		<script src="lib/justgage.js"></script>
		
		<script src="mqtt_connection.js?v=0" type="text/javascript"></script>
		

		<meta charset="utf-8">
		<title>My Dashboard</title>
		<!-- Mit diesem Abschnitt machen wie es ein bisschen hübscher -->
	</head>
	
	<body>
    <?php
      include_once("get_data.php");
    ?>
	<div class="container text-center">

		<h1>My Dashboard</h1>
		<div class="row justify-content-center">

			<div class="col-4" id="temperatura"></div>
			<div class="col-4" id="humedad"></div>
		</div>
		<hr>
		<!-- Grafico estatico de base de datos -->
		<h2>Grafico estatico de base de datos</h2>
		<div class="row justify-content-center" >
			<div class='text-center' id="container1" style="width:70%; height:400px;"></div>
			<hr>
			<h2>Grafico en tiempo real</h2>
			<div id="tempe_treal" style="width:70%; height:400px;"></div>
		</div>
		
	</div>
		
		<script src="justages.js" type="text/javascript"></script>
		<script src="charts.js"></script>
		<script src="realtime_chart.js"></script>
		<script>
      graficar_chart([
        <?php
        datos();
        ?>
      ])
    </script>
	</body>
</html>