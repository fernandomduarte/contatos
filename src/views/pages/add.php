<?php $render('header'); ?>

<form action="<?=$base;?>/novo" method="post"> 

    <input placeholder="Nome" class="input" type="nome" name="nome" required />

    <input placeholder="E-mail" class="input" type="email" name="email" required/>

    <input placeholder="Telefone" class="input" type="text" name="telefone" id="telefone" required/>

    <input class="button" type="submit" value="Salvar" />
    
</form>

<?php $render('footer') ?>