<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
        color: ;
        background-image: url("https://i.pinimg.com/originals/fb/e3/ce/fbe3ce04d459168c0bf93f30a93b25c9.jpg");
        background-repeat: no-repeat;
        background-size: 10000px;              
    }
  </style>
</head>
    <body>
        <center>
            <h2>Producto: Detalle</h2>
            <hr class="text-info border-2 opacity-50">
            <img src="{{ asset ('archivos/'.$detalle->foto) }}" style="width:150px"><br>
            <h3>Nombre: {{ $detalle->nombre }}</h3>
            <b>Descripcion: </b>{{ $detalle->descripcion }}<br>
            <b>Precio normal: </b>{{ $detalle->precio_normal }}<br>
            <b>Precio rebajado: </b>{{ $detalle->precio_rebajado }}<br>
            <b>Cantidad: </b>{{ $detalle->cantidad }}<br>
            <b>Id_categoria: </b>{{ $detalle->id_categoria }}<br>
            <hr class="text-info border-2 opacity-50"><br>
            <a href="{{ route('lista_productos') }}"><button type="button" class="btn btn-success">Regresar</button></a></td>

        </center>
    </body>
</html>