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
                  <li><a href="comanda.php"><span class="glyphicon glyphicon-send"></span> Comanda acum</a></li>
                  <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contul meu</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cos de cumparaturi</a></li>
                  <li class="btn-cta"><a href="#"><span> Rezervari</span></a></li>
                </ul> 
              </div>
            </div>
          </div>
        </nav>
  
        <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(img/burger.jpg)" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="gtco-container">
            <div class="row">
              <div class="col-md-12 col-md-offset-0 text-left">
                <div class="row row-mt-15em">
                  <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                    <h1 class="cursive-font">Cel mai bun gust!</h1>
                    <h2 class="cursive-font">Imiefoame.ro</h2>
                  </div>
                  <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                    <div class="form-wrap">
                      <div class="tab"> 
                        <div class="tab-content">
                          <div class="tab-content-inner active" data-content="signup">
                            <h3 class="cursive-font">Rezerva masa</h3>
                            <form action="#">
                              <div class="row form-group">
                                <div class="col-md-12">
                                  <label for="activities">Persoane</label>
                                  <select name="#" id="activities" class="form-control">
                                    <option value="">Persoane</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5+</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row form-group">
                                <div class="col-md-12">
                                  <label for="date-start">Data</label>
                                  <input type="text" id="date" class="form-control">
                                </div>
                              </div>
                              <div class="row form-group">
                                <div class="col-md-12">
                                  <label for="date-start">Ora</label>
                                  <input type="text" id="time" class="form-control">
                                </div>
                              </div>
                              <div class="row form-group">
                                <div class="col-md-12">
                                  <label>Restaurant</label>
                                  <input type="text" id="restaurant" class="form-control">
                                </div>
                              </div>
                              <div class="row form-group">
                                <div class="col-md-12">
                                  <input type="submit" class="btn btn-primary btn-block" value="Rezerva acum">
                                </div>
                              </div>
                            </form> 
                          </div>
                        </div>
                      </div>
                    </div>
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
                <h2 class="cursive-font primary-color">Cele mai comandate mancaruri</h2>
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
                    <h2>Ciorba de fazan</h2>
                    <p>Descriere...</p>
                    <p><span class="price cursive-font">15.5 RON</span></p>
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
                    <h2>Sarmale umplute cu intuneric</h2>
                    <p>Descriere...</p>
                    <p><span class="price cursive-font">13 RON</span></p>
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
                    <h2>Paine intinsa cu cutitul</h2>
                    <p>Descriere...</p>
                    <p><span class="price cursive-font">12.5 RON</span></p>
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
                    <h2>Paine intinsa cu mana</h2>
                    <p>Descriere...</p>
                    <p><span class="price cursive-font">18.5 RON</span></p>
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
                    <h2>Piept de sconcs</h2>
                    <p>Descriere...</p>
                    <p><span class="price cursive-font">22.5 RON</span></p>
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
                    <h2>Supa de nu ma uita</h2>
                    <p>Descriere...</p>
                    <p><span class="price cursive-font">25 RON</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
  
        <div id="gtco-features">
          <div class="gtco-container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2 class="cursive-font">Serviciile noastre</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                  <span class="icon">
                    <i class="ti-face-smile"></i>
                  </span>
                  <h3>Oameni fericiti!</h3>
                  <p><i>"Este o diferenta uriasa intre a avea realizari pentru a fi fericit si a avea realizari fiind fericit."</i> - Tony Robbins</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                  <span class="icon">
                    <i class="ti-thought"></i>
                  </span>
                  <h3>Gama larga de mancaruri</h3>
                  <p><i> O multitudine de mancaruri pe alese din restaurantele noastre!</i></p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                  <span class="icon">
                    <i class="ti-truck"></i>
                  </span>
                  <h3>Livrari</h3>
                  <p><i> Pentru ca mancarea sa fie servita calda intr-un timp scurt!</i></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="gtco-counter" class="gtco-section">
          <div class="gtco-container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2 class="cursive-font primary-color">Informatii rapide!</h2>
              </div>
            </div>
            <div class="row">   
              <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Rating</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Tipuri de mancaruri</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="423" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Comenzi livrate</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="2018" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Anul inaugurarii</span>
                </div>
              </div>   
            </div>
          </div>
        </div>

        <div id="gtco-subscribe">
          <div class="gtco-container">
            <div class="row animate-box">
              <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font">Aboneaza-te!</h2>
                <p>Fii primul care afla ofertele noastre!</p>
              </div>
            </div>
            <div class="row animate-box">
              <div class="col-md-8 col-md-offset-2">
                <form class="form-inline">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="email" class="sr-only">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email-ul tau..">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-default btn-block">Abonare</button>
                  </div>
                </form>
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

