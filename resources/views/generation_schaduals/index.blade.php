<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

@foreach($generation_schaduals as $generation_schedual)

<h1>{{$generation_schedual->generation_idd}}</h1>

<ul>
 
<li>{{$generation_schedual->schaduale_id}}   </li>
<li>{{$generation_schedual->schadual_fitness}}   </li>
<li>{{$generation_schedual->schadual_classes}}   </li>

</ul>

@endforeach


</body>
</html>