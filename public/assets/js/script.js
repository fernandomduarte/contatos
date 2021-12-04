$(document).ready(function(){

    /**
     * Função que verifica se o primeiro dígito é 9, 
     * caracteriza como telefone móvel 
    **/
    $("#telefone").keydown(function() {
        var telefone = $('#telefone').val();
        if (telefone.split('')[5] == 9) {
            $('#telefone').mask('(00) 00000-0000');
        } else {
            $('#telefone').mask('(00) 0000-0000');
        }
    });
    
});