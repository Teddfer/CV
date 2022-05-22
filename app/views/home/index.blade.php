@extends('layouts.template')

@section('title', 'Principal')

@section('mis_Estilos')

@endsection

@section('content')
<section class="content">
    <section id="banner" class="js-fullheight">
            <div class="flexslider js-fullheight">
               <!-- Slider -->
               <ul class="slides">
                  <li style="background-image: url(img/jkl.jpg);">
                     <div class="overlay-gradient"></div>
                     <div class="container">
                        <div class="col-md-8 js-fullheight slider-text">
                           <div class="slider-text-inner">
                              <div class="desc">
                                 <h2>Soy Teddy Loc</h2>
                                 <h3>Yo soy
                                    <span id="typed-slide-1"></span>
                                    <span id="typed-strings-slide-1">
                                    <span>Diseñador Web</span>
                                    <span>Programador</span>
                                    </span>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
</section>

@endsection

@section('mis_Scripts')
    
@endsection
