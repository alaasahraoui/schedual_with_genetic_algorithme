<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>






@foreach($generations as $generation)

<h2>{{$generation->generation_id}}</h2>
@endforeach




@foreach($generation_schaduals as $generation_schadual)

<h2>{{$generation_schaduals->generation_id}}</h2>
@endforeach






</body>
</html>