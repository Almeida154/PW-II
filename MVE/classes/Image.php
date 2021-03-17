<?php

    class Image{

        // Attributes

        private $codImage;
        private $descImage;
        private $pathImage;
        private $nameImage;
        private $codWorkOfArt;

        // Constructor

        function __construct($descImage, $pathImage, $codWorkOfArt){
            $this->setDescImage($descImage);
            $this->setPathImage($pathImage);
            $this->setCodWorkOfArt($codWorkOfArt);
        }

        // Methods

        public function insertDB($image){
            require_once 'Connection.php';

            $datas = array($image->getDescImage(), $image->getPathImage(), $image->getCodWorkOfArt());

            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO tbImage(descImage, pathImage, codArt)
                                                                        VALUES(?, ?, ?)");
            $statement->bindParam(1, $datas[0]);
            $statement->bindParam(2, $datas[1]);
            $statement->bindParam(3, $datas[2]);
            $statement->execute();
        }

        public function getImages($codArt){
            require_once 'Connection.php';
            $connection = Connection::getConnection();
            $querySelect = "SELECT * FROM tbimage WHERE codArt = $codArt";

            $result = $connection->query($querySelect);
            return $result->fetchAll();
        }


        // Getters

        public function getCodImage(){
            return $this->codAuthor;
        }

        public function getDescImage(){
            return $this->descImage;
        }

        public function getPathImage(){
            return $this->pathImage;
        }

        public function getNameImage(){
            return $this->nameImage();
        }

        public function getCodWorkOfArt(){
            return $this->codWorkOfArt;
        }

        // Setters

        public function setCodImage($codImage){
            $this->codImage = $codImage;
        }

        public function setDescImage($descImage){
            $this->descImage = $descImage;
        }

        public function setPathImage($pathImage){
            $this->pathImage = $pathImage;
        }

        public function setNameImage($nameImage){
            $this->nameImage = $nameImage;
        }

        public function setCodWorkOfArt($codWorkOfArt){
            $this->codWorkOfArt = $codWorkOfArt;
        }

    }

?>