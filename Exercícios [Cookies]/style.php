<?php
    header("Content-type: text/css");
    if(isset($_COOKIE['corCookie'])) $cor = $_COOKIE['corCookie'];
    else $cor = 'orange';
?>
body{
    margin: 0px;
}
h1{
    margin-top: 30px; 
    color: white; 
    text-align: center; 
    font-family: 'Josefin Sans';
}
#fundo{
    background-color: #2b2b2b;
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center
}
#superficie{
    background-color: rgba(32, 32, 32, 0.404);
    width: 300px;
    height: 370px;
}
#detail{
    width: 100%;
    height: 20px;
    background-color: <?php echo $cor ?>;
}
input{
    border: none;
    margin-left: 10%;
    padding-left: 10%;
    padding-right: 10%;
    width: 60%;
    height: 40px;
    margin-bottom: 15px;
}
#btn{
    font-family: 'Josefin Sans';
    font-weight: 900;
    margin-left: 10%;
    width: 80%;
    background-color: <?php echo $cor ?>;
    border: none;
}
p{
    margin: 0px;
    font-family: 'Josefin Sans';
    text-align: center;
    color: white;
}
span{
    color: <?php echo $cor ?>;
}
select{
    color: black;
    text-align: center;
    font-family: 'Josefin Sans';
    border: none;
    margin-left: 10%;
    padding-left: 10%;
    padding-right: 10%;
    width: 80%;
    height: 40px;
    margin-bottom: 15px;
}
option{
    padding-top: 5px;
    padding-bottom: 5px;
    background-color: rgba(136, 136, 136, 0.466);
}

    