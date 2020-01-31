<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro</title>

        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="nav-link" href="{{url('/')}}">&#8656 Lista de Dentistas</a>
            </div>
        </nav>
        <div class="container" style="margin-top: 50px;">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="dentistName">Nome: </label>
                    <input class="form-control" type="text" name="dentistName" id="dentistName">
                </div>
                <div class="form-group">
                    <label for="clinicName">Clínica</label>
                    <input class="form-control" type="text" name="clinicName" id="clinicName">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="days[]" value="Seg" id="seg">
                    <label for="seg">Segunda-Feira</label><br>
                    <input type="checkbox" name="days[]" value="Ter" id="ter">
                    <label for="ter">Terça-Feira</label><br>
                    <input type="checkbox" name="days[]" value="Qua" id="qua">
                    <label for="qua">Quarta-Feira</label><br>
                    <input type="checkbox" name="days[]" value="Qui" id="qui">
                    <label for="qui">Quinta-Feira</label><br>
                    <input type="checkbox" name="days[]" value="Sex" id="sex">
                    <label for="sex">Sexta-Feira</label><br>
                    <input type="checkbox" name="days[]" value="Sab" id="sab">
                    <label for="sab">Sábado-Feira</label><br>
                </div>
                <div class="form-group">
                    <label for="startTime">Início</label>
                    <input type="time" name="start_time" id="startTime">
                    <label for="endTime">Fim</label>
                    <input type="time" name="end_time" id="endTime">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
        </div>
    <link href="js/app.js" type="text/javascript">
    </body>
</html>
