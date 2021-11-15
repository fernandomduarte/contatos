$(document).ready(function(){

    // Formata a máscara do campo input telefone conforme a distinção entre tel móvel ou fixo
    $("#telefone").keydown(function() {
        var telefone = $('#telefone').val();
        if (telefone.split('')[5] == 9) {
            $('#telefone').mask('(00) 00000-0000');
        } else {
            $('#telefone').mask('(00) 0000-0000');
        }
    });
    
});