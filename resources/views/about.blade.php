<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Neuron Template - About</title>
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
               <a href="index.html" class="navbar-brand">Neuron</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li class="active"><a href="{{route('about')}}">Sobre Animales</a></li>
                    <li><a href="{{route('gale')}}">Galeria</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-about parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Sobre Animales</h1>
               </div>

          </div>
     </div>
</section>

<!-- About Section -->

<section id="about">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="col-md-4 col-sm-4">
                         <h2>La Jirafa</h2>
                         <p>La jirafa es el animal terrestre más alto del mundo y uno de los protagonistas indiscutibles de la sabana africana. Esta peculiar especie puede llegar a medir 5 metros de altura y su nombre en latín Giraffa camelopardalis proviene de los romanos, que las consideraban una mezcla de camello y leopardo.</p>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <h2>El León</h2>
                         <p>Poseen una cola larga, un pelaje corto y amarillento, así como una melena rubia u oscura alrededor del cuello en el caso de los machos. De dieta exclusivamente carnívora, son feroces cazadores, capaces de sujetar a la presa con sus garras y de rasgar grandes porciones de carne con sus afilados colmillos.</p>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <h2>La Tortuga</h2>
                         <p>También conocidos como quelonios, las tortugas son un tipo de reptiles caracterizados por el sólido caparazón que protege sus órganos vitales del que emergen la cabeza, las patas y la cola. Son animales ovíparos que cavan sus nidos en la tierra, donde llevan a cabo la incubación de los huevos.</p>
                         
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <h3>EL Elefante</h3>
                         <p>Son animales mamíferos, exclusivamente herbívoros cuya característica principal –además del gran tamaño– es su larga trompa y sus enormes orejas. Se organizan en manadas de unos 20 miembros, miden casi 4 metros los ejemplares más grandes y pueden llegar a pesar más de 6.000 kilos.</p>
                         
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <img src="images/5.png" class="img-responsive" alt="About Image">
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/6.png" class="img-responsive" alt="Blog Image">
                         <h3>El cocodrilo</h3>
                         <p>Con respecto a sus características, pueden llegar a pesar hasta 800 kg y 6 metros de largo. Poseen una piel muy gruesa y rugosa, no obstante, los cocodrilos tienen una gran sensibilidad. Por esta razón han sufrido y sufren la caza por parte del ser humano, quien utiliza sus pieles para el negocio de la marroquinería.</p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/7.png" class="img-responsive" alt="Blog Image">
                         <h3>Las Ardillas</h3>
                         <p>Las ardillas son de tamaño pequeño, de entre 38 a 45 cm de longitud. Sus patas son cortas, pero fuertes. Mediante sus uñas curvadas y afiladas, se agarra a la corteza cuando salta de un árbol a otro (son auténticas acróbatas). La cola le ayuda a mantener el equilibrio cuando anda por las ramas.</p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/8.png" class="img-responsive" alt="Blog Image">
                         <h3>Tecolote</h3>
                         <p>El tecolote tiene la particularidad de ser capaz de girar la cabeza hasta 270º para observar algo alrededor, mientras el resto del cuerpo permanece sin el más mínimo movimiento. La gran capacidad de la vista y el oído hace de los tecolotes o búhos magistrales cazadores.</p>
                    </div>
                    <br>
                    <br>
                        
                    @foreach ($carnivoros as $carnivoro)
                    
                    <div class="col-md-10 col-sm-10">
                    <h6> ANIMALES CARNIVOROS </h6> 
                         <h3>{{$carnivoro['Nombre']}} </h3>
                         <p>{{$carnivoro['Nombre_C']}} </p>
                         <p>{{$carnivoro['Habitat']}} </p>
                         <p>{{$carnivoro['Alimento']}} </p> 
                    </div>
                    @endforeach 
                    
                    
                    @foreach ($herbívoros as $herbívoro)
                    
                    <div class="col-md-10 col-sm-10">
                    <h6> ANIMALES HERBÍVORO </h6>
                         <h3>{{$herbívoro['Nombre']}} </h3>
                         <p>{{$herbívoro['Nombre_C']}} </p>
                         <p>{{$herbívoro['Habitat']}} </p>
                         <p>{{$herbívoro['Alimento']}} </p> 
                    </div>
                    @endforeach 
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
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>