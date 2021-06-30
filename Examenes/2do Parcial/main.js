const mostrarDatos = () => {
    const nEnlaces = document.getElementsByTagName('a').length;
    const contDato = document.getElementById('datos').children;
    let datos = ""
    for (let i = 0; i < contDato.length; i++) {
        // console.log(contDato[i].textContent);
        datos += element = contDato[i].textContent + '<br>';
    }
    const radioCheck = document.getElementsByName('edad')
    let check;
    for (let i = 0; i < radioCheck.length; i++)
        if (radioCheck[i].checked)
            check = radioCheck[i].value
    const nParrafos = document.getElementsByTagName('p').length;
    document.getElementById('contenido').innerHTML = `<table class="table table-bordered"
          <tr>
            <td class="table-warning">Numero de enlaces de la pagina</td>
            <td>${nEnlaces}</td>
          </tr>
          <tr>
            <td class="table-warning">Valor del contenido id=datos</td>
            <td>${datos}</td>
          </tr>
          <tr>
            <td class="table-warning">Valor seleccionado en el radio button con name="edad"</td>
            <td>${check}</td>
          </tr>
          <tr>
            <td class="table-warning">Numero de Parrafos de la pagina</td>
            <td>${nParrafos}</td>
          </tr>
        </table>`
}

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
}

autenticar = () => {
    let ajax = new XMLHttpRequest()
    ajax.open("POST", "autenticar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            ingreso = document.getElementById('contenido');
            ingreso.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send("correo=" + document.getElementById('correo').value +
        "&password=" + document.getElementById('password').value +
        "&nocache=" + Math.random());
}

mostrarLibros = () => {
    fetch('./listLibros.php', {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('contenido').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

ordenar = (tipo, orden) => {
    fetch(`./listLibros.php?orden=${orden}&tipo=${tipo}`, {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('contenido').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

editar = (id) => {
    fetch(`./formEditar.php?id=${id}`, {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('contenido').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

editarDatos = () => {
    var formData = new FormData();
    formData.append('imagen', document.getElementById('imagen').files[0]);
    formData.append('id', document.getElementById('id').value);
    formData.append('titulo', document.getElementById('titulo').value);
    formData.append('foto', document.getElementById('fotoNombre').value);
    formData.append('autor', document.getElementById('autor').value);
    formData.append('editorial', document.getElementById('editorial').value);
    formData.append('anio', document.getElementById('anio').value);
    formData.append('usuario', document.getElementById('usuario').value);
    formData.append('carrera', document.getElementById('carrera').value);


    fetch(`./editar.php`, {
        method: 'POST',
        body: formData
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('contenido').innerHTML = text;
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
        document.getElementById('contenido').innerHTML = text;
    }).catch(function (err) {
        alert('error');
    });
}

mostrarImputs = () => {
    const numInputs = parseInt(document.getElementById('numEntradas').value);
    var entradas = `
    <div class="col-md-3"></div>
    <div class="col-md-3">
    <button type="submit" class="btn btn-primary" onclick="sumar()"> + </button>
    </div>
    <div class="col-md-3">`;
    for (let i = 0; i < numInputs; i++) {
        entradas += `<input type="number" id="input${i}" class="form-control text-center" />`
    }
    entradas += `
    </div>
    <div class="col-md-3"></div>`
    document.getElementById('entradas').innerHTML = entradas
    document.getElementById('res').innerHTML = `<input type="text" disabled id="resultado" class="form-control text-center" />`
}

sumar = () => {
    const numInputs = parseInt(document.getElementById('numEntradas').value);
    var resultado = 0;
    for (let i = 0; i < numInputs; i++) {
        resultado += parseInt(document.getElementById('input' + i).value)
    }
    document.getElementById('resultado').value = resultado
}