<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>expertbi.com</title>
    <style>
        * {
            color: white;
        }

        .container {
            margin: auto;
            width: 80%;
            padding: 10px;
            text-transform: lowercase;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            letter-spacing: 1.2px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
            background-color: rgb(112, 105, 105);
            font-size: 16px;
            border-radius: 10px;
        }

        .header {
            padding: 10px;
            background-color: rgb(48, 48, 196);
            text-align: center;
            font-weight: 800;
            border-radius: 15px;
            color: white;
            font-family: serif;
            font-size: 22px;
        }

        .logo {
            margin: auto;
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .phone,
        a {
            border-radius: 10px;
            padding: 6px;
            background-color: rgba(44, 120, 21, 0.498);
            color: white;
            text-decoration: none;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="logo" src="{{ asset('img/logo/logo.png') }}">



        <div class="header">
            <p>
                Nouveau message.
            </p>
        </div>

        <p>
            Bonjour, nouveau message de : {{ $messageData['nom'] }} envoyé depuis le site web.
        </p>
        <br>
        <p>Son numero de téléphone : {{ $messageData['telephone'] }}.</p>
        <br>
        <p>Son email : {{ $messageData['email'] }}.</p>
        <br>
        <p><strong>Son message : {{ $messageData['message'] }}.</strong></p>
        <br>
        <p>De la part de l'equipe <em>Expert BI-SARL</em> </p>
        <br>
        <p>Bamako, le {{ (new \DateTime())->format('d-m-Y H:i:s') }}</p>

    </div>

</body>

</html>
