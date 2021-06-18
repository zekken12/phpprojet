<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(isset($_SESSION['nb']))
    $_SESSION['nb'] = $_SESSION['nb'] +1;
else {
    $_SESSION['nb']=0;
    $_SESSION['login'] = "";
    $_SESSION['password']="";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <center>
        <form action="verif_login.php" method="POST" name="formulaire">
         <label for="idlogin">Email :</label>
            <input type='text' name='login' id='idlogin' /> <br />
            <label for="idpw">Mot de passe :</label>
            <input type='password' name='motpasse' id='idpw' /> <br/>
            <input type='submit' name="envoyer" value="envoyer" /> <br/> 
            <br/>

            <?php
            if(isset($_GET['message'])&&$_GET['message']=='faux'){
                echo "<p style='color:red'>Login est incorrect</p>";
            }
            ?>
            <br/>
            Vous avez essayé <?php echo $_SESSION['nb']; ?> fois. <br/>
            <?php 
            if($_SESSION['login'] !="" && $_SESSION['password'] !=""){
                echo "<br />";
                 echo "le login essayé est :  " .  "  ". $_SESSION['login'] . "<br/>";
                echo "le mot de passe essayé est :" . $_SESSION['password']; 
                echo "<br />";
            }
            ?>
        </form>
    </center>
    </body>
</html>