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
                         <p>La jirafa es el animal terrestre m??s alto del mundo y uno de los protagonistas indiscutibles de la sabana africana. Esta peculiar especie puede llegar a medir 5 metros de altura y su nombre en lat??n Giraffa camelopardalis proviene de los romanos, que las consideraban una mezcla de camello y leopardo.</p>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <h2>El Le??n</h2>
                         <p>Poseen una cola larga, un pelaje corto y amarillento, as?? como una melena rubia u oscura alrededor del cuello en el caso de los machos. De dieta exclusivamente carn??vora, son feroces cazadores, capaces de sujetar a la presa con sus garras y de rasgar grandes porciones de carne con sus afilados colmillos.</p>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <h2>La Tortuga</h2>
                         <p>Tambi??n conocidos como quelonios, las tortugas son un tipo de reptiles caracterizados por el s??lido caparaz??n que protege sus ??rganos vitales del que emergen la cabeza, las patas y la cola. Son animales ov??paros que cavan sus nidos en la tierra, donde llevan a cabo la incubaci??n de los huevos.</p>
                         
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <h3>EL Elefante</h3>
                         <p>Son animales mam??feros, exclusivamente herb??voros cuya caracter??stica principal ???adem??s del gran tama??o??? es su larga trompa y sus enormes orejas. Se organizan en manadas de unos 20 miembros, miden casi 4 metros los ejemplares m??s grandes y pueden llegar a pesar m??s de 6.000 kilos.</p>
                         
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <img src="images/5.png" class="img-responsive" alt="About Image">
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/6.png" class="img-responsive" alt="Blog Image">
                         <h3>El cocodrilo</h3>
                         <p>Con respecto a sus caracter??sticas, pueden llegar a pesar hasta 800 kg y 6 metros de largo. Poseen una piel muy gruesa y rugosa, no obstante, los cocodrilos tienen una gran sensibilidad. Por esta raz??n han sufrido y sufren la caza por parte del ser humano, quien utiliza sus pieles para el negocio de la marroquiner??a.</p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/7.png" class="img-responsive" alt="Blog Image">
                         <h3>Las Ardillas</h3>
                         <p>Las ardillas son de tama??o peque??o, de entre 38 a 45 cm de longitud. Sus patas son cortas, pero fuertes. Mediante sus u??as curvadas y afiladas, se agarra a la corteza cuando salta de un ??rbol a otro (son aut??nticas acr??batas). La cola le ayuda a mantener el equilibrio cuando anda por las ramas.</p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/8.png" class="img-responsive" alt="Blog Image">
                         <h3>Tecolote</h3>
                         <p>El tecolote tiene la particularidad de ser capaz de girar la cabeza hasta 270?? para observar algo alrededor, mientras el resto del cuerpo permanece sin el m??s m??nimo movimiento. La gran capacidad de la vista y el o??do hace de los tecolotes o b??hos magistrales cazadores.</p>
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
                    
                    
                    @foreach ($herb??voros as $herb??voro)
                    
                    <div class="col-md-10 col-sm-10">
                    <h6> ANIMALES HERB??VORO </h6>
                         <h3>{{$herb??voro['Nombre']}} </h3>
                         <p>{{$herb??voro['Nombre_C']}} </p>
                         <p>{{$herb??voro['Habitat']}} </p>
                         <p>{{$herb??voro['Alimento']}} </p> 
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
                    <h3>M??s</h3>
                    <p>si te gusto esta peque??a descripci??n sobre los animalitos, puedes contactarnos para saber mas o para sacar un paquete en nuestro Zoologico</p>
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