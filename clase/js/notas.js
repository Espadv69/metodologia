function media() {
    const nombre = prompt("Ingrese el nombre del estudiante")
    const nota1 = parseFloat(prompt("Ingrese su primera nota."));
    const nota2 = parseFloat(prompt("Ingrese su segunda nota."));
    const nota3 = parseFloat(prompt("Ingrese su tercera nota."));

    if(!isNaN(nota1) && !isNaN(nota2) && !isNaN(nota3)) {
        if(!(nota1 > 10) && !(nota2 > 10) && !(nota3 > 10)) {
            const total = (nota1 + nota2 + nota3)/3;
        
            alert(`La media de las tres notas de (${nombre}) es: ${total.toFixed(2)}`);
            console.log(total.toFixed(2));
        } else {
            alert("algun numero añadido es mayor a 🔟")
        }
    } else {
        alert("No se reconoce el parametro🐵")
    }
}

function reiniciar() {
    window.location = "./reg-notas.php";
}