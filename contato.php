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
            <div class="form-container">
                <form class="form" action="#" method="post">
                    <div class="inputsLeft">
                        <div class="inputs">
                            <label for="nome">Nome:</label>
                            <input placeholder="Seu nome" class="input" type="text">
                        </div>
                        <div class="inputs">
                            <label for="email">Email:</label>
                            <input placeholder="Exemplo@gmail.com" class="input" type="email">
                        </div>
                        <div class="inputs">
                            <label for="tel">Telefone:</label>
                            <input placeholder="(xx) xxxxx-xxxx" class="input" type="tel">
                        </div>
                        <div class="inputs">
                            <label for="subject">Assunto:</label>
                            <input placeholder="Sobre o que voce quer falar?" class="input" type="text">
                        </div>
                    </div>
                    <div class="inputsRight">
                        <textarea cols="12" rows="12" id="textArea" placeholder="Escreva aqui..."></textarea>
                    </div>
                </form>
                <div class="submit">
                    <input type="submit" value="Enviar" id="submit">
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once "components/footer.php"
        ?>
</body>

</html>