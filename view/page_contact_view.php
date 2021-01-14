<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Information Personnel</title>
    </head>
    <body>
        <h1>Page Profil</h1>
        <p>Bienvenue <strong><?php echo htmlspecialchars($_POST['prenom'])." ".htmlspecialchars($_POST['nom']);?></strong></p>
        <p> Vos coordonnée sont: </p>
            <ul>
                <li><i>Adresse mail: </i><?php echo $_POST['email'];?></li>
                <li><i>Téléphone: </i><?php echo $_POST['telephone'];?></li>
                <li><i>Mot de passe: </i><?php echo password_hash ( $_POST['mot_de_passe'], PASSWORD_DEFAULT);?></li>
            </ul>
        <p> Vous êtes né le <?php echo $_POST['date_naissance'];?></p>
        <p> Vous êtes <?php echo $_POST['gender'];?></p>
        <p><strong>Merci pour votre inscription</strong></p>
    </body>
</html>