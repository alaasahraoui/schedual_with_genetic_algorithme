<h1>test iits workds </h1>
<!DOCTYPE html>
<html>
<head>
	<title></title>



	<style type="text/css">
		
		th,td,tr{border:solid;}
	</style>
</head>
<body>



 
<center>

 

 
<h3><u>schedual #1</u></h3>



 <table>
 	

<thead>
    <tr>
 <th>8:00-9:30</th>
 <th>9h:35-11h00</th>
 <th>11h:05-12h:45</th>
 <th>13h:00-14h15</th>
 <th>14h15-15h50</th>
    </tr>
</thead>

 <tbody>
<tr>
<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time=='8h:00-9h:30')     {{$schedual->coure}}@endif
@endforeach
</td>
<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time=='9h:35-11h00')     {{$schedual->coure}}@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time=='11h:05-12h:45')   {{$schedual->coure}}@endif
@endforeach
</td>
<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time=='13h:00-14h15')    {{$schedual->coure}}@endif
@endforeach
</td>

<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time=='14h15-15h50')     {{$schedual->coure}}@endif
@endforeach
</td>



</tr>
</tbody>
</table>
 



 </center>

</body>
</html>