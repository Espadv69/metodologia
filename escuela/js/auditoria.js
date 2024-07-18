// FUNCTION FOR VENTAS
function b_ventas() {
    // MY CONSTANTS VARIABLES
    const java = 75;
    const python = 50;
    const cPlus = 30;
    const php = 100;

    // CHECK
    const valor = parseFloat(prompt("Cantidad de ventas del dia"));
    if(isNaN(valor)) {
        alert ("NO SE AÑADIÓ UN NÚMERO❗");
        return;
    }

    // CHOOSE
    const curso = prompt("Que curso vendio: JAVA, PYTHON, C++, PHP");

    // LOOP
    switch(curso) {
        // JAVA CASE
        case "java":
            const iva_java = ((java*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de java que es un total de: <span>${java*valor}€</span>
            <br>Con un IVA de: <span>${iva_java}€</span><br>
            El total del pago sería: <span>${java*valor+iva_java}€</span>`;
            break;

        // PYTHON CASE
        case "python":
            const iva_python = ((python*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de python que es un total de: <span>${python*valor}€</span>
            <br>Con un IVA de: <span>${iva_python}€</span><br>
            El total del pago sería: <span>${python*valor+iva_python}€</span>`;
            break;

        // C++ CASE
        case "c++":
            const iva_cPlus = ((cPlus*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de cPlus que es un total de: <span>${cPlus*valor}€</span>
            <br>Con un IVA de: <span>${iva_cPlus}€</span><br>
            El total del pago sería: <span>${cPlus*valor+iva_cPlus}€</span>`;
            break;

        // PHP CASE    
        case "php":
            const iva_php = ((php*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de php que es un total de: <span>${php*valor}€</span>
            <br>Con un IVA de: <span>${iva_php}€</span><br>
            El total del pago sería: <span>${php*valor+iva_php}€</span>`;
            break;

        // IF THERE IS AN ERROR, SET A MESSAGE.
        default:
            document.querySelector(".print").innerHTML = `Hubo un error en la selección de cursos, asegurate de escribirlo en minúsculas❌`;
    }
}

// FUNCTION FOR PAGO
function b_pago() {
    const variable = parseFloat(prompt("Ingrese los gastos de este mes"));
    if(isNaN(variable)) {
        alert('Usted no ingresó un número');
        return;
    }

    const fijo = parseFloat(prompt("Ingrese los gastos fijos"));
    if(isNaN(fijo)) {
        alert('Usted no ingresó un número');
        return;
    }

    const profesor = parseFloat(prompt("Cuántas horas ha trabajado el profesor este mes"));
    if(isNaN(profesor)) {
        alert('Usted no ingresó un número');
        return;
    }
    
    const pago_profesor = parseFloat(prompt("¿A cuánto la hora?"));
    if(isNaN(pago_profesor)) {
        alert('Usted no ingresó un número');
        return;
    }

    const total_profesor = profesor * pago_profesor;
    const total = variable + fijo + total_profesor;

    document.querySelector(".print").innerHTML = `Usted este mes ha gastado un total de: <span>${total}€</span><br>
    Este mes el profesor estuvo impartiendo clases<br> <span>${profesor} Horas</span><br>
    El pago al profesor es: <span>${total_profesor}€</span>`;
}