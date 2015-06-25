<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Lista de Folders</header>
	
	<div class="row wrapper">
		<div class="col-xs-6 col-sm-7 col-lg-9 m-b-xs">
			<a href="admin.php?m=foldersAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Folder</a>
		</div>
		<div class="col-xs-6 col-sm-5 col-lg-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

		<div class="table-responsive">
			<table class="table table-striped b-t b-light">

					<thead>
						<tr>
							<th>Nombre del folder</th>
							<th>Cantidad de invoice</th>
							<th>Fecha</th>
							<th width="170"></th>
						</tr>
					</thead>

					<tbody>

						<tr>
							<td>columna 1</td>
							<td>columna 2 </td>
							<td>columna 3 </td>
							<td>
								<a href="admin.php?m=foldersEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=folder" class="btn btn-sm btn-primary"> <i class="fa fa-folder-o"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
							</td>
						</tr>
						<tr>
							<td>columna 1</td>
							<td>columna 2 </td>
							<td>columna 3 </td>
							<td>
								<a href="admin.php?m=foldersEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=folder" class="btn btn-sm btn-primary"> <i class="fa fa-folder-o"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
							</td>
						</tr>
				   </tbody>

				</table>
			</div>
</section>