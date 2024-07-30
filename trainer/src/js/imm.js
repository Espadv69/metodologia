document.getElementById('immForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const gender = document.getElementById('gender').value;

    let LBM;

    // Fórmulas simplificadas para masa magra corporal (LBM)
    if (gender === 'male') {
        LBM = (0.407 * weight) + (0.267 * height) - 19.2;
    } else {
        LBM = (0.252 * weight) + (0.473 * height) - 48.3;
    }

    // Calcula el IMM como LBM/altura^2
    const heightInMeters = height / 100;
    const IMM = LBM / (heightInMeters ** 2);

    // Interpretación del IMM
    let interpretation = '';
    if (IMM < 18) {
        interpretation = 'Tu IMM indica que podrías tener una masa muscular baja. Considera hablar con un especialista en salud o nutrición.';
    } else if (IMM >= 18 && IMM < 25) {
        interpretation = 'Tu IMM está dentro del rango normal. ¡Buen trabajo! Mantén un estilo de vida saludable.';
    } else {
        interpretation = 'Tu IMM sugiere una masa muscular alta. Si eres atleta, esto puede ser normal. De lo contrario, podrías considerar una revisión médica.';
    }

    // Mostrar el resultado con interpretación
    document.getElementById('result').innerText = `Tu IMM es: ${IMM.toFixed(2)}. ${interpretation}`;
});
