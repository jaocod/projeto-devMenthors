<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <title>Contate conosco</title>
</head>
<body>
    <?php
        require_once "components/navbar.php"
    ?>
    <main>
        <div class="container">
            <div class="title-form">
                    <h1>Entre em Contato</h1>
                    <h2>Estamos aqui para ajudar! Entre em contato conosco</h2>
                </div>
                <form class="form-container" action="#" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text">
                    <label for="email">Email:</label>
                    <input type="email" name="" id="">
                    <label for="password">Senha:</label>
                    <input type="password" name="" id="">
                </form>
        </div>
    </main>
    <?php
        require_once "components/footer.php"
    ?>
</body>
</html>