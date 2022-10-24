<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body{
        color: ;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4i8M89GUiYAEXyoW2wruqu_Uh-E6-U9bugA&usqp=CAU");
        background-repeat: no-repeat;
        background-size: 4000px;              }
    #best{
        margin-top: 80px;
        background-image: url("");
        background-repeat: no-repeat;
        background-size: 1300px;
        text-align: center;
        width: 50%;                          }
  
    input,select{
            margin-left: 100px;
            float: center;
            background:;                 
        }
        #lol{ color: #008000; }
        #coca { background: #2C4EC0; }
        #cma{ margin-left: 300px; }
        #lom{ margin-left: 340px; }
        #comit{ margin-left: 380px; }
        select{ background: #C1BCBC; }
</style>
    <tittle> </tittle>
</head>
<body>
<br>
        <br>

<br><center>
<div id="best">
<h1 id="lol">Nuevo Producto </h1><hr class="text-info border-2 opacity-50">
<form action="{{ route('registrar') }}" method="POST"class="row g-3" enctype="multipart">
  @csrf
<table>
  <tr>
    <td>
@if(count($errors) > 0)
@foreach($errors->all() as $error)
{{ $error }} <br>
@endforeach
@endif
</table>

<div class="input-group">
<span class="input-group-text" style="margin-left: 60px"> Nombre:</span>
<input type="text" aria-label="First name" class="form-control" name="nombre" style="margin-right: 20px" value="{{ old('nombre') }}">
@if($errors->first('nombre') ) <i>{{ $errors->first('nombre') }}</i> @endif</output>
</div>


<div class="input-group">
<span class="input-group-text" style="margin-left: 60px"> Descripcion:</span>
<input type="text" aria-label="First name" class="form-control" name="descripcion" style="margin-right: 20px" value="{{ old('descripcion') }}">
@if($errors->first('descripcion') ) <i>{{ $errors->first('descripcion') }}</i> @endif
    </output>
</div>
 
<div class="input-group">
  <span class="input-group-text" style="margin-left: 60px">Precio Normal:</span>
  <input type="text" aria-label="First name" class="form-control" name="precio_normal"  style="margin: right 20px" value="{{ old('precio_normal') }}">
  @if($errors->first('precio_normal') ) <i>{{ $errors->first('precio_normal') }}</i> @endif </output>
  </div>


  <div class="input-group">
  <span class="input-group-text"style="margin-left: 20px"> Precio Rebajado:</span>
  <input type="text" aria-label="precio_rebajado" class="form-control" name="precio_rebajado" style="margin:right 20px" value="{{ old('precio_rebajado') }}">
  @if($errors->first('precio_rebajado') ) <i>{{ $errors->first('precio_rebajado') }}</i> @endif
</output>
</div>
  
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">Cantidad:</span>  
  <input type="text"  name="cantidad" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('cantidad') }}" style="margin-right: 20px">
  @if($errors->first('cantidad') ) <i>{{ $errors->first('cantidad') }}</i> @endif</output>

    </div><br>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">Id_categoria:</span>
  <input type="text" name="id_categoria" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('id_categoria') }}" style="margin-right: 20px">
  @if($errors->first('id_categoria') ) <i>{{ $errors->first('id_categoria') }}</i> @endif</output>

</div>

<input type="file" name="foto" id="">
                    
                    <br><div>
                    <button type="submit" class="btn btn-primary" value="">Guardar Producto</button>
                    
</form>
</body>
</html>