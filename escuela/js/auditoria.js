function b_ventas() {
    const java = 75;
    const python = 50;
    const cPlus = 30;
    const php = 100;

    const valor = parseFloat(prompt("Cantidad de ventas del dia"));
    if(isNaN(valor)) {
        alert ("NO SE AÑADIÓ UN NÚMERO❗");
        return valor;
    }

    const curso = prompt("Que curso vendio: JAVA, PYTHON, C++, PHP");
    switch(curso) {
        case "java":
            const iva_java = ((java*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de java que es un total de: <span>${java*valor}€</span>
            <br>Con un IVA de: <span>${iva_java}€</span><br>
            El total del pago sería: <span>${java*valor+iva_java}€</span>`;
            break;

        case "python":
            const iva_python = ((python*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de python que es un total de: <span>${python*valor}€</span>
            <br>Con un IVA de: <span>${iva_python}€</span><br>
            El total del pago sería: <span>${python*valor+iva_python}€</span>`;
            break;

        case "c++":
            const iva_cPlus = ((cPlus*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de cPlus que es un total de: <span>${cPlus*valor}€</span>
            <br>Con un IVA de: <span>${iva_cPlus}€</span><br>
            El total del pago sería: <span>${cPlus*valor+iva_cPlus}€</span>`;
            break;

        case "php":
            const iva_php = ((php*valor)*0.21);
            document.querySelector(".print").innerHTML = `
            Vendió <span>${valor}</span> cursos de php que es un total de: <span>${php*valor}€</span>
            <br>Con un IVA de: <span>${iva_php}€</span><br>
            El total del pago sería: <span>${php*valor+iva_php}€</span>`;
            break;

        default:
            document.querySelector(".print").innerHTML = `Hubo un error en la selección de cursos, asegurate de escribirlo en minúsculas❌`;
    }
}