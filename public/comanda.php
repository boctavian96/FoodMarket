<?php
  require('includes/header.php');
?>
<body>		
	<div class="gtco-loader"></div>
	<div id="page">
	
	<!-- <div class="page-inner"> -->
        <nav class="gtco-nav" role="navigation">
          <div class="gtco-container">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <div id="gtco-logo"><a href="index.php"><img src="img/imiefoame.png" style="width:100px;height:85px;"><em></em></a></div>
              </div>
              <div class="col-xs-8 text-right menu-1">
                <ul>
                  <li class="btn-cta"><a href="#"><span> Rezervari</span></a></li>
                  <li><a href="comanda.php"><span class="glyphicon glyphicon-send"></span> Comanda acum</a></li>
                  <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cos de cumparaturi</a></li>      
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Contul meu<span class="caret"></span></a>
                  <ul id="login-dp" class="dropdown-menu">
                    <li>
                       <div class="row">
                          <div class="col-md-12">
                            Conectare via
                            <div class="social-buttons">
                              <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                              <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                            </div>
                              sau
                             <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                   <label class="sr-only" for="exampleInputEmail2">Adresa email</label>
                                   <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Parola</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                    <div class="help-block text-right"><a href="" style="color: #000000">Ai uitat parola?</a></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Conectare</button>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" style="color: #000000"> tine-ma minte
                                  </label>
                                </div>
                             </form>
                          </div>
                            <div class="bottom text-center" style="color: #000000"> Esti nou aici? <a href="#" style="color: #000000"><b>Alatura-te noua!</b></a>
                          </div>
                       </div>
                    </li>
                </ul> 
              </div>
            </div>
          </div>
        </nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(img/pizza.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Cele mai bune restaurante!</h1>	
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Restaurante populare</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>La birtutu' din padure</h2>
							<p>Descriere...</p>
							<!-- <p><span class="price cursive-font">$19.15</span></p> -->
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>10000% SHAORMA</h2>
							<p>Descriere...</p>
							<!-- <p><span class="price cursive-font">$19.15</span></p> -->
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dau de pica ciorba Radauteana</h2>
							<p>Descriere...</p>
							<!-- <p><span class="price cursive-font">$19.15</span></p> -->
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Lacrimi triste</h2>
							<p>Descriere...</p>
							<!-- <p><span class="price cursive-font">$19.15</span></p> -->
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Pelicanu'</h2>
							<p>Descriere...</p>
							<!-- <p><span class="price cursive-font">$19.15</span></p> -->
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Ostrobel</h2>
							<p>Descriere...</p>
							<!-- <p><span class="price cursive-font">$19.15</span></p> -->
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- </div> -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php
	  require('includes/footer.php');
	?>
	</body>
</html>

