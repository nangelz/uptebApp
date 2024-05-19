

<main>
		<div class="head-title">
				<div class="left">
					<h1>Descargar Asistencias</h1>
				</div>
			</div>

      <div class="table-data">
				<div class="order">
				
					
					<a href="../functions/pdf.php">
						<button class="seleccionar-archivo">Descargar</button>
					</a>

	
				</div>
			</div>
</main>
		<!-- MAIN -->

<!-- 	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        document.getElementById('seleccionar-archivo').addEventListener('click', function() {
            // Crea un input de tipo archivo (input[type="file"])
            var input = document.createElement('input');
            input.type = 'file';

            // Escucha el evento de cambio de archivo
            input.addEventListener('change', function(event) {
                var archivo = event.target.files[0]; // Archivo seleccionado

                if (archivo) {
                    // Lee el contenido del archivo JSON
                    var lector = new FileReader();
                    lector.onload = function(e) {
                        var contenidoJSON = e.target.result;
                        var datos = JSON.parse(contenidoJSON);

                        // Genera el PDF con los datos
                        var doc = new jsPDF();
                        doc.text(10, 10, 'Datos desde el archivo JSON:');
                        doc.autoTable({
                            head: [['Nombre', 'Edad']],
                            body: datos.map(d => [d.nombre, d.edad]),
                        });
                        doc.save('tabla-datos.pdf');
                    };
                    lector.readAsText(archivo);
                }
            });

            // Dispara el clic en el input de archivo
            input.click();
        });
    </script> -->