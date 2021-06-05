const seleccion = (n) => {
    let factorial = 1;
    let opcion = '<option value="0">0</option>'
    for (let i = 1; i <= n; i++) {
        factorial *= i
        opcion = opcion + `<option value="${i}">${factorial}</option>`
    }
    document.getElementById('seccion').innerHTML = `<h1>Ejercicio 2</h1><span>Factorial de un Numero: </span><select>${opcion}</select>`
}

var numero = parseInt(prompt('Inserte un N factorial'))
seleccion(numero)