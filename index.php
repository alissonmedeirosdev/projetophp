<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8ec8fcb30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="static/styles/style.css">
    <title>Projeto PHP</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="logo left">
                LOGOMARCA
            </div>
    
            <!-- navegação desktop -->
            <nav class="desktop right">
                <ul>
                    <li>Home</li>
                    <li>Sobre</li>
                    <li>Serviços</li>
                    <li>Contatos</li>
                </ul>
            </nav>
    
            <!-- navegação mobile -->
            <nav class="mobile right">
                <ul>
                    <li>Home</li>
                    <li>Sobre</li>
                    <li>Serviços</li>
                    <li>Contatos</li>
                </ul>
            </nav>

            <div class="clear"></div>
        </div>
    </header>

    <!-- banner principal -->
    <section class="banner-principal">
        <div class="container">
            <form action="">
                <h2>Qual o seu melhor email?</h2>
                <input type="email" name="email" placeholder="exemple@gmail.com" required >
                <input type="submit" name="acao" value="cadastrar">
            </form>
        </div>
    </section>

    <!-- description -->
    <section class="descricao-autor">
        <div class="container">
            <div class="w50 left">
                <h2 class="title">Sobre</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est adipisci debitis qui nulla odit rem similique, velit, voluptas animi, molestias rerum perferendis quam aliquid quaerat libero dolores corrupti molestiae unde!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, odio velit? Sint magni autem, praesentium est saepe amet, doloremque at quisquam eius aliquid quasi quas odio ipsam earum officia totam.</p>
            </div>
            <div class="container-image w50 left">
                 <img src="static/img/avatar-image.png" alt="">
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <!-- servicos -->
    <section class="especialidades">
        <div class="container">
            <h2 class="title">Especialidades</h2>
            <div class="especialidades-wrapper">
                <div class="box-especialidade w33 left">
                    <i class="fa-brands fa-html5"></i>
                    <h3 class="title">HTML</h3>
                    <p class="box-especialidade-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis odit quia. Qui architecto iusto consectetur optio, facere earum vitae assumenda dolorem. Unde, eaque neque illum consequatur quos libero reprehenderit!
                    </p>
                </div>

                <div class="box-especialidade w33 left">
                    <i class="fa-brands fa-css3"></i>
                    <h3 class="title">CSS</h3>
                    <p class="box-especialidade-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis odit quia. Qui architecto iusto consectetur optio, facere earum vitae assumenda dolorem. Unde, eaque neque illum consequatur quos libero reprehenderit!
                    </p>
                </div>

                <div class="box-especialidade w33 left">
                    <i class="fa-brands fa-js"></i>
                    <h3 class="title">JAVASCRIPT</h3>
                    <p class="box-especialidade-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis odit quia. Qui architecto iusto consectetur optio, facere earum vitae assumenda dolorem. Unde, eaque neque illum consequatur quos libero reprehenderit!
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <!-- extras -->
     <section class="extras">
        <div class="container">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>

                <div class="depoimentos-wrapper">
                    <div class="depoimentos-single">
                        <p class="depoimentos-descicao">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur atque perferendis quo nesciunt provident, nostrum voluptatibus maiores at doloremque illum dolorem error delectus ipsum repellat tenetur natus modi libero.
                        </p>
                    </div>
                
                    <div class="depoimentos-single">
                        <p class="depoimentos-descicao">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur atque perferendis quo nesciunt provident, nostrum voluptatibus maiores at doloremque illum dolorem error delectus ipsum repellat tenetur natus modi libero.
                        </p>
                    </div>

                    <div class="depoimentos-single">
                        <p class="depoimentos-descicao">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur atque perferendis quo nesciunt provident, nostrum voluptatibus maiores at doloremque illum dolorem error delectus ipsum repellat tenetur natus modi libero.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, vel atque doloribus non iure hic illo corrupti ea fuga similique, sequi voluptates aliquid animi, inventore quod veritatis dignissimos! Consequuntur, cum.</li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, vel atque doloribus non iure hic illo corrupti ea fuga similique, sequi voluptates aliquid animi, inventore quod veritatis dignissimos! Consequuntur, cum.</li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, vel atque doloribus non iure hic illo corrupti ea fuga similique, sequi voluptates aliquid animi, inventore quod veritatis dignissimos! Consequuntur, cum.</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
     </section>

     <!-- Rodapé -->
      <footer>
        <div class="container">     
            <p>Todos os direitos resevados</p>
        </div>
      </footer>
</body>
</html>