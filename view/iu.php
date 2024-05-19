

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Escritorio</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Inicio</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#modal1">Agregar nuevo grupo</a>
						</li>
					</ul>
				
				</div>
			</div>
			<dialog id="modal1">
					<h2>Agregar nuevo grupo</h2>
            <form action="../class/actualizar.php" method="post" class="card-body">
             <input type="text" hidden=""  name="id"/>  
             <input type="text" hidden=""  name="rol_id"/>        
    
              <div class="form-group">
                <input
                  type="text"
                  name="name_group"
                  placeholder="nombre"
                  class="form-control"
                  
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="decripcion"
                  placeholder="Descripcion"
                  class="form-control"
                  
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  name="cantidad"
                  placeholder="cantidad de estudiantes"
                  class="form-control"
                 
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  name="email"
                  placeholder="Correo electronico"
                  class="form-control"
                  
                />
              </div>
              <input
                type="submit"
                value="actualizar"
                class="btn btn-primary btn-block"
              />
            </form>
					<button id="cerrar-modal1">Cerrar</button>
				</dialog>
			<div id="contenedor"></div>

			<div id="modal" class="modal">
			<div class="modal-content">
				<span class="close-button" onclick="cerrarModal()">×</span>
				<div id="tabla-modal"></div>

				<button id="btn-eliminar" class="btn-estilizado">Eliminar</button>
				<button id="btn-pasar-lista" class="btn-estilizado">Pasar Lista</button>
				<button id="btn-guardar-lista" class="btn-estilizado">Guardar Lista</button>
				
			<div id="modal" class="modal">
				<!-- Aquí se mostrarán los datos de la fila actual -->
				<!-- ... -->
				<button id="btn-presente" class="btn-verde">Presente</button>
				<button id="btn-ausente" class="btn-rojo">Ausente</button>
			</div>
			</div>
			</div>


		
		</main>
		<!-- MAIN -->
	

	<script src="../public/js/view_group.js"></script>