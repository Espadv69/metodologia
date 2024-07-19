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
    const materias_primas = parseFloat(prompt(`
        Añada los gastos de (Materia Prima) de este mes
        `)) // MATERIA PRIMA
        //CHECK POR SI ES NULL👇
        if(isNaN(materias_primas)) {
            document.querySelector(".print").innerHTML = `
            <span>Materias primas</span> no puede ser nulo, minimo 0;
            `;
            return;
        }
    
    const mano_obra = parseFloat(prompt(`
        Añada los gastos de (Mano De Obra) de este mes
        `)) // MANO DE OBRA
        //CHECK POR SI ES NULL👇
        if(isNaN(mano_obra)) {
            document.querySelector(".print").innerHTML = `
            <span>Mano de obra</span> no puede ser nulo, minimo 0;
            `;
            return;
        }

    const energia = parseFloat(prompt(`
        Añada los gastos de (Energía) de este mes
        `)) // COSTE DE ENERGÍA
        //CHECK POR SI ES NULL👇
        if(isNaN(energia)) {
            document.querySelector(".print").innerHTML = `
            <span>Energia</span> no puede ser nulo, minimo 0;
            `;
            return;
        }

    const comisiones = parseFloat(prompt(`
        Añada los gastos de (Comisiones De Ventas) de este mes
        `)) // COMISIONES DE VENTAS
        //CHECK POR SI ES NULL👇
        if(isNaN(comisiones)) {
            document.querySelector(".print").innerHTML = `
            <span>Comisiones</span> no puede ser nulo, minimo 0;
            `;
            return;
        }

    const gastos_envios_distribucion = parseFloat(prompt(`
        Añada los gastos de (Envio Y Distribución) de este mes
        `)) // GASTOS DE ENVIOS Y DISTRIBUCIÓN
        //CHECK POR SI ES NULL👇
        if(isNaN(gastos_envios_distribucion)) {
            document.querySelector(".print").innerHTML = `
            <span>Gastos de envios y distribución</span> no puede ser nulo, minimo 0;
            `;
            return;
        }

    const total = materias_primas + mano_obra + energia + comisiones + gastos_envios_distribucion; // TOTAL

    document.querySelector(".print").innerHTML = `
    Sus gastos de Materia Prima este mes son de: <span>${materias_primas}€</span><br>

    Sus gastos de Mano De Obra este mes son de: <span>${mano_obra}€</span><br>

    Sus gastos de Energía este mes son de: <span>${energia}€</span><br>

    Sus gastos de Comisiones este mes son de: <span>${comisiones}€</span><br>

    Sus gastos de envio y distribución de este mes son de: <span>${gastos_envios_distribucion}€</span><br><br>

    En total sus gastos de este mes serán de: <span>${total}€</span>
    `;
}

// FUNCTION FOR SUELDOS
function b_sueldos() {
    const persona = prompt("Ingrese nombre del trabajador"); // NOMBRE
    if(persona === "") {
        document.querySelector(".print").innerHTML = "No se añadió nombre de empleado";
        return;
    }

    const persona_trabajo = prompt(`
        Ingrese el trabajo de ${persona} en nuestra oficina\n
        Puestos de trabajo:\n
        Programador - Limpieza - Seguridad
        `); // CUÁL ES EL PUESTO DE TRABAJO DE LA PERSONA
    if(persona_trabajo === "") {
        document.querySelector(".print").innerHTML = "No se añadió Puesto del empleado";
        return;
    }

    switch(persona_trabajo) {
        /* PRIMER BLOQUE */
        case "programador":
            const elige = prompt(`Junior👨‍🎓 o Senior👨‍💻`);
            switch(elige) {
                case "junior":
                    document.querySelector(".print").innerHTML = `
                    Sueldo de Junior: <span>3.000€</span> mensuales.<br>
                    Horas de trabajo: <span>6</span> Horas diarias.<br>
                    Dias de trabajo: <span>20</span> Dias por mes.
                    `;
                    break;
                    
                case "senior":
                    document.querySelector(".print").innerHTML = `
                    Sueldo de Senior: <span>6.000€</span> mensuales.<br>
                    Horas de trabajo: <span>4</span> Horas diarias.<br>
                    Dias de trabajo: <span>23</span> Dias por mes.
                    `;
                    break;

                default: 
                    document.querySelector(".print").innerHTML = `
                    No hubo elección
                    `;
                    break;
                }
            break;
        /* FIN DEL PRIMER BLOQUE */

        /* SEGUNDO BLOQUE */
        case "limpieza":
            document.querySelector(".print").innerHTML = `
            Sueldo de limpiador: <span>1.800€</span> mensuales.<br>
            Horas de trabajo: <span>6</span> Horas diarias.<br>
            Dias de trabajo: <span>25</span> Dias por mes.
            `;
            break;
        /* FIN DEL SEGUNDO BLOQUE */

        /* TERCER BLOQUE */
        case "seguridad":
            const elige_s = prompt(`Ciber💻 o Seguridad👮‍♂️`);
            console.log(`Opción ingresada: ${elige_s}`);
            switch(elige_s) {
                case "ciber":
                    document.querySelector(".print").innerHTML = `
                    Sueldo de CiberSeguridad: <span>9.000€</span> mensuales.<br>
                    Horas de trabajo: <span>8</span> Horas diarias.<br>
                    Dias de trabajo: <span>25</span> Dias por mes.
                    `;
                    break;

                case "seguridad":
                    document.querySelector(".print").innerHTML = `
                    Sueldo de Seguridad: <span>10.000€</span> mensuales.<br>
                    Horas de trabajo: <span>8</span> Horas diarias.<br>
                    Dias de trabajo: <span>20</span> Dias por mes.
                    `;
                    break; 

                default:
                    document.querySelector(".print").innerHTML = `No se ingresó puesto`;
                    break;
            }
            break;
        /* FIN DEL TERCER BLOQUE */

        /* DEFAULT */
        default: 
        document.querySelector(".print").innerHTML = `No se ingresó puesto`;
        break;
    }
}

// FUNCTION FOR COMPRAS
function b_comprar() {
    const cursos = {
        "JavaScript": 100,
        "React": 150,
        "Node.js": 180,
        "Python": 120
    };

    let carrito = [];
    let total = 0;
    let seleccion = prompt("Bienvenido a la tienda de cursos de desarrollo. ¿Deseas comprar un curso? (sí/no)").trim().toLowerCase();

    while (seleccion === "sí" || seleccion === "si") {
        let cursoElegido = prompt(`¿Qué curso te gustaría comprar?\nOpciones:\n${Object.keys(cursos).join(" - ")}\nEscribe el nombre del curso exactamente como aparece`).trim();

        if (cursos[cursoElegido] !== undefined) {
            carrito.push(cursoElegido);
            total += cursos[cursoElegido];
            alert(`${cursoElegido} añadido al carrito. Precio: ${cursos[cursoElegido]}€`);
        } else {
            alert("El curso seleccionado no está disponible. Por favor, elige uno de los cursos listados.");
        }

        seleccion = prompt("¿Deseas comprar otro curso? (sí/no)").trim().toLowerCase();
    }

    if (carrito.length > 0) {
        let resumen = `Resumen de tu compra:\n\n`;
        carrito.forEach(curso => {
            resumen += `${curso}: ${cursos[curso]}€\n`;
        });
        resumen += `\nTotal: ${total}€`;
        document.querySelector(".print").innerHTML = resumen;
    } else {
        document.querySelector(".print").innerHTML = "No se ha realizado ninguna compra.";
    }
}

// FUNCTION FOR INVENTARIO
function b_inventario() {
    const inventario = {
        "JavaScript Básico": {
            cantidad: 10,
            precio: 100
        },
        "JavaScript Avanzado": {
            cantidad: 5,
            precio: 200
        },
        "React": {
            cantidad: 8,
            precio: 150
        },
        "Node.js": {
            cantidad: 7,
            precio: 180
        },
        "Python": {
            cantidad: 12,
            precio: 120
        }
    };

    let resumen = `<h2>Inventario de Cursos</h2>`;
    for (let curso in inventario) {
        if (inventario.hasOwnProperty(curso)) {
            let { cantidad, precio } = inventario[curso];
            resumen += `<p><strong>${curso}</strong>: ${cantidad} disponibles - Precio: ${precio}€</p>`;
        }
    }

    document.querySelector(".print").innerHTML = resumen;
}

// FUNCTION FOR AUDITORIA
function b_auditoria() {
    // Datos de ejemplo
    const auditoria = {
        transacciones: [
            { curso: "JavaScript Básico", cantidad: 3 },
            { curso: "React", cantidad: 2 },
            { curso: "Python", cantidad: 1 }
        ],
        inventario: {
            "JavaScript Básico": 7,
            "JavaScript Avanzado": 5,
            "React": 6,
            "Node.js": 7,
            "Python": 11
        },
        fecha: new Date().toLocaleString()
    };

    let resumen = `<h2>Informe de Auditoría</h2>`;
    resumen += `<p><strong>Fecha y Hora:</strong> ${auditoria.fecha}</p>`;
    resumen += `<h3>Transacciones:</h3>`;
    resumen += `<ul>`;
    auditoria.transacciones.forEach(transaccion => {
        resumen += `<li>Curso: ${transaccion.curso} - Cantidad: ${transaccion.cantidad}</li>`;
    });
    resumen += `</ul>`;
    resumen += `<h3>Inventario Actual:</h3>`;
    resumen += `<ul>`;
    for (let curso in auditoria.inventario) {
        if (auditoria.inventario.hasOwnProperty(curso)) {
            let cantidad = auditoria.inventario[curso];
            resumen += `<li>${curso}: ${cantidad} disponibles</li>`;
        }
    }
    resumen += `</ul>`;

    document.querySelector(".print").innerHTML = resumen;
}

// FUNCTION TO CLEAN THE CONSOLE
function clean() {
    document.querySelector(".print").innerHTML = "";
}