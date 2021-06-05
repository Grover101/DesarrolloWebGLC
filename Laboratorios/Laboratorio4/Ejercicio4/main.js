const calcular = () => {
    var a = parseInt(document.getElementById('a').value);
    var b = parseInt(document.getElementById('b').value);
    var c = parseInt(document.getElementById('c').value);

    document.getElementById('a').className = "";
    document.getElementById('b').className = "";
    document.getElementById('c').className = "";
    if (a >= b && a >= c)
        document.getElementById('a').className = "azul";
    else if (b >= a && b >= c)
        document.getElementById('b').className = "azul";
    else if (c >= a && c >= b)
        document.getElementById('c').className = "azul";

    if (a <= b && a <= c)
        document.getElementById('a').className = "rojo";
    else if (b <= a && b <= c)
        document.getElementById('b').className = "rojo";
    else if (c <= a && c <= b)
        document.getElementById('c').className = "rojo";
}