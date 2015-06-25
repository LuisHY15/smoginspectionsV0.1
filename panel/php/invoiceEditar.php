<?php

if ( isset($_POST['nombre']) ){

	$folder	  = mysql_real_escape_string($_POST['nombre']);
	$archvio  = mysql_real_escape_string($_POST['direccion']);
	$fecha	  = mysql_real_escape_string($_POST['rfc']);




}

?>

		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=invoice" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Invoice
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
	                <div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-2 control-label">Cliente:</label>
								<div class="col-lg-10"><input type="text" name="cliente" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-6 control-label">Folder</label>
								<div class="col-lg-6"><input type="text" name="folder" class="form-control" placeholder=""></div>
							</div>
						</div>
						 <div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-6 control-label">Archivo:</label>
								<div class="col-lg-6"><input type="text" name="archivo" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-6 control-label">Fecha:</label>
								<div class="col-lg-6"><input type="text" name="fecha" class="form-control" placeholder=""></div>
							</div>
						</div>			
					</div>
					<div class="row">		
						<div class=" col-sm-6">
							<div class="">
							</div>
						</div>
						 <div class=" col-sm-6">
							<div class="pull-right">
								<button  type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
								<button class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>