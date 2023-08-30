

<div class="container">
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <h5 class="card-title">EVALUACION POSTULANTES</h5>
        </div>
        <div class="card-body">
          
        <h5>BIENVENIDO</h5>
        <div class="row">
            <div class="col">
                <p class="card-text">
                    POSTULANTE : {{$postulante->nombres.' '.$postulante->apellido_paterno.' '.$postulante->apellido_materno}}
                </p>
                <p class="card-text">
                    CARGO : {{$postulante->cargo->nombre}}
                </p>
                <p class="card-text">
                    FECHA : {{$fechaHoraActual->toDateString()}}
                </p>
                <p class="card-text">
                    HORA : {{$fechaHoraActual->toTimeString()}}
                </p>
                <p class="card-text">
                    EXAMEN : {{$examen->titulo}}
                </p>
            </div>
            <div class="col">
                <p class="card-text">
                    FECHA DE EXAMEN : {{$examen->fecha}}
                </p>
                <p class="card-text">
                    HORA INICIO : {{$examen->hora_inicio}}
                </p>
                <p class="card-text">
                    HORA FIN : {{$examen->hora_fin}}
                </p>
                <p class="card-text">
                    DURACION : {{$examen->duracion}}
                </p>
                @if ($mensaje!='SUCCESS')
                <p class="text-danger">
                    {{$mensaje}}
                </p>                      
                @endif
                                    
            </div>            
        </div>

        </div>
        <div class="card-footer">
            @if ($mensaje=='SUCCESS')
                <a href="/examen" class="btn btn-primary">Rendir Evaluacion</a>
            @endif
        </div>
    </div>
</div>

