<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include_once('header.php'); ?>
    <div class="container">

        <h1>Toujours pas inscrit(e) ? C'est juste en-dessous !</h1>

            <input type="radio" name="sexe" value="female"> Femme
            <input type="radio" name="sexe" value="male"> Homme
            <input type="radio" name="sexe" value="other" checked> Autre
             <br>
            <p>Nom</p>
            <input type="text" name="lastname">
            <br>
            <p>Prénom</p>
            <input type="text" name="firstname">
            <br>
            <p>E-mail</p>
            <input type="text" name="mail">
            <br>
            <p>Mot de passe</p>
            <input type="password" name="password">
            <br>
            <p>Confirmation du mot de passe</p>
            <input type="text" name="passwordConfirm">
            <br>
            <br>
            <input style="height: 40px; width: 100px; background-color:#f78fb3; font-weight: bold; border-color: black;" type="submit" value="S'inscrire" >
        </form>
        <br />
    </div>
    <?php include_once('footer.php'); ?>
</body>
</html>