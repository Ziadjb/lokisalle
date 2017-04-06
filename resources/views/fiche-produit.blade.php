@extends('layouts.structure')
@section('titre')
    Fiche produit
@endsection


@section('style')
body {
    padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}

.slide-image {
    width: 100%;
}

.carousel-holder {
    margin-bottom: 30px;
}

.carousel-control,
.item {
    border-radius: 4px;
}

.caption {
    height: 100px;
    overflow: hidden;
}

.caption h4 {
    white-space: nowrap;
}

.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}

footer {
    margin: 50px 0;
}

img.petit{ width: 320px; height: 150px; }

@endsection

@section('menu')
    @include('menu')
@endsection

@section('contenu')

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-top: 10px;">Bureau Bazille
                    <small style="color: #d17581"><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span></small>
					<p style="float: right; margin-bottom: 5px;"><button class="btn btn-success" type="button" style="padding: 8px 40px; font-weight: bold;">Réserver</button></p>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{ asset('100.jpg') }}" alt="">
            </div>

            <div class="col-md-4">
                <h3 style="font-size: 15px; font-weight: bold; margin-top: 0px;">Description</h3>
                <p>Ce bureau est parfait pour tout type de réunion. Equipée d'un rétro-projecteur et de nombreuses prises de courant, il est à la fois fonctionnel et spacieux. Notre équipe sera ravie de vous recevoir en vous offrant un petit déjeuner dès votre arrivée.</p>
				
				
                <h3 style="font-size: 15px; font-weight: bold;">Localisation</h3>
                <img class="" src="{{ asset('map.jpg') }}" alt="" height="230">
				<br>
            </div>

        </div>
        <!-- /.row -->
<div class="clear"></div>
        <!-- Related Projects Row -->
        <div class="row"> <h3 style="font-size: 15px; font-weight: bold;">Informations complémentaires</h3>
                <div style="float: left; margin-right: 300px; ">
                <span class="glyphicon glyphicon-calendar"></span> &nbsp; Arrivée :  01/07/2016</p>
                <span class="glyphicon glyphicon-calendar"></span> &nbsp; Départ : 07/07/2016</p></div>
				
                <div style="float: left; "><span class="glyphicon glyphicon-user"></span> &nbsp; Capacité :  3</p>
                <span class="glyphicon glyphicon-inbox"></span> &nbsp; Catégorie : réunion</p></div>
				
                 <div style="float: right; margin-right: 40px"><span class="glyphicon glyphicon-map-marker"></span> &nbsp; Adresse : 30 rue mademoiselle, 75015, Paris</p>
					<span class="glyphicon glyphicon-euro"></span> &nbsp;  Tarif : 590 €</p></div>
		</div>
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header" style="margin-top: 30px;">Autres produits</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="16.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="17.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="18.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="19.jpg" alt="">
                </a>
            </div>

            <div style="clear: both;"></div>
        </div>
					<hr><div style="float:left;"><p><a href="">Déposer un commentaire et une note</a></p></div>
					<div style="float:right;"><p><a href="">Retour vers le catalogue</a></p></div>
			<div style="clear: both;"></div>
        <!-- /.row -->
@endsection
