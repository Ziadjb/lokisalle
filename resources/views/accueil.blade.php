@extends('layouts.structure')
@section('titre')
    Accueil
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

img{ width: 320px; height: 150px; }

@endsection



@section('menu')
    @include('menu')
@endsection

    <!-- Page Content -->
@section('contenu')

        <div class="row">

            <div class="col-md-2">
                <p class="lead" style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">Catégorie</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Réunion</a>
                    <a href="#" class="list-group-item">Bureau</a>
                    <a href="#" class="list-group-item">Formation</a>
                </div>
                <p class="lead" style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">Ville</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Paris</a>
                    <a href="#" class="list-group-item">Lyon</a>
                    <a href="#" class="list-group-item">Marseille</a>
                </div>
                <p class="lead" style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">Capacité</p>
                <div class="list-group">
                    <select style="padding: 5px; width: 100%;"><option>10</option></select>
                </div>
                <p class="lead" style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">Prix</p>
                <div class="list-group">
					<input type="range" min="0" max="50" value="20" id="jauge" /><i>maximum 1 000 €</i>
                </div>
				
                <p class="lead" style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">Période</p>
                
					<i>Date d'arrivée</i><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
					  <input type="text" class="form-control" placeholder="00/00/0000 00:00" aria-describedby="basic-addon1">
					</div><br><br>

					<i>Date de départ</i><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
					  <input type="text" class="form-control" placeholder="00/00/0000 00:00" aria-describedby="basic-addon1">
					</div><br><br>
					
					<p align="center"><i> 26 résultats </i></p>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-8">

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="11.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1 200 €</h4>
                                <h4><a href="#">Bureau Monet</a>
                                </h4>
                                <p>Parfait pour une réunion ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 18/06/2016 au 23/06/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="13.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">990 €</h4>
                                <h4><a href="#">Salle Cézanne</a>
                                </h4>
                                <p>Salle spacieuse avec ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 25/06/2016 au 30/06/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="4.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"> 870 €</h4>
                                <h4><a href="#">Salle Renoir</a>
                                </h4>
                                <p>Si vous avez l'envie de ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 01/07/2016 au 07/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="5.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1 500 €</h4>
                                <h4><a href="#">Salle Van Gogh</a>
                                </h4>
                                <p>Placé au coeur de ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 01/07/2016 au 10/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="6.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">750 €</h4>
                                <h4><a href="#">Salle Duchamp</a>
                                </h4>
                                <p>Aussi calme que ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 01/07/2016 au 07/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="12.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">590 €</h4>
                                <h4><a href="#">Bureau Bazille</a>
                                </h4>
                                <p>Situé dans un immeuble de ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 01/07/2016 au 07/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="8.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1 350 €</h4>
                                <h4><a href="#">Salle Klee</a>
                                </h4>
                                <p>Dans un décor de ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 20/07/2016 au 30/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="9.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1 200 €</h4>
                                <h4><a href="#">Salle Rubens</a>
                                </h4>
                                <p>Dans une salle ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 20/07/2016 au 30/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="10.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">710 €</h4>
                                <h4><a href="#">Salle Monet</a>
                                </h4>
                                <p>Salle standard pour ...<br>
								<span class="glyphicon glyphicon-calendar"></span> 20/07/2016 au 30/07/2016</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a href=""><span class="glyphicon glyphicon-search"></span> Voir </a></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					<hr><p align="center"><a href="">Voir plus</a></p></hr>
                </div>

            </div>

        </div>

@endsection
<!-- /.container -->