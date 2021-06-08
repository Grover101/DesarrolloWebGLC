calcular = () => {
    var a = parseFloat(document.getElementById('a').value);
    var b = parseFloat(document.getElementById('b').value);
    var c = parseFloat(document.getElementById('c').value);

    var d = b * b - 4 * a * c;

    if (d == 0) {
        document.getElementById('resultado1').innerHTML = `<p>El resultado para x1 es: ${-b / (2 * a)}</p>`;
        document.getElementById('resultado2').innerHTML = `<p>El resultado para x2 es: ${-b / (2 * a)}</p>`;
    } else if (d > 0) {
        document.getElementById('resultado1').innerHTML = `<p>El resultado para x1 es: ${(-b + Math.sqrt(d)) / (2 * a)}</p>`;
        document.getElementById('resultado2').innerHTML = `<p>El resultado para x2 es: ${(-b - Math.sqrt(d)) / (2 * a)}</p>`;
    } else {
        console.log(d, -b / (a * 2), Math.sqrt(-d));
        document.getElementById('resultado1').innerHTML = `<p>El resultado para x1 es: ${-b / (2 * a)} + ${Math.sqrt(-d) / (2 * a)}i</p>`;
        document.getElementById('resultado2').innerHTML = `<p>El resultado para x2 es: ${-b / (2 * a)} - ${Math.sqrt(-d) / (2 * a)}i</p>`;
    }
}
