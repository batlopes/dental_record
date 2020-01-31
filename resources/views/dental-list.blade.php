<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dentistas</title>

        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="nav-link" href="{{url('/register')}}">Registro de Dentista</a>
            </div>
        </nav>
        <div class="container" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th style="min-width: 170px;">Nome</th>
                        <th>Consultório</th>
                        <th>Dia</th>
                        <th>Horário</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                @foreach ($data as $d)
                    @if(count($d->clinic)!=0)
                        @for($j = count($d->clinic);$j > 0;$j--)
                            <tr>
                                @if($j==count($d->clinic))
                                    <th style="text-align: center; vertical-align: middle;" rowspan="{{count($d->clinic)}}">{{$d->name}}</th>
                                @endif
                                <td>{{$d->clinic[$j-1]->name}}</td>
                                <td>
                                    @php
                                        $i = count($d->clinic[0]->pivot["days"]);
                                        foreach($d->clinic[0]->pivot["days"] as $day){
                                            $i--;
                                            if($i==0){
                                                echo $day;
                                            } else{
                                                echo $day.", ";
                                            }
                                        }
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        $time = strtotime($d->clinic[0]->pivot->start_time);
                                        echo date("H:i", $time);
                                    @endphp
                                    -
                                    @php
                                        $time = strtotime($d->clinic[0]->pivot->end_time);
                                        echo date("H:i", $time);
                                    @endphp
                                </td>
                            </tr>

                        @endfor

                    @endif
                @endforeach



                </tbody>
            </table>
        </div>
        </div>
    </body>
</html>
