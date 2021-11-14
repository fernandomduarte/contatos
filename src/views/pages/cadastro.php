<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base; ?>/assets/css/login.css" />
</head>
<body>
    
    <section class="container main">
        <form method="POST">

            <!--Caso ocorra algum erro ao digitar os dados, a respectiva mensagem aparecerá aqui -->
            <?php if(!empty($flash)): ?>
                    <div class="flash"><?php echo $flash; ?></div>
            <?php endif; ?>

            <input placeholder="Digite seu nome de usuário" class="input" type="text" name="nome" />

            <input placeholder="Digite seu email" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="senha" />

            <input class="button" type="submit" value="Cadastrar" />

            <a href="<?=$base; ?>/login">Já tem conta? Entrar</a>
        </form>
    </section>
</body>
</html>