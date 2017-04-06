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
					<th>id_salle</th>
					<th>titre</th>
					<th>description</th>
					<th>photo</th>
					<th>pays</th>
					<th>ville</th>
					<th>adresse</th>
					<th>cp</th>
					<th>capacite</th>
					<th>categorie</th>
					<th>actions</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Cézanne</td>
					<td>Cette salle sera parfaite pour vos réunions d'entreprise</td>
					<td><img src="1.jpg"></td>
					<td>France</td>
					<td>Paris</td>
					<td>30 rue mademoiselle</td>
					<td>75015</td>
					<td>30</td>
					<td>reunion</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>2</td>
					<td>Mozart</td>
					<td>Cette salle vous permettra de recevoir vos collaborateurs en petit comité</td>
					<td><img src="2.jpg"></td>
					<td>France</td>
					<td>Paris</td>
					<td>17 rue de turbigo</td>
					<td>75002</td>
					<td>5</td>
					<td>reunion</td>
					<td><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>Picasso</td>
					<td>Cette salle vous permettra de travailler au calme</td>
					<td><img src="3.jpg"></td>
					<td>France</td>
					<td>Lyon</td>
					<td>28 quai claude bernard lyon </td>
					<td>69007</td>
					<td>2</td>
					<td>bureau</td>
					<td><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
			</table>
			<br>
			<form method="post">
				<div class="row">
					<div class="col-md-5">
					<label>Titre</label><br>
					<input type="text" name="titre" placeholder="Titre de la salle" class="form-control"><br><br>
					<label>Description</label><br>
					<textarea placeholder="Description de la salle" class="form-control"></textarea><br><br>
					<label>Photo</label><br>
					<input type="file" class="form-control"><br><br>
					
					<label>Capacité</label><br>
					<select class="form-control"><option>1</option></select><br><br>
					<label>Catégorie</label><br>
					<select class="form-control"><option>Réunion</option></select><br><br>
					
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-5">
						<label>Pays</label><br>
						<select class="form-control"><option>France</option></select><br><br>
						<label>Ville</label><br>
						<select class="form-control"><option>Paris</option></select><br><br>
						<label>Adresse</label><br>
						<textarea placeholder="Adresse de la salle" class="form-control"></textarea><br><br>
						<label>Code Postal</label><br>
						<input type="text" name="titre" placeholder="Code Postal de la salle" class="form-control"><br><br>
						<div align="right"><input type="submit" class="btn btn-primary" value="Enregistrer"><br><br></div>
					</div>
				</div>
				<div class="row">
				</div>
            </form>
@endsection