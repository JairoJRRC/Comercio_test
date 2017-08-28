<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title></title>
</head>
<body>
    <div class="container" style="margin: 0 auto; width: 60%; text-align: center;">
        <div class="panel panel-primary">
          <div class="panel-heading"><h4>{{$data['name']}}</h4></div>
          <div class="panel-body">
            <div class="col-lg-7">
                
                <div class="form-group col-lg-6">
                    <label>Empleado</label>
                    <input type="text" class="form-control" value="{{$data['name']}}">
                </div>
                <div class="form-group col-lg-6">
                    <label>Correo</label>
                    <input type="text" class="form-control" value="{{$data['email']}}">
                </div>
                <div class="form-group col-lg-6">
                    <label>Telefono</label>
                    <input type="text" class="form-control" value="{{$data['phone']}}">
                </div>
                <div class="form-group col-lg-6">
                    <label>Dirección</label>
                    <input type="text" class="form-control" value="{{$data['address']}}">
                </div>
                <div class="form-group col-lg-6">
                    <label>Posición</label>
                    <input type="text" class="form-control" value="{{$data['position']}}">
                </div>
                <div class="form-group col-lg-6">
                    <label>Salario</label>
                    <input type="text" class="form-control" value="{{$data['salary']}}">
                </div>
            </div>
            <div class="form-group col-lg-3">
                <div class="list-group">
                  <a href="" class="list-group-item active">
                    Habilidades : 
                  </a>
                  @foreach ($data['skills'] as $element)
                    <a href="" class="list-group-item">{{$element['skill']}}</a>
                  @endforeach
                </div>
            </div>
            
          </div>
        </div>
    </div>

</body>
</html>