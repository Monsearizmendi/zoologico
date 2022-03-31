<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Neuron HTML CSS Template</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">Zoologico</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{route('sobre')}}">Sobre Animales</a></li>
                    <li><a href="{{route('gale')}}">Galeria</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Hola, Bienvenido al Zoologico.</h1>
                    <a href="{{route('sobre')}}" class="smoothScroll btn btn-default">Ver más</a>
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/1.png" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Tipos de animales</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Monse Arizmendi</a></span>
                              <span><i class="fa fa-date"></i> </span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> </a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Los animales pueden clasificarse y diferenciarse de varias formas. Podemos clasificarlos según su tipo de alimentación, su forma de nacer, por tener o no columna vertebral o por el medio en el que viven y se desarrollan.</p>
                             <br>
                             <p>También se puede establecer una clasificación según sus hábitos naturales, aunque no es de las más utilizadas, también la desarrollaremos</p>
                              <a href="{{route('sobre')}}" class="btn btn-default">Continuar leyendo</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/2.png" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Mamiferos</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image2.jpg" class="img-responsive img-circle">Monse Arizmendi</a></span>
                              <span><i class="fa fa-date"></i> </span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> </a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Los mamíferos son animales vertebrados, es decir, que su cuerpo está formado por huesos al igual que el de los seres humanos, y los otros animales de la naturaleza, la diferencia es que ellos tienen pelo por todo su cuerpo, su respiración es a través de los pulmones y las hembras tienen mamas, lo cual les permite alimentar a sus crías ya que segregan leche, es decir, tienen leche, este líquido ayuda a que los animales crezcan fuertes y sanos.</p>
                              <br>
                              <p>La mayoría de estos animales son terrestres, es decir, que pueden caminar sobre la tierra, como los tigres, perros, vacas, elefantes, jirafas, gatos, caballos, entre muchos más. Hay otros animales que son acuáticos como las ballenas y los delfines. Otros que vuelan como el murciélago, y por último tenemos a los animales que son llamados anfibios, animales que viven dentro del agua pero que también pueden caminar en al tierra como los hipopótamos, focas y nutrias.</p>
                              <a href="{{route('sobre')}}" class="btn btn-default">Continuar leyendo</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-video">
                              <div class="embed-responsive embed-responsive-16by9">
                              <img src="images/3.png" class="img-responsive" alt="Blog Image">
                              </div>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Antropodos</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle">Monse Arizmendi</a></span>
                              <span><i class="fa fa-date"></i></span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> </a></span>
                         </div>
                         <div class="blog-post-des">
                              <p> El grupo incluye animales invertebrados dotados de un esqueleto externo y apéndices articulados; los insectos, arácnidos, crustáceos y miriápodos, entre otros.</p>
                              <br>
                              <p>Hay más de 1 300 000 especies descritas,en su mayoría insectos (estimados entre 941 000 a 1 000 000 de especies), que representan al menos el 80 % de todas las especies animales conocidas. Son importantes miembros de ecosistemas marinos, de agua dulce, terrestres y aéreos. Varios grupos de artrópodos están perfectamente adaptados a la vida en ambientes secos, al igual que los vertebrados amniotas y a diferencia de todos los demás filos de animales, que son acuáticos o requieren ambientes húmedos.</p>
                              <a href="{{route('sobre')}}"class="btn btn-default">Continuar leyendo</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/4.png" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Alimentación</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image2.jpg" class="img-responsive img-circle">Monse Arizmendi</a></span>
                              <span><i class="fa fa-date"></i> </span>
                              <span><a href="#"><i class="fa fa-comment-o"></i></a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Existen varias clasificaciones de los animales, pero esta vez sera segun su tipo de alimentacion, como lo es el herviboro, que se alimenta de plantas o el carnivoro, que se alimenta unicamente de carne, y asi como este existen mas clasificaciones, si quieres saber mas sobre la alimentación de los animales y que animales la tienen, da click en el siguiente botón.</p>
                              <a href="{{route('sobre')}}" class="btn btn-default">Continuar leyendo</a>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Más</h3>
                    <p>si te gusto esta pequeña descripción sobre los animalitos, puedes contactarnos para saber mas o para sacar un paquete en nuestro Zoologico</p>
                    <div class="footer-copyright">
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>contactanos</h3>
                    <p><i class="fa fa-globe"></i> </p>
                    <p><i class="fa fa-phone"></i> 546-578-321</p>
                    <p><i class="fa fa-save"></i> monse2012018@gmail.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>