$(document).ready(function(){

    var operacao = "";
    
    $(".botcalc").click(function(){
        var numinserido = this.id;
        document.getElementById("visorcalculadora").value = operacao + numinserido;
        operacao += numinserido;
    });

    $("#botaoigual").click(function(){
        operacao = document.getElementById("visorcalculadora").value = eval(operacao);
    });

    $("#botaolimpar").click(function(){
        document.getElementById("visorcalculadora").value = 0;
        operacao = "";
    });

    $("#botaoapagar").click(function(){
        operacao = operacao.slice(0, -1);
        document.getElementById("visorcalculadora").value = operacao;
    });

});
