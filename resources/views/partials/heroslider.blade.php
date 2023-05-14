 <div class="tm-heroslider" data-bgimage="{{ asset('images/' . $img) }}">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-7 col-md-8 col-12">
                 <div class="tm-heroslider-contentwrapper">
                     <div class="tm-heroslider-content">
                         <h1>{{$title}}</h1>
                         <p>{{$text}}</p>
                         <a href="{{LaravelLocalization::localizeUrl(route('products'))}}" class="tm-button">Shop Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
