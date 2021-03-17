<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css" type="text/css"/>
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        
        <title>Seja bem-vindo(a) | MVE</title>
    </head>
    <body id="bodyWelcome">
        <?php include_once("sessionVerify.php"); ?>
        <div id="imgWelcome">
            <div class="navbar">

                <img class="iconNav" src="../icons/icon1Color.png">

                <nav>
                    <ul>
                        <li><a href="../logout.php" class="link">Sair</a></li>
                        <li><a href="registerWorkOfArt.php" class="link">Cadastrar obra</a></li>
                        <li><a href="registerAuthor.php" class="link">Cadastrar autor</a></li>
                    </ul>
                </nav> 

            </div>
            <h1 class="txtWelcomeBg">Seja bem vindo, <?php echo ucfirst($_SESSION['usernameSession']); ?>!</h1>
            <br>
            <p class="txtWelcome">Aqui você encontrará algumas exposições. Aproveite a estadia.</p>
        </div>

        <div id="bgInfo">
            <div class="iconCenter"><img src="../icons/icon2.png"></div>
            <p id="desc"> Participe conosco dessa jornada com uma viagem explorando <br>
                toda a nossa história intergalática, podendo saber de tudo por trás <br>
                de grandes marcos da nossa história com imagens exclusivas!</p>
        </div>

        <!-- Seção obras -->

        <?php  

            try{


            }catch(Exception $e){
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>

        <section>
            <?php
                require_once '../global.php';
                require_once '../classes/WorkOfArt.php';
                require_once '../classes/Image.php';
                $cont = 0;
                $art = new WorkOfArt(null, null, null, null, null);
                $arts = $art->getArts();
                foreach($arts as $art){
                    $first = true;
                    $infos = new WorkOfArt(null, null, null, null, null);
                    $image = new Image(null, null, null);
                    $images = $image->getImages($art['codArt']);
                    if($cont > 0){
            ?>
            <hr class="linha">
            <?php
                }
                if($cont % 2 == 0){      
            ?>

            <!-- Pic on the left -->

            <div class="helperFst">
                <div class="pic">
                    <div id='even<?php echo $cont?>' class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <?php    
                                foreach($images as $image){
                                    if($first){  
                                        $first = false;
                            ?>
                            <div class="carousel-item active">
                                <img src='../RestrictArea/<?php echo $image['pathImage']; ?>' class="d-block w-100" alt="...">
                            </div>
                            <?php 
                                } else { 
                            ?>
                            <div class="carousel-item">
                                <img src='../RestrictArea/<?php echo $image['pathImage']; ?>' class="d-block w-100" alt="...">
                            </div>
                            <?php 
                                    }
                                } 
                            ?>
                        </div>
                        <?php
                            if(sizeof($images) > 1) {
                        ?>
                        <a class="carousel-control-prev" href='#even<?php echo $cont?>' role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href='#even<?php echo $cont?>' role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="auxDiv">
                    <div class="content">
                        <h4 class="autor-nome"><?php echo($infos->getAuthor($art['codArt'])[0][0]); ?></h4>
                        <h4 class="autor-category">Categoria: <?php echo($infos->getCategory($art['codArt'])[0][0]); ?></h4>
                        <h4 class="date"><?php echo ($infos->getPeriod($art['codArt'])[0][0]); ?></h4>
                        <h3 class="title"><?php echo $art['titleArt']; ?></h3>
                        <p class="textFst"><?php echo $art['descArt']; ?></p>
                    </div>
                </div>
            </div>

            <?php } else { ?>

            <!-- Pic on the right -->

            <div class="helperScd">
                <div class="auxDiv">
                    <div class="content">
                        <h4 class="autor-nomel"><?php echo $infos->getAuthor($art['codArt'])[0][0]; ?></h4>
                        <h4 class="autor-categoryl">Categoria: <?php echo $infos->getCategory($art['codArt'])[0][0]; ?></h4>
                        <h4 class="datel"><?php echo $infos->getPeriod($art['codArt'])[0][0]; ?></h4>
                        <h3 class="titlel"><?php echo $art['titleArt']; ?></h3>
                        <p class="textScdl"><?php echo $art['descArt']; ?></p>
                    </div>
                </div>

                <div class="pic">
                    <div id='odd<?php echo $cont?>' class="carousel slide" data-ride="carousel">
                    
                        <div class="carousel-inner">
                            <?php    
                                foreach($images as $image){
                                    if($first){  
                                        $first = false;
                            ?>
                            <div class="carousel-item active">
                                <img src='../RestrictArea/<?php echo $image['pathImage']; ?>' class="d-block w-100" alt="...">
                            </div>
                            <?php 
                                } else { 
                            ?>
                            <div class="carousel-item">
                                <img src='../RestrictArea/<?php echo $image['pathImage']; ?>' class="d-block w-100" alt="...">
                            </div>
                            <?php 
                                    }
                                } 
                            ?>
                        </div>
                        <?php
                            if(sizeof($images) > 1) {
                        ?>
                        <a class="carousel-control-prev" href='#odd<?php echo $cont?>' role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href='#odd<?php echo $cont?>' role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>

            <?php 
                    } 
                $cont++;
            } 
            ?>
        </section>


        <footer>
            <div id="iconFooter">
                <img src="../icons/icon1Color.png">
            </div>
        </footer>

        <script src="../js/jQuery.js"></script>
        <script src="../js/Popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>