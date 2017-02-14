<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	<title>Estructura base</title>


	<link href="css/animate.min.css" rel="stylesheet">
  	<link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">
  	<link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">
  	<link href="css/spinner.css" rel="stylesheet">
  	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	

	<div class="container">
		<!-- <div class="row"> -->

			<div class="row">
				<h1>Mi primer CRUD</h1>
				<hr>
			</div>
			<div class="row" style="margin-bottom: 20px">
				<button class="btn btn-primary col-xs-4" id="btn_new">NUEVA PERSONA</button>
				<div class="col-xs-4 form-group">
					<select name="" id="select_status" class="form-control">
						<option value="2">TODOS</option>
						<option value="1">ACTIVOS</option>
						<option value="0">INACTIVOS</option>
					</select>
				</div>
				<div class="col-xs-4 form-group">
					<input type="text" class="form-control" id="txt_busqueda" placeholder="busqueda...">
				</div>
			</div>
			<div id="tableContainer" class="table-responsive row">

				<table class="table table-striped table-bordered">
					<thead id="thead">
					</thead>
					<tbody id="tbody">
					</tbody>
				</table>

            </div>
		<!-- </div> -->
	</div>

	
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/pnotify/pnotify.custom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="plugins/CustomAlerts/js/jquery-confirm.js"></script>
	<script src="js/jQueryTables.js"></script>
	<script src="js/spinner.js"></script>
	<script src="js/index.js"></script>
</body>
</html>