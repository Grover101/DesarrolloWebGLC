turno = 'X';
cargarContenido = (abrir) => {
    let contenedor = document.getElementById('contenido');
    let ajax = new XMLHttpRequest()
    ajax.open("GET", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
    document.getElementById('mensaje').innerHTML = ""
}

cambioTurno = (x) => {
    if (x.innerHTML.trim() == '&nbsp;') {
        x.innerHTML = turno;
        turno = turno == 'X' ? turno = 'O' : 'X'
    }
    document.getElementById('mensaje').innerHTML = `<h4>Es Turno de: ${turno}</h4>`
}

mostrarTabla = () => {
    const operaciones = {
        'multiplicacion': (tablade, hasta) => {
            let tabla = ``;
            for (let i = 1; i <= hasta; i++)
                tabla += `<p>${tablade} X ${i} = ${tablade * i}</p>`;
            document.getElementById('mensaje').innerHTML = tabla;
        },
        'division': (tablade, hasta) => {
            let tabla = ``;
            for (let i = tablade; i <= hasta * tablade; i += tablade)
                tabla += `<p>${i} / ${tablade} = ${i / tablade}</p>`;
            document.getElementById('mensaje').innerHTML = tabla;
        },
        'suma': (tablade, hasta) => {
            let tabla = ``;
            for (let i = 1; i <= hasta; i++)
                tabla += `<p>${tablade} + ${i} = ${i + tablade}</p>`;
            document.getElementById('mensaje').innerHTML = tabla;
        },
        'resta': (tablade, hasta) => {
            let tabla = ``;
            for (let i = tablade; i <= hasta; i++)
                tabla += `<p>${i} - ${tablade} = ${i - tablade}</p>`;
            document.getElementById('mensaje').innerHTML = tabla;
        },
    }
    const tablade = parseInt(document.getElementById('tablade').value)
    const hasta = parseInt(document.getElementById('hasta').value)
    const operaAux = document.getElementsByName('operacion')
    let operacion;
    for (let i = 0; i < operaAux.length; i++)
        if (operaAux[i].checked)
            operacion = operaAux[i].value
    operaciones[operacion](tablade, hasta)
}

autenticar = () => {
    let ajax = new XMLHttpRequest()
    ajax.open("POST", "autenticar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            ingreso = document.getElementById('contenido');
            ingreso.innerHTML = ajax.responseText;
            if (document.getElementById('logueado').value == 'si')
                mostrarLista()
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("correo=" + document.getElementById('correo').value +
        "&password=" + document.getElementById('password').value +
        "&nocache=" + Math.random());
}

mostrarLista = () => {
    let contenedor = document.getElementById('mensaje');
    let ajax = new XMLHttpRequest()
    ajax.open("GET", 'lista.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

cambiarnivel = (id, nivel) => {
    var ajax = new XMLHttpRequest()
    var parametros = "id=" + id + "&nivel=" + nivel + "&nocache=" + Math.random();
    ajax.open("post", "cambiarEstado.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById("mensaje").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(parametros);
}