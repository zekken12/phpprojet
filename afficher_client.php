<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice PHP</title>
        <style type ="texte/css">
            td, th {
                width : 100px;
                text-align: center;
                border: 1px solid black;
            }
            </style>
    </head>
</html>               
        <?php
        include('afficher_client.php');
        $connect = connexion();
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["age"]) && isset($_POST["mail"]) && isset($_POST["mdp"])){                               
    
    
    ajoutUsers($_POST["nom"],$_POST["prenom"],$_POST["adresse"],$_POST["age"],$_POST["mail"],$_POST["mdp"]);
}
        
        ?>
        
        
        
        </table>

    </body>
</html>
<body>
<center>
    <form action="ajout_client.php" method="POST" name="formu">
      	<fieldset>
        <legend>Ajouter un client</legend>
      	<label for="nom">Nom*</label>
        <input type="text" id=nom name="nom" required placeholder=""><br/>
        <br>
        
      	<label for="prenom">Prénom* </label>
        <input type="text" id="auteur" name="prenom" required placeholder=""><br/>
        <br>
        <label for="adresse">Adresse* </label>
        <input type="text" id="adresse" name="adresse" required placeholder=""><br/>
        <br>
      	<label for="age">Date de naissance*</label>
      	<input type="date" id="age" name="age" required placeholder="DD/MM/YYYY"><br/>
        <br>
        <label for="mail">Mail :  </label>
        <input type="email" id="mail" name="mail" required autofocus><br/>
        <br>
        <label for="mdp">Mot de passe :  </label>
        <input type="password" id="mdp" name="mdp" required autofocus><br/>
        <br>
      	<input type="submit" name ="AjouteUsers" value="Ajouter">
        
      	</fieldset>
      </form>
</center>
</body>
