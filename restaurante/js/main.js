function compras() {
    let lunes = 0;
    let martes = 0;
    let miercoles = 0;
    let jueves = 0;
    let viernes = 0;

    let compra_lunes;
    let compra_martes;
    let compra_miercoles;
    let compra_jueves;
    let compra_viernes;
    
    // LUNES 
    lunes = prompt("Compra de lunes:");
    compra_lunes = prompt("Coste:");

    document.querySelector(".lunes").innerHTML = lunes;
    document.querySelector(".lunes_c").innerHTML = `${compra_lunes}€`;

    // MARTES
    martes = prompt("Compra de martes:");
    compra_martes = prompt("Coste:");

    document.querySelector(".martes").innerHTML = martes;
    document.querySelector(".martes_c").innerHTML = `${compra_martes}€`;

    // MIERCOLES
    miercoles = prompt("Compra de miercoles:");
    compra_miercoles = prompt("Coste:");

    document.querySelector(".miercoles").innerHTML = miercoles;
    document.querySelector(".miercoles_c").innerHTML = `${compra_miercoles}€`;

    // JUEVES
    jueves = prompt("Compra de jueves:");
    compra_jueves = prompt("Coste:");

    document.querySelector(".jueves").innerHTML = jueves;
    document.querySelector(".jueves_c").innerHTML = `${compra_jueves}€`;

    // VIERNES
    viernes = prompt("Compra de viernes:");
    compra_viernes = prompt("Coste:");

    document.querySelector(".viernes").innerHTML = viernes;
    document.querySelector(".viernes_c").innerHTML = `${compra_viernes}€`;

    const resultado = Number(compra_lunes) + Number(compra_martes) + Number(compra_miercoles) + Number(compra_jueves) + Number(compra_viernes)

    document.querySelector(".print-cost").innerHTML = `EL COSTE TOTAL ES: ${resultado}`;
}