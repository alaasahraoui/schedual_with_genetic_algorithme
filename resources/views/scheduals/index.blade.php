 
<!DOCTYPE html>
<html>
<head>
	<title></title>



	<style type="text/css">
	 
		th,td,tr{

 
 
           height:100px;
			border:solid;}
		p,mark{color:red;}
	</style>
</head>
<body>



 
<center>
@foreach($generations as $generation)

<h1>generation #{{$generation->generation_id}}</h1>

<h3><u>schedual #1</u></h3>


<table>	
<thead>
    <tr>
 <th>Jours/Heurs</th>
 <th>8:00-9:30</th>
 <th>9h:35-11h00</th>
 <th>11h:05-12h:45</th>
 <th>13h:00-14h15</th>
 <th>14h15-15h50</th>
    </tr>
</thead>

 <tbody>

 	<!-- row 1 -->
<tr>

<td class="jour"><h3>Dimanche</td>
<td>

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se1'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>	
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se2'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se3'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se4'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
@endif
@endforeach
</td>

<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se5'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach

 
</td>



</tr>










	<!-- row 2 -->
<tr>

<td class="jour"><h3>Lundi</td>
<td>

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se6'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>	
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se7'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se8'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se9'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
@endif
@endforeach
</td>

<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se10'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach

 
</td>



</tr>





<!-- row 3-->
<tr>

<td class="jour"><h3>Mardi</td>
<td>

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se11'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>	
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se12'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se13'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se14'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
@endif
@endforeach
</td>

<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se15'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach

 
</td>



</tr>


<!-- row 4-->
<tr>

<td class="jour"><h3>Mercredi</td>
<td>

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se16'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>	
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se17'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se18'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se19'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
@endif
@endforeach
</td>

<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se20'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach

 
</td>



</tr>





<!-- row 5-->
<tr>

<td class="jour"><h3>Jeudi</td>
<td>

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se21'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>	
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se22'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se23'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach
</td>


<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se24'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
@endif
@endforeach
</td>

<td>
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se25'  && $schedual->generation_id==$generation->generation_id)

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

	<li>{{$schedual->enseignant}}</li>
	<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
	  @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
@endif
@endforeach

 
</td>



</tr>
</tbody>
</table>
@endforeach
</center>

</body>
</html>
