function sorteiaPalavra(){
    var listapalavras = ['MESA', 'CADEIRA', 'GELADEIRA'];
    var palavrasorteada = listapalavras[Math.floor(Math.random() * listapalavras.length)];
    var espacos = "";
    for(var i = 0; i < palavrasorteada.length; i++){
        espacos += "_ "
    }
 
    document.getElementById("palavraespacos").innerHTML = espacos;
    document.getElementById("guardapalavra").innerHTML = palavrasorteada;
}


function confereLetra(){
    var palavra = document.getElementById("guardapalavra").innerHTML;
    var letra = document.getElementById("escolheletra").value.toUpperCase();
    var espacos2 = document.getElementById("palavraespacos").innerHTML;

    if(palavra.includes(letra)){
        for(var i = 0; i < palavra.length; i++){
            if (palavra[i] == letra){
                espacos2[i] = letra;
                espacos2
            }
        }
    } else (alert('NÃO TEM'))

    alert(espacos2);
    document.getElementById("palavraespacos").innerHTML = espacos2;
    /*document.getElementById("escolheletra").value = "";*/
}

