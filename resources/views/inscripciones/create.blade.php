@extends('layouts.layouts')

@section('title', 'Create Inscripcion')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Inscripcion</span>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => ['inscripciones.store']]) !!}

                        <div class="form-group">
                            <label for="idAlumno">Alumno</label>
                            <select name="" id="idAlumno" class="form-control">
                                @foreach ($alumnos as $alumno)
                                    @php
                                        $descuentoss;
                                        if ($alumno->tipo == 'grupal') {
                                            $descuentoss = $alumno->grupals()->first()->descuento;
                                        } elseif ($alumno->tipo == 'empresa') {
                                            $descuentoss = $alumno->empresas()->first()->descuento;
                                        } else {
                                            $descuentoss = 0;
                                        }
                                    @endphp
                                    <option value="{{ $alumno->idAlumno }}_{{ $alumno->tipo }}_{{ $descuentoss }} ">
                                        {{ $alumno->persona()->first()->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- iddescuento idpisina idprofesor idhorario --}}
                        <div class="form-group">
                            <label for="idDescuento">Descuento</label>
                            <select name="" id="idDescuento" class="form-control">
                                <option value="0">No cuenta con Descuento </option>
                                @foreach ($descuentos as $descuento)
                                    <option value="{{ $descuento->idDescuento }}_{{ $descuento->porcentaje }}">
                                        {{ $descuento->descripciondescuento }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="idProfesor">Profesor/Pisina/Horario</label>
                            <select name="" id="idProfesor" class="form-control">
                                @foreach ($profesores as $profesor)
                                    <option
                                        value="{{ $profesor->idProfesor }}_{{ $profesor->idPisina }}_{{ $profesor->idHoraDisponible__Horario }}">
                                        Profesor :{{ $profesor->empleado->persona()->first()->nombre }}/
                                        Pisina :
                                        Nº{{ $profesor->pisina()->first()->idPisina }}-{{ $profesor->pisina()->first()->lugar }}/Horario:
                                        {{ $profesor->hora_disponible__horario->horarios()->first()->turno }}-{{ $profesor->hora_disponible__horario->horarios()->first()->dia }}-{{ $profesor->hora_disponible__horario->horas_disponibles()->first()->horasDisponible }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <div class="col-6">
                                <div class="text-star">

                                    <button class="btn btn-primary my-4" id="add"><i
                                            class="fa fa-fw fa-lg fa-plus"></i>Agregar</button>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fas fa-check"></i>
                                        Realizar Pedido
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::hidden('descuento', null, ['id' => 'descuento']) !!}
                            {!! Form::hidden('idAlumno', null, ['id' => 'alumnos']) !!}

                        </div>
                        <div class="ml-3 col-md-5 d-none alert alert-danger" role="alert" id="error-exists"><strong>This
                                producto is already added</strong></div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="detalle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profesor</th>
                                        <th>Horario</th>
                                        <th>Quitar</th>
                                    </tr>
                                </thead>
                            </table>
                            {{-- total --}}
                            <label for="total">Total</label>
                            <input type="text" class="form-control" id="total" name="total" value="0"
                                readonly>

                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        let index = 0;
        let i = 1;
        let Alumno;
        let list_cursos = [];
        let totals = 0;
        $(document).ready(function() {
            $('#idDescuento').change(function() {
                Alumno = $(this).val().split("_");
                $('#descuento').val(Alumno[0]);
                $('#idDescuento').prop('disabled', true);
            });
            $('#idAlumno').change(function() {
                Alumno = $(this).val().split("_");
                $('#alumnos').val(Alumno[0]);
                $('#idAlumno').prop('disabled', true);
            });
        });

        $('#add').click(function(e) {
            e.preventDefault();
            const Alumno = $('#idDescuento').val().split("_");
            //     const descuento = Alumno[1];

            let profesor = $('#idProfesor').val().split('_');

            if (validate(profesor[0], profesor[2])) {

                let row = '<tr id="row' + index + '"><td><input type="hidden" name="list_profesor[]" value="' +
                    profesor[0] + '"><input type="hidden" name="list_horariosDisponibles[]" value="' +
                    profesor[2] + '">' + i++ + '</td><td>' + profesor[1] + '</td><td>' + profesor[2] + '</td>' +
                    '<td><button onclick="remove(' + index +
                    ')" class="btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';

                $('#error').removeClass('d-block');
                $('#detalle').append(row);
                totals += (100 - (100 / 10));
                list_cursos[index] = [profesor[0]];

                index++;
                $('#quantity').val(1);
                $('#error-exists').removeClass('d-block');
                guardardescuento();
            }
        });

        function validate(units, stock) { //iprofesor, ihorario
            console.log(units + ' ' + stock);
            //   if (parseInt(units) <= parseInt(stock)) {
            if (parseInt(units) != 0) {
                for (let count = 0; count < list_cursos.length; count++) {
                    const element = list_cursos[count];
                    if (element == units) {
                        $('#error-exists').addClass('d-block');
                        return false;
                    }
                }
                return true;
            } else {
                $('#error').addClass('d-block');
                return false;
            }
            // } else {
            //     $('#error-stock').addClass('d-block');
            //     return false;
            // }
        }

        function remove(row, price) {
            $('#row' + row).remove();
            total -= price;
            list_producto.splice(row);
            $('#total').html(total);
            index--;
            i--;
        }

        function guardardescuento() {

            let tolas = totals - (totals * (Alumno[1] / 100));
            $('#total').val(tolas);
            //alert(this.total);
            //  alert(Alumno);
            //  alert(totals);
            //  alert('hols')
        }
        //guardardescuento(descuento,total);
    </script>
@endsection
