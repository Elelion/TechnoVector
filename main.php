<!-- SCRIPT's ...................................................................................... -->

<!-- For slider in main block -->
  <script type="text/javascript">
    $(document).ready(function(){ 
      $('.Main_Slider_bxSlider').bxSlider({
        mode: 'fade',         /*оявление а не перелистывание*/  
        randomStart: true,   /*картинки будут стартовать в случайной последовательности*/                              
        speed: 1500,          /*скорость прокрутки, по умолчанию 500*/                
        autoControls: false,  /*Дает две кнопки для пролистывания SOPT и PAUSED*/                                             
        /*slideWidth: 424,    /*ширина для каждого слайда, ширина блока задется в : #Software_Monitor_slider -> width*/
        minSlides: 1,         /*минимальное количество блока*/            
        maxSlides: 1,         /*максимальное количество блоков*/            
        slideMargin: 1,       /*отступы между слайдами*/            
        touchEnabled: true,  /*Если true, слайдер позволит сенсорные переходы по слайдам*/                     
        infiniteLoop: true,   /*при нажадии Далее, на посл. слайде перейдет к 1му слайду и наоборот*/           
        pause: 5000,          /*кол-во МС между автоматическим переходом (умолчание; 4000)*/            
        pager: true,         /*убирает кнопки прокрутки*/  
        autoDelay: 500,       /*Время в МС до старта слайд-шоу, по умолчанию: 0 */            
        moveSlides: 0,        /*Кол-во слайдов, что бы перейти на переходный период. Значение должно быть >= minSlides
                                и >= maxSlides. Если он = 0 (по умолчанию), то будет использовано число полностью
                                видимых слайдов*/                           
        /*startSlide: 3,        /*слайд с которого будет стартовать слайд-шоу (нумерация с 0ля)*/                         
        auto: true            /*автоматическое пролистывание слайда*/
      }); 
    });
  </script>   
<!-- SCRIPT's ...................................................................................... -->


  <div id="Main_Slider"> <!-- slider on main sheet -->
    <ul class="Main_Slider_bxSlider">      
<!--
    <li><img src="images/Main_slider_1.jpg" title="Техновектор 3D" alt="Техно-кар"/></li>
    <li><img src="images/Main_slider_2.jpg" title="Держатели мишеней" alt="Техно-кар, держатели мишеней"/></li>
-->        
		<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
      <li><img src="images/Main_slider_3.jpg" title="Скидки Техно Вектор" alt="Акции Техно Вектор"/></li>        
    </a>
<!-- ... -->
		<a href="http://техновектор-россия.рф/TV_7_Catalog.php">
            <li><img src="images/Main_slider_4.jpg" title="Продукция Технокар, Техно Вектор 7" alt="Стенд развал-схождения Техно Вектор 7"/></li>
		</a>
<!-- ... --> <!-- =TIMED SLIDER -> DO WORK!!!= -->
      <!-- <li><img src="images/Main_slider_5.jpg" title="Техническая поддержка Технокар, Техно Вектор" alt="Техническая поддержка Техно Вектор"/></li> -->
    </ul>
  </div>  

<!-- .......................................... -->

  <div id="Main_Sell_block">
    <div id="Main_Sell_block_pos_1">
      <div id="Main_Sell_block_title">
         <p>Выгодные предложения</p>
      </div>

      <div id="Main_Sell_block_text">
        <p>Спецпредложения по разумной цене. </p>
      </div>
    </div>

    <div id="Main_Sell_block_pos_2">
<!-- ......... -->
      <div id="Main_Sell_Block_1">
        <a href = "Stock.php">
          <div id="Main_Sell_Block_1_pic">
            <img height="210px" width="200px" src="images/Set-1.png" title="Комплекты «Техно Вектор»" alt = "«Техно Вектор» Комплекты"/>
          </div>

          <div id="Main_Sell_Block_1_text-1">
            <p><strong> Комплекты «Техно Вектор» </strong></p>
          </div>      
          
          <div id="Main_Sell_Block_1_text-2">
            <p><strong> Комплекты «Техно Вектор» на специальных условиях. </strong></p>
        	</div>                                       
        </a>    
      </div>

<!-- ......... -->

      <div id="Main_Sell_Block_2">
        <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
          <div id="Main_Sell_Block_2_pic">
            <img height="210px" width="200px" src="images/Set-2.png" title="Акции, Шиномонтажный станок" alt = "Шиномонтажный станок со скидкой"/>
          </div>

          <div id="Main_Sell_Block_2_text-1">
          	<p><strong> Шиномонтажный станок </strong></p>
          </div>      
          
          <div id="Main_Sell_Block_2_text-2">
            <p><strong> Полуавтоматический до 22 дюймов, 380в. </strong></p>
          </div>                                       
        </a>    
      </div>

<!-- ......... -->

      <div id="Main_Sell_Block_3">
        <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
          <div id="Main_Sell_Block_3_pic">
            <img height="210px" width="200px" src="images/Set-3.png" title="V 7204, H, T, Техно Вектор 7 Truck" alt = "Техно Вектор 7 Truck по выгодной цене"/>
          </div>

          <div id="Main_Sell_Block_3_text-1">
            <p><strong> K 4 Silent Edition (EU)  </strong></p>
          </div>      
            
          <div id="Main_Sell_Block_3_text-2">
            <p><strong> Моечный аппарат в/д K 4 Silent Edition (EU) KARCHER 1.637-355.0  </strong></p>
          </div>                                       
        </a>    
      </div>

<!-- ......... -->

      <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
        <div id="Main_Sell_Block_4">              
          <div id="Main_Sell_Block_4_pic">
            <img height="210px" width="200px" src="images/Set-4.png" title="Инструменты для дома и автосервиса" alt = "Инструмент для автосервиса и дома"/>
          </div>

          <div id="Main_Sell_Block_4_text-1">
            <p><strong> Инструменты </strong></p>
          </div>      
          
          <div id="Main_Sell_Block_4_text-2">
            <p><strong> Специнструмент для поста сход-развал, автсервиса и дома </strong></p>
          </div>                                                     
        </div>
      </a>    

    </div> <!-- pos 2 -->
  </div> <!-- Main_Sell_block -->

<!-- .......................................... -->

    <div id="Main_Catalog_block">

<!-- ......... -->

        <div id="Main_Catalog_block_arrows_down">
            <img src="images/Arrow_blocks_2.png" />
        </div>

<!-- ......... -->

        <div id="Main_Catalog_block_pos_1">
          <div id="Main_Catalog_block_title">
            <p>Каталог стендов «Техно Вектор»</p>
          </div>

          <div id="Main_Catalog_block_text">
            <h1><p> Полный каталог стендов «Техно Вектор» и дополнительного оборудования. </p></h1>
          </div>
        </div>

        <div id="Main_Catalog_block_pos_2">

<!-- ......... -->

            <a class="show-btn" href = "TV_7_Catalog.php">
              <div id="Main_Catalog_Block_1">        
                <div id="Main_Catalog_Block_1_pic">
                  <img height="240px" width="175px" src="images/TechnoVector-7.png" title="Каталог «Техно Вектор 7»" alt = "Каталог продукции «Техно Вектор»"/>
                </div>

                <div id="Main_Catalog_Block_1_text">
                  <p><strong> Техно Вектор 7 </strong></p>
                </div>                          
              </div>            
            </a>      

<!-- ......... -->

            <a href="TV_7_Truck_Catalog.php">
              <div id="Main_Catalog_Block_2">
                <div id="Main_Catalog_Block_2_pic">
                  <img height="240px" width="160px" src="images/TechnoVector-7_truck.png" title="Каталог «Техно Вектор 7» Truck" alt = "Каталог продукции «Техно Вектор» Truck"/>
                </div>

                <div id="Main_Catalog_Block_2_text">
                  <p><strong> Техно Вектор 7 Truck </strong></p>
                </div>                
              </div>  
            </a>  

<!-- ......... -->

            <a href="TV_6_Catalog.php">
              <div id="Main_Catalog_Block_3">
                <div id="Main_Catalog_Block_3_pic">
                  <img height="240px" width="190px" src="images/TechnoVector-6.png" title="Каталог «Техно Вектор 6»" alt = "Каталог продукции «Техно Вектор 6»"/>
                </div>

                <div id="Main_Catalog_Block_3_text">
                  <p><strong> Техно Вектор 6 </strong></p>
                </div>                
              </div>        
            </a>

<!-- ......... -->

            <a href="TV_5_Catalog.php">
              <div id="Main_Catalog_Block_4">
                <div id="Main_Catalog_Block_4_pic">
                  <img height="240px" width="190px" src="images/TechnoVector-5.png" title="Каталог «Техно Вектор 5»" alt = "Каталог продукции «Техно Вектор 5»"/>
                </div>

                <div id="Main_Catalog_Block_4_text">
                  <p><strong> Техно Вектор 5 </strong></p>
                </div>                
              </div>    
            </a>

<!-- ......... -->

            <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
              <div id="Main_Catalog_Block_5">
                <div id="Main_Catalog_Block_5_pic">
                  <img height="240px" width="190px" src="images/TechnoVector-4.png" title="Каталог «Техно Вектор 4»" alt = "Каталог продукции «Техно Вектор 4»"/>
                </div>

                <div id="Main_Catalog_Block_5_text">
                  <p><strong> Техно Вектор 4 </strong></p>
                </div>                
              </div>
            </a>  

<!-- ......... -->

            <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('CallBack_Catalog_6_Completing_form').style.display='block';document.getElementById('CallBack_Catalog_6_Completing_form_fade').style.display='block';disableWheelScroll();">
              <div id="Main_Catalog_Block_6">
                <div id="Main_Catalog_Block_6_pic">
                  <img height="200px" width="200px" src="images/TechnoVector-Accessories.png" title="Комплектующее для «Техно Вектор»" alt = "Комплектующее оборудование для «Техно Вектор»"/>
                </div>

                <div id="Main_Catalog_Block_6_text">
                  <p><strong> Комплектующее </strong></p>
                </div>                
              </div>  
            </a>
            <?php require_once "CallBack_Catalog_6_Completing.php"; ?> <!-- inluding a form with CallBack -->  

<!-- ......... -->

            <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('CallBack_Catalog_7_WasherForWheel_form').style.display='block';document.getElementById('CallBack_Catalog_7_WasherForWheel_form_fade').style.display='block';disableWheelScroll();">
              <div id="Main_Catalog_Block_7">
                <div id="Main_Catalog_Block_7_pic">
                  <img height="210px" width="200px" src="images/TechnoVector-WheelWash.png" title="Каталог моек для колес" alt = "Большой каталог моек для колес"/>
                </div>

                <div id="Main_Catalog_Block_7_text">
                  <p><strong> Мойка для колес </strong></p>
                </div>                
              </div>    
            </a>
            <?php require_once "CallBack_Catalog_7_WasherForWheel.php"; ?> <!-- inluding a form with CallBack -->  

<!-- ......... -->

            <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('CallBack_Catalog_8_MetalFurniture_form').style.display='block';document.getElementById('CallBack_Catalog_8_MetalFurniture_form_fade').style.display='block';disableWheelScroll();">
                <div id="Main_Catalog_Block_8">
                    <div id="Main_Catalog_Block_8_pic">
                        <img height="210px" width="200px" src="images/TechnoVector-Metal_furniture.png" title="Каталог металлической мебели" alt = "Большой каталог металлической мебели"/>
                    </div>

                    <div id="Main_Catalog_Block_8_text">
                        <p><strong> Металлич. мебель </strong></p>
                    </div>                
                </div>        
            </a>    
            <?php require_once "CallBack_Catalog_8_MetalFurniture.php"; ?> <!-- inluding a form with CallBack -->  
        </div>
    </div>

<!-- .......................................... -->

  <div id="Main_About"> <!-- about block -->    
    <div id="Main_About_Title">
      <p>Кто мы</p>
    </div>

    <div id="Main_About_pos">
        <div id="Main_About_Description">
          <p>
            Мы <strong>Магазин Автомеханик</strong> - являемся официальным партнереом Техно Вектор Групп.
            <br><br>
            <strong>Главный офис компании расположен в России, г. Липецк.</strong>
            <br><br>
            <ul>
              <li> Мы работаем на рынке профессионального оборудования и инструмента уже более 15 лет. </li>
              <li> Располагаем собственной сервисной службой, что позволяет в кратчайшие сроки производить ремонт. </li>
              <li> Весь товар который Вам нужен, можно заказать выходя из дома или офиса, мы сами его привезем к вам. </li>
              <li> Удобная и гибкая система оплаты.  </li>
            </ul>
          </p>
        </div>

        <div id="Main_About_Pic">
          <img src="images/About.png" title="О компании Техно-Вектор" alt="О компании Техно-кар"/>
        </div>
    </div>
  </div>

<!-- .......................................... -->

    <div id="Main_Advantages">
        <div id="Main_Advantages_pos">
            <div id="Main_Advantages_Title">
              <p>НАШИ ПРЕИМУЩЕСТВА</p>
            </div>
            
            <div id="Main_Advantages_Text">
              <p>Плюсы, которые Вы НЕ найдете у других</p>
            </div>

            <div id="Main_Advantages_Blocks">
              <div id="Main_Advantages_Block_1">
                <div id="Main_Advantages_Block_1_pic">
                  <img src="images/Advantages_Block_1_pic.png" title="Техно-Вектор 10 лет работы" alt="Техно-кар 10 лет работы"/>
                </div>

                <div id="Main_Advantages_Block_1_text">
                  <p>15 лет успешной работы на рынке</p>
                </div>
              </div>      
<!-- ...................... -->
              <div class="Main_Advantages_Block_arrows">
                <img src="images/Advantages_Block_arrows.png" />
              </div>
<!-- ...................... -->
              <div id="Main_Advantages_Block_2">
                <div id="Main_Advantages_Block_2_pic">
                  <img src="images/Advantages_Block_2_piс.png" title="Техно-Вектор ПО" alt="Техно-кар ПО"/>
                </div>

                <div id="Main_Advantages_Block_2_text">
                  <p>Бесплатное обновление программного обеспечения</p>
                </div>
              </div>
<!-- ...................... -->
              <div class="Main_Advantages_Block_arrows">
                <img src="images/Advantages_Block_arrows.png" />
              </div>                
<!-- ...................... -->
              <div id="Main_Advantages_Block_3">
                <div id="Main_Advantages_Block_3_pic">
                  <img src="images/Advantages_Block_3_pic.png" title="Техно-Вектор помощь" alt="Техно-кар помощь"/>
                </div>

                <div id="Main_Advantages_Block_3_text">
                  <p>Профессиональная помощь высококлассных специалистов</p>
                </div>
              </div>
<!-- ...................... -->
              <div class="Main_Advantages_Block_arrows">
                <img src="images/Advantages_Block_arrows.png" />
              </div>                
<!-- ...................... -->
              <div id="Main_Advantages_Block_4">
                <div id="Main_Advantages_Block_4_pic">
                  <img src="images/Advantages_Block_4_pic.png" title="Техно-Вектор сертификаты" alt="Техно-кар сертификаты"/>
                </div>

                <div id="Main_Advantages_Block_4_text">
                  <p>Сертификаты</p>
                </div>
              </div>   
<!-- ...................... -->
              <div class="Main_Advantages_Block_arrows">
                <img src="images/Advantages_Block_arrows.png" />
              </div>
<!-- ...................... -->                
              <div id="Main_Advantages_Block_5">
                <div id="Main_Advantages_Block_5_pic">
                  <img src="images/Advantages_Block_5_pic.png" title="Техно-Вектор гарантия" alt="Техно-кар гарантия"/>
                </div>

                <div id="Main_Advantages_Block_5_text">
                  <p>Гарантия на все оборудование </p>
                </div>
              </div>            
            </div>
        </div>
        
        <div id="Main_Advantages_arrows_down">
          <img src="images/Arrow_blocks_1.png" />
        </div>
    </div>  

<!-- .......................................... -->

    <div id="Main_About_company">
      <div id="Main_About_company_pos">
          <div id="Main_About_company_title">
            <p>О нас</p>
          </div>

          <div id="Main_About_company_text">
            <p>
              Мы работаем в сфере профессионального оборудования и инструмента уже более 15 лет, а с продукцией «Техно Вектор» с 2000 г.
              за это время мы стали ведущими лидерами в данных сферах на территориях Воронежской, Липецкой и Тамбовской областях. 
              Качественно-высокие запросы потребителя растут каждый день, и мы стараемся им соответствовать. Мы постоянно ведём 
              учёт потребностей рынка, предоставляем персональные скидки, проффесиональную поддержу, гибкую доставку комплектующих 
              и серьёзно относимся к отзывам о работе поставляемой нами тех. продукции, что позволяет нам добиваться оптимального 
              соотношения цен и качества наших товаров.
            </p>
          </div>
        </div>
    </div>

<!-- .......................................... -->

    <div id="Main_Trust_block">
        <div id="Main_Trust_block_pos">
            <div id="Main_Trust_block_title">
                <p>Нам доверяют</p>
            </div>

            <div id="Main_Trust_block_text">
                <p>
                  С нами работают предприятия по многим регионам и областям РФ.
				          Мы реализуем стенды схода-развала по самым выгодным ценам, охватывая большую часть российских регионов.
				          А оборудование, что мы продаем отмечено рядом престижных международных наград. 
                </p>
            </div>
        </div>
    </div>

<!-- .......................................... -->

    <div id="Main_Sert_block">
        <div id="Main_Sert_block_pos">
            <div id="Main_Sert_block_title">
                <p>Сертификаты</p>
            </div>

            <div id="Main_Sert_block_sert1">        
                <div id="Main_Sert_block_sert1-pic">
                    <a rel="simplebox" href="images/page_6_galleries_1.jpg"> <!-- to increase for click -->  
                        <img height="240px" width="175px" src="images/page_6_galleries_1.jpg" title="Сертификаты, фото 1" alt = "(Фото 1) Сертификаты"/>
                    </a>
                </div>
            </div>                

            <div id="Main_Sert_block_sert2">        
              <div id="Main_Sert_block_sert2-pic">
                <a rel="simplebox" href="images/page_6_galleries_2.jpg"> <!-- to increase for click -->  
                  <img height="240px" width="175px" src="images/page_6_galleries_2.jpg" title="Сертификаты, фото 2" alt = "(Фото 2) Сертификаты"/>
                </a>
              </div>
            </div>  
        </div>
    </div>    

<!-- .......................................... -->


	<div id="Main_Request_form">
		<div id="Main_Request_form_pos">

			<div id="Main_Request_block_title">
	    	  <p>Остались вопросы ?</p>
            </div>
			
			<div id="Main_Request_block_1">
				<p> Закажите бесплатную консультацию специалиста прямо сейчас </p>
			</div>

			<div id="Main_Request_block_2">
				<div id="Main_Request_block_2_bl-1">
					<img height="14px" width="14px" src="images/Check.png" title="" alt = ""/>					
            <p>Детально расскажем об стендах, и покажем все этапы МПО</p>
				</div>

				<div id="Main_Request_block_2_bl-2">
					<img height="14px" width="14px" src="images/Check.png" title="" alt = ""/>					
            <p>Подберем оборудование под ваше помещение с учетом заданного бюджета</p>
				</div>

				<div id="Main_Request_block_2_bl-3">
					<img height="14px" width="14px" src="images/Check.png" title="" alt = ""/>					
            <p>Поможем спланировать рабочее место под заданную бизнес-модель</p>
				</div>
			</div>

			<div id="Main_Request_block_FormBack">
        <?php require_once "CallBack.php"; ?> <!-- inluding a form with CallBack -->
			</div>

		</div>
	</div>

<!-- .......................................... -->

	<div id="Main_map">	
		<div id="Main_map_title">
	    <p>Наши магазины</p>
	  </div>

		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=WqxtB7D0ual2gMgQds49MMCML66Pa2G-&amp;width=100%&amp;height=540&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false;"></script>      
	</div>

<!-- ..........................................  .......................................... -->

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
        Box.getStyles('simplebox_css','CSS/simplebox.css');        /* УКАЗЫВАЕМ ПУТЬ К СТИЛЯМ */
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