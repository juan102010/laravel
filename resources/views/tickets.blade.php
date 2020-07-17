<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    tickets
                </div>
                <div>

                    <form method="POST" action="/store">
                        @csrf
                    <div>
                        <label form="">Descripcion</label>
                        <input type="text" name="descripcion">
                    </div>
                    <div>
                        <label form="">Responsable</label>
                        <input type="text" name="responsable">
                    </div>
                    <div>
                        <label form="">Fecha</label>
                        <input type="date" name="fecha">
                    </div>
                    <div>
                        <input type="submit" value="guardar">
                    </div>
                    </form>
                </div>
                <div class="links">
                    <table border="1">
                        <thead>
                            <th>
                                id
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                responsable
                            </th>
                            <th>
                                Fecha solicitud
                            </th>
                            <th>
                                created_at
                            </th>
                            <th>
                                updated_at
                            </th>
                            <th>

                            </th>
                            @foreach($tickets1 as $ticket)
                            <tr>
                                <td>{{$ticket->id}}</td>
                                <td>{{$ticket->descripcion}}</td>
                                <td>{{$ticket->responsable}}</td>
                                <td>{{$ticket->fecha_solicitud}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td>{{$ticket->updated_at}}</td>
                                <td>

                                    <a href="/destroy/{{$ticket->id}}">Borar
</a>
                                    <!--<form method="DELETE" action="/tickets/{$ticket->id}}">
                                        <button type="submit">
                                            Borar
                                        </button>
                                    </form>-->
                                </td>
                                <td>
                                    <a href="/updateje/{{$ticket->id}}">actualizar
                                    </a>
                                </td>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
