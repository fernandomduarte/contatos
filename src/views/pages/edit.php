<?php $render('header'); ?>

<form action="<?=$base;?>/contato/<?=$contato['id'];?>/editar" method="post">
    
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control form-control-lg"  value="<?=$contato['nome'];?>">
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg" value="<?=$contato['email'];?>">
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" class="form-control form-control-lg" value="<?=$contato['telefone'];?>">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-lg" type="submit">Atualizar</button>
    </div>
    

</form>

<?php $render('footer') ?>