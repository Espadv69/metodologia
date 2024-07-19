// MY CONSTANTS
const java = 75;
const python = 50;
const cPlus = 30;
const php = 100;

// FUNCTION FOR VENTAS
function b_ventas() {

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

// FUNCTION FOR PAGO INSCRIPCIÓN
function b_pago_ins() {
    const java_d = parseFloat(prompt("Inscripciones de java"));
    if(isNaN(java_d)) {
        alert("No ingresó un número");
        return;
    }

    const python_d = parseFloat(prompt("Inscripciones de python"));
    if(isNaN(python_d)) {
        alert("No ingresó un número");
        return;
    }

    const cPlus_d = parseFloat(prompt("Inscripciones de C++"));
    if(isNaN(cPlus_d)) {
        alert("No ingresó un número");
        return;
    }

    const php_d = parseFloat(prompt("Inscripciones de php"));
    if(isNaN(php_d)) {
        alert("No ingresó un número");
        return;
    }

    const total_ins = java_d + python_d + cPlus_d + php_d;
    const total_pagar = (java * java_d) + (python * python_d) + (cPlus * cPlus_d) + (php * php_d);


    const curso = prompt("Elija la operación a realizar: total o cxp (cxp --> cuentas por pagar)");

    switch(curso) {
        case "total":
            document.querySelector(".print").innerHTML = `
            Pagos de java <span>${java * java_d}€</span><br>
            Pagos de python <span>${python * python_d}€</span><br>
            Pagos de C++ <span>${cPlus * cPlus_d}€</span><br>
            Pagos de php <span>${php * php_d}€</span><br>
            Compraron en total <span>${total_ins} cursos</span><br>
            El pago total recibido es: <span>${total_pagar}€</span><br>`;
            break;

        case "cxp":
            document.querySelector(".print").innerHTML = `
            Inscripciones de Java: <span>${java_d} inscripciones</span><br>
            Inscripciones de Python: <span>${python_d} inscripciones</span><br>
            Inscripciones de C++: <span>${cPlus_d} inscripciones</span><br>
            Inscripciones de PHP: <span>${php_d} inscripciones</span><br>
            Total inscripciones: <span>${total_ins} inscripciones</span><br>
            Costo total por pagar:<br>
            Java: <span>${(java * java_d).toFixed(2)}€</span><br>
            Python: <span>${(python * python_d).toFixed(2)}€</span><br>
            C++: <span>${(cPlus * cPlus_d).toFixed(2)}€</span><br>
            PHP: <span>${(php * php_d).toFixed(2)}€</span><br>
            Total por pagar: <span>${total_pagar.toFixed(2)}€</span><br>`;
            break; 

        default:
            document.querySelector(".print").innerHTML = `No se reconoce el caso`;
            break;
    }
}

// FUNCTION FOR CAJA "CHICA"
function b_caja() {
    const fondo = 300;
    const caja = parseFloat(prompt("¿Cuánto has gastado hoy?"));
    if(!isNaN(caja)) {
        if(caja < 300) {
            document.querySelector(".print").innerHTML = `Tus gastos fueron <span>${caja}€</span><br>Tus fondos eran: <span>${fondo}€</span><br>Ahora tienes: <span>${fondo - caja}€</span> en los fondos`;
        } else {
            document.querySelector(".print").innerHTML = `Tus gastos fueron <span>${caja}€</span><br>pasastes el límite y ahora en los fondos tienes<br><span>${fondo - caja}€</span>`;
        }
    } else {
        alert("no metiste un número");
        return;
    }
}

// FUNCTION FOR GASTOS FIJOS
function b_fijo() {
    const fondos = 2000; // FONDOS
    const gasto_fijo = 700; // GASTOS FIJOS

    alert(`
        Tus fondos son: ${fondos}€
        Tu gasto fijo de todos los meses es: ${gasto_fijo}€
        `); // ALERT QUE DICE LO QUE GASTA MENSUALMENTE Y TUS FONDOS

    const add_gasto = parseFloat(prompt(`
        ¿Quiere añadir otro gasto fijo para este mes?
        `)); // MENSAJE PARA AÑADIR NUEVOS GASTOS

        // CHECK POR SI LA PERSONA NO AÑADE UN NÚMERO👇
        if(isNaN(add_gasto)) {
            document.querySelector(".print").innerHTML = `
            No se añadió ningún número
            `;
            return;
        }

    document.querySelector(".print").innerHTML = `
    Sus gastos de este mes serán de: <span>${add_gasto + gasto_fijo}€</span><br>
    Le quedarán de fondo: <span>${fondos - (add_gasto + gasto_fijo)}€</span>
    `; // IMPRIMIR LA FUNCIÓN
}

// FUNCTION FOR GASTOS VARIABLES
function b_variable() {
    
}