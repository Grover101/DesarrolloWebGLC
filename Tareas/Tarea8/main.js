calcular = () => {
    var a = parseFloat(document.getElementById('a').value);
    var b = parseFloat(document.getElementById('b').value);
    var c = parseFloat(document.getElementById('c').value);

    document.getElementById('resultado1').innerHTML = `<p>El resultado para x1 es: ${(-b + Math.sqrt(b * b - 4 * a * c)) / (2 * a)}</p>`;
    document.getElementById('resultado2').innerHTML = `<p>El resultado para x2 es: ${(-b - Math.sqrt(b * b - 4 * a * c)) / (2 * a)}</p>`;
}
