<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMPRESION PAGO</title>
</head>
<body>
    <div class="">
        {{-- <img src="{{ url('/favicons/favicon.ico') }}" alt="30px" style="width: 5%"> <br> --}}
        Pisina <b>El Ahogado</b>
    </div>
<fieldset>
    <legend>Datos de la compra</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alumno Matriculado</label>
      {{$inscripcion->alumno->persona()->first()->nombre}} {{$inscripcion->alumno->persona()->first()->apellido}}
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Descuento Implementado :</label>
      {{$inscripcion->descuento->descripciondescuento}}
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Monto a pagar:</label>
        {{$inscripcion->total}}
    </div>
    <fieldset>
        <legend>Datos Adicionales</legend>
        <label for="" class="form-label">Pisina: </label>{{$inscripcion->idPisina}}
        <div class="">
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Dia</th>
                        <th>Horario</th>
                        <th>Profesor</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td scope="row">1</td>
                        <td>2</td>
                        <td>7 a 9</td>
                        <td>Pedro Castillo</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </fieldset>
</fieldset>
</body>
</html>
{{--

    {{$inscripciones->idAlumno->persona->nombre}} {{$inscripciones->idAlumno->persona->apellido}}
    --}}
{{--
     {{$inscripcion->descuento->descripciondescuento}} --}}
{{--



       @foreach ($pedidos as $detalle)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$detalle->horarioDisponible->dia}}</td>
                            <td>{{$detalle->horarioDisponible->hora}}</td>
                            <td>{{$detalle->profesor->persona()->first()->nombre}} {{$detalle->profesor->persona()->first()->apellido}}</td>
                        </tr>--}}
