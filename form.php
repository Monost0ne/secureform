<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
    <form  action="/thanks.php"  method="post">
        <div>
            <label  for="prenom">Prenom :</label>
            <input  type="text"  id="prenom"  name="user_firstName" minlength="3" maxlength="12">
        </div>
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastName">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="phone">Telephone :</label>
            <input  type="tel"  id="phone"  name="user_phone">
        </div>
        <div>
            <label  for="subject">Votre sujet :</label>
            <select id="subject"  name="user_subject">
                <option value="">Please select a subject</option>
                <option value="Demande">Demande</option>
                <option value="Request">Request</option>
                <option value="Option">Option</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</main>
</body>
</html>