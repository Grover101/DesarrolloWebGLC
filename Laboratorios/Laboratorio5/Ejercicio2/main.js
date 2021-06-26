enviar = () => {
    let data = "calendario.php?mes=" + parseInt(document.getElementById('mes').value) + "&anio=" + parseInt(document.getElementById('anio').value)
    fetch(data, {
        method: 'get'
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        document.getElementById('calendario').innerHTML = text;
        // console.log(text);
    }).catch(function (err) {
        alert('error');
    });
}