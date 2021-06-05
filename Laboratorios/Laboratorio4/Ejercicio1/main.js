const dosDigitos = {
    1: 'Dieci',
    2: 'Veinti',
    3: 'Treinta',
    4: 'Cuarenta',
    5: 'Cincuenta',
    6: 'Sesenta',
    7: 'Setenta',
    8: 'Ochenta',
    9: 'Noventa'
}

const digitosUnicos = {
    1: 'uno',
    2: 'dos',
    3: 'tres',
    4: 'cuatro',
    5: 'cinco',
    6: 'seis',
    7: 'siete',
    8: 'ocho',
    9: 'nueve',
    10: 'Diez',
    11: 'Once',
    12: 'Doce',
    13: 'Trece',
    14: 'Catorce',
    15: 'Quince',
    20: 'Veinte',
    100: 'Cien'
}

const literal = (n) => {
    if (digitosUnicos[n])
        return digitosUnicos[n]
    else
        return parseInt(n) > 30 ? dosDigitos[n[0]] + ' y ' + digitosUnicos[n[1]] : n[1] == '0' ? dosDigitos[n[0]] : dosDigitos[n[0]] + digitosUnicos[n[1]]
}

var numero = prompt("Inserte un numero")

document.write(numero + ': ' + literal(numero))