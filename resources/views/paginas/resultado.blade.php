@extends('layout')
@section('contenido')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container">


            <div class="card card-default color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">
						RESULTADO DE EXAMEN
                    </h3>
                </div>
                    <div class="card-body">
 
                        <div class="small-box bg-info">
                            <div class="inner">
								<div class="row">
									<div class="col-md-8">
										<div class="alert alert-info">
											<h3>POSTULANTE : {{ $examenpostulante->postulante['nombres'].' '.$examenpostulante->postulante['apellido_paterno'].' '.$examenpostulante->postulante['apellido_materno'] }}</h3>
											<h3>FECHA HORA DE INICIO : {{ $examenpostulante['fecha_hora'] }}</h3>
										</div>
									</div>
									<div class="col-md-4" align="center">
										<br>
										<p style="font-size:36px; color:red">NOTA : {{ $examenpostulante['nota'] }}</p>
										@if ($examenpostulante['nota']<13)
											<img src="imagenes/triste.png" class="img-responsive img-thumbnail" alt="DESAPROBADO" title="DESAPROBADO" class="">
										@else
											<img src="imagenes/feliz.jpg" alt="APROBADO" title="APROBADO">
										@endif
									</div>
								</div>
                            </div>
                        </div>


						<table class="table table-hover table-bordered table-responsive table-dark">
							<tr>
								<th>ITEM</th>
								<th>PREGUNTA</th>
								<th>MARCADO</th>
								<th>PUNTOS</th>
							</tr>	
							@foreach ($registros as $index => $row)
								<tr>
									<td>{{ $index+1 }} </td>
									<td>{{ $row['pregunta'] }} </td>
									<td>{{ $row['marco'] }} </td>
									<td>{{ $row['puntos'] }} </td>
								</tr>	
							@endforeach	
						</table>
						<div class="row">
							<div class="col-md-11">
								<h2>
									{{"SU NOTA ES : ".sprintf("%02d", $examenpostulante['nota']).' : '.$examenpostulante['estado'] }}
								</h2>
							</div>
							<div class="col-md-1">
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-5 col-md-2">
								<div class="img-circle">
									@if ($examenpostulante['nota']<13)
										<img src="imagenes/triste.png" class="img-responsive img-thumbnail" alt="DESAPROBADO" title="DESAPROBADO" class="">
									@else
										<img src="imagenes/feliz.jpg" alt="APROBADO" title="APROBADO">
									@endif
								</div>
							</div>
						</div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
            </div>


        </div>
    </div>
@endsection






