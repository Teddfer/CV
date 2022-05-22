

<?php $__env->startSection('title', 'Principal'); ?>

<?php $__env->startSection('mis_Estilos'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                                 <h2>Hola! <br> soy Teddy Loc</h2>
                                 <h3>Yo soy
                                    <span id="typed-slide-1"></span>
                                    <span id="typed-strings-slide-1">

                                    <span>Diseñador Web</span>
                                    <span>Programador</span>
                                    <span>Administrador</span>
                                    <span>Ilustrador</span>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mis_Scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiPortafolio\app\views/home/index.blade.php ENDPATH**/ ?>