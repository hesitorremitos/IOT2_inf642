<!doctype html>
<html lang="de">
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>
		<script src="https://code.highcharts.com/es5/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/stock/modules/stock.js"></script>

		<script src="lib/raphael-2.1.4.min.js"></script>
		<script src="lib/justgage.js"></script>
		
		<script src="mqtt_connection.js?v=0" type="text/javascript"></script>
		

		<meta charset="utf-8">
		<title>My Web-IO</title>
		<!-- Mit diesem Abschnitt machen wie es ein bisschen hübscher -->
	</head>
	
	<body>
    <?php
      include_once("get_data.php");
    ?>

		<h1>My Web-IO</h1>

		<div id="temperatura"></div>
		<div id="humedad"></div>
    <!-- Grafico estatico de base de datos -->
    <h1>Grafico de base de datos estatus</h1>
    <div id="container1" style="width:100%; height:400px;"></div>

    <div id="tempe_treal" style="width:100%; height:400px;"></div>


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