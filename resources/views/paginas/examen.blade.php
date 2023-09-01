@extends('layout')
@section('contenido')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-default color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-tag"></i>
                    {{$examen['titulo']}}
                    </h3>
                </div>
                <form action="/resolver" method="POST" name="resolver_examen" id="resolver_examen">
                    <div class="card-body">
                        @csrf
                        <input type="hidden" name="idexamen" value="{{$examen['id']}}">
                        <input type="hidden" name="fechahora" value="{{date("y/m/d h:i:s")}}">
                        <input type="hidden" name="postulante_id" value="{{$postulante['id']}}">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h4>POSTULANTE : {{ $postulante['nombres'].' '.$postulante['apellido_paterno'].' '.$postulante['apellido_materno'] }} </h4>
                                    </div>
                                    <div class="col">
                                        <h4>FECHA HORA : {{date("y/m/d h:i:s")}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h4>DURACION : {{ $examen['duracion'] }} Minutos </h4>
                                    </div>
                                    <div class="col">
                                        <h4>TIEMPO RESTANTE : <font class="text-danger"><span id="minutos">{{ $examen['duracion']-1; }}</span> MINUTOS Y <span id="segundos">59</span> SEGUNDOS </font></h4>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="14:59" name="tiempo_rendicion" id="tiempo_rendicion">
                        </div>
                        @php    $i=1;  @endphp
                        <div class="row">
                            @foreach ($preguntas as $index => $fila)
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $index + 1 }}">
                                            <h6 class="mb-0">
                                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}" aria-expanded="false" aria-controls="collapse{{ $index + 1 }}">
                                                    PREGUNTA {{ $index + 1 }}
                                                </button>
                                                <div class="card-body">
                                                    <h5><?php echo $fila['descripcion'] ?></h5>
                                                    <input type="hidden" name="pregunta_marcacion[{{ $index + 1 }}][idpregunta]" value="<?php echo $fila['id'] ?>">
                                                    <p>
                                                        @php
                                                            $alternativas = $fila->alternativas->shuffle();
                                                        @endphp
                                                        @foreach ($alternativas as $alternativa)
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="pregunta_marcacion[{{ $index + 1 }}][marcado]" id="alternativa{{$alternativa['id']}}" value="<?php echo $alternativa['descripcion'] ?>">
                                                                    <label class="form-check-label" for="alternativa{{$alternativa['id']}}">
                                                                        {{$alternativa['descripcion']}}
                                                                    </label>
                                                                </div>
                                                            </div>    
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </h6>
                                        </div>
                                    </div>
                                </div>                                
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-success btn-lg" name="" value="CALIFICAR">
                    </div>
                </form>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('script')
<script type="text/javascript">
    //<![CDATA[
    // 1000 = 1 segundo
    var mins = {{$examen['duracion']-1}};
    var segs = 59;
    var s;
    function minutos(){
      //document.getElementById("tiempo_rendicion").value=mins+':'+segs;  
      if(mins == 0){
        //location.reload();
        alert("EL EXAMEN TERMINO");
        document.getElementById("resolver_examen").submit();
      }
      mins--;
      document.getElementById("minutos").innerHTML=mins;  
    }
    function segundos(){
      document.getElementById("segundos").innerHTML=segs;
      if(segs == 0){
        minutos();
        segs=60;
      }
      document.getElementById("tiempo_rendicion").value=mins+':'+segs;
      segs--;
    }
    var m = setInterval('segundos()', 1000);
    //]]>
</script>

@endsection


