@extends('layouts.structure')
@section('titre')
    Commande
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
					<th>id commande</th>
					<th>id membre</th>
					<th>id produit </th>
					<th>prix </th>
					<th>date_enregistrement </th>
					<th>actions</th>
				</tr>
				<tr>
					<td>1</td>
					<td>28 - <i>amandine28@gmail.com</i></td>
					<td>1 - <i>salle cezanne<br>22/11/2016 au 27/11/2016</i></td>
					<td>1200 €</td>
					<td>15/06/2016 14:10</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>2</td>
					<td>3 - <i>guillaume-miller@gmail.com</i></td>
					<td>1 - <i>salle cezanne<br>29/11/2016 au 03/12/2016</i></td>
					<td>990 €</td>
					<td>20/09/2016 12:00</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>28 - <i>amandine28@gmail.com</i></td>
					<td>2 - <i>salle mozart<br>22/11/2016 au 27/11/2016</i></td>
					<td>880 €</td>
					<td>03/10/2016 09:50</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
			</table>
			<br>

@endsection