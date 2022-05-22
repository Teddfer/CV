@extends('layouts.template')

@section('title', 'Inicio')

@section('mis_Estilos')

@endsection

@section('content')
<br>
<br>
<br>
<section class="content">
    <section id="about">
            <div class="container">
               <div class="row">
             
                  <div class="col-md-12">
                     <div class="post-entry">

                        <div class="col-md-6">
                            <div class="header-page-about">
                              <h2 class="intro-heading">Acerca de Mi</h2>
                           </div>
                            <p>Me considero una persona flexible, con miras a crecer y dedicado en el trabajo, funciono bajo presión y añado valor agregado a los lugares en donde eh trabajado. </p>
                           <div class="col-md-6 col-sm-4 no-padding">
                              <ul>
                                 <li><span>Nombre : </span> Cristofer Teddy Loc Quispe</li>
                                 <li><span>Trabajo : </span> Auxiliar de Oficina</li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-4 no-padding">
                              <ul>
                                 <li><span>Email : </span> <a href="#">clocquis@hmail.com</a></li>
                                 <li><span>Telefono : </span> <a href="#">(+51) 926 632 410</a></li>
                              </ul>
                           </div>
                           <hr>
                           <div class="col-md-12 no-padding mt-20">
                              <a class="btn btn " href="#">Descargar CV</a>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="post-image" style="background-image: url(img/teddy.jpg);"></div>
                           <div class="display-tc">
                              <div class="desc">
                                 <h3>Conocimientos</h3>
                                 <div class="skill-item">
                                    <h5>HTML & CSS</h5><span>80%</span>
                                    <div class="progress" data-percent="80%">
                                       <div class="progress-bar bar-null" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                    </div>
                                 </div>
                                 <div class="skill-item">
                                    <h5>PHP</h5><span>60%</span>
                                    <div class="progress" data-percent="60%">
                                       <div class="progress-bar bar-null" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                 </div>
                                 <div class="skill-item">
                                    <h5>Kotlin</h5><span>50%</span>
                                    <div class="progress" data-percent="50%">
                                       <div class="progress-bar bar-null" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
</section>

@endsection

@section('mis_Scripts')
    
@endsection
