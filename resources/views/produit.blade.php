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
			<table class="table table-bordered">
				<tr style="background: #303030; color: white;">
					<th>id produit</th>
					<th>date d'arrivee</th>
					<th>date de depart</th>
					<th>id salle</th>
					<th>prix</th>
					<th>etat</th>
					<th>actions</th>
				</tr>
				<tr>
					<td>1</td>
					<td>22/11/2016 09:00</td>
					<td>27/11/2016 19:00</td>
					<td>1 - <i>Salle Cézane</i><br><img src="1.jpg"></td>
					<td>1200 €</td>
					<td>libre</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>2</td>
					<td>29/11/2016 09:00</td>
					<td>03/12/2016 19:00</td>
					<td>1 - <i>Salle Cézane</i><br><img src="1.jpg"></td>
					<td>990 €</td>
					<td>libre</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>1</td>
					<td>29/11/2016 09:00</td>
					<td>03/12/2016 19:00</td>
					<td>2 - <i>Salle Mozart</i><br><img src="2.jpg"></td>
					<td>880 €</td>
					<td>libre</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
			</table>
			<br>
			<form method="post">
				<div class="row">
					<div class="col-md-5">
					<label>Date d'arrivée</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
					  <input type="text" class="form-control" placeholder="00/00/0000 00:00" aria-describedby="basic-addon1">
					</div><br><br>

					<label>Date de départ</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
					  <input type="text" class="form-control" placeholder="00/00/0000 00:00" aria-describedby="basic-addon1">
					</div><br><br>
					
					</div>
					
					<div class="col-md-2">&nbsp;</div>
					<div class="col-md-5">
					
					<label>Salle</label><br>
					<select class="form-control"><option>1 - Salle Cézanne - 30 rue mademoiselle, 75015, Paris - 30 pers - reunion</option></select><br><br>
					
					<label>Tarif</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-euro"></span></span>
					  <input type="text" class="form-control" placeholder="prix en euros" aria-describedby="basic-addon1">
					</div><br><br>
						<div align="right"><input type="submit" class="btn btn-primary" value="Enregistrer"><br><br></div>
					</div>
				</div>
				<div class="row">
				</div>
            </form>
@endsection