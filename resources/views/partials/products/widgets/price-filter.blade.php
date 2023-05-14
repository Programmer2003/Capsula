 <div class="single-widget widget-pricefilter">
     <h6 class="widget-title">Filter by Price</h6>
     <div class="widget-pricefilter-inner">
         <div class="tm-rangeslider" data-range_min="{{ $minPrice }}" data-range_max="{{ $maxPrice }}"
             data-cur_min="{{ request()->min ?? $minPrice + 50 }}" data-cur_max="{{ request()->max ?? $maxPrice - 50 }}">
             <div class="tm-rangeslider-bar nst-animating"></div>
             <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0" style="padding: 0"></span>
             <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0" style="padding: 0"></span>
         </div>
         <div class="widget-pricefilter-actions">
             <input type="hidden" name="min" value="{{ request()->min }}" class="tm-rangeslider-mininput">
             <input type="hidden" name="max" value="{{ request()->max }}" class="tm-rangeslider-maxinput">
             <p class="widget-pricefilter-price">Price: $<span
                     class="tm-rangeslider-leftlabel">value="{{ request()->min }}"</span>
                 - $<span class="tm-rangeslider-rightlabel">value="{{ request()->max }}"</span></p>
             <button class="widget-pricefilter-button">Filter</button>
         </div>
     </div>
 </div>
