cargarContenido = (abrir) => {
    let contenedor = document.getElementById('cuerpo');
    let ajax = new XMLHttpRequest()
    ajax.open("GET", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

calcularSum = () => {
    let contenedor = document.getElementById('cuerpo');
    let ajax = new XMLHttpRequest()
    ajax.open("GET", 'final.php?n=' + parseInt(document.getElementById('numEntrada').value), true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

calcularCadena = () => {
    let contenedor = document.getElementById('cuerpo');
    let ajax = new XMLHttpRequest()
    ajax.open("POST", "final.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("&cadena=" + document.getElementById('textEntrada').value +
        "&nocache=" + Math.random());
}

crearBotones = () => {
    let valor = document.getElementById('opciones').value
    let contenido = document.getElementById('resultado')
    if (valor == 1) {
        var input = document.createElement("textarea");
        input.value = 'Textarea'
    }
    if (valor == 2) {
        var input = document.createElement("input");
        input.type = 'date'
        input.value = '2021-07-21'
    }
    contenido.appendChild(input);
    contenido.appendChild(document.createElement("br"))
}

cargarContenidoFetch = (abrir) => {
    fetch(abrir, {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('cuerpo').innerHTML = text;
        // console.log(text);
    }).catch(function (err) {
        alert('error');
    });
}

autenticar = () => {
    var formData = new FormData();
    formData.append('correo', document.getElementById('correo').value);
    formData.append('password', document.getElementById('password').value);
    fetch(`./autenticar.php`, {
        method: 'POST',
        body: formData
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('cuerpo').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

bandeja = () => {
    fetch('entradas.php', {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('bandeja').innerHTML = text;
        // console.log(text);
    }).catch(function (err) {
        alert('error');
    });
}

enviados = () => {
    fetch('correosEnviados.php', {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('bandeja').innerHTML = text;
        // console.log(text);
    }).catch(function (err) {
        alert('error');
    });
}

cargarFormulario = (abrir) => {
    fetch(abrir, {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('bandeja').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

redactar = () => {
    var formData = new FormData();
    formData.append('correo', document.getElementById('correoDestino').value);
    formData.append('asunto', document.getElementById('asunto').value);
    formData.append('mensaje', document.getElementById('mensaje').value);
    fetch(`./redactar.php`, {
        method: 'POST',
        body: formData
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('bandeja').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

logout = () => {
    fetch(`./logout.php`, {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('cuerpo').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}
