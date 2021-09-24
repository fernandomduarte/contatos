<?php $render('header'); ?>

<h2>Editando contato</h2>
<form action="<?=$base;?>/contato/<?=$contato['id'];?>/editar" method="post">
    <label>
        Nome:
        <input type="text" name="nome" id="nome" value="<?=$contato['nome'];?>">
    </label>

    <label>
        E-mail:
        <input type="email" name="email" id="email" value="<?=$contato['email'];?>">
    </label>

    <label>
        Telefone:
        <input type="tel" name="telefone" id="telefone" value="<?=$contato['telefone'];?>">
    </label>

    <input type="submit" value="Atualizar">
    

</form>

<?php $render('footer') ?>