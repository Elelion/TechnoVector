<!-- Для блокировки и разблокировки скролла и стелок при прокрутке сайта -->
	<script>
		var keys = {37: 1, 38: 1, 39: 1, 40: 1}; /*Блокирукм кнопки вверх, низ, право, лево*/

		function preventDefault(e) 
		{
	  	e = e || window.event;
	  	if (e.preventDefault)
	      e.preventDefault();
	  	e.returnValue = false;  
		}

		function preventDefaultForScrollKeys(e) /*для скролла*/
		{
	    if (keys[e.keyCode]) 
	    {
	      preventDefault(e);
	      return false;
	    }
		}
	</script>

	<script>
		function disableWheelScroll() /*блокирукм все скроллы*/
		{
			if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
			  window.onwheel = preventDefault; // modern standard
			  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
			  window.ontouchmove  = preventDefault; // mobile
			  document.onkeydown  = preventDefaultForScrollKeys;
		}
	</script>

	<script>
		function enableWheelScroll() /*разблокируем все скроллы*/
			{
				if (window.removeEventListener)
			    window.removeEventListener('DOMMouseScroll', preventDefault, false);
			    window.onmousewheel = document.onmousewheel = null; 
			    window.onwheel = null; 
			    window.ontouchmove = null;  
			    document.onkeydown = null;  
			  }
	</script>	

<!-- .......................................... .......................................... -->

	<div id="footer"> <!-- general header -->		
		<div id="footer_Block-1-pos"> 

<!-- .......................................... -->

			<div id="fb_call-back">
				<div id="fb_call-back-btn-CallBack">
					<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
						<img height="70px" width="170px" src="images/ReCallBack.png" title="Технокар служба поддержки" alt="Техно-кар тех.поддержка">
					</a>

					<?php require_once "ReCallBack.php"; ?> <!-- inluding a form with CallBack -->
				</div>
			</div>
			
<!-- .......................................... -->

			<div id="fb_work-time">
				<div id="fb_work-time_title">
					<p>Часы работы</p>
				</div>

				<div id="fb_work-time_text">
					<p>
						Пн - Пт с 09:00 - 18:00 <br>
						Сб - Вс: с 09:00 - 17:00
					</p>
				</div>
			</div>

<!-- .......................................... -->

			<div id="fb_contacts">
				<div id="fb_contacts_title">
					<p>Контакты</p>
				</div>

				<div id="fb_contacts_contact-1">
					<p><a href="tel:88002004801">8 (800) 200 48 01</a></p>
				</div>

				<div id="fb_contacts_contact-2">
					<p><a href="mailto:info@avto-mechanic.ru">info@avto-mechanic.ru</a></p>
				</div>

				<div id="fb_contacts_contact-3">
					<p>Липецк, Доватора, 10а</p>					
				</div>
			</div>

<!-- .......................................... -->

			<div id="fb_social"> <!-- fb_logo_block -->
				<div id="fb_social_title">
					<p>Будьте с нами</p>
				</div>
				
				<div id="fb_social_blocks">
			  	<div id="fb_vk">
						<a href="https://vk.com/avtomechanic_lipetsk" target = "_blank">        		
	      			<img height="48px" width="48px" src="images/VK.png" title="Технокар мы в контакте" alt="Техно-кар в vk">
	      		</a>
	      	</div>

	      	<div id="fb_youtube">
	      		<a href="https://www.youtube.com/channel/UCuQaJiIIVcxGIFvevVcl1MQ?view_as=subscriber" target = "_blank">
	      			<img height="48px" width="48px" src="images/YouTube.png" title="Технокар мы в youtube" alt="Техно-кар в youtube">
	      		</a>
	      	</div>

	      	<div id="fb_instagram">
	      		<a href="https://www.instagram.com/avtomechanic48/" target = "_blank">
	      			<img height="48px" width="48px" src="images/Instagram.png" title="Технокар мы в instagram" alt="Техно-кар в instagram">
	      		</a>
	      	</div>
	      </div>
 	 		</div>							
			
		</div> <!-- <div id="footer_Block-1-pos"> --> 		  	

		<div id="fb_Counter">
			<!--LiveInternet counter-->
			<script type="text/javascript">
				document.write("<a href='//www.liveinternet.ru/click' "+
				"target=_blank><img src='//counter.yadro.ru/hit?t23.6;r"+
				escape(document.referrer)+((typeof(screen)=="undefined")?"":
				";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
				screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
				";h"+escape(document.title.substring(0,150))+";"+Math.random()+
				"' alt='' title='LiveInternet: показано число посетителей за"+
				" сегодня' "+
				"border='0' width='88' height='15'><\/a>")
			</script>
			<!--/LiveInternet-->

			<!-- Pr-Cy conter statistics -->
			<script type="text/javascript">
				!function(e,t,r){e.PrcyCounterObject=r,e[r]=e[r]||function(){(e[r].q=e[r].q||[]).push(arguments)};
				var c=document.createElement("script");c.type="text/javascript",c.async=1,c.src=t;
				var n=document.getElementsByTagName("script")[0];
				n.parentNode.insertBefore(c,n)}(window,"//a.pr-cy.ru/assets/js/counter.min.js","prcyCounter"),prcyCounter("техновектор-россия.рф","prcyru-counter",0);
			</script>
			
			<div id="prcyru-counter"></div><noscript><a href="//a.pr-cy.ru/техновектор-россия.рф" target="_blank"><img src="//a.pr-cy.ru/assets/img/analysis-counter.png" width="88" height="31" alt="Analysis"></a>
			</noscript>
			<!-- Pr-Cy conter statistics -->
		</div>		
	</div>  

<!-- .......................................... .......................................... -->	

<!-- SNOW -->
    <!-- <script type="text/javascript" src="JS\snow-fall.js"></script> -->
    
</BODY>	