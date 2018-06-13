<!DOCTYPE html>
<HTML>

<HEAD> 
  <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
  <TITLE> Техновектор-Россия </TITLE>


<!-- СТИЛИ ........................................................................................ -->

  <!-- Подключаем стили (*.CSS) -->
    <link rel="stylesheet" href="CSS/All-styles.css">        
		<link rel="stylesheet" href="CSS/animate.css"> <!-- стиль для анимации при прокрутке -->
	
	<!-- Подключаем дополнительные стили -->
    <!-- для появляющегося меню WebComplex -->
      <script SRC="JS/WebComplex(jquery.min).js"></script> <!-- для header'a -->
	
    <!-- для слайдера BxSlider -->
      <link href="CSS/jquery.bxslider.css" rel="stylesheet" /> <!-- bxSlider CSS file -->
      <script SRC="JS/jquery.min.js"></script>
      <script src="JS/jquery.bxslider.min.js"></script> 	

	<!-- Подключаем дополнительные компоненты -->
		<!-- Подкл. иконку, фавикон -->
    	<link rel = "shortcut icon" type = "image/x-icon" href = "images/TitleTab48px.png"> 


<!-- СКРИПТЫ ...................................................................................... -->

		<!-- Для якорей (плавной прокрутки) -->		
			<!-- Главное меню -->		
				<script type="text/javascript">
					$(document).ready(function(){
						$("#TopMenu").on("click","a", function (event) {
							//отменяем стандартную обработку нажатия по ссылке
							event.preventDefault();

							//забираем идентификатор бока с атрибута href
							var id  = $(this).attr('href'),

							//узнаем высоту от начала страницы до блока на который ссылается якорь
							top = $(id).offset().top;
							
							//анимируем переход на расстояние - top за 1500 мс
							$('BODY,HTML').animate({scrollTop: top}, 1500);
						});
					});
				</script>     
			
			<!-- Переход в блоке "О нас" - ЛИПЕЦК, (анкера на карту) -->
				<script type="text/javascript">
					$(document).ready(function(){
						$("#About_NAV_1").on("click","a", function (event) {
							//отменяем стандартную обработку нажатия по ссылке
							event.preventDefault();

							//забираем идентификатор бока с атрибута href
							var id  = $(this).attr('href'),

							//узнаем высоту от начала страницы до блока на который ссылается якорь
							top = $(id).offset().top;
								
							//анимируем переход на расстояние - top за 1500 мс
							$('BODY,HTML').animate({scrollTop: top}, 1500);
						});
					});
				</script>     

			<!-- Переход в блоке "О нас" - ТАМБОВ, (анкера на карту) -->
				<script type="text/javascript">
					$(document).ready(function(){
						$("#About_NAV_2").on("click","a", function (event) {
							//отменяем стандартную обработку нажатия по ссылке
							event.preventDefault();

							//забираем идентификатор бока с атрибута href
							var id  = $(this).attr('href'),

							//узнаем высоту от начала страницы до блока на который ссылается якорь
							top = $(id).offset().top;
								
							//анимируем переход на расстояние - top за 1500 мс
							$('BODY,HTML').animate({scrollTop: top}, 1500);
						});
					});
				</script>     

			<!-- Переход в блоке "О нас" - ВОРОНЕЖ, (анкера на карту) -->
				<script type="text/javascript">
					$(document).ready(function(){
						$("#About_NAV_3").on("click","a", function (event) {
							//отменяем стандартную обработку нажатия по ссылке
							event.preventDefault();

							//забираем идентификатор бока с атрибута href
							var id  = $(this).attr('href'),

							//узнаем высоту от начала страницы до блока на который ссылается якорь
							top = $(id).offset().top;
								
							//анимируем переход на расстояние - top за 1500 мс
							$('BODY,HTML').animate({scrollTop: top}, 1500);
						});
					});
				</script>     

		<!-- управление скрывающийся панелью ........................BEGIN -->
			<script type="text/javascript">
			$(document).ready(function()
			{
			    var $TopMenu_2_hidden = $("#TopMenu_2_hidden");

			    $(window).scroll(function()
			    {
			        if ( $(this).scrollTop() > 150 && $TopMenu_2_hidden.hasClass("default") ) /*>150 - если проскролил больше 200px, то... */
			        {
			            $TopMenu_2_hidden.fadeOut(
			            'fast',function() /*отображаем меню*/
			            {
			                $(this).removeClass("default")
			                .addClass("fixed transbg")
			                .fadeIn('fast');
			            });
			        }
			        else
			            if($(this).scrollTop() <= 150 && $TopMenu_2_hidden.hasClass("fixed"))
			            {
			                $TopMenu_2_hidden.fadeOut(
			                'fast',function() /*скрываем меню*/
			                {
			                    $(this).removeClass("fixed transbg")
			                    .addClass("default")
			                    .fadeIn('fast');
			                });
			            }
			        }
			    );//scroll

			    $TopMenu_2_hidden.hover
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
		
		<!-- Для карусели в 1ом блоке, заглавный блок (начальный) -->
			<script type="text/javascript">
				$(document).ready(function(){ 
					$('.Main_slider_bxSlider').bxSlider({																	
						mode: 'fade',					/*оявление а не перелистывание*/	
						randomStart: false,		/*картинки будут стартовать в случайной последовательности*/															
						speed: 2300,					/*скорость прокрутки, по умолчанию 500*/								
						autoControls: false,	/*Дает две кнопки для пролистывания SOPT и PAUSED*/																							
						slideWidth: 600,	  	/*ширина для каждого слайда, ширина блока задется в : #Main_slider -> width*/
						minSlides: 1,					/*минимальное количество блока*/						
						maxSlides: 1,					/*максимальное количество блоков*/						
						slideMargin: 1, 			/*отступы между слайдами*/						
						touchEnabled: false,	/*Если true, слайдер позволит сенсорные переходы по слайдам*/							
						infiniteLoop: true,		/*при нажадии Далее, на посл. слайде перейдет к 1му слайду и наоборот*/						
						pause: 5200, 					/*кол-во МС между автоматическим переходом (умолчание; 4000)*/						
						pager: false,					/*убирает кнопки прокрутки*/	
						autoDelay: 120,				/*Время в МС до старта слайд-шоу, по умолчанию: 0 */						
						moveSlides: 0,				/*Кол-во слайдов, что бы перейти на переходный период. Значение должно быть >= minSlides
																    и >= maxSlides. Если он = 0 (по умолчанию), то будет использовано число полностью
																	  видимых слайдов*/														
						startSlide: 0,				/*слайд с которого будет стартовать слайд-шоу (нумерация с 0ля)*/													
						auto: true 						/*автоматическое пролистывание слайда*/											
					}); 
				});
			</script>

		<!-- Для карусели в мониторе, блок с ПО -->
			<script type="text/javascript">
				$(document).ready(function(){ 
					$('.Software_Monitor_slider_bxSlider').bxSlider({
						randomStart: true,		/*картинки будут стартовать в случайной последовательности*/															
						speed: 1500,					/*скорость прокрутки, по умолчанию 500*/								
						autoControls: false,	/*Дает две кнопки для пролистывания SOPT и PAUSED*/																							
						slideWidth: 424,			/*ширина для каждого слайда, ширина блока задется в : #Software_Monitor_slider -> width*/
						minSlides: 1,					/*минимальное количество блока*/						
						maxSlides: 1,					/*максимальное количество блоков*/						
						slideMargin: 1, 			/*отступы между слайдами*/						
						touchEnabled: false,	/*Если true, слайдер позволит сенсорные переходы по слайдам*/							
						infiniteLoop: true,		/*при нажадии Далее, на посл. слайде перейдет к 1му слайду и наоборот*/						
						pause: 5000,					/*кол-во МС между автоматическим переходом (умолчание; 4000)*/						
						pager: false,					/*убирает кнопки прокрутки*/	
						autoDelay: 500,				/*Время в МС до старта слайд-шоу, по умолчанию: 0 */						
						moveSlides: 0,				/*Кол-во слайдов, что бы перейти на переходный период. Значение должно быть >= minSlides
																    и >= maxSlides. Если он = 0 (по умолчанию), то будет использовано число полностью
																	  видимых слайдов*/														
						startSlide: 2,				/*слайд с которого будет стартовать слайд-шоу (нумерация с 0ля)*/													
						auto: true 						/*автоматическое пролистывание слайда*/
					}); 
				});
			</script>		

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

	<!-- Для отправки писем с сайта BLOCK-MAIN -->
		<script type="text/javascript">
			$(document).ready(function() 
			{ // вся магия после загрузки страницы
				$("#ajaxform_main").submit(function()
				{ // перехватываем все при событии отправки
					var form = $(this); // запишем форму, чтобы потом не было проблем с this
					var error = false; // предварительно ошибок нет
					
					form.find('input, textarea').each( function()
					{ // пробежим по каждому полю в форме
						if ($(this).val() == '') { // если находим пустое
							alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
							error = true; // ошибка
						}
					});

					if (!error) 
					{ // если ошибки нет
						var data = form.serialize(); // подготавливаем данные
						$.ajax
						({ // инициализируем ajax запрос
							type: 'POST', // отправляем в POST формате, можно GET
							url: 'Functions/send_mail_block-Main.php', // путь до обработчика, у нас он лежит в той же папке
							dataType: 'json', // ответ ждем в json формате
							data: data, // данные для отправки

							beforeSend: function(data) 
							{ // событие до отправки
							  form.find('input[name="M_Button1"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
							},

							success: function(data)
							{ // событие после удачного обращения к серверу и получения ответа
									if (data['error']) 
									{ // если обработчик вернул ошибку
										alert(data['error']); // покажем её текст
									}
									else 
									{ // если все прошло ок
										alert('Заявка отправлена, ожидайте ответа.'); // пишем что все ок
										$('#M_Edit1').val(''); //Сбрасываем поля ввода
										$('#M_Edit3').val('');
										$('#M_Edit4').val('');										
									}
							},
							 
							error: function (xhr, ajaxOptions, thrownError) 
							{ // в случае неудачного завершения запроса к серверу
							  alert(xhr.status); // покажем ответ сервера
							  alert(thrownError); // и текст ошибки
							},
							complete: function(data) 
							{ // событие после любого исхода
							  form.find('input[name="M_Button1"]').prop('disabled', false); // в любом случае включим кнопку обратно
							}          
						});
					}
					return false; // вырубаем стандартную отправку формы
				});
			});
		</script>

	<!-- Для отправки писем с сайта BLOCK-SoftWare -->
		<script type="text/javascript">
			$(document).ready(function() 
			{ // вся магия после загрузки страницы
				$("#ajaxform_SoftWare").submit(function()
				{ // перехватываем все при событии отправки
					var form = $(this); // запишем форму, чтобы потом не было проблем с this
					var error = false; // предварительно ошибок нет
					
					form.find('input, textarea').each( function()
					{ // пробежим по каждому полю в форме
						if ($(this).val() == '') { // если находим пустое
							alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
							error = true; // ошибка
						}
					});

					if (!error) 
					{ // если ошибки нет
						var data = form.serialize(); // подготавливаем данные
						$.ajax
						({ // инициализируем ajax запрос
							type: 'POST', // отправляем в POST формате, можно GET
							url: 'Functions/send_mail_block-SoftWare.php', // путь до обработчика, у нас он лежит в той же папке
							dataType: 'json', // ответ ждем в json формате
							data: data, // данные для отправки

							beforeSend: function(data) 
							{ // событие до отправки
							  form.find('input[name="Sware_Button2"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
							},

							success: function(data)
							{ // событие после удачного обращения к серверу и получения ответа
									if (data['error']) 
									{ // если обработчик вернул ошибку
										alert(data['error']); // покажем её текст
									}
									else 
									{ // если все прошло ок
										alert('Заявка отправлена, ожидайте ответа.'); // пишем что все ок
										$('#Sware_Edit1').val(''); //Сбрасываем поля ввода
										$('#Sware_Edit2').val('');
										$('#Sware_Edit3').val('');												    				
																				     
      							document.getElementById('Software_call_form_close-btn').onclick(); //Эмитация нажатия кнопки на закрытие формы      							
									}
							},
							 
							error: function (xhr, ajaxOptions, thrownError) 
							{ // в случае неудачного завершения запроса к серверу
							  alert(xhr.status); // покажем ответ сервера
							  alert(thrownError); // и текст ошибки
							},
							complete: function(data) 
							{ // событие после любого исхода
							  form.find('input[name="Sware_Button2"]').prop('disabled', false); // в любом случае включим кнопку обратно
							}          
						});
					}
					return false; // вырубаем стандартную отправку формы
				});
			});
		</script>

	<!-- Для отправки писем с сайта BLOCK-Stock -->
		<script type="text/javascript">
			$(document).ready(function() 
			{ // вся магия после загрузки страницы
				$("#ajaxform_Stock").submit(function()
				{ // перехватываем все при событии отправки
					var form = $(this); // запишем форму, чтобы потом не было проблем с this
					var error = false; // предварительно ошибок нет
					
					form.find('input, textarea').each( function()
					{ // пробежим по каждому полю в форме
						if ($(this).val() == '') { // если находим пустое
							alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
							error = true; // ошибка
						}
					});

					if (!error) 
					{ // если ошибки нет
						var data = form.serialize(); // подготавливаем данные
						$.ajax
						({ // инициализируем ajax запрос
							type: 'POST', // отправляем в POST формате, можно GET
							url: 'Functions/send_mail_block-Stock.php', // путь до обработчика, у нас он лежит в той же папке
							dataType: 'json', // ответ ждем в json формате
							data: data, // данные для отправки

							beforeSend: function(data) 
							{ // событие до отправки
							  form.find('input[name="Stock_Button2"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
							},

							success: function(data)
							{ // событие после удачного обращения к серверу и получения ответа
									if (data['error']) 
									{ // если обработчик вернул ошибку
										alert(data['error']); // покажем её текст
									}
									else 
									{ // если все прошло ок
										alert('Заявка отправлена, ожидайте ответа.'); // пишем что все ок
										$('#St_Edit1').val(''); //Сбрасываем поля ввода
										$('#St_Edit2').val('');
										$('#St_Edit3').val('');												    				
										
      							document.getElementById('Stock_call_form_close-btn').onclick(); //Эмитация нажатия кнопки на закрытие формы
									}
							},
							 
							error: function (xhr, ajaxOptions, thrownError) 
							{ // в случае неудачного завершения запроса к серверу
							  alert(xhr.status); // покажем ответ сервера
							  alert(thrownError); // и текст ошибки
							},
							complete: function(data) 
							{ // событие после любого исхода
							  form.find('input[name="Stock_Button2"]').prop('disabled', false); // в любом случае включим кнопку обратно
							}          
						});
					}
					return false; // вырубаем стандартную отправку формы
				});
			});
		</script>		

	<!-- Для отправки писем с сайта BLOCK-Catalog -->
		<script type="text/javascript">
			$(document).ready(function() 
			{ // вся магия после загрузки страницы
				$("#ajaxform_Catalog").submit(function()
				{ // перехватываем все при событии отправки
					var form = $(this); // запишем форму, чтобы потом не было проблем с this
					var error = false; // предварительно ошибок нет
					
					form.find('input, textarea').each( function()
					{ // пробежим по каждому полю в форме
						if ($(this).val() == '') { // если находим пустое
							alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
							error = true; // ошибка
						}
					});

					if (!error) 
					{ // если ошибки нет
						var data = form.serialize(); // подготавливаем данные
						$.ajax
						({ // инициализируем ajax запрос
							type: 'POST', // отправляем в POST формате, можно GET
							url: 'Functions/send_mail_block-Catalog.php', // путь до обработчика, у нас он лежит в той же папке
							dataType: 'json', // ответ ждем в json формате
							data: data, // данные для отправки

							beforeSend: function(data) 
							{ // событие до отправки
							  form.find('input[name="Catalog_Button2"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
							},

							success: function(data)
							{ // событие после удачного обращения к серверу и получения ответа
									if (data['error']) 
									{ // если обработчик вернул ошибку
										alert(data['error']); // покажем её текст
									}
									else 
									{ // если все прошло ок
										alert('Заявка отправлена, ожидайте ответа.'); // пишем что все ок
										$('#Cat_Edit1').val(''); //Сбрасываем поля ввода
										$('#Cat_Edit2').val('');
										$('#Cat_Edit3').val('');												    				
										
      							document.getElementById('Catalog_call_form_close-btn').onclick(); //Эмитация нажатия кнопки на закрытие формы
									}
							},
							 
							error: function (xhr, ajaxOptions, thrownError) 
							{ // в случае неудачного завершения запроса к серверу
							  alert(xhr.status); // покажем ответ сервера
							  alert(thrownError); // и текст ошибки
							},
							complete: function(data) 
							{ // событие после любого исхода
							  form.find('input[name="Catalog_Button2"]').prop('disabled', false); // в любом случае включим кнопку обратно
							}          
						});
					}
					return false; // вырубаем стандартную отправку формы
				});
			});
		</script>				
</HEAD>




<BODY>

<!-- HEADER -->     
<div id="header"> <!-- блок где находиться весь header -->

<!-- TopMenu_1 _BEGIN -->
	<div id="TopMenu_1">
		<section id="ex1"> <!-- ставим якорь для быстрого перехода -->
	    <div id="Header_Logo_block">		
	        <a href ="http://avto-mechanic.ru" target = "_blank"> <img height="48px" width="48px" src="images/Logo.png" title="Интернет магазин «Автомеханик»" alt="Интернет магазин «Автомеханик»"> </a>
	  
		    <div id="Header_Logo_block_text">
		          <a href="http://avto-mechanic.ru" target = "_blank">Интернет магазин <strong>«Автомеханик»</strong></a>
		          <!-- <p>Оборудование </p>
			  <p>для автосервиса</p> -->
		   </div>
	    </div>              

	    <div id="Header_TimeWork_block">
	        <div class="Vertical_splitter_1"></div> <!-- визуальный разделитель, просто вертикальная линия -->

	        <img height="28px" width="28px" src="images/Time.png" title="Режим работы" alt="Режим работы">  <p><strong> Режим работы </strong></p>                      
	        <p>09:00 до 18:00</p>
	        <section><p>09:00 до 17:00</p></section>
	    </div>

	    <div id="Header_Contact_block"> <!-- общий блок -->
	        <div class="Vertical_splitter_2"></div> <!-- визуальный разделитель, просто вертикальная линия -->

	        <img height="28px" width="28px" src="images/Phone.png" title="Контакты" alt="Контакты">
	        <p><strong> 8 (800) 200 - 48 - 01 </strong></p>	        
	        <div id="Header_Contact_email"><p><strong><a href="mailto:info@avto-mechanic.ru">info@avto-mechanic.ru</a></strong></p></div>
	    </div>   

	    <div id="Header_Dealer_block"> <!-- общий блок -->				
	        <div class="Vertical_splitter_3"></div> <!-- визуальный разделитель, просто вертикальная линия -->		    
		   <img height="48px" width="56px" src="images/logo_tv.png" title="Официальный представитель завода «Техновектор»" alt="Официальный представитель завода «Техновектор»">
		    
		    <div id="Header_Dealer_block_text">
		        <p><strong> Официальный представитель </strong> «Техновектор» </p>			
		    </div>	
	    </div>
	  </section>
	</div>
<!-- TopMenu_1 _END -->

<!-- +++ -->

<!-- TopMenu_2 _BEGIN -->
    <div class="TopMenu_2">
			<div id="TopMenu_2_pos"> <!-- для позиционирования блока -->
	    	<div id="TopMenu_2_hidden" class="default">
					<nav id="TopMenu" class="animated mov_1"> <!-- задаем навигацию | class="animated mov_1" - задаем анимацию для меню -->
						<div class="Btn_1">
						    <a href="#ex1"> Главная </a>
						</div>

						<div class="Btn_2">
						    <a href="#ex2"> Спецпредложения </a>
						</div>

						<div class="Btn_3">
						    <a href="#ex3"> Каталог </a>
						</div>

						<div class="Btn_4">
						    <a href="#ex4"> Оплата </a>
						</div>

						<div class="Btn_5">
						    <a href="#ex5"> О нас </a>
						</div>

						<div class="Btn_6">
						    <a href="#ex6"> Контакты </a>
						</div>
					</nav>
	    	</div>
	   	</div>
    </div>     
<!-- TopMenu_2 _END -->

<!-- +++ -->

<!-- TopMenu_3 _BEGIN -->
    <div class="TopMenu_3"></div> <!-- Orange splitter -->
<!-- TopMenu_2 _END -->

</div> <!-- HEADER -->
<!-- HEADER -->




<!-- BODY -->
<div class = "clear"></div> <!-- Начинаем блоки с новой "строки" -->

<!-- 1ый информационный блок ................................... -->
	<div id="Main">

		<div id="Bannder-1">
			<p>САЙТ В ДОРАБОТКЕ</p>
		</div>
		<div id="Bannder-2">
			<p>ведутся работы</p>
		</div>

		<div id="H-1">
		  <h1> ПРОДАЖА, МОНТАЖ И ОБСЛУЖИВАНИЕ СТЕНДОВ РАЗВАЛ - СХОЖДЕНИЕ «ТЕХНО ВЕКТОР» </h1>
		</div>

		<div id="Main_Fon_pic"> <!-- Картинка на главном фоне -->		  
		</div>
		
		<div id="Main_slider_frame"> <!-- блок для картинки - рамки -->
		</div>

		<div id="Main_slider"> <!-- Блок с преимуществами (СЛАЙДЕР) -->
			<ul class="Main_slider_bxSlider">						
				<li><img src="images/Main_slider_1.jpg" title="100% гарантированная доставка" alt = "Доставка"/></li>
				<li><img src="images/Main_slider_2.jpg" title="Спецпредложения" alt = "Спецпредложения"/></li>
				<li><img src="images/Main_slider_3.jpg" title="Служба технической поддержки" alt = "Служба поддержки"/></li>
				<li><img src="images/Main_slider_4.jpg" title="Гибкая система оплаты" alt = "Оплата"/></li>
				<li><img src="images/Main_slider_5.jpg" title="Официальный представитель" alt = "Официальный представитель «ТЕХНО ВЕКТОР»"/></li> 
			<ul>    
		</div>

		<div id="Main_Request_form"> <!-- Форма заявки __BEGIN -->
		  <p>Оставьте заявку прямо сейчас и получите персональную цену!</p>

		  <form method="post" action="" id="ajaxform_main"> <br />
		  <!-- ИМЯ -->
			  <div id="Main_Edit1">
			    <INPUT TYPE="text" 
						ID = "M_Edit1" 
						NAME = "M_Edit1" 
						placeholder="Ваше имя"
						  onfocus="if(this.value==this.defaultValue)this.value='';" 
						  onblur="if(this.value=='')this.value=this.defaultValue;"
						  
						SIZE="30"
						MAXLENGTH="25">
			  	</INPUT>
				</div>
				
			<!-- !!! ОТКЛЮЧЕН !!! -->
				<div id="Main_Edit2"> <!-- Edit не работает!!!, отключен в CSS -->
			    <INPUT TYPE="text" 
						ID = "M_Edit2" 
						NAME = "M_Edit2" 
						VALUE="Ваш номер телефона" 
						  onfocus="if(this.value==this.defaultValue)this.value='';" 
						  onblur="if(this.value=='')this.value=this.defaultValue;"
						  
						SIZE="30"
						MAXLENGTH="28">
			  	</INPUT>
				</div>

			<!-- eMAIL -->
				<div id="Main_Edit3">
			    <INPUT TYPE="text" 
						ID = "M_Edit3" 
						NAME = "M_Edit3" 
						placeholder="Ваш email" 
						  onfocus="if(this.value==this.defaultValue)this.value='';" 
						  onblur="if(this.value=='')this.value=this.defaultValue;"
						  
						SIZE="30"
						MAXLENGTH="50">
			  	</INPUT>
				</div>						

			<!-- НОМЕР ТЕЛЕФОНА -->
				<div id="Main_Edit4"> <!-- за место Edit2 -->
			    <INPUT TYPE="text" 
						ID = "M_Edit4" 
						NAME = "M_Edit4" 
						placeholder="Ваш номер телефона" 
						  onfocus="if(this.value==this.defaultValue)this.value='';" 
						  onblur="if(this.value=='')this.value=this.defaultValue;"
						  
						SIZE="30"
						MAXLENGTH="11">
			  	</INPUT>
				</div>
				
				<div id="Main_Button1">
					<!-- <a href="#" class="button10">кнопка</a> -->
					<INPUT TYPE="submit"				
						ID="M_Button1" 
						NAME="M_Button1" 
						VALUE="ОСТАВИТЬ ЗАЯВКУ">
					</INPUT>
				</div>															
			</form>

			<div id="Main_Request_form_additional_text">
			  Ваши данные в безопасности
			</div>
		</div>
	
	<div id="Main_Phone_form"> <!-- Форма №телефона __BEGIN -->
		<p>8 (800) 200 48 01 - Звонок по всей России бесплатный</p> 
	</div>



<!-- Промежуточный информационный блок: Программное обеспечение / SoftWare .........................-->
	<div id="SoftWare">
		<div id="Software_Title"> <!-- Заголовок блока Software -->
			<p>Програмное обеспечение «Техно Вектор»</p>			
		</div>

		<div id="Software_description_form"> <!-- Блок с преимуществами ПО (с галочками) -->			
			<div class="Software_description_form_pic"> <img height="25px" width="25px" src="images/check.png" title="БД «Техно Вектор»" alt="БД - check pic"> </div>
			<div class="Software_description_form_text"> База данных (БД) </div><br>			
			<div class="Software_description_form_additional_text"> Огромная БД, содержащая более 50 000 моделей, с постоянным бесплатным обновлением. </div><br>			
			
			<div class="Software_description_form_pic"> <img height="25px" width="25px" src="images/check.png" title="Русифицированный интерфейс «Техно Вектор»" alt="Русифицированный интерфейс - check pic"> </div>
			<div class="Software_description_form_text"> Русифицированный интерфейс </div><br>						

			<div class="Software_description_form_pic"> <img height="25px" width="25px" src="images/check.png" title="CRM «Техно Вектор»" alt="CRM - check pic"> </div>
			<div class="Software_description_form_text"> Система учета клиентов (CRM) </div><br>		
			<div class="Software_description_form_additional_text"> База данных которая содержит все внесенные параметры, регулировки, клиентов и мастеров кто их обслуживал. </div><br>

			<div class="Software_description_form_pic"> <img height="25px" width="25px" src="images/check.png" title="Програмное обеспеченье «Техно Вектор»" alt="ПО - check pic"> </div>
			<div class="Software_description_form_text"> Лицензионная ОС Microsoft Windows </div><br>			

			<div class="Software_description_form_pic"> <img height="25px" width="25px" src="images/check.png" title="Справочная система «Техно Вектор»" alt="Справочник - check pic"> </div>
			<div class="Software_description_form_text"> Справочная система </div><br>							
			<div class="Software_description_form_additional_text"> Включает как заводские параметры регулировок, так и дополнительные параметры к конкретной модели автомобиля. </div><br>

			<div class="Software_description_form_pic"> <img height="25px" width="25px" src="images/check.png" title="Помощь оператору «Техно Вектор»" alt="Помощь - check pic"> </div>
			<div class="Software_description_form_text"> Аудио и видео подсказки оператору на всех этапах работы </div><br>
		</div>

		<div id="Software_Monitor"> <!-- блок для картинки с монитором -->
		</div>

		<div id="Software_Monitor_slider">
			<ul class="Software_Monitor_slider_bxSlider">			
        <li><img src="images/SoftWare_slider_1.jpg" title="ПО слайдер 1" alt = "Слайдер 1"/></li>
        <li><img src="images/SoftWare_slider_2.jpg" title="ПО слайдер 2" alt = "Слайдер 2"/></li>
        <li><img src="images/SoftWare_slider_3.jpg" title="ПО слайдер 3" alt = "Слайдер 3"/></li>
        <li><img src="images/SoftWare_slider_4.jpg" title="ПО слайдер 4" alt = "Слайдер 4"/></li>
        <li><img src="images/SoftWare_slider_5.jpg" title="ПО слайдер 5" alt = "Слайдер 5"/></li>
        <li><img src="images/SoftWare_slider_6.jpg" title="ПО слайдер 6" alt = "Слайдер 6"/></li>
        <li><img src="images/SoftWare_slider_7.jpg" title="ПО слайдер 7" alt = "Слайдер 7"/></li>
        <li><img src="images/SoftWare_slider_8.jpg" title="ПО слайдер 8" alt = "Слайдер 8"/></li>
        <li><img src="images/SoftWare_slider_9.jpg" title="ПО слайдер 9" alt = "Слайдер 9"/></li>
        <li><img src="images/SoftWare_slider_10.jpg" title="ПО слайдер 10" alt = "Слайдер 10"/></li>
        <li><img src="images/SoftWare_slider_11.jpg" title="ПО слайдер 11" alt = "Слайдер 11"/></li>
        <li><img src="images/SoftWare_slider_12.jpg" title="ПО слайдер 12" alt = "Слайдер 12"/></li>
      </ul>		
		</div>

<!-- <p><button onclick="document.body.style.overflow = 'hidden'"><code>document.body.style.overflow = 'hidden'</code></button></p> -->
		<div id="Software_Button1">
			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Software_call_form').style.display='block';document.getElementById('Software_call_form_fade').style.display='block';disableWheelScroll();">
				<INPUT TYPE="button"
					ID="Sware_Button1" 
					NAME="Sware_Button1" 
					VALUE="Узнать подробнее">
				</INPUT>				
			</a>

		<!-- Вызывемая форма обратной связи -->
			<div id="Software_call_form_fade"> <!-- темный фон а весь сайт, за формой обратой связи, т.е. темная форма определяет текущее положение размера экрана -->			
				<div id="Software_call_form"> <!-- форма обратной связи -->					
					<a id="Software_call_form_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('Software_call_form').style.display='none';document.getElementById('Software_call_form_fade').style.display='none';enableWheelScroll();"></a>

					<div id="Software_call_form_title">ОСТАВЬТЕ ЗАЯВКУ</div>
					<div id="Software_call_form_description">что бы подробней узнать о ПО «Техно Вектор»</div>																												 

					<form method="post" action="" id="ajaxform_SoftWare"> <br />
						<div id="Software_call_form_Edit1">
							<INPUT TYPE="text" 
								ID = "Sware_Edit1"
								NAME="Sware_Edit1" 
								placeholder="Ваше имя"								
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="25">
							</INPUT>
						</div>
						
						<div id="Software_call_form_Edit2">
							<INPUT TYPE="text" 
								ID = "Sware_Edit2"
								NAME="Sware_Edit2" 
								placeholder="Ваш телефон"								
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="11">
							</INPUT>
						</div>

						<div id="Software_call_form_Edit3">
							<INPUT TYPE="text" 
								ID = "Sware_Edit3"
								NAME="Sware_Edit3"
								placeholder="Ваш email"								
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="50">
							</INPUT>
						</div>						

						<div id="Software_Button2">												
							<INPUT TYPE="submit"
								ID="Sware_Button2" 
								NAME="Sware_Button2" 
								VALUE="Отправить заявку">
							</INPUT>													
						</div>			
					</form>

					<div id="Software_call_form_additional_text">Мы не будем использовать ваши данные в рекламных целях</div>
				</div> <!-- Software_call_form -->
			</div> <!-- Software_call_form_fade -->	
		</div>		
	</div>

<!-- 2ой информационный блок ...................................................................... -->
	<div id="Stock">
		<section id="ex2"> <!-- ставим якорь для быстрого перехода -->
		
			<div id="Stock_Title">
				<p>Спецпредложения</p>
			</div>

			<a href ="http://avto-mechanic.ru/login/?register=yes&backurl=%2F" target = "_blank">
				<div id="Stock_Block_1">
					<div id="Stock_Block_1_text">
						<p> Зарегистрируйтесь на сайте «Автомеханик» и получите персональную скидку! (подробности уточняйте у менеджеров) </p>
					</div>
				
					<div id="Stock_Block_1_pic">
						<img height="200px" width="200px" src="images/Stock-1.png" title="" alt = ""/>	
					</div>			
				</div>		
			</a>	
<!-- .... .... -->
			<!-- <a href ="http://avto-mechanic.ru/catalog/podemniki_chetyrekhstoechnye/podemnik_4_kh_stoechnyy_elektrogidravlicheskiy_5000kg_puli/" target = "_blank"> -->
				<div id="Stock_Block_2">
					<div id="Stock_Block_2_text">
						<p> При заказе любого оборудования, услуга "шефмонтаж" - бесплатно. </p>
					</div>
				
					<div id="Stock_Block_2_pic">
						<img height="180px" width="200px" src="images/Stock-2.png" title="" alt = ""/>	
					</div>	
				</div>
			<!-- </a> -->
<!-- .... .... -->
			<a href ="http://avto-mechanic.ru/catalog/podemniki_chetyrekhstoechnye/podemnik_4_kh_stoechnyy_elektrogidravlicheskiy_5000kg_puli/" target = "_blank">
				<div id="Stock_Block_3">
					<div id="Stock_Block_3_text">
						<p> Оставьте заявку прямо сейчас и получите скидку до 5% на подъемник Puli. </p>
					</div>
				
					<div id="Stock_Block_3_pic">
						<img height="180px" width="200px" src="images/Stock-3.png" title="" alt = ""/>	
					</div>	
				</div>
			</a>

<!--
			<div id="Stock_Block_4">
				Stock-4
			</div>

			<div id="Stock_Block_5">
				Stock-5
			</div>

			<div id="Stock_Block_6">
				Stock-6
			</div>		
-->

<!-- .... .... -->
			<div id="Stock_Button1">
				<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Stock_call_form').style.display='block';document.getElementById('Stock_call_form_fade').style.display='block';disableWheelScroll();">
					<INPUT TYPE="button"
						ID="St_Button1" 
						NAME="St_Button1" 
						VALUE="Я хочу подробнее узнать об акциях и скидках">
					</INPUT>
				</a>
			</div>		

		<!-- Вызывемая форма обратной связи -->
			<div id="Stock_call_form_fade"> <!-- темный фон а весь сайт, за формой обратой связи, т.е. темная форма определяет текущее положение размера экрана -->			
				<div id="Stock_call_form"> <!-- форма обратной связи -->					
					<a id="Stock_call_form_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('Stock_call_form').style.display='none';document.getElementById('Stock_call_form_fade').style.display='none';enableWheelScroll();"></a>

					<div id="Stock_call_form_title">ОСТАВЬТЕ ЗАЯВКУ</div>
					<div id="Stock_call_form_description">что бы подробней узнать акциях и скидках</div>																												 

					<form method="post" action="" id="ajaxform_Stock"> <br />
						<div id="Stock_call_form_Edit1">
							<INPUT TYPE="text" 
								ID = "St_Edit1"
								NAME="St_Edit1" 
								placeholder="Ваше имя"
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="25">
							</INPUT>
						</div>
						
						<div id="Stock_call_form_Edit2">
							<INPUT TYPE="text" 
								ID = "St_Edit2"
								NAME="St_Edit2" 
								placeholder="Ваш телефон"
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="12">
							</INPUT>
						</div>
						
						<div id="Stock_call_form_Edit3">
							<INPUT TYPE="text" 
								ID = "St_Edit3"
								NAME="St_Edit3" 
								placeholder="Ваш eMail"
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="12">
							</INPUT>
						</div>

						<div id="Stock_Button2">						
							<INPUT TYPE="submit"
								ID="St_Button2" 
								NAME="St_Button2" 
								VALUE="Отправить заявку">
							</INPUT>						
						</div>			
					</form>

					<div id="Stock_call_form_additional_text">Мы не будем использовать ваши данные в рекламных целях</div>
				</div> <!-- Software_call_form -->
			</div> <!-- Software_call_form_fade -->	

		</section> <!-- Конец якоря -->
	</div>

<!-- 3ий информационный блок ...................................................................... -->
	<div id="Superiority"> <!-- Приемущества -->
		<div id="Superiority_Title"> <!-- Заголовок блока Superiority -->
			<p>Преимущества «Техно Вектор»</p>			
		</div> 
		
		<div id="Superiority_block_1">			
				<img height="350px" width="270px" src="images/Superiority-pic-1.png" title="«Техно Вектор 7»" alt="«Техно Вектор 7»">
		</div>
<!-- .... .... -->
		<div id="Superiority_block_2">			
				<img height="200px" width="200px" src="images/Superiority-pic-2.jpg" title="Держатели мишеней" alt="Держатели мишеней «Техно Вектор»">			
		</div>

		<div id="Superiority_block_2_title">	
			<p>Удобные держатели для мишеней</p>
		</div>

		<div id="Superiority_block_2_description">
			<p> 
				Пассивные отражатели без электронных элементов, состоящие из
			  плоских мишеней с градиентным рисунком, покрытым защитным слоем и
    		прочного ударо-защищенного корпуса.
			</p>
		</div>
<!-- .... .... -->
		<div id="Superiority_block_3">			
				<img height="200px" width="200px" src="images/Superiority-pic-3.jpg" title="Мобильная тумба" alt="Мобильная тумба «Техно Вектор»">
		</div>

		<div id="Superiority_block_3_title">	
			<p>Мобильная тумба с цветным принтером и удобная панель управления</p>
		</div>

		<div id="Superiority_block_3_description">
			<p>
				Эргономичная рабочая панель управления с пленочной клавиатурой, 
				принтер с выскокой скоростю печати и мобильная тумба обеспечивают удобную.
			</p>
		</div>
<!-- .... .... -->
		<div id="Superiority_block_4">			
			<img height="200px" width="200px" src="images/Superiority-pic-4.jpg" title="Компьютер" alt="Компьютер «Техно Вектор»">
		</div>

		<div id="Superiority_block_4_title">	
			<p>Мощный компьютер с комплектующим</p>
		</div>

		<div id="Superiority_block_4_description">
			<p>
				В комплект входит LCD широкоформатный монитор.
				А мощный компьютер позволяет обрабатывать большие алгоритмы, 
				учитывающие малейшие искажения, вносимые оптической системой.
			</p>
		</div>
<!-- .... .... -->
		<div id="Superiority_block_5">			
				<img height="200px" width="200px" src="images/Superiority-pic-5.jpg" title="Алюминиевая балка" alt="Алюминиевая балка «Техно Вектор»">
		</div>

		<div id="Superiority_block_5_title">	
			<p>Надежная балка из алюминия</p>
		</div>		

		<div id="Superiority_block_5_description">
			<p>
				Мощная конструкция исключает изменение геометрии балки из за внешних воздействий. А камеры высокого разрешения обеспечивают точный захват мишеней.
			</p>
		</div>
<!-- .... .... -->
		<div id="Superiority_block_6">			
			<img height="200px" width="200px" src="images/Superiority-pic-6.jpg" title="Программное обеспечение" alt="ПО «Техно Вектор»">
		</div>

		<div id="Superiority_block_6_title">	
			<p>Программное обеспечение «Техно Вектор»</p>
		</div>		

		<div id="Superiority_block_6_description">
			<p>
				Интуитивно понятный интерфейс, позволяющий в реальном времени отслеживать положения установки колес автомобиля.
			</p>
		</div>
<!-- .... .... -->
		<div id="Superiority_block_7">			
			<img height="200px" width="200px" src="images/Superiority-pic-7.jpg" title="Пульт ДУ" alt="ДУ «Техно Вектор»">
		</div>

		<div id="Superiority_block_7_title">	
			<p>Дистанционное управление</p>
		</div>			

		<div id="Superiority_block_7_description">
			<p>
				Пульт дистанционного управления обеспечивает более удобную работу с оборудованием, так как позволяет выполнять основные операции на расстоянии до 10м.
			</p>
		</div>
<!-- .... .... -->
		<div id = Superiority_block_line-1></div> <!--от: Надежная балка из алюминия - центральная кратинка-->
		<div id = Superiority_block_line-2></div> <!--от: Удобные держатели для мишеней - центральная кратинка-->
		<div id = Superiority_block_line-3></div> <!--от: Программное обеспечение «Техно Вектор» - центральная кратинка-->
		<div id = Superiority_block_line-4></div> <!--от: Мобильная тумба с цветным принтером и удобная панель управления - центральная кратинка-->
		<div id = Superiority_block_line-5></div> <!--от: Дистанционное управление - центральная кратинка-->
		<div id = Superiority_block_line-6></div> <!--от: Мощный компьютер с комплектующим - центральная кратинка-->
	</div>

<!-- 4ий информационный блок ...................................................................... -->
	<div id="Catalog">
		<section id="ex3"> <!-- ставим якорь для быстрого перехода -->
			<div id="Catalog_Title">
				<p>Каталог стендов «Техно Вектор» и дополнительного оборудования</p>
			</div>

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_1">				
					<div id="Catalog_Block_1_pic">
						<img height="240px" width="175px" src="images/TechnoVector-7.png" title="Каталог «Техно Вектор 7»" alt = "Каталог продукции «Техно Вектор»"/>
					</div>

					<div id="Catalog_Block_1_text">
						<p> Техно Вектор 7 </p>						
					</div>													
				</div>						
			</a>			

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_2">
					<div id="Catalog_Block_2_pic">
						<img height="240px" width="160px" src="images/TechnoVector-7_truck.png" title="Каталог «Техно Вектор 7» Truck" alt = "Каталог продукции «Техно Вектор» Truck"/>
					</div>

					<div id="Catalog_Block_2_text">
						<p> Техно Вектор 7 Truck </p>
					</div>								
				</div>	
			</a>	

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_3">
					<div id="Catalog_Block_3_pic">
						<img height="240px" width="190px" src="images/TechnoVector-6.png" title="Каталог «Техно Вектор 6»" alt = "Каталог продукции «Техно Вектор 6»"/>
					</div>

					<div id="Catalog_Block_3_text">
						<p> Техно Вектор 6 </p>
					</div>								
				</div>				
			</a>

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_4">
					<div id="Catalog_Block_4_pic">
						<img height="240px" width="190px" src="images/TechnoVector-5.png" title="Каталог «Техно Вектор 5»" alt = "Каталог продукции «Техно Вектор 5»"/>
					</div>

					<div id="Catalog_Block_4_text">
						<p> Техно Вектор 5 </p>
					</div>								
				</div>		
			</a>

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_5">
					<div id="Catalog_Block_5_pic">
						<img height="240px" width="190px" src="images/TechnoVector-4.png" title="Каталог «Техно Вектор 4»" alt = "Каталог продукции «Техно Вектор 4»"/>
					</div>

					<div id="Catalog_Block_5_text">
						<p> Техно Вектор 4 </p>
					</div>								
				</div>
			</a>	

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_6">
					<div id="Catalog_Block_6_pic">
						<img height="200px" width="200px" src="images/TechnoVector-Accessories.png" title="Комплектующее для «Техно Вектор»" alt = "Комплектующее оборудование для «Техно Вектор»"/>
					</div>

					<div id="Catalog_Block_6_text">
						<p> Комплектующее </p>
					</div>								
				</div>	
			</a>
			
			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_7">
					<div id="Catalog_Block_7_pic">
						<img height="210px" width="200px" src="images/TechnoVector-WheelWash.png" title="Каталог моек для колес" alt = "Большой каталог моек для колес"/>
					</div>

					<div id="Catalog_Block_7_text">
						<p> Мойка для колес </p>
					</div>								
				</div>		
			</a>

			<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
				<div id="Catalog_Block_8">
					<div id="Catalog_Block_8_pic">
						<img height="210px" width="200px" src="images/TechnoVector-Metal_furniture.png" title="Каталог металлической мебели" alt = "Большой каталог металлической мебели"/>
					</div>

					<div id="Catalog_Block_8_text">
						<p> Металлическая мебель </p>
					</div>								
				</div>				
			</a>

			<div id="Catalog_Button1">
				<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='block';document.getElementById('Catalog_call_form_fade').style.display='block';disableWheelScroll();">
					<INPUT TYPE="button"
						ID="Cat_Button1" 
						NAME="Cat_Button1" 
						VALUE="Получить полный каталог">
					</INPUT>
				</a>
			</div>					

		<!-- Вызывемая форма обратной связи FULL-CATALOG -->
			<div id="Catalog_call_form_fade"> <!-- темный фон а весь сайт, за формой обратой связи, т.е. темная форма определяет текущее положение размера экрана -->			
				<div id="Catalog_call_form"> <!-- форма обратной связи -->					
					<a id="Catalog_call_form_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('Catalog_call_form').style.display='none';document.getElementById('Catalog_call_form_fade').style.display='none';enableWheelScroll();"></a>

					<div id="Catalog_call_form_title">ОСТАВЬТЕ ЗАЯВКУ</div>
					<div id="Catalog_call_form_description">что бы получить полный каталог нашей продукции</div>

					<form method="post" action="" id="ajaxform_Catalog"> <br />
						<div id="Catalog_call_form_Edit1">
							<INPUT TYPE="text" 
								ID = "Cat_Edit1"
								NAME="Cat_Edit1" 
								placeholder="Ваше имя"
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="25">
							</INPUT>
						</div>
						
						<div id="Catalog_call_form_Edit2">
							<INPUT TYPE="text" 
								ID = "Cat_Edit2"
								NAME="Cat_Edit2" 
								placeholder="Ваш телефон"
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="11">
							</INPUT>
						</div>
						
						<div id="Catalog_call_form_Edit3">
							<INPUT TYPE="text" 
								ID = "Cat_Edit3"
								NAME="Cat_Edit3" 
								placeholder="Ваш eMail"
									onfocus="if(this.value==this.defaultValue)this.value='';" 
				  				onblur="if(this.value=='')this.value=this.defaultValue;"

								SIZE="30"
								MAXLENGHT="50">
							</INPUT>
						</div>

						<div id="Catalog_Button2">						
							<INPUT TYPE="submit"
								ID="Cat_Button2" 
								NAME="Cat_Button2" 
								VALUE="Отправить заявку">
							</INPUT>						
						</div>			
					</form>

					<div id="Catalog_call_form_additional_text">Мы не будем использовать ваши данные в рекламных целях</div>
				</div> <!-- Software_call_form -->
			</div> <!-- Software_call_form_fade -->	

		</section> <!-- Конец якоря -->
	</div>

<!-- 5ый информационный блок ...................................................................... -->
	<div id="Payments">
		<section id="ex4"> <!-- ставим якорь для быстрого перехода -->
			<div id="Payment_Title">
				<p>Оплата и цены</p>
			</div>
	<!-- .... .... -->
			<div id="Payment_Description">
				<p> Мы сделали все, чтобы максимально упростить оплату наших услуг. </p>

				<p> Цены, указанные на сайте, являются окончательными и не требуют доплат при стандартных условиях поставки. Все налоги включены в стоимость товара. </p>

				<p> <strong>Внимание!</strong> Для каждого отдельного заказа возможен только один способ оплаты на ваш выбор. Оплата заказа по частям различными способами невозможна. </p>
			</div>
	<!-- .... .... -->
			<div id="Payment_Cash"> <!-- Наличный расчет -->
				<div id="Payment_Cash_pic">
					<img height="100px" width="100px" src="images/Payment-1.png" title="Оплата наличным расчетом" alt = "Наличный расчет"/>
				</div>

				<div id="Payment_Cash_title">
					<p>Наличный расчет</p>
				</div>

				<div id="Payment_Cash_description">
					<p>
						Оплата производится наличными курьеру при доставке или в магазине при самовывозе. Вместе с товаром передается товарный и кассовый чеки. 
					</p>
				</div>
			</div>
	<!-- .... .... -->
			<div id="Payment_Bank-transfer"> <!-- Оплата банковским переводом -->
				<div id="Payment_Bank-transfer_pic">
					<img height="100px" width="100px" src="images/Payment-2.png" title="Банковский перевод" alt = "Оплата банковским переводом"/>	
				</div>

				<div id="Payment_Bank-transfer_title">
					<p>Оплата банковским переводом</p>
				</div>

				<div id="Payment_Bank-transfer_description">
					<p>
						Перечисление денежных средств займет до 3х рабочих дней. <br><br>
						<strong>Реквизиты для заполнения платежных документов: </strong><br>

						<strong>Получатель</strong> ИП Шацких Светлана Михайловна <br>
						<strong>Адрес</strong> 		  398024, г.Липецк, ул.Доватора, д. 10А магазин «Автомеханик» <br>
						<strong>ИНН</strong> 				482607636466 <br>
						<strong>ОГРН</strong> 			315482700030282 <br>
						<strong>Р/с</strong> 				40802810902380000244 в АО «Альфа-Банк» <br>
						<strong>К/сч</strong> 			30101810200000000593 <br>
						<strong>БИК</strong> 				044525593 <br>
						<strong>Тел./факс</strong> 	+7 4742 41-06-85 <br>

						В назначении платежа указывайте номер заказа <br>
					</p>
				</div>
			</div>
	<!-- .... .... -->
			<div id="Payment_Bank-loan"> <!-- Банковский кредит  -->
				<div id="Payment_Bank-loan_pic">
					<img height="100px" width="100px" src="images/Payment-3.png" title="Банковский кредит" alt = "Кредит"/>
				</div>

				<div id="Payment_Bank-loan_title">
					<p>Банковский кредит </p>
				</div>

				<div id="Payment_Bank-loan_description">
					<p>
						Оформление кредита производится на месте. Кредит предоставляется банком партнером <strong>«Почта Банка»</strong>. <br><br>
						Для расчета стоимости ежемесячного платежа можно воспользоваться сервисом <a href ="https://anketa.pochtabank.ru/?_ga=1.181323363.552098655.1459838146" target = "_blank">Кредитного онлайн-калькулятора</a>. 
					</p>
				</div>		
			</div>
	<!-- .... .... -->
			<div id="Payment_Loan-online-calculator"> <!-- Кредитный онлайн калькулятор -->
			</div>
		</section>
	</div>

<!-- 6ой информационный блок ...................................................................... -->
	<div id="About">
		<section id="ex5"> <!-- ставим якорь для быстрого перехода -->
			<div id="About_Title">
				<p>О компании</p>
			</div>

			<div id="About_description">
				<div id="About_description_title">
					<p>О нас:</p>
				</div>

				<div id="About_description_text">
					<p>
						Мы работаем на рынке профессионального инструмента и оборудования уже более 10 лет и за это время стали настоящими лидерами в данной сфере на территории 
						Липецкой и Тамбовской области. Качественные запросы потребителя растут каждый день, и мы стараемся им соответствовать. Мы ведём учёт потребностей рынка и 
						серьёзно относимся к отзывам о работе поставляемой нами технической продукции, что позволяет добиваться оптимального соотношения цены и качества наших товаров. <br><br>

						Мы располагаем собственной сервисной службой и собственным автопарком для доставки, что позволяет в кратчайшие сроки устранять поломки оборудования и исполнять 
						заявки по гарантийным случаям, а так же своевременно осуществлять доставку товара и снижать трудозатраты наших клиентов. 
					</p>
				</div>
			</div>

			<div id = "About_Shop">			
				<div id="About_Shop_1"> <!-- lipetsk -->		
					<nav id="About_NAV_1">
						<a href="#ex6"> <!-- переход к якорю №: #ex6 -->
							<div id="About_Shop_1_Title">
								<p>Магазин «Автомеханик» Липецк</p>
							</div>
							
							<div id ="About_Shop_1_Address">
								<p>г. Липецк, улица Доватора, дом 10а</p>
							</div>

							<div id ="About_Shop_1_Phones">
								<p>
									8 (800) 200 48 01 - Звонок бесплатный<br>
									8 (4742) 552-100 - Отдел доставки<br>
									8 (4742) 553-100 - Отдел продаж<br>
									8 (4742) 554-100 - Отдел сервиса<br>
								</p>
							</div>

							<div id ="About_Shop_1_WorkTime">
								<p>
									<strong>Режим работы:</strong><br>
									Пн-Пт с 09:00-18:00<br>
									<span><strong>Сб-Вс: с 09:00-17:00</strong></span>
								</p>
							</div>
						</a>					
					</nav>
				</div>
			

				<div id="About_Shop_2"> <!-- Tambov -->
					<nav id="About_NAV_2">
						<a href="#ex6"> <!-- переход к якорю №: #ex6 -->
							<div id="About_Shop_2_Title">
								<p>Магазин «Мастак» в Тамбове </p>
							</div>
							
							<div id ="About_Shop_2_Address">
								<p>г. Тамбов, улица Урожайная, дом 1в</p>
							</div>

							<div id ="About_Shop_2_Phones">
								<p>
									8 (800) 200 48 01 - Звонок бесплатный<br>
									8 (4752) 49-25-36 - Отдел продаж<br>
									8 (4752) 49-25-37 - Отдел продаж						
								</p>
							</div>

							<div id ="About_Shop_2_WorkTime">
								<p>
									<strong>Режим работы:</strong><br>
									Пн-Пт с 09:00-18:00<br>
									<span><strong>Сб-Вс: с 09:00-17:00</strong></span>
								</p>
							</div>
						</a>
					</nav>
				</div>

				<div id="About_Shop_3">	<!-- Voronezh -->
					<nav id="About_NAV_3">
						<a href="#ex6"> <!-- переход к якорю №: #ex6 -->
							<div id="About_Shop_3_Title">
								<p>Магазин «Автомеханик» Воронеж </p>
							</div>
							
							<div id ="About_Shop_3_Address">
								<p>г. Воронеж, улица 45-й Стрелковой Дивизии, дом 180</p>
							</div>

							<div id ="About_Shop_3_Phones">
								<p>
									8 (800) 200 48 01 - Звонок бесплатный<br>
									8 (473) 202 50 30; 202 55 05 - Магазин						
								</p>
							</div>

							<div id ="About_Shop_3_WorkTime">
								<p>
									<strong>Режим работы:</strong><br>
									Пн-Пт с 09:00-18:00<br>
									<span><strong>Сб-Вс: с 09:00-17:00</strong></span>
								</p>
							</div>
						</div>				
					</a>
				</nav>
			</div>

			<div id=About_Sert>
				<div id="About_Sert_Title">
					<p>Наши сертификаты:</p>
				</div>

				<div id="About_Sert_1">  
					<a rel="simplebox" href="images/Sert-1.jpg">						
						<img height="200px" width="150px" src="images/Sert-1.jpg" title="Сертефикат «Техно Вектор»" alt = "«Техно Вектор» сертефикат"/>
					</a>						
				</div>
				
				<div id="About_Sert_2">
					<a rel="simplebox" href="images/Sert-2.jpg">
						<img height="200px" width="150px" src="images/Sert-2.jpg" title="Сертефикат «Техно Вектор»" alt = "«Техно Вектор» сертефикат"/>
					</a>
				</div>			
			</div>	

			<div id = About_block_line-1></div> <!--от: О компании - вертикальная несущая -->	
			<div id = About_block_line-2></div> <!--от: О компании - Магазин-1 (горизонтальная) -->	
			<div id = About_block_line-3></div> <!--от: О компании - Магазин-2 (горизонтальная) -->	
			<div id = About_block_line-4></div> <!--от: О компании - Магазин-3 (горизонтальная) -->	
			<div id = About_block_line-5></div> <!--от: О компании - О нас (горизонтальная) -->	
			<div id = About_block_line-6></div> <!--от: О компании - Сертификаты (горизонтальная) -->	
			<div id = About_block_line-7></div> <!--от: О компании - доп.линия для масштабирования -->	
		</section>
	</div> <!-- About -->

<!-- 7ый информационный блок ...................................................................... -->
<!--
	<div id="VideoBlogs">
		VIDEOBLOGs
	</div>	
-->



<!-- FOOTER -->
<div id="footer">	
	<section id="ex6"> <!-- ставим якорь для быстрого перехода -->
		<div id="BottomMenu_1"></div> <!-- оранжевый сплиттер -->       	

		<div id="Footer_Contacts_Text"><p>НАШИ МАГАЗИНЫ</p></div>

		<!-- Maps -->
		<div id="footer_maps">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=WqxtB7D0ual2gMgQds49MMCML66Pa2G-&amp;width=100%&amp;height=540&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
		</div>

		<!-- Картинка с рукой и телефоном, заезжающая на крату, идет после карты, тем самым накладываясь на нее -->
		<div id="Footer_HandPhone_img"> <!-- Картинка с рукой и телефоном -->
		<!--	<img height="300px" width="350px" src="images/HandPhone.png" title="Мы в GooglePlay Market" alt="GooglePlay"> -->
		</div>	        	

		<div class="BottomMenu_2"> 	   
	  </div> 


		<div id="BottomMenu_3"></div> <!-- оранжевый сплиттер -->    	

		<div id="BottomMenu_5"> <!-- Оранжевый блок с дублирующийся информацией как и в Header'e -->
	    <div id="BottomMenu_5_TimeWork_block">    
	      <img height="28px" width="28px" src="images/Time.png" title="Режим работы" alt="Режим работы">  <p><strong> Режим работы </strong></p>                      
	      <p>09:00 до 18:00</p>
	      <section><p>09:00 до 17:00</p></section>
		  </div>

	    <div id="BottomMenu_5_Contact_block"> <!-- общий блок -->
	      <div class="Vertical_splitter"></div> <!-- визуальный разделитель, просто вертикальная линия -->

	      <img height="28px" width="28px" src="images/Phone.png" title="Контакты" alt="Контакты">
	      <p><strong> 8 (800) 200 - 48 - 01 </strong></p>
	      <!-- <p><strong> 8 (4742) 555 - 555 </strong></p> -->
	      <div id="BottomMenu_5_Contact_email"><p><strong><a href="mailto:info@avto-mechanic.ru">info@avto-mechanic.ru</a></strong></p></div>
	    </div>   	
		</div>

		<!-- Голубое нижнее меню с общей информацией -->
	  <div id="BottomMenu_4">	<!-- Общий голубой блок -->	
			<div id="BottomMenu_4_Logo_Block"> <!-- Блок с логотипом -->
			  <img height="68px" width="80px" src="images/logo_tv.png" title="Официальный дилер завода «Техновектор»" alt="Официальный дилер завода «Техновектор»">

			  <div id="BottomMenu_4_Dealer_block_text">
					<p> Доступное оборудование для сход-развала </p>			
			  </div>		
			</div>

			<div id="BottomMenu4_Text_block">
				<a href="#"><strong> Techno Vector Group </strong></a>
			</div>
	  </div>
	</section>
</div> 
<!-- FOOTER -->




<!-- дополнительные скрипты... -->
	<!-- Скрипт для увеличения картинки по клику по ней (должен быть размещен в конце тела) -->
		<script type="text/javascript" src="JS/simplebox_util.js"></script> <!-- УКАЗЫВАЕМ ПУТЬ К СКРИПТУ -->
    <script type="text/javascript">
    (function()
    {
        var boxes=[],els,i,l;
        if(document.querySelectorAll)
        {
            els=document.querySelectorAll('a[rel=simplebox]');  
            Box.getStyles('simplebox_css','CSS/simplebox.css'); 			 /* УКАЗЫВАЕМ ПУТЬ К СТИЛЯМ */
            Box.getScripts('simplebox_js','JS/simplebox.js',function() /* УКАЗЫВАЕМ ПУТЬ К СКРИПТУ */
            { 
                simplebox.init();
                for(i=0,l=els.length;i<l;++i)
                simplebox.start(els[i]);
                simplebox.start('a[rel=simplebox_group]');          
            });
        }
    })();
    </script>

<!-- Анимация для меню при скролле -->
			<script>
			  $(window).scroll(function() {
			    $('.mov_1').each(function(){ /*ищет элементы с классом .mov*/
			      var imagePos = $(this).offset().top;
			      var topOfWindow = $(window).scrollTop();
			      if (imagePos < topOfWindow+50) { /*цифра задает когда начинает играть анимация, т.е. если до верха стр. остается 200px или меньше, то вкл. анимация*/
			        $(this).addClass('lightSpeedIn'); /*добавляем к найденным элементам определенный класс анимации*/
			      }
			    });
			  });
			</script>        
</BODY>
</HTML>