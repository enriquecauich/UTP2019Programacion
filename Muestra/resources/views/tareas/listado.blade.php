<html>
<head>
	<title>Prueba</title>
</head>
<body>
<h1> Existen {{ $existencias}}</h1>
<table style="width:100%">
  <tr>
    <th>Nombre</th>
    <th>Descripcion</th> 
    <th>Estatus</th>
  </tr>
  @foreach($tareas as $tarea)
  <tr>
    <td>{{$tarea->name}}</td>
    <td>{{$tarea->description}}</td> 
    <td>{{$tarea->estatus}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>