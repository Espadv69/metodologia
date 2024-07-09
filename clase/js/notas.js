function media() {
    const nombre = prompt("Ingrese el nombre del estudiante");
    const modulo = prompt("Ingrese módulo");
    const hora_modulo = parseInt(prompt("Ingrese horas del módulo"));
    const nota1 = parseFloat(prompt("Ingrese su primera nota."));
    const nota2 = parseFloat(prompt("Ingrese su segunda nota."));
    const nota3 = parseFloat(prompt("Ingrese su tercera nota."));

    if(!isNaN(nota1) && !isNaN(nota2) && !isNaN(nota3)) {
        if(!(nota1 > 10) && !(nota2 > 10) && !(nota3 > 10)) {
            const total = (nota1 + nota2 + nota3)/3;

            document.querySelector(".tres_notas").innerHTML = `Primera nota (<span class="name">${nota1}</span>) Segunda nota (<span class="name">${nota2}</span>) Tercera nota (<span class="name">${nota3}</span>)`;

            document.querySelector(".modulo").innerHTML = modulo;

            document.querySelector(".hora_modulo").innerHTML = `${hora_modulo} Horas`;
        
            document.querySelector(".nota").innerHTML = (`La media de ( <span class="name">${nombre}</span> ) es: ${total.toFixed(2)}`);
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