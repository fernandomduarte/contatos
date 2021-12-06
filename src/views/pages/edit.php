<?php $render('header'); ?>

<form action="<?=$base;?>/contato/<?=$contato['id'];?>/editar" method="post">

    <input value="<?=$contato['nome'];?>" class="input" type="text" name="nome" required />

    <input value="<?=$contato['email'];?>" class="input" type="email" name="email" required />

    <input value="<?=$contato['telefone'];?>" class="input" type="text" name="telefone" id="telefone" required/>

    <input class="button" type="submit" value="Atualizar" />

</form>

<?php $render('footer') ?>