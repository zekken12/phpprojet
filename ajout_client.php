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
<body>
<center>
    <form action="produit.php" method="POST" name="formu">
      	<fieldset>
        <legend>Ajouter un client</legend>
      	<label for="nom">Nom : </label>
        <input type="text" id=Nom name="nom" required placeholder=""><br/>
        <br>
      	<label for="prenom">Prénom : </label>
        <input type="text" id="Prenom" name="prenom" required placeholder=""><br/>
        <br>
        <label for="libelle">age : </label>
        <input type="text" id="age" name="age" required placeholder=""><br/>
        <br>
      	<label for="marque">adresse : </label>
      	<input type="text" id="adresse" name="adresse" required placeholder=""><br/>
        <br>
        <label for="adress_mail">Email : </label>
        <input type="text" id="adresse_mail" name="adresse_mail" required placeholder="example@mail.com"><br/>
        <br>
        <label for="password_client">Mot de passe : </label>
        <input type="text" id="password_client" name="password_client" required placeholder=""><br/>
        <br>
      	<input type="submit" name ="ajoutProduit" value="Ajouter ce client">
        
      	</fieldset>
      </form>
</center>
</body>
</html>               
        <?php
        include('fonctions2.php');
        $connect = connexion();
if (isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["age"]) && isset($_POST["adresse"]) && isset($_POST["adresse_mail"]) && isset($_POST["password_client"])){                               
    
    
    ajoutClient($_POST["Nom"],$_POST["Prenom"],$_POST["age"],$_POST["adresse"],$_POST["adresse_mail"],$_POST["password_client"]);
}
        
        ?>
        
        
        
        </table>

    </body>
</html>