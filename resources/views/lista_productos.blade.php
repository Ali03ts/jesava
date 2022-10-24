<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="table table-striped table-hover">
<tr>
<td><b>ID</b></td>
<td><b>NOMBRE</b></td>
<td><b>DESCRIPCION</b></td>
<td><b>NOMBRE_FOTO</b></td>
<td><b>PRECIO_NORMAL</b></td>
<td><b>PRECIO_REBAJADO</b></td>
<td><b>CANTIDAD</b></td>
<td><b>ID_CATEGORIA</b></td>
<td><b>FOTO</b></td><td></td>

<td><a href="{{ route ('alta')}}"><button type="button" class="btn btn-success">Alta</button></a></td><td></td>


</tr>
@foreach($productos1 as $producto)
<tr>
    <td>{{ $producto -> id_productos }}</td>
    <td>{{ $producto -> nombre }}</td>
    <td>{{ $producto -> descripcion }}</td>
    <td>{{ $producto -> foto }}</td>
    <td>{{ $producto -> precio_normal }}</td>
    <td>{{ $producto -> precio_rebajado }}</td>
    <td>{{ $producto -> cantidad }}</td>
    <td>{{ $producto -> id_categoria }}</td>
    <td><img src="{{ asset ('archivos/'.$producto->foto) }}" style="width:50px"></td>



    <td>
    <a href="{{ route('detalle',['id_categoria' => $producto->id_categoria]) }}">
        <button type="button" class="btn btn-info">Detalle</button></a>&nbsp;
</td>
<td>
    <a href="{{ route('editar',['id_categoria' => $producto->id_categoria]) }}">
        <button type="button" class="btn btn-warning">Editar</button></a>&nbsp;
</td>
<td>
    <a href="{{ route('borrar',['id_categoria' => $producto->id_categoria]) }}" onclick="return confirm('¿Enserio quieres eliminar el producto?')">
    <button type="button" class="btn btn-danger">Eliminar</button></a>
</td>



</tr>
@endforeach

    </table>

</body>
</html>



