

<?php $__env->startSection('title', 'Proyectos'); ?>

<?php $__env->startSection('mis_Estilos'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
<section id="work" class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>Mis Proyectos</h2>
                        <span></span>
                     </div>
                     <p>En esta sección muestro algunos proyectos en los que eh ido trabajando a lo largo de todo este tiempo.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 px-25 text-center">
                     <ul class="work-filter">
                        <li class="filter all active" data-filter="*">All</li>
                        <li class="filter" data-filter=".branding">Branding</li>
                        <li class="filter" data-filter=".web">Web</li>
                        <li class="filter" data-filter=".Diseño">Diseño</li>
                        <li class="filter" data-filter=".photo">Otros</li>
                     </ul>
                  </div>
                  <div class="col-lg-12">
                     <div class="work-gallery"> 
                        <div class="col-lg-4 col-md-6 col-sm-12 all photo Diseño">
                           <div class="work">
                              <img class="img-fluid" src="<?=URL.'img/CAFE PRESENTACION.png'?>" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a>Diseño Cafe Misha</a></h3>
                                    <span>Branding, Otros</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all web">
                           <div class="work">
                              <img class="img-fluid" src="<?=URL.'img/cod.png'?>" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a>Programación</a></h3>
                                    <span>Diseño, Web, Branding</span>
                                 </div>
                              </div>
                           </div>
                        </div>          
                        <div class="col-lg-4 col-md-6 col-sm-12 all branding web">
                           <div class="work">
                              <img class="img-fluid" src="<?=URL.'img/Mockup.jpg'?>" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a>Mockup HSBC</a></h3>
                                    <span>Diseño, Web</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all web branding">
                           <div class="work">
                              <img class="img-fluid" src="<?=URL.'img/bd.jpeg'?>" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a>Base de Datos</a></h3>
                                    <span>Web, Branding</span>
                                 </div>
                              </div>
                           </div>
                        </div>            
                        <div class="col-lg-4 col-md-6 col-sm-12 all Diseño">
                           <div class="work">
                              <img class="img-fluid" src="<?=URL.'img/Inca Kola.jpg'?>" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a>Diseño Inca Kola</a></h3>
                                    <span>Diseño, Otros</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all branding">
                           <div class="work">
                              <img class="img-fluid" src="<?=URL.'img/Maqueta_Web3.jpg'?>" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a>Maqueta Web</a></h3>
                                    <span>Web, Branding</span>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mis_Scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiPortafolio\app\views/home/proyectos.blade.php ENDPATH**/ ?>