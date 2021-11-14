<?php $render('header'); ?>

<form action="<?=$base;?>/contato/<?=$contato['id'];?>/editar" method="post">

    <input value="<?=$contato['nome'];?>" class="input" type="text" name="nome" />

    <input value="<?=$contato['email'];?>" class="input" type="email" name="email" />

    <input value="<?=$contato['telefone'];?>" class="input" type="text" name="telefone" />

    <input class="button" type="submit" value="Atualizar" />

</form>

<?php $render('footer') ?>