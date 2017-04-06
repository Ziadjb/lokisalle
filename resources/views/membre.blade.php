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
					<th>id membre</th>
					<th>pseudo</th>
					<th>nom </th>
					<th>prenom </th>
					<th>email</th>
					<th>civilite </th>
					<th>statut   </th>
					<th>date_enregistrement   </th>
					<th>actions</th>
				</tr>
				<tr>
					<td>1</td>
					<td>admin</td>
					<td>Marie</td>
					<td>Thoyer</td>
					<td>marie.thoyer@gmail.com</td>
					<td>Femme</td>
					<td>admin</td>
					<td>06/06/2016 14:45</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>2</td>
					<td>joker</td>
					<td>Cottet</td>
					<td>Julien</td>
					<td>juju70@gmail.com</td>
					<td>Homme</td>
					<td>membre</td>
					<td>06/06/2016 20:30</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
				<tr>
					<td>3</td>
					<td>camelus</td>
					<td>Miller</td>
					<td>Guillaume</td>
					<td>guillaume-miller@gmail.com</td>
					<td>Homme</td>
					<td>membre</td>
					<td>07/06/2016 09:30</td>
					<td width="90"><span class="glyphicon glyphicon-search"></span> &nbsp; <span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-trash"></span> </td>
				</tr>
			</table>
			<br>
			<form method="post">
				<div class="row">
					<div class="col-md-5">
					<label>Pseudo</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
					  <input type="text" class="form-control" placeholder="pseudo" aria-describedby="basic-addon1">
					</div><br><br>

					<label>Mot de passe</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
					  <input type="text" class="form-control" placeholder="mot de passe" aria-describedby="basic-addon1">
					</div><br><br>
					
					<label>Nom</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil"></span></span>
					  <input type="text" class="form-control" placeholder="votre nom" aria-describedby="basic-addon1">
					</div><br><br>
					
					<label>Prénom</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil"></span></span>
					  <input type="text" class="form-control" placeholder="votre prénom" aria-describedby="basic-addon1">
					</div><br><br>

					
					</div>
					
					<div class="col-md-2">&nbsp;</div>
					<div class="col-md-5">
					
					<label>Email</label><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
					  <input type="text" class="form-control" placeholder="votre email" aria-describedby="basic-addon1">
					</div><br><br>
					
					<label>Civilité</label><br>
					<div class="input-group">
						<select class="form-control"><option>Homme</option></select><br><br>
					</div><br><br>
					
					<label>Statut</label><br>
					<div class="input-group">
						<select class="form-control"><option>Admin</option></select><br><br>
					</div><br><br>
					
						<div align="right"><input type="submit" class="btn btn-primary" value="Enregistrer"><br><br></div>
					</div>
				</div>
				<div class="row">
				</div>
            </form>
@endsection