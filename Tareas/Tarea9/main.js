iniciar = () => {
    const palabras = ["nabucodonosor", "anticostitucionalmente", "electrodomésticos", "ovovivíparo", "omoplato", "sabiduría", "deuteronomio", "malaquías", "rigurosidad", "caleidoscopio"]
    error = 0
    palabra = palabras[Math.round(Math.random() * 9)]
    document.getElementById('letras').innerHTML = inputs(palabra.length)
    document.getElementById('iniciar').style.visibility = "hidden"
    document.getElementById('imagen').src = "./img/" + error + ".jpg";
    document.getElementById('letra').focus()
}

inputs = (n) => {
    let aux = ""
    for (let i = 0; i < n; i++)
        aux += ('<input type="text" id="letra' + i + '" class="caja"  readonly>')
    return aux
}

verificar = () => {
    const letra = document.getElementById('letra').value
    if (letra != "") {
        let acerto = false
        let aux = ""
        for (i = 0; i < palabra.length; i++) {
            if (palabra[i] == letra) {
                acerto = true;
                document.getElementById('letra' + i).value = letra
            }
        }

        if (!acerto) {
            if (error >= 7) {
                alert("PERDISTE!!!, Iniciar de nuevo", iniciar())
            }
            else {
                error++;
                document.getElementById('imagen').src = "./img/" + error + ".jpg"
            }
        }

        for (i = 0; i < palabra.length; i++)
            aux += document.getElementById('letra' + i).value
        if (aux == palabra) {
            document.getElementById('imagen').src = "./img/ganas.jpg"
            document.getElementById('iniciar').style.visibility = "visible"
            document.getElementById('iniciar').innerText = "Comenzar de Nuevo"
        }


        document.getElementById('letra').value = ""
        document.getElementById('letra').focus()
    }
}