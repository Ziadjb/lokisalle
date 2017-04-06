@extends('layouts.structure')
@section('titre')
    Avis
@endsection

@section('style')
tr, td, th{ text-align: center;  font-weight: normal;}
td{  padding: 10px !important; display: table-cell !important;  vertical-align: middle !important;}
img{ width: 70px; }
@endsection
@section('contenu')

            <br>
			<table class="table table-bordered">
				<tr style="background: #303030; color: white;">
					<th width="60">id avis</th>
					<th>id membre</th>
					<th>id salle </th>
					<th>commentaire </th>
					<th>note</th>
					<th>date_enregistrement </th>
					<th>actions</th>
				</tr>
				<tr>
					<td>1</td>
					<td>28 - amandine28@gmail.com</td>
					<td>1 - salle cezanne</td>
					<td>La salle était vraiment spacieuse. TOP !</td>
					<td width="110"><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> </td>
					<td>15/06/2016 14:35</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>2</td>
					<td>35 - clement.gallet@gmail.com</td>
					<td>2 - salle mozart</td>
					<td>La salle était conforme à l'annonce mais manque de luminosité.</td>
					<td><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span></td>
					<td>20/08/2016 10:20</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>39 - thomas.frappe@hotmail.fr</td>
					<td>3 - bureau picasso</td>
					<td>Le bureau est parfait pour une utilisation ponctuelle.</td>
					<td><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> </td>
					<td>05/12/2016 08:15</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
			</table>
			<br>
@endsection