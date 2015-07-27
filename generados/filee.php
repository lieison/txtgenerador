<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Generar Correos</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/uniform.default.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/select2.css"/>
<link href="../css/components.css" rel="stylesheet" type="text/css">
<link href="../css/plugins.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="../css/custom.css" rel="stylesheet" type="text/css">
		<title>Krajee JQuery Plugins - &copy; Kartik</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="..(js/fileinput.min.js" type="text/javascript"></script>
</head>
<body>
<div class="page-container">
	<div class="page-head">
	</div>
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject font-green-sharp bold uppercase">
								Generador de archivos .txt</span>
							</div>
						</div>
						<div class="portlet-body form">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i>Archivo Generado</span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												
											</div>
											<div class="alert alert-success display-none">
												
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">,Lista de Archivos Generados</h3>
												<div class="form-group">
												</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row"><center>
													    <?php
															$archivo =  $_FILES['archivo']['tmp_name'];
															$data = file_get_contents($archivo);
															$array_ = explode(",", $data);
															echo "El Numero de Correos Generados es:",sizeof($array_);
															$file_create = $_FILES['archivo']['name'] . rand(200 ,20000) .".txt";
															$handle = fopen( $file_create, 'w');
															foreach ($array_ as $value){
															    fwrite($handle, "$value\n");
															}
															fclose($handle);
													  	?>
													  	<br><br>
													  	<a href="../index.html" class="btn btn-lg btn-primary">Atras</a><br><br><br>
<?php
	$listar = null;
	$directorio = opendir("../generados/");
	while ($elemento = readdir($directorio)) {
		if (!is_dir($elemento)) {
			if($elemento != "filee.php") 
				$listar ="<li><a href='$elemento' class='btn btn-default btn-lg active' target='_blank'>$elemento/</a></li>";
		}
	}
?>
													  	<ul>
													  		<?php echo $listar; ?>

													  	</ul></center>
											       	</div>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>