<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
		<form action="/page_contact" method="POST">
			<fieldset> 
                <legend>Remplissez les champs </legend>
                <label>Prénom: <input type="text" name="prenom" /></label><br>
                <label>Nom: <input type="text" name="nom" /></label><br>
                <label>Date de naissance: <input type="date" name="date_naissance" min="1900-01-01" max="2020-12-31"></label><br>
                <label>Adresse Mail: <input type="email" name="email" /></label><br>
                <label>Mot de passe: <input type="password" name="mot_de_passe" /></label><br>
                <label>Téléphone: <input type="tel" name="telephone" pattern="[0-9]{10}"/></label><br>
                <label>Gender: <br>
                    <input type="radio" name="gender" value="femme">Femme<br>
                    <input type="radio" name="gender" value="homme">Homme
                </label><br>
				<input type="submit" value="confirmer">
			</fieldset>
		</form>
</body>
</html>