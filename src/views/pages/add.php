<?php $render('header'); ?>

<h2>Cadastrando novo contato</h2>
<form action="<?=$base;?>/novo" method="post"> 

    <label>Nome
        <input type="text" name="nome" id="nome">
    </label>

    <label>E-mail
        <input type="email" name="email" id="email">
    </label>

    <label>Telefone
        <input type="tel" id="telefone" name="telefone">
    </label>
         
    <button type="submit">Salvar</button>
    
</form>

<?php $render('footer') ?>