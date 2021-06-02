
calcular = () => {
    var a = parseInt(document.getElementById('a').value);
    var b = parseInt(document.getElementById('b').value);
    document.getElementById('resultado').innerHTML = `<p>El resultado es: ${a + b}</p>`;
}
