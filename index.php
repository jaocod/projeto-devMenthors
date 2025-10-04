<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto DevMenthors</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require_once "components/navbar.php";
    ?>
    <div class="banner">    
        <div class="banner-div">
            <div class="banner-title">
                <!-- <h1>Associação<br>Amigos do<br>Bar</h1>
            </div>
            <div class="banner-text">
                <h3>Doando doses de soliedariredade</h3> -->
            </div>
        </div>
        
    </div>

    <hr>

    <div class="container">
        <div class="title">
            <h1>Sobre Nossa Associação</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dolorem modi ipsam facere cumque? <br> Porro, ullam iusto sapiente officiis saepe id fuga corrupti recusandae expedita illum, magni fugiat, voluptatem quam?</p>
        </div>

        <div class="info">
            <div class="div-img">
                <img src="assets/values.svg" alt="">
            </div>

            <div class="text">
                <h2>Nossa Missão</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur sunt voluptates doloribus? Magni eos.</p>  
    
                <h2>Nossos Valores</h2>
                <div>
                    <div class="left">
                        <h3>Nossa Missão</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        
                        <h3>Nossa Missão</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>    
                    </div>
                    <div class="right">
                        <h3>Nossa Missão</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        
                        <h3>Nossa Missão</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>    
                    </div>
                </div>

            </div>     
        </div>
    </div>

    <?php
        require_once "components/footer.php"
    ?>

</body>
</html>