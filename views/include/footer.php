 <footer id="footer" class="section section-grey" style="margin-top: 10px;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer widget -->
                <div class="offset-lg-2  col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a class="logo" href="home">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <p>Au service de la nation ivoirienne, achetez des materiaux de qualite et en toute securite.</p>

                        <!-- footer social -->
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f text-primary"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter text-primary"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" style="color: hotpink;"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus text-danger"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest text-danger"></i></a></li>
                        </ul>
                        <!-- /footer social -->
                    </div>
                </div>
                <!-- /footer widget -->

                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="font-weight-bold">Mon compte</h3>
                        <ul class="list-links">
                            <?php if(empty($_SESSION['user'])): ?>
                            <li><a href="login">Se connecter</a></li>
                            <?php endif ?>
                            <li><a href="signin">S'inscrire</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer widget -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="font-weight-bold">Service Clients</h3>
                        <ul class="list-links">
                            <li><a href="presentation" >A propos de nous</a></li>
                            <li><a href="contact">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="offset-md-2 col-md-8 col-md-offset-2 text-center">
                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        Copyright <i class="far fa-copyright"></i> 2019 All rights reserved a E-COS
                    </div>
                    <!-- /footer copyright -->
                </div>
            </div>
        </div>
        <!-- /container -->
    </footer>