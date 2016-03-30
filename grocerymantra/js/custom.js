var widthClassOptions = [];
var widthClassOptions = ({
		bestseller       : 'bestseller_default_width',		
		featured         : 'featured_default_width',
		special          : 'special_default_width',
		latest           : 'latest_default_width',
		related          : 'related_default_width',
		additional       : 'additional_default_width',
        tabbestseller    : 'tabbestseller_default_width',		
		tabfeatured      : 'tabfeatured_default_width',
		tabspecial       : 'tabspecial_default_width',
		tablatest        : 'tablatest_default_width',
		module           : 'module_default_width',
		blog         	 : 'blog_default_width'
});


$(document).ready(function(){

	$('#content select,header select').customSelect();
	$('ul.breadcrumb').prependTo('.row #content');
	$('.alert').prependTo('.row #content');
	$('body[class^="product-product"] .alert.alert-info').insertAfter('.row #content .form-group.qty');
	
	$('#menu li:has(ul)').doubleTapToGo();

	$("#cart .dropdown-toggle").click(function(){
            $(this).toggleClass("active");
			$(".cart-menu").slideToggle("slow");
			$(".myaccount-menu").slideUp("slow");
			$(".language-menu").slideUp("slow");
			$(".currency-menu").slideUp("slow");
            $(".myaccount .dropdown-toggle").removeClass('active');
        	return false;
    });
	
	$("#currency .dropdown-toggle").click(function(){
			$('#currency').addClass("active");
           	$(".language-menu").slideUp("slow");
        	$(".currency-menu").slideToggle("slow");
			$(".cart-menu").slideUp("slow");
			$(".myaccount-menu").slideUp("slow");
			$(".myaccount .dropdown-toggle").removeClass('active');
        	return false;
    });
		
    $("#language .dropdown-toggle").click(function(){
			$('#language').addClass("active");
            $(".currency-menu").slideUp("slow");
        	$(".language-menu").slideToggle("slow");
			$(".cart-menu").slideUp("slow");
			$(".myaccount-menu").slideUp("slow");
			$(".myaccount .dropdown-toggle").removeClass('active');
        	return false;
    });
		
	$(".myaccount > .dropdown-toggle").click(function(){          
			$(".cart-menu").slideUp("slow");
			$(".myaccount-menu").slideToggle("slow");
			$(".language-menu").slideUp("slow");
			$(".currency-menu").slideUp("slow");	
 			$(this).toggleClass("active");		
			$("#cart .dropdown-toggle").removeClass('active');
        	return false;
    });
	
	
	$('.write-review,.review-count').on('click', function() {
	$('html, body').animate({scrollTop: $('#tabs_info').offset().top}, 'slow');
	});

});

$(document).click(function(){
	$(".cart-menu").slideUp('slow');
	$(".myaccount-menu").slideUp('slow');
	$(".language-menu").slideUp("slow");
	$(".currency-menu").slideUp("slow");

	$(".myaccount > .dropdown-toggle").removeClass('active');
	$("#cart .dropdown-toggle").removeClass('active');
});

function mobileToggleMenu(){
	if ($(window).width() < 980)
	{
		$("#footer .mobile_togglemenu").remove();
		$("#footer .column h5").append( "<a class='mobile_togglemenu'>&nbsp;</a>" );
		$("#footer .column h5").addClass('toggle');
		$("#footer .mobile_togglemenu").click(function(){
			$(this).parent().toggleClass('active').parent().find('ul').toggle('slow');
		});

	}else{
		$("#footer .column h5").parent().find('ul').removeAttr('style');
		$("#footer .column h5").removeClass('active');
		$("#footer .column h5").removeClass('toggle');
		$("#footer .mobile_togglemenu").remove();
	}
	
}
$(document).ready(function(){mobileToggleMenu();});
$(window).resize(function(){mobileToggleMenu();});


function mobileToggleColumn(){
	if ($(window).width() < 980)
	{
		$('#column-left,#column-right').insertAfter('#content');
		$("#column-left .box-heading .mobile_togglemenu,#column-right .box-heading .mobile_togglemenu").remove();
		$("#column-left .box-heading,#column-right .box-heading").append( "<a class='mobile_togglemenu'>&nbsp;</a>" );
		$("#column-left .box-heading,#column-right .box-heading").addClass('toggle');
		$("#column-left .box-heading .mobile_togglemenu,#column-right .box-heading .mobile_togglemenu").click(function(){
			$(this).parent().toggleClass('active').parent().find('.box-content,.filterbox,.list-group').slideToggle('slow');
		});
	}else{
		$('#column-left,#column-right').insertBefore('#content');
		$('.common-home #column-left,.common-home #column-right').insertBefore('#content-top');
		$("#column-left .box-heading,#column-right .box-heading").parent().find('.box-content,.filterbox,.list-group').removeAttr('style');
		$("#column-left .box-heading,#column-right .box-heading").removeClass('active');
		$("#column-left .box-heading,#column-right .box-heading").removeClass('toggle');
		$("#column-left .box-heading .mobile_togglemenu,#column-right .box-heading .mobile_togglemenu").remove();
	}
}
$(document).ready(function(){mobileToggleColumn();});
$(window).resize(function(){mobileToggleColumn();});

$(document).ready(function(){
	$(".box-category-heading").click(function(){
	$(".megnorcategory .box-content").not('.common-home .megnorcategory .box-content').slideToggle(800);
	$('.box-category-heading').not('.common-home .box-category-heading').toggleClass('active');
	});
}); 

$(document).ready(function(){
  $(".dropdown-toggle").click(function(){
    $("ul.dropdown-toggle").toggle('slow');
  });
  
});


function LangCurDropDown(selector,subsel){
	var main_block = new HoverWatcher(selector);
	var sub_ul = new HoverWatcher(subsel);
	$(selector).click(function() {
		$(selector).addClass('active');
		$(subsel).slideToggle('slow');
		setTimeout(function() {
			if (!main_block.isHoveringOver() && !sub_ul.isHoveringOver())
				$(subsel).stop(true, true).slideUp(450);
				$(selector).removeClass('active');
		}, 3000);
	});
	
	$(subsel).hover(function() {
		setTimeout(function() {
			if (!main_block.isHoveringOver() && !sub_ul.isHoveringOver())
				$(subsel).stop(true, true).slideUp(450);
		}, 3000);
	});	
}


$(document).ready(function(){
	LangCurDropDown('.myaccount','.myaccount-menu');
	LangCurDropDown('#currency','.currency-menu');
	LangCurDropDown('#language','.language-menu');
	LangCurDropDown('#cart','.cart-menu');
});

function leftright()
{
	if ($(window).width() < 980){
			if($('.category_filter .col-md-3, .category_filter .col-md-2, .category_filter .col-md-1').hasClass('text-right')==true){
			$(".category_filter .col-md-3, .category_filter .col-md-2, .category_filter .col-md-1").addClass('text-left');
			$(".category_filter .col-md-3, .category_filter .col-md-2, .category_filter .col-md-1").removeClass('text-right');
			}
	}
}

$(document).ready(function(){leftright();});
$(window).resize(function(){leftright();});

function menuResponsive(){
	 
	if ($(window).width() < 980){
		$('.nav-responsive').css('display','block');
		if($('.main-navigation').hasClass('treeview')!=true){
			$("#menu").addClass('responsive-menu');
			$("#menu").removeClass('main-menu');
			$("#menu .main-navigation").treeview({
				animated: "slow",
				collapsed: true,
				unique: true		
			});
			$('#menu .main-navigation a.active').parent().removeClass('expandable');
			$('#menu .main-navigation a.active').parent().addClass('collapsable');
			$('#menu .main-navigation .collapsable ul').css('display','block');		
		}
	
	}else{
		$("#menu .hitarea").remove();
		$("#menu").removeClass('responsive-menu');
		$("#menu").addClass('main-menu');
		$(".main-navigation").removeClass('treeview');
		$("#menu ul").removeAttr('style');
		$('#menu li').removeClass('expandable');
		$('#menu li').removeClass('collapsable');
		$('.nav-responsive').css('display','none');
	}

}
$(document).ready(function(){menuResponsive();});
$(window).resize(function(){menuResponsive();});

function productCarouselAutoSet() { 
	$("#content .product-carousel, .banners-slider-carousel .product-carousel,.hometab .product-carousel").each(function() {
		var objectID = $(this).attr('id');
		var myObject = objectID.replace('-carousel','');
		if(myObject.indexOf("-") >= 0)
			myObject = myObject.substring(0,myObject.indexOf("-"));		
		if(widthClassOptions[myObject])
			var myDefClass = widthClassOptions[myObject];
		else
			var myDefClass= 'grid_default_width';
		var slider = $("#content #" + objectID + ",  .banners-slider-carousel #"+ objectID+ ",  .hometab #"+ objectID);
		slider.sliderCarousel({
			defWidthClss : myDefClass,
			subElement   : '.slider-item',
			subClass     : 'product-block',
			firstClass   : 'first_item_tm',
			lastClass    : 'last_item_tm',
			slideSpeed : 200,
			paginationSpeed : 800,
			autoPlay : false,
			stopOnHover : false,
			goToFirst : true,
			goToFirstSpeed : 1000,
			goToFirstNav : true,
			pagination : false,
			paginationNumbers: false,
			responsive: true,
			responsiveRefreshRate : 200,
			baseClass : "slider-carousel",
			theme : "slider-theme",
			autoHeight : true
		});
		
		var nextButton = $(this).parent().find('.next');
		var prevButton = $(this).parent().find('.prev');
		nextButton.click(function(){
			slider.trigger('slider.next');
		})
		prevButton.click(function(){
			slider.trigger('slider.prev');
		})
	});
}
//$(window).load(function(){productCarouselAutoSet();});
$(document).ready(function(){productCarouselAutoSet();});


function productListAutoSet() { 
	$("#content .productbox-grid").each(function(){
		var objectID = $(this).attr('id');
		if(objectID.length > 0){
			if(widthClassOptions[objectID.replace('-grid','')])
				var myDefClass= widthClassOptions[objectID.replace('-grid','')];
		}else{
			var myDefClass= 'grid_default_width';
		}	
		$(this).smartColumnsRows({
			defWidthClss : myDefClass,
			subElement   : '.product-items',
			subClass     : 'product-block'
		});
	});		
}
$(window).load(function(){productListAutoSet();});
$(window).resize(function(){productListAutoSet();});


function HoverWatcher(selector){
	this.hovering = false;
	var self = this;

	this.isHoveringOver = function() {
		return self.hovering;
	}

	$(selector).hover(function() {
		self.hovering = true;
	}, function() {
		self.hovering = false;
	})
}

function LangCurDropDown(selector,subsel){
	var main_block = new HoverWatcher(selector);
	var sub_ul = new HoverWatcher(subsel);
	$(selector).click(function() {
		$(selector).addClass('active');
		$(subsel).slideToggle('slow');
		setTimeout(function() {
			if (!main_block.isHoveringOver() && !sub_ul.isHoveringOver())
				$(subsel).stop(true, true).slideUp(450);
				$(selector).removeClass('active');
		}, 3000);
	});
	
	$(subsel).hover(function() {
		setTimeout(function() {
			if (!main_block.isHoveringOver() && !sub_ul.isHoveringOver())
				$(subsel).stop(true, true).slideUp(450);
		}, 3000);
	});	
}

$(document).ready(function(){

	LangCurDropDown('#currency','.currency_div');
	LangCurDropDown('#language','.language_div');

	$('.nav-responsive').click(function() {
        $('.responsive-menu .main-navigation').slideToggle();
		$('.nav-responsive div').toggleClass('active');
		
    }); 

	$(".treeview-list").treeview({
		animated: "slow",
		collapsed: true,
		unique: true		
	});
	$('.treeview-list a.active').parent().removeClass('expandable');
	$('.treeview-list a.active').parent().addClass('collapsable');
	$('.treeview-list .collapsable ul').css('display','block');
});

 
$(document).ready(function(){
  $(".tm_headerlinks_inner").click(function(){
    $(".header_links").toggle('slow');
  });
  
});

/*For Grid and List View Buttons*/
function gridlistactive(){
$('.btn-list-grid button').on('click', function() {
if($(this).hasClass('grid')) {
  $('.btn-list-grid button').addClass('active');
  $('.btn-list-grid button.list').removeClass('active');
}
  else if($(this).hasClass('list')) {
$('.btn-list-grid button').addClass('active');
  $('.btn-list-grid button.grid').removeClass('active');
  }
});
}
$(document).ready(function(){gridlistactive()});
$(window).resize(function(){gridlistactive()});



/*For Back to Top button*/
$(document).ready(function(){
$("body").append("<a class='top_button' title='Back To Top' href=''>TOP</a>");

$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 70) {
			$('.top_button').fadeIn();
		} else {
			$('.top_button').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('.top_button').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});
});


function blogCrop(){
	$('.information-blogger-blogs .blog-image').each(function() {									  
	var that = $(this);
	var url = that.find('img').attr('src');
	that.css({'background-image':'url("' + url + '")'});
});
}
jQuery(document).ready(function() {blogCrop();});
jQuery(window).resize(function() {blogCrop();});


function bannerToggle(){
	if ($(window).width() < 768)
	{
		$(".subbanner-cms2 .banner_toggle").remove();
		$(".subbanner-cms2 .sub-heading").append("<a class='banner_toggle'></a>");
		$(".subbanner-cms2 .sub-heading").addClass('toggle');
		$(".subbanner-cms2 .banner_toggle").click(function(){
			$(this).parent().toggleClass('active').parent().find('.subbanner-inner').slideToggle('slow');
		});

	}else{
		$(".subbanner-cms2 .sub-heading").parent().find('.subbanner-inner').removeAttr('style');
		$(".subbanner-cms2 .sub-heading").removeClass('active');
		$(".subbanner-cms2 .sub-heading").removeClass('toggle');
		$(".subbanner-cms2 .banner_toggle").remove();
	}	
}
$(document).ready(function(){bannerToggle();});	
$(window).resize(function(){bannerToggle();});


function subscribe()
{
	var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var email = $('#txtemail').val();
	if(email != "")
	{
		if(!emailpattern.test(email))
		{
		
			$('.text-danger').remove();
			var str = '<span class="error">Invalid Email</span>';
			$('#txtemail').after('<div class="text-danger">Invalid Email</div>');
			return false;
		}
		else
		{
			$.ajax({
				url: 'index.php?route=module/newsletters/news',
				type: 'post',
				data: 'email=' + $('#txtemail').val(),
				dataType: 'json',
				
				success: function(json) {
				$('.text-danger').remove();
				$('#txtemail').after('<div class="text-danger">' + json.message + '</div>');
				}
				
			});
			return false;
		}
	}
	else
	{
		$('.text-danger').remove();
		$('#txtemail').after('<div class="text-danger">Email Is Require</div>');
		$(email).focus();
		return false;
	}
}


/*More Category*/
$(document).ready(function(){

jQuery(function($){

var max_elem = 15;

if($(window).width() <=1200){ max_elem = 12;}

var items = $('#nav-one li.topcat');
var surplus = items.slice(max_elem, items.length);
surplus.wrapAll('<li class="level-top hidden_menu topcat"><div class="category-wrapper"><ul>');
$('.hidden_menu').prepend('<a href="" class="level-top">More</a><span class="active_menu"></span>');

	$('.hidden_menu').click(function(event){
			event.preventDefault();
			$(this).toggleClass('active').parent().find('.category-wrapper').slideToggle('slow');
	});
});
});


function headerfix() {
 		if ($(window).width() > 979){
	 			if ($(this).scrollTop() > 300) {
							$("header").addClass('smaller'); 
							$(".col-sm-3.header-cart").appendTo('.col-sm-5.header-search');
							
				}else{
			$("header").removeClass('smaller');
			jQuery(".col-sm-3.header-cart").insertAfter('#cms-menu .main-navigation');
		}
		}else{
			$("header").removeClass('smaller');	
			jQuery(".col-sm-3.header-cart").insertAfter('#cms-menu .main-navigation');
		}
}

jQuery(window).resize(function() {headerfix();});
jQuery(document).ready(function() {headerfix();});
jQuery(window).scroll(function() {headerfix();});