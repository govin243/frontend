<!DOCTYPE html>
<html dir="ltr" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shopping Cart</title>
<base href=".">
<script src="./js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="./css/custom.css" />
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<link href="./css/stylesheet.css" rel="stylesheet">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
<script type="text/javascript" src="./js/doubletaptogo.js"></script>
<script type="text/javascript" src="./js/jquery.custom.min.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<script type="text/javascript" src="./js/jstree.min.js"></script>
<script type="text/javascript" src="./js/tabs.js"></script>

</head>
<body class="product-category-20 layout-2 left-col">
<nav id="top">
  <div class="container">
  <div class="row">
    <div class="headertop">    
    <div class="text"><a href="http://opencart-demos.org/OPC08/OPC080192/OPC3/#">new offer this weekend only! hurry shop now!</a></div>
    </div>
	<div class="lang-curr"><div class="pull-left">
<form action="http://opencart-demos.org/OPC08/OPC080192/OPC3/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">
  <div class="btn-group">
    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm hidden-md">Select Delivery City</span><i class="fa fa-caret-down"></i></button>
    <ul class="dropdown-menu language-menu">
            <li><a href="http://opencart-demos.org/OPC08/OPC080192/OPC3/en">Mumbai</a></li>
            <li><a href="http://opencart-demos.org/OPC08/OPC080192/OPC3/ar">Navi Mumbai</a></li>
            <li><a href="http://opencart-demos.org/OPC08/OPC080192/OPC3/ar">Thane</a></li>
          </ul>
  </div>
  <input type="hidden" name="code" value="">
  <input type="hidden" name="redirect" value="http://opencart-demos.org/OPC08/OPC080192/OPC3/index.php?route=common/home">
</form>
</div>
<div class="pull-left">
<form action="http://opencart-demos.org/OPC08/OPC080192/OPC3/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="currency">
  <div class="btn-group">
    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs hidden-sm hidden-md">Available Delivery Slot</span> <i class="fa fa-caret-down"></i></button>
    <ul class="dropdown-menu currency-menu">
        <li><a href="#">Available morning 7am to 12pm</a></li>
        <li><a href="#">Available Evening 7pm to 10am</a></li>
                </ul>
  </div>
  <input type="hidden" name="code" value="">
  <input type="hidden" name="redirect" value="http://opencart-demos.org/OPC08/OPC080192/OPC3/index.php?route=common/home">
</form>
</div>
</div>
  </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
	<div class="header-left">
      <div class="col-sm-4 header-logo">
        <div id="logo">
                    <a href="#"><img src="image/grocery-mantra-logo.png" title="Grocery Mantra" alt="Your Store" class="img-responsive"></a>
                  </div>
      </div>
	  </div>
	  <div class="header-right">
	   <div class="content_headercms_top">
	   <div class="headertopright">
	       <div class="headertopleft"><div class="shipping-cms"><div class="shipping-text"><div class="text1">free shipping</div><div class="text2">on orders over ₹500</div></div></div></div>    <div class="contact-text"><div class="text1">get in touch - </div></div>	   <div class="text2"><i class="fa fa-phone"></i> <a href="#"><span class="hidden-xs hidden-sm hidden-md">(022) 2566 - 5555</span></a></div>
	    
	   </div>
	   </div>
	   
	  <div id="top-links" class="nav pull-right">
	  
	   <div class="lang-curr"><div class="pull-left">
<form action="" method="post" enctype="multipart/form-data" id="language">
  <div class="btn-group">
    <marquee direction="left"><b><font color="red">Place Your Order Before 12:00 PM Everyday To Avail Same Day Delivery.</font></b></marquee>
  </div>
  <input type="hidden" name="code" value="">
  <input type="hidden" name="redirect" value="">
</form>
</div>
<div class="pull-left">

</div>
</div>

    </div>
	   
      <div class="col-sm-5 header-search">
			<div id="search" class="input-group">

<div class="searchbox" id="searchbox">
<input type="text" name="search" value="" placeholder="Search Products Here" class="form-control input-lg search-autocomplete ui-autocomplete-input" autocomplete="off">
<span class="input-group-btn">
<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
</span>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul></div>
</div>

<script type="text/javascript">

/* Search */
	$('#search input[name=\'search\']').parent().find('button').on('click', function() {
		url = $('base').attr('href') + 'index.php?route=product/search';

		var search = $('.header-search input[name=\'search\']').val();

		if (search) {
			url += '&search=' + encodeURIComponent(search);
		}
		
		var search = $('.header-search input[name=\'search\']').prop('value');
	
		var category_id = $('.header-search select[name=\'category_id\']').prop('value');
	
		if (category_id > 0) {
			url += '&category_id=' + encodeURIComponent(category_id);
		}

		location = url;
	});

	$('#search input[name=\'search\']').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('.header-search input[name=\'search\']').parent().find('button').trigger('click');
		}
	});
	
	$('select[name=\'category_id\']').on('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').prop('disabled', true);
	} else {
		$('input[name=\'sub_category\']').prop('disabled', false);
	}
});

$('select[name=\'category_id\']').trigger('change');
</script>			<div class="dropdown myaccount"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right myaccount-menu" style="">
                        <li><a href="#">Register</a></li>
            <li><a href="#">Login</a></li>
                      </ul>
        </div>
      </div>
	  
	  	  
      </div>
    </div>
  </div>
</header>

<div class="nav-inner-cms">
  <div class="header-bottom">
	<div class="main-menu container" id="cms-menu">
	
	<div class="row">
	
	    <div class="box-category-heading"><span class="heading-img"></span>Categories</div>
        <ul class="main-navigation">
			<li class="first level0"><a href="#">Home</a></li>
            <li class="level0"><a href="#">New Arrivals</a></li>
            <li class="level0"><a href="#">Today's Hot Deal</a></li>   
			       		<li class="level0"> <a href="#">Combo Offers</a></li>       
						<li class="level0"><a href="#">Bogo Offers</a></li>
			
         </ul><div class="col-sm-3 header-cart"><div id="cart" class="btn-group btn-block">
  <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">(0) items</span></button>
  <ul class="dropdown-menu pull-right cart-menu">
        <li>
      <p class="text-center">Your shopping cart is empty!</p>
    </li>
      </ul>
</div>
</div>
		
     </div>
	  </div>
     </div>
</div>

<nav class="nav-container" role="navigation">
<div class="nav-inner">
<!-- ======= Menu Code START ========= -->
<!-- Opencart 3 level Category Menu-->
<div class="container">
<div class="row">
<div id="menu" class="main-menu">

<div class="nav-responsive" style="display: none;"><span>Menu</span><div class="expandable"></div></div>
  <ul class="main-navigation">
        <li><a href="#">Cookware</a>
      
                <ul>
                             										
				<li>
									<a href="#" class="activSub">Kitchen Tools</a> 					
												<ul class="col3">
									<li><a href="#">Grinders</a></li>
				 					<li><a href="#">Kitchen Cutters</a></li>
				 					<li><a href="#">Kitchen Knife Sets</a></li>
				 					<li><a href="#">Spoon Fork Set</a></li>
				 				</ul>
			  		  
			</li>		
                              										
				<li>
									<a href="#" class="activSub">Steel</a> 					
												<ul class="col3">
									<li><a href="#">Quarter Plate</a></li>
				 					<li><a href="#">Servant Spoon</a></li>
				 					<li><a href="#">Steel plate</a></li>
				 					<li><a href="#">Table Spoon</a></li>
				 				</ul>
			  		  
			</li>		
                              										
				<li>
									<a href="#" class="activSub">Nonstick</a> 					
												<ul class="col3">
									<li><a href="#">Fry pan</a></li>
				 					<li><a href="#">Gravy Pan</a></li>
				 					<li><a href="#">Pressure Cooker</a></li>
				 					<li><a href="#">Teflon</a></li>
				 				</ul>
			  		  
			</li>		
                            </ul>
                  </li>
        <li><a href="#">Clothing</a>
          </li>
        <li><a href="#">Accessories</a>
      
                <ul>
                             										
				<li>
									<a href="#" class="activSub">Cosmetics</a> 					
												<ul class="col3">
									<li><a href="#">Eye Makeup</a></li>
				 					<li><a href="#">Foundation</a></li>
				 					<li><a href="#">Lip Cream</a></li>
				 					<li><a href="#">Wedding Suit</a></li>
				 				</ul>
			  		  
			</li>		
                              										
				<li>
									<a href="#" class="activSub">Electronics</a> 					
												<ul class="col3">
									<li><a href="#">Desktops</a></li>
				 					<li><a href="#">Laptop</a></li>
				 					<li><a href="#">Simple Shirt</a></li>
				 					<li><a href="#">Strip Shirt</a></li>
				 				</ul>
			  		  
			</li>		
                              										
				<li>
									<a href="#" class="activSub">Speaker System</a> 					
												<ul class="col3">
									<li><a href="#">Disco Speaker</a></li>
				 					<li><a href="#">Home Speaker</a></li>
				 					<li><a href="#">Loud Speaker</a></li>
				 					<li><a href="#">Woofer Speaker</a></li>
				 				</ul>
			  		  
			</li>		
                            </ul>
                  </li>
        <li><a href="#">Wallet</a>
          </li>
        <li><a href="#">Furniture</a>
          </li>
        <li><a href="#">Machines</a>
          </li>
        <li><a href="#">Bag</a>
          </li>
        <li><a href="#">Tools</a>
          </li>
        <li><a href="#">Lights</a>
          </li>
        <li><a href="#">Speaker</a>
          </li>
        <li><a href="#">Games</a>
          </li>
        
    
	<li class="first level0"><a href="#">Affiliates</a></li>
	<li class="level0"><a href="#">Gift Vouchers</a></li>
	<li class="level0"><a href="#">Brands</a></li>   
		<li class="level0"> <a href="#">Blogs</a></li>       
		<li class="level0"><a href="#">Contact Us</a></li>

  </ul>
</div>
</div>
<!-- ======= Menu Code END ========= -->
</div>
</div>
</nav>   
<div class="container ">
  
  <div class="row">
                <aside id="column-left" class="col-sm-3 hidden-xs">
    <div class="box megnorcategory">
<div class="box-heading box-category-heading">Categories</div>
<div class="box-content" style="display: block; height:450px;">
<ul id="nav-one" class="dropmenu">
        
    
  <li class="menu_1 activ-cat topcat">
  	<a href="#" class="activSub">Cookware</a> 
        <span class="active_menu"></span>					
  				
    	<div class="categorybg">
		 <ul>
		 	 			              	

	            <li class="categorycolumn">
									<a href="#" class="activSub">Kitchen Tools</a> 					
				
												<ul>
									<li><a href="#">Grinders</a></li>
				 					<li><a href="#">Kitchen Cutters</a></li>
				 					<li><a href="#">Kitchen Knife Sets</a></li>
				 					<li><a href="#">Spoon Fork Set</a></li>
				 				</ul>
							  		  
			</li>		
                                 	

	            <li class="categorycolumn">
									<a href="#" class="activSub">Steel</a> 					
				
												<ul>
									<li><a href="#">Quarter Plate</a></li>
				 					<li><a href="#">Servant Spoon</a></li>
				 					<li><a href="#">Steel plate</a></li>
				 					<li><a href="#">Table Spoon</a></li>
				 				</ul>
							  		  
			</li>		
                                 	

	            <li class="categorycolumn">
									<a href="#" class="activSub">Nonstick</a> 					
				
												<ul>
									<li><a href="#">Fry pan</a></li>
				 					<li><a href="#">Gravy Pan</a></li>
				 					<li><a href="#">Pressure Cooker</a></li>
				 					<li><a href="#">Teflon</a></li>
				 				</ul>
							  		  
			</li>		
                    		 </ul>
	</div>
	
  </li>
      
    
  <li class="menu_2  topcat">
  				
	<a href="#">Clothing</a> 	
  				
    
  </li>
      
    
  <li class="menu_3 activ-cat topcat">
  	<a href="#" class="activSub">Accessories</a> 
        <span class="active_menu"></span>					
  				
    	<div class="categorybg">
		 <ul>
		 	 			              	

	            <li class="categorycolumn">
									<a href="#" class="activSub">Cosmetics</a> 					
				
												<ul>
									<li><a href="#">Eye Makeup</a></li>
				 					<li><a href="#">Foundation</a></li>
				 					<li><a href="#">Lip Cream</a></li>
				 					<li><a href="#">Wedding Suit</a></li>
				 				</ul>
							  		  
			</li>		
                                 	

	            <li class="categorycolumn">
									<a href="#" class="activSub">Electronics</a> 					
				
												<ul>
									<li><a href="#">Desktops</a></li>
				 					<li><a href="#">Laptop</a></li>
				 					<li><a href="#">Simple Shirt</a></li>
				 					<li><a href="#">Strip Shirt</a></li>
				 				</ul>
							  		  
			</li>		
                                 	

	            <li class="categorycolumn">
									<a href="#" class="activSub">Speaker System</a> 					
				
												<ul>
									<li><a href="#">Disco Speaker</a></li>
				 					<li><a href="#">Home Speaker</a></li>
				 					<li><a href="#">Loud Speaker</a></li>
				 					<li><a href="#">Woofer Speaker</a></li>
				 				</ul>
							  		  
			</li>		
                    		 </ul>
	</div>
	
  </li>
      
    
  <li class="menu_4  topcat">
  				
	<a href="#">Wallet</a> 	
  				
    
  </li>
      
    
  <li class="menu_5  topcat">
  				
	<a href="#">Furniture</a> 	
  				
    
  </li>
      
    
  <li class="menu_6  topcat">
  				
	<a href="#">Machines</a> 	
  				
    
  </li>
      
    
  <li class="menu_7  topcat">
  				
	<a href="#">Bag</a> 	
  				
    
  </li>
      
    
  <li class="menu_8  topcat">
  				
	<a href="#">Tools</a> 	
  				
    
  </li>
      
    
  <li class="menu_9  topcat">
  				
	<a href="#">Lights</a> 	
  				
    
  </li>
      
    
  <li class="menu_10  topcat">
  				
	<a href="#">Speaker</a> 	
  				
    
  </li>
      
    
  <li class="menu_11  topcat">
  				
	<a href="#">Games</a> 	
  				
    
  </li>
      
    
  
   </ul>
  </div>
</div>