<?php $render('header'); ?>

<form action="<?=$base;?>/novo" method="post"> 

    <input placeholder="Nome" class="input" type="nome" name="nome" />

    <input placeholder="E-mail" class="input" type="email" name="email" />

    <input placeholder="Telefone" class="input" type="text" name="telefone" id="telefone"/>

    <input class="button" type="submit" value="Salvar" />
    
</form>

<?php $render('footer') ?>