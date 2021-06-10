const Calcular = () => {
    let a = parseFloat(document.getElementById('a').value)
    let b = parseFloat(document.getElementById('b').value)

    switch (document.getElementById('opcion').selectedIndex) {
        case 0: document.getElementById('resultado').innerHTML = a + b;
            break;
        case 1: document.getElementById('resultado').innerHTML = a - b;
            break;
        case 2: document.getElementById('resultado').innerHTML = a / b;
            break;
        case 3: document.getElementById('resultado').innerHTML = a * b;
    }
    document.getElementById('resultado').classList = 'resultado'
}