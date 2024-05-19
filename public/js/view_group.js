document.addEventListener("DOMContentLoaded", async () => {
    const archivosJson = ["../db/archivo/archivo1.json", "../db/archivo/archivo2.json"]; // Lista de nombres de archivos .json

    const contenedor = document.getElementById("contenedor");

    for (const archivo of archivosJson) {
    try {
        const response = await fetch(archivo);
        const data = await response.json();

        const div = document.createElement("div");
        div.classList.add("archivo-div");

        // Mostrar solo el nombre del archivo como título (sin extensión ni ruta)
        const titulo = document.createElement("h2");
        titulo.textContent = archivo.replace(/\.[^.]+$/, ""); // Eliminar la extensión
        div.appendChild(titulo);

        div.addEventListener("click", () => {
        mostrarModal(data);
        });

        contenedor.appendChild(div);
    } catch (error) {
        console.error(`Error al cargar ${archivo}:`, error);
    }
    }
});

function mostrarModal(data) {
const tablaModal = document.getElementById("tabla-modal");
tablaModal.innerHTML = ""; // Limpiar contenido previo

// Crear la tabla de objetos
const tabla = document.createElement("table");
tabla.classList.add("objeto-tabla");

// Encabezados de la tabla
const encabezados = Object.keys(data[0]);
const encabezadosRow = document.createElement("tr");
encabezados.forEach((encabezado) => {
  const th = document.createElement("th");
  th.textContent = encabezado;
  encabezadosRow.appendChild(th);
});
tabla.appendChild(encabezadosRow);

// Filas de datos
data.forEach((objeto) => {
  const fila = document.createElement("tr");
  encabezados.forEach((encabezado) => {
    const td = document.createElement("td");
    td.textContent = objeto[encabezado];
    fila.appendChild(td);
  });
  tabla.appendChild(fila);
});

tablaModal.appendChild(tabla);
document.getElementById("modal").style.display = "block";
}

function cerrarModal() {
document.getElementById("modal").style.display = "none";
}

function addNewGroup(params) {

}

// script.js
document.addEventListener('DOMContentLoaded', function() {
const modal1 = document.getElementById('modal1');
const abrirModal1 = document.querySelector('a[href="#modal1"]');
const cerrarModal1 = document.getElementById('cerrar-modal1');

abrirModal1.addEventListener('click', function() {
  modal1.showModal();
});

cerrarModal1.addEventListener('click', function() {
  modal1.close();
});
});
