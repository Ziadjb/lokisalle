@extends('layouts.structure')
@section('titre')
    Accueil
@endsection


@section('style')
			tr, td, th{ text-align: center;  font-weight: normal;}
			td{  padding: 10px !important; display: table-cell !important;  vertical-align: middle !important;}
			img{ width: 70px; }
@endsection

@section('contenu')
<br>
			<ul class="list-group"> <li class="list-group-item"> <span class="badge">28</span>1 - Salle Cézanne 1</li> <li class="list-group-item"> <span class="badge">17</span>2 - Bureau Picasso 3</li> <li class="list-group-item"> <span class="badge">09</span>3 - Salle Mozart 2</li> 
 <li class="list-group-item"> <span class="badge">05</span>4 - Salle De Vinci 9</li>
 <li class="list-group-item"> <span class="badge">03</span>5 - Salle Monet 7</li></ul>
			<br>

@endsection