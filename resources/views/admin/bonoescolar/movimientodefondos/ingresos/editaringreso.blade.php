 @extends('admin.menuprincipal')
@section('tittle', 'Bono escolar/Transacciones')
@section('content')

<div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><Strong>ACTUALIZAR INGRESO</Strong></h3>
            </div>         
            
     @if(count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    
              <div class="box-body">
              {!! Form::open(['route'=>'actualizardetalleingresos', 'method'=>'PUT', 'class'=>'form-horizontal']) !!}
          <input type="hidden" name="id" id="id" value="{{$ingreso->id}}">

                <div class="form-group">
                 {!! Form::label('fecha', 'Fecha ',['class'=>'col-sm-4 control-label']) !!}
               <div class="col-sm-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="fecha_transaccion" value="{{$ingreso->fecha_transaccion }}" class="form-control pull-right nac"  required="true">
                </div>
              </div>
               </div>

       <div class="form-group">
      {!! Form::label('', '',['class'=>'col-sm-4 control-label']) !!}
       <div class="col-sm-4">
        <label><input type="checkbox" name="opyfuncionamientoSN" class="checC"  <?php if($ingreso->opyfuncionamientoSN=="SI"){?>checked="" value="{{$ingreso->opyfuncionamientoSN}}"<?php }?>>Operación y funcionamiento</label>           
       </div> 
      </div>
                <div class="form-group">
              {!! Form::label('nombre', 'Monto',['class'=>'col-sm-4 control-label']) !!}
               <div class="col-sm-4">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-dollar"></i>
                            </div>
                            <input type="text" name="ingreso" value="{{$ingreso->ingreso}}" class="form-control" required="true">
                          </div>
                  </div>
          </div> 

              
             <div class="form-group">                                           
             {!! Form::label('nombre', 'En concepto de',['class'=>'col-sm-4 control-label']) !!}
               <div class="col-sm-4">
                {!! Form::text('concepto',$ingreso->concepto,['class'=>'form-control pull-right','placeholder'=>'En concepto de ','required']) !!}
                </div>
              </div>                 
                </div>       
          <div class="box-footer" align="right">   
           {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}            
          <a href="{{route('historialtransacciones')}}" class="btn btn-default">Cancelar</a>
          </div>

          {!! Form::close() !!}
          <!-- /.box-footer -->
          </div>
@endsection
