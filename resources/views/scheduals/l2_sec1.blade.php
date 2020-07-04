<!DOCTYPE html>
<html>
<head>
 <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}



   div{  margin-bottom: 20px;  margin-top: 20px;     border: 5px solid red;

   }
   div:hover{cursor: move;}
    th,td,tr{

 
 
           height:100px;
      border:solid;}
    p,mark{color:red;}



@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- Default dropright button -->
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    INFO
  </button>
  <div class="dropdown-menu">
 <ul> 
  <li><a href="http://127.0.0.1:8000/scheduals/info/l2/section/1">l2 sec A</a></li>
  <li><a href="http://127.0.0.1:8000/scheduals/info/l2/section/2">l2 sec B</a></li>
 </ul>
 <ul> 
  <li><a href="http://127.0.0.1:8000/scheduals/info/l3/siq">L3 SIQ</a></li>
  <li><a href="http://127.0.0.1:8000/scheduals/info/l3/isil">L3 ISIL</a></li>
 </ul>
 
 
 
  </div>
</div>



<br>





<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ST
  </button>
  <div class="dropdown-menu">
    <a href="#">l2</a>
  <a href="#">L3</a>
  <a href="#">M1</a>
  </div>
</div>
  
<br>



<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Bio
  </button>
  <div class="dropdown-menu">
    <a href="#">l2</a>
  <a href="#">L3</a>
  <a href="#">M1</a>
  </div>
</div>
</div>

<div id="main">
  <h2>Les Emplois du temps</h2>
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Scheduals</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


<center><h1>emplois du temps <br> <br><mark>l2 SECTION A</mark></h1></center>

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

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"      class="jour"><h3>Dimanche</td>
<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"       class="dragzone">

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se1'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1'   ) 
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >   
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>  
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"       class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)">
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se2'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se3'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>
<li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li> <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se4'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
   @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
</div>
@endif
@endforeach
</td>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se5'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach

 
</td>



</tr>










  <!-- row 2 -->
<tr>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"      class="jour"><h3>Lundi</td>
<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se6'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>  
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se7'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se8'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se9'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
   @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
</div>
@endif
@endforeach
</td>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se10'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach

 
</td>



</tr>





<!-- row 3-->
<tr>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"      class="jour"><h3>Mardi</td>
<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se11'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>  
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se12'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se13'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se14'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
   @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
</div>
@endif
@endforeach
</td>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se15'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach

 
</td>



</tr>


<!-- row 4-->
<tr>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"      class="jour"><h3>Mercredi</td>
<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   

@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se16'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>  
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se17'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se18'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )

<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se19'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
   @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
</div>
@endif
@endforeach
</td>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se20'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach

 
</td>



</tr>





<!-- row 5-->
<tr>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"      class="jour"><h3>Jeudi</td>
<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
 
@foreach($scheduals as $schedual)

@if($schedual->meeting_time_id=='Se21'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
<li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>  
 @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se22'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
 <p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se23'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach
</td>


<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se24'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
   @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif 
</ul>
</div>
@endif
@endforeach
</td>

<td class="dropzone"  ondragover="allowDrop(event)" ondrop="drop(event)" class="dragzone"  >   
@foreach($scheduals as $schedual)
@if($schedual->meeting_time_id=='Se25'  && $schedual->generation_id==$generation->generation_id && $schedual->specialite=='l2' && $schedual->section=='s1' )
 <div  id="{{$schedual->id}}" ondragstart="dragStart(event)" >  
<h3>{{$schedual->coure}}({{$schedual->CourMaxStudents}})</h3>
<ul>
<li>{{$schedual->specialite}}</li>
<li>{{$schedual->section}}</li>
<li>{{$schedual->groupe}}</li>

  <li id="li_{{$schedual->id}}"> <p>{{$schedual->enseignant}}</p> </li>
  <li>salle:{{$schedual->salle}}({{$schedual->salleMax}})</li>
    @if( $schedual->CourMaxStudents > $schedual->salleMax )
<p> <b> <mark>ERROR !</mark>  </b></p>
 @endif
</ul>
</div>
@endif
@endforeach

 
</td>



</tr>
</tbody>
</table>
@endforeach
<button><a href="http://127.0.0.1:8000/email"> Email it ! </a></button>
</center>



















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

<script type="text/javascript">
  

function allowDrop(ev){ev.preventDefault();  li1=ev.target.getElementsByTagName('li'); 


}



function dragStart(ev){id=ev.target.id; li2=ev.target.getElementsByTagName('li');}


function drop(ev){



  ev.target.append(document.getElementById(id));




 
  if(li1[3].innerText == li2[3].innerText) {
alert('Error contraint dur non respecté')     
      
}

 
}
//if (erreur=true) {alert('error contraint dure non respecté');}

 

</script>




</body>
</html>