function cargarContenido(abrir) {
    let contenedor = document.getElementById('contenido');
    let ajax = new XMLHttpRequest()
    ajax.open("GET", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

crearProducto = () => {
    let contenedor = document.getElementById('contenido');
    let parametros = "producto=" + document.getElementById('producto').value + "&precio=" + document.getElementById('precio').value + "&descripcion=" + document.getElementById('descripcion').value + "&nocache=" + Math.random();
    let ajax = new XMLHttpRequest()
    ajax.open("POST", 'crear.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(parametros);
}