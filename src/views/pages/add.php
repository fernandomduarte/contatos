<?php $render('header'); ?>

<form action="<?=$base;?>/novo" method="post"> 

    <label>Nome
        <input type="text" name="nome" id="nome">
    </label>

    <label>E-mail
        <input type="email" name="email" id="email">
    </label>

    <label>Telefone
        <input type="text" id="telefone" name="telefone">
    </label>
         
    <button class="btn btn-primary" type="submit">Salvar</button>
    
</form>

<?php $render('footer') ?>