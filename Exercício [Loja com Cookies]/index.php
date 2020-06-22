<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/style.css">
        <title>SELLALL'ds - Home</title>
    </head>
    <body>

        <div class="custom-container container-fluid">
            <div class="row justify-content-md-center">
                <div class="custom-container col-sm">

                    <!-- 
                        Carousel com Bootstrap
                    -->

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item">
                            <img src="img/EletrosCarrousselTwo.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item active">
                            <img src="img/AirMaxCarroussel.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Mi9Carroussel.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                </div>
              </div>
        </div>

        <!-- 
            Div com a logo da d'SellAll's
        -->

        <div class="d-flex justify-content-center">
            <div class="logoBg">
                <img id="logo" src="img/LogoFinal.png">
            </div>
        </div>

        <!-- 
            Section onde será colocado todos os produtos
        -->

        <section >
            <div class="container customCont mt-4 mb-5">

                <!-- 
                    Formulário post para pegar a preferência
                -->

                <form method="post" action="cookiePref.php">
                    <label>Alguma Preferência?</label><br>
                    <Select name="opcCategoria">
                        <option value="0">Escolha</option>
                        <option value="1">Eletrônicos</option>
                        <option value="2">Eletrodomésticos</option>
                        <option value="3">Livros</option>
                        <option value="4">Papelaria</option>
                    </Select>
                    <input type="submit" value="Aplicar">
                </form>

                <!-- 
                    Em cada div de produtos, será adicionado seus respectivos itens, de acordo com a preferência do Cookie
                -->

                <div id="produtosPart1"></div>
                <div id="produtosPart2"></div>
                <div id="produtosPart3"></div>
                <div id="produtosPart4"></div>
            </div>
        </section>

        <!-- 
            Footer simples
        -->

        <footer>
            <div id="f">
                <div class="container">
                    <div class="row justify-content-sm-center">
                        <div class="col mt-5">
                            <img id="logoFooter" src="img/LogoFinalWhite.png">
                        </div>
                    </div>
                    <div class="row justify-content-sm-center">
                        <div class="col mt-1">
                            <h1 class="text-center txt">David & Samuel</h1>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- 
            Funcionamento do Cookie com PHP e JS
        -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>

            // Dentro de cada variável, haverá o código HTML de cada produto

            // Eletrônicos (Produtos)
            
            var eletronico = `<h1 class="titulo">Eletrônicos</h1>
                    <div class="prods">
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletronicoIphone11Pro.jpg"></div>
                            <div class="desc">
                                <h3>Apple Iphone 11 Pro</h3>
                                <h4>R$9.899,00</h4>
                                <h5>R$7.350,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicosVideosGames" src="img/EletronicoSonyPs4.jpg"></div>
                            <div class="desc">
                                <h3>Sony Playstation 4 Pro</h3>
                                <h4>R$3.299,00</h4>
                                <h5>R$2.200,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletronicoHuaweiP30Pro.jpg"></div>
                            <div class="desc">
                                <h3>Huawei P30 Pro</h3>
                                <h4>R$3.499,00</h4>
                                <h5>R$3.000,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletronicoPcGamerApocalipse.jpg"></div>
                            <div class="desc">
                                <h3>Pc Gamer - Apocalipse</h3>
                                <h4>R$20.500,00</h4>
                                <h5>R$16.750,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletronicoXiaomiMi9.jpg"></div>
                            <div class="desc">
                                <h3>Xiaomi Mi 9</h3>
                                <h4>R$3.600,00</h4>
                                <h5>R$1.899,00</h5>
                            </div>
                        </div>
                        <div class="things"oto">
                            <div class="foto"><img class="prodsEletronicosVideosGames" src="img/EletronicoXboxOneX.jpg"></div>
                            <div class="desc">
                                <h3>Microsoft Xbox One</h3>
                                <h4>R$2.899,00</h4>
                                <h5>R$1.650,00</h5>
                            </div>
                        </div>
                    </div>`

            // Eletrodomésticos (Produtos)

            var eletrodomestico = `<h1 class="titulo">Eletrodomésticos</h1>
                    <div class="prods">
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletrodomesticoElectroluxFornoEletrico.jpg"></div>
                            <div class="desc">
                                <h3>Electrolux Forno Elétrico</h3>
                                <h4>R$269,00</h4>
                                <h5>R$239,99</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicosVideosGames" src="img/EletrodomesticoElectroluxLavaLoucas.jpg"></div>
                            <div class="desc">
                                <h3>Electrolux Lava-Louças</h3>
                                <h4>R$2.299,00</h4>
                                <h5>R$1.720,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletrodomesticoFischerCooktop.jpg"></div>
                            <div class="desc">
                                <h3>Fischer Cook Top</h3>
                                <h4>R$499,99</h4>
                                <h5>R$297,89</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/EletrodomesticoLgGeladeira.png"></div>
                            <div class="desc">
                                <h3>Lg Geladeira Duas Portas</h3>
                                <h4>R$10.900,00</h4>
                                <h5>R$8.650,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicosVideosGames" src="img/EletrodomesticoPanasonicMicroondas.png"></div>
                            <div class="desc">
                                <h3>Panasonic Micro-ondas</h3>
                                <h4>R$600,00</h4>
                                <h5>R$499,00</h5>
                            </div>
                        </div>
                        <div class="things"oto">
                            <div class="foto"><img class="prodsEletronicosVideosGames" src="img/EletrodomesticoPhilipsWalitaLiquidificador.jpg"></div>
                            <div class="desc">
                                <h3>Philips Walita Liquidificador</h3>
                                <h4>R$199,00</h4>
                                <h5>R$139,00</h5>
                            </div>
                        </div>
                    </div>`

            // Livros (Produtos)

            var livro = `<h1 class="titulo">Livros</h1>
                    <div class="prods">
                        <div class="things">
                            <div class="foto"><img class="prodsBooks" src="img/LivroBreakingBad.png"></div>
                            <div class="desc">
                                <h3>Breaking Bad</h3>
                                <h6>David Thomson</h6>
                                <h5>R$59,99</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsBooks" src="img/LivroEmpreendedorismo.jpg"></div>
                            <div class="desc">
                                <h3>Empreendedorismo Consciente</h3>
                                <h6>Rodrigo Caetano</h6>
                                <h5>R$40,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsBooks" src="img/LivroHpPedraFilosofal.png"></div>
                            <div class="desc">
                                <h3>Harry Potter e a Pedra Filosofal</h3>
                                <h6>J. K. Rowling</h6>
                                <h5>R$26,99</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsBooks" src="img/LivroJavaScript.jpg"></div>
                            <div class="desc">
                                <h3>JavaScript: O Guia Definitivo</h3>
                                <h6>David Flanagan</h6>
                                <h5>R$149,00</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsBooks" src="img/LivroOPoderDaAcao.jpg"></div>
                            <div class="desc">
                                <h3>O Poder da Ação</h3>
                                <h6>Paulo Vieira</h6>
                                <h5>R$23,93</h5>
                            </div>
                        </div>
                        <div class="things"oto">
                            <div class="foto"><img class="prodsBooks" src="img/LivroDiarioDeUmBanana.jpg"></div>
                            <div class="desc">
                                <h3>Philips Walita Liquidificador</h3>
                                <h6>Jeff Kinney</h6>
                                <h5>R$39,00</h5>
                            </div>
                        </div>
                    </div>`

            // Papelaria (Produtos)
            
            var papelaria = `<h1 class="titulo">Papelaria</h1>
                    <div class="prods">
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/PapelariaFaberCastellBorrachamano.jpg"></div>
                            <div class="desc">
                                <h3>Faber Castell Borracha</h3>
                                <h4>R$3,99</h4>
                                <h5>R$2,50</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsBooks" src="img/PapelariaFaberCastellLapisDeCorMetalico.jpg"></div>
                            <div class="desc">
                                <h3>Faber Castell Caixa Metálica</h3>
                                <h4>R$11,97</h4>
                                <h5>R$8,50</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/PapelariaFriaECalculista.png"></div>
                            <div class="desc">
                                <h3>Caderno Frio e Calculista (Raro)</h3>
                                <h4>R$89.000,00</h4>
                                <h5>R$50.000,99</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/PapelariaFaberCastellLapisDeCor.jpg"></div>
                            <div class="desc">
                                <h3>Faber Castell Meia Caixa</h3>
                                <h4>R$9,99</h4>
                                <h5>R$6,50</h5>
                            </div>
                        </div>
                        <div class="things">
                            <div class="foto"><img class="prodsEletronicos" src="img/PapelariaCartolina.jpg"></div>
                            <div class="desc">
                                <h3>Cartolina</h3>
                                <h4>Desconto em cartolina é sacanagem</h4>
                                <h5>R$0,40</h5>
                            </div>
                        </div>
                        <div class="things"oto">
                            <div class="foto"><img class="prodsEletronicos" src="img/PapelariaBreakingBad.jpg"></div>
                            <div class="desc">
                                <h3>Caderno Breaking Bad</h3>
                                <h4>R$14,99</h4>
                                <h5>R$10,00</h5>
                            </div>
                        </div>
                    </div>`

            function catSet(opcao){
                switch(opcao){
                    case 0:
                        $('#produtosPart1').html(eletronico)
                        $('#produtosPart2').html(eletrodomestico)
                        $('#produtosPart3').html(livro)
                        $('#produtosPart4').html(papelaria)
                        break     
                    case 1:
                        $('#produtosPart1').html(eletronico)
                        $('#produtosPart2').html(eletrodomestico)
                        $('#produtosLivro').html(livro)
                        $('#produtosPapelaria').html(papelaria)
                        break
                    case 2:
                        $('#produtosPart1').html(eletrodomestico)
                        $('#produtosPart2').html(papelaria)
                        $('#produtosPart3').html(livro)
                        $('#produtosPart4').html(eletronico)
                        break
                    case 3:
                        $('#produtosPart1').html(livro)
                        $('#produtosPart2').html(eletronico)
                        $('#produtosPart3').html(papelaria)
                        $('#produtosPart4').html(eletrodomestico)
                        break
                    case 4:
                        $('#produtosPart1').html(papelaria)
                        $('#produtosPart2').html(eletrodomestico)
                        $('#produtosPart3').html(eletronico)
                        $('#produtosPart4').html(livro)
                        break
                }
            }
        </script>

        <?php
            if(isset($_COOKIE['idCategoria'])){
                if($_COOKIE['idCategoria'] == 1) echo('<script>catSet(1)</script>');
                else if($_COOKIE['idCategoria'] == 2) echo('<script>catSet(2)</script>');
                else if($_COOKIE['idCategoria'] == 3) echo('<script>catSet(3)</script>');
                else if($_COOKIE['idCategoria'] == 4) echo('<script>catSet(4)</script>');
                else if($_COOKIE['idCategoria'] == 0) echo('<script>catSet(0)</script>');
            }else{
                echo('<script>catSet(0)</script>');
            }
        ?>

        <!-- 
            Scripts necessários para o funcionamento do Bootstrap, e Slick.js
        -->

        <script src="js/jQuery.js"></script>
        <script src="js/Popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.js"></script>

        <!-- 
            Configurações dos sliders de produtos, com um script
        -->

        <script type="text/javascript">
            $(document).ready(function(){
                $('.prods').slick({
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    pauseOnDotsHover: false,
                    pauseOnHover: false,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    infinite: true,
                    centerMode: true
                })
            })
        </script>

    </body>
</html>