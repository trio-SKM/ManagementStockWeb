<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show facture</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <label for="nb_clients"> Nombre de clients</label>
    <input type="text" id="nb_clients" readonly value="{{ $nb_clients }}"><br>
    <label for="nb_fournisseurs">Nombre des fournisseurs</label>
    <input type="text" id="nb_fournisseurs" readonly value="{{ $nb_fournisseurs }}"><br>
    <label for="gains">Les gains</label>
    <input type="text" id="gains" readonly value="{{ $gains }}"><br>
    <label for="credit">Credit</label>
    <input type="text" id="credit" readonly value="{{ $credit }}"><br>
    <label for="dette">Dette</label>
    <input type="text" id="dette" readonly value="{{ $dette }}"><br>
    <label for="nb_clients_with_credit">Nombre des clients ayant des credits</label>
    <input type="text" id="nb_clients_with_credit" readonly value="{{ $nb_clients_with_credit }}"><br>
    <label for="nb_fournisseurs_with_dette">Nombre des fournisseurs ayant dettes</label>
    <input type="text" id="nb_fournisseurs_with_dette" readonly value="{{ $nb_fournisseurs_with_dette }}"><br>

</body>

</html>
