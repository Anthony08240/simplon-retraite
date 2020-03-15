<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>contact</title>
</head>
<body>
    <div class="backform">
<form class="formulaire" method="post">
    <div class="form">
    <div class="name">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">Mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
</div>
</form>
<div class="form1">
<form class="message" method="post">
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</div>
</form>
<div class="button">
        <button type="submit">Envoyer</button>
    </div>
</div>
</body>
</html>