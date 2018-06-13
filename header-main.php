<!DOCTYPE html>
<HTML>

<HEAD> 
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	
	<meta name="keywords" content="Оборудование для автосервиса, техновектор, Техно кар, сход развал, 3D стенд, производитель, компьютерный стенд регулировки, автосервис, автомобиль , продажа , цена" />
	<meta name="description" content="Cтенды сход-развал от официального диллера. Оборудование для автосервисов. Звоните 8 (800) 200 48 01" />

	<TITLE> Стенды сход-развал схождения колес для автосервисов Техно Вектор </TITLE>   

<!-- /Yandex.WEB master -->
	<meta name="yandex-verification" content="2bf6ec96ef927bf7" />	   

<!-- Global WebMaster -->
	<meta name="google-site-verification" content="zsCrVv-iluYUgiqYVsQ-AAuaga1oyagBQ8MYOzk1k1A" />	

<!-- STYLE's ........................................................................................ -->

<!-- Join a style's (*.CSS) -->
	<link rel="stylesheet" href="CSS/styles.css">        
	
<!-- Join additional style's -->  
	<!-- for slider BxSlider -->
	<link href="CSS/jquery.bxslider.css" rel="stylesheet" /> <!-- bxSlider CSS file -->
	<script SRC="JS/jquery.min.js"></script>
	<script src="JS/jquery.bxslider.min.js"></script> 	

<!-- For animated -->
	<link href="CSS/animate.css" rel="stylesheet" /> <!-- bxSlider CSS file -->

<!-- Join additional component's -->
	<!-- Join a icon and favicon -->
	<link rel = "shortcut icon" type = "image/x-icon" href = "images/Favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	
	
</HEAD>

<!-- SCRIPT's ...................................................................................... -->

<!-- управление скрывающийся панелью ........................BEGIN -->
	<script type="text/javascript">
	$(document).ready(function()
	{
	    var $header_hidden = $("#header_hidden");

	    $(window).scroll(function()
	    {
	        if ( $(this).scrollTop() > 150 && $header_hidden.hasClass("default") ) /*>150 - если проскролил больше 200px, то... */
	        {
	            $header_hidden.fadeOut(
	            'fast',function() /*отображаем меню*/
	            {
	                $(this).removeClass("default")
	                .addClass("fixed transbg")
	                .fadeIn('fast');
	            });
	        }
	        else
	            if($(this).scrollTop() <= 150 && $header_hidden.hasClass("fixed"))
	            {
	                $header_hidden.fadeOut(
	                'fast',function() /*скрываем меню*/
	                {
	                    $(this).removeClass("fixed transbg")
	                    .addClass("default")
	                    .fadeIn('fast');
	                });
	            }
	        }
	    );//scroll

	    $header_hidden.hover
	    (
	        function()
	        {
	            if( $(this).hasClass('fixed') )
	            {
	                $(this).removeClass('transbg');
	            }
	        },
	        function()
	        {
	            if( $(this).hasClass('fixed') )
	            {
	                $(this).addClass('transbg');
	            }
	        }
	    );//hover
	});//jQuery
	</script>
<!-- управление скрывающийся панелью ........................END -->

<!-- SCRIPT's ...................................................................................... -->

<!--.....................................................................-->

<BODY>

	<div id="header"> <!-- general header -->
		<div id="header_Block-1"> <!-- gray block -->

			<div id="header_Block-1-pos">    
					
				<?php require_once "header_mini_menu.php"; /*including a mini menu for adaptiviti - mobile*/ ?>

				<div class="hb_Btn_1"> 
					<a href="index.php"> ГЛАВНАЯ </a>
				</div>

				<div class="hb_Btn_2"> 
					<a href="Catalog.php"> КАТАЛОГ </a>
				</div>

				<div class="hb_Btn_3">
					<a href="Stock.php"> СПЕЦПРЕДЛОЖЕНИЯ </a>
				</div>         

				<div class="hb_Btn_4">
					<a href="Service.php"> СЕРВИС </a>
				</div>                 

				<div class="hb_Btn_5">
					<a href="Article.php"> ГАЛЕРЕЯ </a>
				</div>                 

				<div class="hb_Btn_6">
					<a href="Contacts.php"> КОНТАКТЫ </a>
				</div> 

				</div>
		</div>
	</div>
   
<!-- .......................................... -->

	<div id="header_Block-2"> <!-- Header-block-2 -->
 		 		      
 		<div id="hb2_Block-1"> <!-- left block with logo --> 		
	  	<div id="hb2-logo">   			
  			<a href="index.php">
  				<img height="90px" width="106px" src="images/logo.png" title="Технокар" alt="Техно-кар">	    		
  			</a>
			</div>

			<a href="index.php">
	  		<div id="hb2-text">          
	    			<p>Магазин Автомеханик</p>
	  		</div>

	  		<div id="hb2-text-additional">
	  			<h2><p>Официальный дилер завода «Технокар»</p></h2>
	  		</div>	  	
	  	</a>	
  	</div>  		

		<div id="hb2_group-1">
			<div id="hb2_address">
				<div id="hb2_address-img">        
		     	<img height="18px" width="14px" src="images/Geolocation.png" title="Технокар контакты" alt="Техно-кар контакты">
		    </div>

				<p>
					398024, РОССИЯ, г.ЛИПЕЦК
					ул. Доватора, д.10а
				</p>
			</div>

	    <div id="hb2_phones-blocks"> <!-- right block with phones -->
	      <div id="hb2_phones-blocks-phone_1">
					<div id="hb2_phones-blocks-phone_1-img">        
						<img height="14px" width="14px" src="images/Phone.png" title="Технокар телефон" alt="Техно-кар телефон">
					</div>       
	        <span><p><a href="tel:88002004801">8 (800) 200 48 01</a></p></span>

					<div id="hb2_phones-blocks-mail_1-img">        
						<img height="10px" width="14px" src="images/Mail.png" title="Технокар телефон" alt="Техно-кар телефон">
					</div>	         		
	        <span><p><a href="mailto:info@avto-mechanic.ru">info@avto-mechanic.ru</a></p></span>
	      </div>                      
	    </div>
	  </div> <!-- hb2_group-1 - END -->

    <div id="hb2_CallBack"> <!-- right block with REcall back form -->

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
				<img height="70px" width="170px" src="images/ReCallBack.png" title="Технокар служба поддержки" alt="Техно-кар тех.поддержка">
			</a>

			<?php require_once "ReCallBack.php"; ?> <!-- inluding a form with CallBack --> 	
    </div>
  </div> <!-- Header-block-2 - END -->

</div>