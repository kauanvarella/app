function capitalizar(string) {
    return string.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function capitalizarTexto(){
    document.getElementById("resultado").innerHTML = capitalizar(document.getElementById("textopassado").value);
}

function converterMaiusculo(){
    document.getElementById("resultado").innerHTML = document.getElementById("textopassado").value.toUpperCase();
}

function converterMinusculo(){
    document.getElementById("resultado").innerHTML = document.getElementById("textopassado").value.toLowerCase();
}

function converterNegrito(){
    document.getElementById("resultado").innerHTML = document.getElementById("textopassado").value.bold();
}

function converterItalico(){
    document.getElementById("resultado").innerHTML = document.getElementById("textopassado").value.italics();
}

function converterSublinhar(){
    document.getElementById("resultado").innerHTML = "<u>"+ document.getElementById("textopassado").value + "</u>";
}

