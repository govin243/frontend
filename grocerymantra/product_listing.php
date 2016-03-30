<?php include 'header.php'; ?>
<div class="box sidebarFilter">
  <div class="box-heading">Refine Search</div>
  <div class="filterbox">
  <div class="list-group-filter">
  <div class="list-group-item group-name">Categories</div>
    <div class="list-group-item">
      <div id="filter-group1">
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="1">
            Atta & Flours                      </label>
        </div>
		<div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="1">
            Wheat & Other Grains                     </label>
        </div>
		<div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="1">
            Rice & Rice Products                      </label>
        </div>
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="2">
            Dals	 & Pulses                    </label>
        </div>
              </div>
    </div>
        <div class="list-group-item group-name">Brands</div>
    <div class="list-group-item">
      <div id="filter-group1">
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="1">
            GM                      </label>
        </div>
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="2">
            24 Mantra                     </label>
        </div>
              </div>
    </div>
        <div class="list-group-item group-name">Price</div>
    <div class="list-group-item">
      <div id="filter-group2">
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="3">
            Rs. 100 - Rs. 499                      </label>
        </div>
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="4">
            Rs. 500 - Rs. 999                      </label>
        </div>
              </div>
    </div>
        <div class="list-group-item group-name">Weight</div>
    <div class="list-group-item">
      <div id="filter-group3">
               <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="5">
            1kg - 5kg                      </label>
        </div>
              </div>
    </div>
      </div>
  <div class="panel-footer text-right">
    <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
  </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	filter = [];	
	$('input[name^=\'filter\']:checked').each(function(element) {
		filter.push(this.value);
	});
	location = 'http://#/OPC08/OPC080192/OPC1/index.php?route=product/category&path=20&filter=' + filter.join(',');
});
//--></script> 
    <div class="box latest">
<div class="container">
<div class="row">
  <div class="box-heading">Latest</div>
  <div class="box-content">
			
	
	<div class="box-product productbox-grid" id="latest-grid">
    <div class="product-items">
    <div class="product-block product-thumb transition">
	  <div class="product-block-inner">
	  	
				<div class="image">
		<a href="#">
		<img src="./image/product/britannia_cashew_cookies_good_day_66_gm.jpg" title="Britannia Good Day Cashew Cookies 66 gm" alt="Britannia Good Day Cashew Cookies 66 gm" class="img-responsive">
		<img class="img-responsive hover-image" src="./image/product/britannia_cashew_cookies_good_day_66_gm.jpg" title="Britannia Good Day Cashew Cookies 66 gm" alt="Britannia Good Day Cashew Cookies 66 gm">
		</a>
		       
				<div class="button-group">
		<button type="button" class="addtocart"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
			</div>
		</div>
		
		
				
      	 <div class="product-details">
		<div class="caption">
 			       	<h4><a href="#">Britannia Good Day Cashew Cookies 66 gm</a></h4>
						
						<p class="price">
			  			  Rs 10.00			  			  			  
			  			</p>			
			<div class="button-group">
        	<button type="button" class="addtocart"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
        	</div>
			
        </div>
	  </div>
  	</div>
	</div>
</div>
  
        <div class="product-items">
    <div class="product-block product-thumb transition">
	  <div class="product-block-inner">
	  	
				<div class="image">
		<a href="#">
		<img src="./image/product/Tresemme_smooth_shine_conditioner_85ml.jpg" title="Tresemme Smooth & Shine Conditioner 85 ml" alt="Tresemme Smooth & Shine Conditioner 85 ml" class="img-responsive">
		<img class="img-responsive hover-image" src="./image/product/Tresemme_smooth_shine_conditioner_85ml.jpg" title="Tresemme Smooth & Shine Conditioner 85 ml" alt="Tresemme Smooth & Shine Conditioner 85 ml">
		</a>
		       
				<div class="button-group">
		<button type="button" class="addtocart"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
			</div>
		</div>
		
		
				
      	 <div class="product-details">
		<div class="caption">
 			       	<h4><a href="#">Tresemme Smooth & Shine Conditioner 85 ml</a></h4>
						
						<p class="price">
			  			  Rs 80.00			  			  			  
			  			</p>			
			<div class="button-group">
        	<button type="button" class="addtocart"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
        	</div>
			
        </div>
	  </div>
  	</div>
	</div>
</div>
    <div class="product-items">
    <div class="product-block product-thumb transition">
	  <div class="product-block-inner">
	  	
				<div class="image">
		<a href="#">
		<img src="./image/product/Surf-excel-detergent-liquid-500ml.jpg" title="Surf Excel Detergent Liquid 500 ml" alt="Surf Excel Detergent Liquid 500 ml" class="img-responsive">
		<img class="img-responsive hover-image" src="./image/product/Surf-excel-detergent-liquid-500ml.jpg" title="Surf Excel Detergent Liquid 500 ml" alt="Surf Excel Detergent Liquid 500 ml">
		</a>
		       
				<div class="button-group">
		<button type="button" class="addtocart"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
			</div>
		</div>
		
		
				
      	 <div class="product-details">
		<div class="caption">
 			       	<h4><a href="#">Surf Excel Detergent Liquid 500 ml</a></h4>
						
						<p class="price">
			  			  Rs 118.00			  			  			  
			  			</p>			
			<div class="button-group">
        	<button type="button" class="addtocart"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
        	</div>
			
        </div>
	  </div>
  	</div>
	</div>
</div>
  
  </div>
  </div>
</div>
</div>
</div>
<span class="latest_default_width" style="display:none; visibility:hidden"></span>
    	
<div id="banner0" class="single-banner">
    <div class="item">
        <a href="#"><img src="./image/ads/Saktibog-atta-and-sugar-Combo-online-offers.jpg" alt="Left Banner" class="img-responsive"></a>
      </div>
  </div>
<script type="text/javascript"><!--
$('.bannercarousel').owlCarousel({
	items: 1,
	autoPlay: 3000,
	singleItem: true,
	navigation: false,
	pagination: true,
	transitionStyle: 'fade'
});
--></script>  </aside><div id="content-top" class="col-sm-9">
            <div class="row category_thumb">
                <div class="col-sm-2 category_img">
				<div class="main-slider">
					<div id="slideshow0" class="owl-carousels owl-theme" style="opacity: 1; display: block;">
					<div class="slidersize">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="./image/slider/Slider-1.jpg">
           <div class="carousel-caption">>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="./image/slider/slider-2.jpg">
           <div class="carousel-caption">
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="./image/slider/Slider-1.jpg">
           <div class="carousel-caption">
          </div>
        </div><!-- End Item -->
        <div class="item">
          <img src="./image/slider/Slider-1.jpg">
           <div class="carousel-caption">
          </div>
        </div><!-- End Item -->
       
                
      </div><!-- End Carousel Inner -->


    	<ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="on"><span class="arrow  caption-four "></span><a href="#">Tropicana<br><small>Juice</small></a></li>
          <li data-target="#myCarousel" data-slide-to="1" ><a href="#">Grapes<br><small>Carnival</small></a></li>
          <li data-target="#myCarousel" data-slide-to="2" ><a href="#">Fresho<br><small>Melons</small></a></li>
		  <li data-target="#myCarousel" data-slide-to="3" ><a href="#">24 - Mantra<br><small>Atta</small></a></li>
         </ul>


    </div><!-- End Carousel -->
    </div>
 			 </div>
		</div>
	</div>
  </div><!-- End of Tab base slider-->
<!-- End of Tab base slider-->
 <!-- End of Tab base slider-->
                
                  
                 
      <div class="category_filter">
        <div class="col-md-4 btn-list-grid">
          <div class="btn-group">
            <button type="button" id="grid-view" class="btn btn-default grid active" data-toggle="tooltip" title="" data-original-title="Grid"><i class="fa fa-th"></i></button>
			<button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="" data-original-title="List"><i class="fa fa-th-list"></i></button>
          </div>
        </div>
		<div class="product-heading"><h1> Grocery & Staples (246)</h1></div>
		<div class="pagination-right">
		 <div class="sort-by-wrapper">
			<div class="col-md-2 text-right sort-by">
			  <label class="control-label" for="input-sort">Sort By:</label>
			</div>
			<div class="col-md-3 text-right sort">
			  <select id="input-sort" class="form-control hasCustomSelect" onchange="location = this.value;" style="-webkit-appearance: menulist-button; width: 150px; position: absolute; opacity: 0; height: 34px; font-size: 13px;">
												<option value="#" selected="selected">Popularity</option>
																<option value="#">Price - Low to High</option>
																<option value="#">Price - High to low</option>
																<option value="#">Alphabetical</option>
																<option value="#">Offers</option>
															</select><span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 124px; display: inline-block;">Popularity</span></span>
			</div>
		 </div>
		 
      </div>
	  </div>
	  
      <div class="row cat_prod">
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">Buy 1 Get 1
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                COMBO</div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 501.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>	
		</div>
						
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                        <div class="ddstyle">
           <select class="selectpicker">
    <option>2 kg Pouch - Rs. 90</option>
    <option class="special">5 kg Pouch - Rs. 197</option>
    <option>10 kg Pouch - Rs. 319</option>
  </select>
    </div>
			<p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
        
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">Buy 2 Get 3
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <br>
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <div class="product-block product-thumb">
		  	 <div class="product-block-inner">
			 <div class="gm-combo-block"><div class="gm-combo-orange">
                                </div><span class="icon icon-save"></span><span>SAVE <span class="WebRupee">Rs.</span> 2.00</span></div><br> 
						<div class="image">
		<a href="">
		<img src="./image/product/Product-listing-thumbnails/idli-rawa.jpg" title="idli-rawa" alt="idli-rawa" class="img-responsive">
		</a>
				      
				
		</div>
						 
                        <div class="product-details">
              
              
			  <div class="caption">
				 GM 
                <div class="pname-bottom"><h4><a href="">Idli Rawa</a></h4></div>
                             <p> 500 gm </p>
                                <p class="price">
                                    <span class="price-old">Rs. 20.00</span><span class="price-new">Rs. 18.00</span>
                                </p>
                			<div>
								<div class="gm-rate-count-btn"><span class="gm-qty-label">Qty</span><input value="1" type="text" id="p40020127_qty" maxlength="2"></div>
								<a class="gm-add-button a2c" href="javascript:void(0)" id="p_40020127_1">
                            ADD</a>
							</div>	
              </div>
            </div>
			</div>
          </div>
        </div>
              </div>
            
                  </div>
    </div>
</div>
<?php include 'footer.php'; ?>