<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit devie</title>
</head>

<body>
    <form action="{{ route('devie.update', ['devie' => $devie->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="devie_num">Num devie</label>
        <input type="text" id="devie_num" name="devie_num" value="{{ old('devie_num') }}"><br>
        <label for="client">client</label>
        <select name="client" id="client">
            @foreach ($clients as $client)
                <option value="{{$client->id}}">{{$client->nom_complet}}</option>
            @endforeach
        </select>
        <input type="submit" name="" id="" value="modifier">
    </form>
    <br><br><br>
    <div>
        <form action="{{ route('devie.destroy', ['devie' => $devie->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('devie.index') }}">afficher les devies</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        {{ session('status', '') }}
    @endif
</body>

</html>
