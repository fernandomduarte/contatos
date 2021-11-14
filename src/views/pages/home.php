<?php $render('header'); ?>

<section class="container main">
    <table class="table table-striped">
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
                <td class="acoes">
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
</section>


<?php $render('footer'); ?>