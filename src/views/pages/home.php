<?php $render('header'); ?>

<button class="btn btn-primary" type="button" onclick="location.href='<?=$base;?>/novo'">Novo contato</button><br><br/>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($contatos as $contato): ?>
        <tr>
            <td><?=$contato['id'];?></td>
            <td><?=$contato['nome'];?></td>
            <td><?=$contato['email'];?></td>
            <td><?=$contato['telefone'];?></td>
            <td>
                <a href="<?=$base;?>/contato/<?=$contato['id'];?>/editar">
                    <img src="<?=$base;?>/assets/images/edit1.png" alt="editar">
                </a>

                <a href="<?=$base;?>/contato/<?=$contato['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir esse contato?');">
                    <img src="<?=$base;?>/assets/images/trash.png" alt="deletar">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>


<?php $render('footer'); ?>