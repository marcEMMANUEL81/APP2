<html lang="en">
<head>
    <link rel="stylesheet" href="logIn.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p class="success">
        <?= $_GET['success'] ?>
    </p>

    <div class="page">
        <!--img class="img" src="assets/fond.png" alt=""-->
        
        <div class="main">
            <p class="Title">Inscription</p>
            <form method="POST" action="database.php">
                <div class="class1">
                    <input class="nom" name="userName" type="text" placeholder="Nom" >
                    <input class="prenom" name="userSurname" type="text" placeholder="Prénom" >
                </div>
                <input class="mail" name="userMail" type="text" placeholder="E-mail" >
                <div class="class2">
                    <input class="Password" name="userPassword" type="password" placeholder="Mot de passe">
                    <input class="cell" name="userCell" type="text" placeholder="Téléphone">
                </div>
                <p>
                    <label class="forme_texte" for="choose_country">Choisissez le pays dans lequel vous résidez</label> <br>
                    <select class="selection" name="hospital" id="choose_country">
                        <option value="..."></option>
                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Burkina">Burkina</option>    
                        <option value="Togo">Togo</option>
                        <option value="Mali">Mali</option>
                        <option value="Benin">Benin</option>
                        <option value="Tchad">Tchad</option>
                    </select>
                </p>
                <div class="class3">
                    <input class="code" name="userName" type="text" placeholder="Code Postal" >
                    <input class="ville" name="userSurname" type="text" placeholder="Ville" >
                </div>
                <button class="btn" type="submit">Valider</button>
            </form>
        </div>
    </div>
    
</body>
</html>