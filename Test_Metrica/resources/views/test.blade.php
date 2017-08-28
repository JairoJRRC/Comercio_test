<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <title>Test - Pregunta 3</title>

        

    </head>
    <body>
        <div class="container" style="margin: 0 auto; width: 60%; text-align: center;">
            
            
            <div class="panel panel-primary">
              <div class="panel-heading">Listado de empleados :<p class="pull-right">{{count($data)}} </p></div>
              <div class="panel-body">
                    <div class="col-lg-6">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            buscar por rango de salario : 
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              {!! Form::open(['route' => 'test.monto','method' => 'POST'])!!}
                                    <div class="form-group col-lg-4">
                                        {!! Form::number('monto_a',null,['class' => 'form-control'])!!}
                                    </div>
                                    <div class="form-group col-lg-4">
                                        {!! Form::number('monto_b',null,['class' => 'form-control'])!!}
                                    </div>
                                    <div class="form-group col-lg-4">
                                        {!! Form::submit('Buscar',['class' => 'btn btn-primary'])!!}
                                    </div>
                                {!! Form::close() !!}
                            </div>
                          </div>
                        </div>    
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            buscar por correo : 
                          </div>
                          <div class="panel-body">
                            <div class="row">
                                {!! Form::open(['route' => 'test.busqueda','method' => 'GET', 'class' => 'navbar-form'])!!}
                                    <div class="input-group">
                                        {!! Form::text('name',null,['class' => 'form-control','aria-describedby' => 'search'])!!}
                                        <span class="input-group-addon"  id="search"><span class="glyphicon glyphicon-search" ></span></span>
                                    </div>
                                {!! Form::close()!!}
                            </div>
                          </div>
                        </div>    
                    </div>
                    
                    
                    <table class="table">
                      <tr>
                        <th>EMPLEADO</th>
                        <th>CORREO</th>
                        <th>PUESTO</th>
                        <th>SALARIO</th>
                      </tr>
                      @foreach ($data as $key)
                          <tr>
                            <td>{{$key['name']}}</td>
                            <td>{{$key['email']}}</td>
                            <td>{{$key['position']}}</td>
                            <td>{{$key['salary']}}</td>
                            <td><a href="{{ route('test.edit',$key['id']) }}" class="btn btn-success glyphicon glyphicon-edit"></a></td>
                          </tr>
                      @endforeach 
                    </table>
                  </div>
                </div>
        </div>
    </body>
</html>

              

