<?php $render('header'); ?>

<form action="<?=$base;?>/novo" method="post"> 

    <input placeholder="Nome" class="input" type="email" name="nome" />

    <input placeholder="E-mail" class="input" type="password" name="email" />

    <input placeholder="Telefone" class="input" type="text" name="telefone" />

    <input class="button" type="submit" value="Salvar" />
    
</form>

<?php $render('footer') ?>