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
<div class="page-header">
<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title">
				<h1>Generar Archivo</h1>
			</div>
			<div class="page-toolbar">
				<div class="btn-group btn-theme-panel">
					<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
					<i class="icon-settings"></i>
					</a>
					<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">						
			</div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
					<div class="row">
				<div class="col-md-12">
					<div class="portlet light" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject font-green-sharp bold uppercase">
								<i class="fa fa-gift"></i> Generar Archivo
								</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
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
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab2">
												<h3 class="block">Archivo Generado</h3>
												<div class="form-group" align="center">
													<div class="container">
													    <?php
															$archivo =  $_FILES['archivo']['tmp_name'];
															$data = file_get_contents($archivo);
															$array_ = explode(",", $data);
															echo "El numero de corres generados es:",sizeof($array_);
															$file_create = $_FILES['archivo']['name'] . rand(200 ,20000) . ".txt";
															$handle = fopen( $file_create, 'w');
															foreach ($array_ as $value){
															    fwrite($handle, "$value\n");
															}
															fclose($handle);
													  	?>
													  	<br>
													  	<input type="button" onclick="history.back()" class="btn-primary" name="volver atrás" value="volver atrás"><br>
<?php
	$listar = null;
	$directorio = opendir("../generados/");
	while ($elemento = readdir($directorio)) {
		if (!is_dir($elemento)) {
			if($elemento != "filee.php") 
				$listar .="<li><a href='$elemento' target='_blank'>$elemento/</a></li>";
		}
	}

?>
													  	<ul>
													  		<?php echo $listar; ?>

													  	</ul>
											       	</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide your profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Fullname <span class="required">
													* </span>
													</label>
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
	</div>
</div>
<div class="page-footer">
	<div class="container">
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../js/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../js/jquery.uniform.min.js" type="text/javascript"></script>
<script type="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/additional-methods.min.js"></script>
<script type="text/javascript" src="../js/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script src="../js/javascript"></script>
<script src="../js/layout.js" type="text/javascript"></script>
<script src="../js/demo.js" type="text/javascript"></script>
<script src="../js/form-wizard.js"></script>
</script>
</body>
</html>