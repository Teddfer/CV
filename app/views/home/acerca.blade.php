@extends('layouts.template')

@section('title', 'Acerca')

@section('mis_Estilos')

@endsection

@section('content')
<br>
<br>
<section class="content">
    <section id="contact" class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>Acerca de</h2>
                        <span></span>
                     </div>
                     <p>En este apartado podras ponerte en contacto conmigo, asimismo puede enviarme cualquier comentario sobre la página.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 col-md-push-1">
                     <ul class="contact-info">
                        <li><i class="fas fa-map-marked-alt"></i>Psj. Tomasa Tito Condemayta 154, Urb. Chacarilla de Otero Sjl, Lima, Perú</li>
                        <li><i class="fas fa-phone-alt"></i>(+51) 926 632 410</li>
                        <li><i class="fas fa-envelope"></i><a href="#">cloquis@gmail.com</a></li>
                        <li><i class="fas fa-globe"></i><a href="#">cloc@sunat.gob.pe</a></li>
                     </ul>
                  </div>
                  <div class="col-md-7 col-md-push-1">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Nombre">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Mensaje"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group text-right">
                              <input type="submit" value="Enviar" class="btn btn-primary">
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