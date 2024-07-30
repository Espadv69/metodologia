document.getElementById('bmiForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);

    if(weight > 0 && height > 20) {
        // Calcula el IMC
        const heightInMeters = height / 100;
        const bmi = weight / (heightInMeters ** 2);
    
        // Determina la categoría del IMC
        let category = '';
        if (bmi < 18.5) {
            category = 'Bajo peso';
        } else if (bmi >= 18.5 && bmi < 24.9) {
            category = 'Peso normal';
        } else if (bmi >= 25 && bmi < 29.9) {
            category = 'Sobrepeso';
        } else {
            category = 'Obesidad';
        }
    
        // Agrega una nueva fila a la tabla con los resultados
        const resultsTableBody = document.getElementById('resultsTable').getElementsByTagName('tbody')[0];
        const newRow = resultsTableBody.insertRow();
        
        newRow.insertCell(0).innerText = name;
        newRow.insertCell(1).innerText = weight.toFixed(2);
        newRow.insertCell(2).innerText = height.toFixed(2);
        newRow.insertCell(3).innerText = bmi.toFixed(2);
        newRow.insertCell(4).innerText = category;
    
        // Limpiar el formulario
        document.getElementById('bmiForm').reset();
    } else {
        alert("El peso puede ser (Menor a 0) y la Altura no puede ser (Menor a 20cm)");
        return;
    }

});
