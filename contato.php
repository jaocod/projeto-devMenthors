<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <title>Contate conosco</title>
</head>

<body>
    <?php require_once "components/navbar.php" ?>
    <main>
        <div class="container">
            <div class="title-form">
                <h1>Entre em Contato</h1>
                <h2>Estamos aqui para ajudar! Entre em contato conosco</h2>
                <span 
                    class="
                        <?php isset($_GET['send']) ? print $_GET['send'] : ''
                    ?>">
                    <?php isset($_GET['send']) ? print $_GET['send'] : ''?>
                </span>
            </div>
            <div class="form-container">
                <form class="form" action="enviar_email.php" method="POST">
                    <div class="inputsLeft">
                        <div class="inputs">
                            <label for="nome">Nome:</label>
                            <input placeholder="Seu nome" class="input" type="text" name="input_name">
                        </div>
                        <div class="inputs">
                            <label for="email">Email:</label>
                            <input placeholder="Exemplo@gmail.com" class="input" type="email" name="input_email">
                        </div>
                        <div class="inputs">
                            <label for="tel">Telefone:</label>
                            <input placeholder="(xx) xxxxx-xxxx" class="input" type="tel" name="input_tel">
                        </div>
                        <div class="inputs">
                            <label for="subject">Assunto:</label>
                            <input placeholder="Sobre o que voce quer falar?" class="input" type="text" name="input_text">
                        </div>
                    </div>
                    <div class="inputsRight">
                        <textarea cols="12" rows="12" id="textArea" placeholder="Escreva aqui..."></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Enviar" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    require_once "components/footer.php"
        ?>
</body>

</html>