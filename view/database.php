

     <main>
			<div class="head-title">
				<div class="left">
					<h1>Base de datos.</h1>
				</div>
			</div>
			<ul class="box-info">
				<li>
					<a href="../db/respaldo.php">
						<span>Exportar</span>
					</a>
				</li>
				<li>
					<form action="../db/importar.php" method="post" enctype="multipart/form-data">
					<input type="file" name="archivo_sql">
					<input type="submit" value="Crear Base de Datos">
					</form>
					
				</li>
				<li>
					<form action="../db/delete.php" method="post">
					<input type="submit" value="Borrar Base de Datos">
					</form>
				</li>
			</ul>
     </main>
