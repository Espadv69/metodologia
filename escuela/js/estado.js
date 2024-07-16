function estado() {
    const fecha = prompt("Ingrese fecha");
    const unidad = prompt("Ingrese cantidad vendidas");
    const concepto = prompt("Ingrese concepto");
    const costo = prompt("Ingrese costo");
    const gasto = prompt("Ingrese gasto");
    const importe = Number(unidad) * Number(costo);
    const saldo = Number(importe) - Number(gasto);

    document.querySelector(".fecha").innerHTML = fecha
    document.querySelector(".unidad").innerHTML = unidad
    document.querySelector(".concepto").innerHTML = concepto
    document.querySelector(".costo").innerHTML = `${costo}€`
    document.querySelector(".gasto").innerHTML = `${gasto}€`
    document.querySelector(".importe").innerHTML = `${importe}€`
    document.querySelector(".saldo").innerHTML = `${saldo}€`
}

function table() {
    // Array para almacenar las filas del CSV
    let csv = [];

    // Obtener todas las filas del documento
    let rows = document.getElementsByTagName('tr');
    
    // Recorrer cada fila
    for (let i = 0; i < rows.length; i++) {
        // Obtener todas las celdas (td y th) de la fila actual
        let cols = rows[i].querySelectorAll('td, th');
        
        // Array para almacenar las celdas de la fila en formato CSV
        let csvRow = [];
        
        // Recorrer cada celda de la fila actual
        for (let j = 0; j < cols.length; j++) {
            // Agregar el contenido de la celda al array csvRow
            csvRow.push(cols[j].innerHTML.trim().replace(/"/g, '""')); // Trim y manejo de comillas dobles
        }
        
        // Convertir el array csvRow a una cadena CSV y agregarlo al array csv
        csv.push('"' + csvRow.join('", "') + '"');
    }
    
    // Convertir el array csv a una cadena CSV completa
    csv = csv.join('\n');
    
    // Descargar el archivo CSV
    downloadCsv(csv);
}

function downloadCsv(csv) {
    // Crear un Blob con el contenido CSV
    let csvFile = new Blob(["\uFEFF" + csv], {
        type: "text/csv;charset=utf-8;"
    });
    
    // Crear un enlace <a> para descargar el archivo CSV
    let link = document.createElement('a');
    link.href = URL.createObjectURL(csvFile);
    link.download = "tabla.csv";
    link.style.display = "none";
    
    // Agregar el enlace al documento y simular clic en el enlace para descargar el archivo
    document.body.appendChild(link);
    link.click();
    
    // Eliminar el enlace del documento
    document.body.removeChild(link);
}