<!DOCTYPE html>
<html>

<head>
    <title>cFour Board</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="{{ asset('welcome/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{ asset('welcome/css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{ asset('welcome/color/default.css')}}" rel="stylesheet" media="screen">
    <script src="{{ asset('welcome/js/modernizr.custom.js')}}"></script>
</head>

<body>
    <div class="menu-area">
        <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger">Open Menu</button>
            <ul class="dl-menu">
                <li><a href="#intro">Home</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="{{ route('login') }}">Inicia Sesión</a></li>
            </ul>
        </div>
</div>
    <!-- intro area -->
    <div id="intro">
        <div class="intro-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand">
                            <h1><a href="index.html">cFour Board</a></h1>
                            <div class="line-spacer"></div>
                            <p><span>Crea algo maravilloso junto a tu equipo</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('register') }}">Registrarse</a>
    </div>

    <!-- spacer -->
    <section id="spacer1" class="home-section spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="color-light">
                        <h2 class="wow bounceInDown" data-wow-delay="1s">Los detalles son la llave de la perfección</h2>
                        <p class="lead wow bounceInUp" data-wow-delay="2s">Mezclemos todas las cosas detalladas juntos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Servicios</h2>
                        <p>Todo lo que necesitas saber</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
                        <i class="fa fa-code fa-4x"></i>
                        <h4>Fácil e intuitivo</h4>
                        <p>cFour Board resulta muy intuitivo y divertido de usar con tu equipo.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
                    <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
                        <i class="fa fa-cog fa-4x"></i>
                        <h4>Perfecciona la colaboración</h4>
                        <p>Invita a otras personas a hacer colaboraciones, trabaja con un número ilimitado de contribuidores.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
                    <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
                        <i class="fa fa-desktop fa-4x"></i>
                        <h4>Interfaz responsiva</h4>
                        <p>Adaptable a cualquier dispositivo.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
                    <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
                        <i class="fa fa-dropbox fa-4x"></i>
                        <h4>Universal</h4>
                        <p>Puedes trabajar desde cualquier lugar, con personas de todo el mundo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy;2014 Mamba company. All rights reserved. By <a
                            href="http://bootstraptaste.com">Bootstraptaste</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- js -->
    <script src="{{ asset('welcome/js/jquery.js')}}"></script>
    <script src="{{ asset('welcome/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('welcome/js/jquery.smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('welcome/js/jquery.dlmenu.js')}}"></script>
    <script src="{{ asset('welcome/js/wow.min.js')}}"></script>
    <script src="{{ asset('welcome/js/custom.js')}}"></script>
</html>
