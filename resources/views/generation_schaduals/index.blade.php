<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<center>

@foreach($generations as $generation)

<h2>generation#{{$generation->generation_id}}</h2>



<table style="border:solid;">
	<th style="border:solid;" >schedual_id</th>
	<th style="border:solid;" >schedual_fittnes</th>
	<th style="border:solid;" >schedual_classes</th>
@foreach($generation_schaduals as $generation_schadual)
@if($generation_schadual->generation_id==$generation->generation_id)
 




	<tr style="border:solid;">
		<td style="border:solid;">{{$generation_schadual->schaduale_id}}</td style="border:solid;">
		<td style="border:solid;">{{$generation_schadual->schadual_fitness}}</td>
		<td style="border:solid;">{{$generation_schadual->schadual_classes}}</td>
	</tr style="border:solid;">


@endif



@endforeach
</table>
@endforeach



 </center>

</body>
</html>