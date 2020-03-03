<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Lista Produto</title>

    <style>
        .container{
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Categorias</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->nome}}</td>
                                <td>
                                    <ul>
                                        @foreach ($p->categorias as $c)
                                            <li>{{$c->nome}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>