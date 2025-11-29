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
                <span class="
                        <?php isset($_GET['send']) ? print $_GET['send'] : ''
                            ?>">
                    <?php isset($_GET['send']) ? print $_GET['send'] : '' ?>
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
                            <input placeholder="Exemplo@exemplo.com" class="input" type="email" name="input_email">
                        </div>
                        <div class="inputs">
                            <label for="tel">Telefone:</label>
                            <input placeholder="(xx) xxxxx-xxxx" class="input" type="tel" name="input_tel">
                        </div>
                        <div class="inputs">
                            <label for="subject">Assunto:</label>
                            <input placeholder="Sobre o que voce quer falar?" class="input" type="text"
                                name="input_text">
                        </div>
                    </div>
                    <div class="inputsRight">
                        <div class="inputTextArea">
                            <textarea cols="12" rows="12" id="textArea" placeholder="Escreva aqui..."></textarea>
                        </div>
                        <div class="submit">
                            <button type="submit" id="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="division">.</div>
            <div class="localization">
                <div class="textMap">
                    <p>Venha ver onde estamos</p>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.609341721584!2d-49.9426354!3d-22.2169479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd73764e56059%3A0xaf150ea918c3d52d!2sassocia%C3%A7%C3%A3o%20dos%20amigos%20solidarios%20de%20marilia%20-AMIGOS%20DO%20BAR!5e0!3m2!1spt-BR!2sbr!4v1764420934520!5m2!1spt-BR!2sbr"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once "components/footer.php"
        ?>
</body>

</html>