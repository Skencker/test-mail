<?php
$emailTo = "sandrinekencker@hotmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email'])){
        $email = veryInput($_POST["email"]);
        $messageMerci = '<p> Merci, vous recevrez des informations très bientôt </p> ' ;;
    
        if ($messageMerci) {
            //envoi de l'email
            $message = "From: {$email} \r\nReplay-To: {$email}";
            mail($emailTo, "Un message de votre site : ", $message, "" );
          }
    }
}

//fonction pour verifier l'input 
function veryInput ($var) {
    $var = trim($var); //enlever espace etc....
    $var = stripslashes($var); //enlever les \
    $var = htmlspecialchars($var); //enlever le code html etc
    return $var;
  };
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LE PATION NUMERIQUE .COM</title>
    <link rel="shortcut icon" href="favicon-patio.com.png"/>
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>

<div class="col-12 col-sm-9 col-lg-5 p-0">
    <form method="POST">
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Votre email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button type="submit" class="btn-yellow" id="basic-addon2">OK</span>
        </div>
    </form>
    <span>
        <?php
        echo $messageMerci;
        ?>
    </span>
</div>