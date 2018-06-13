<?php require_once "header.php"; ?>
<?php include("scripts/db_connect.php"); ?> <!-- подключаем файл который содержит подключение к БД -->

<!-- .......................................... Получаем модель, которая была передана .......................................... -->
<?php  
  if(isset($_POST["Card_Tovar_DONE"])) //Если в каталоге была нажата кнопка, то...
  {
  	$Card_Tovar_MODEL_var = $_POST["Card_Tovar_MODEL"]; //Присваиваем значение переменной, для того, что бы далее сравнивать с ней значения из БД, с массивом не прокатит  
  }
?>

<!-- .......................................... загружаем данные из БД .......................................... -->
<?php
  $result = mysql_query("SELECT * FROM product_card WHERE product_model='$Card_Tovar_MODEL_var' ",$link); /* заносим результат в переменную $result */         

  if(mysql_num_rows($result) > 0) /*проверяем вывод, если что то есть , то выводим...*/
  {
    $row = mysql_fetch_array($result); /* mysql_fetch_array - Вывод из базы данныхб $row в данном случае является как массив */    
    do /*выводим все товары на экран циклом*/
    {              
      $product_name = 					$row["product_name"];
      $product_model = 					$row["product_model"];
      $product_series = 				$row["product_series"];
      $product_series_full = 		$row["product_series_full"];
      $product_cam = 						$row["product_cam"];
      $product_mounting_type = 	$row["product_mounting_type"];
      $product_PC_stand = 			$row["product_PC_stand"];
      $product_usability = 			$row["product_usability"];
      $product_distance = 			$row["product_distance"];
      $product_advantages = 		$row["product_advantages"];

      $product_setup = 					$row["product_setup"];

      $product_foil = 					$row["product_foil"];
      $product_box_catch = 			$row["product_box_catch"];
      $product_box_monitor = 		$row["product_box_monitor"];
      $product_box_printer = 		$row["product_box_printer"];
      $product_box1 = 					$row["product_box1"];
      $product_box2 = 					$row["product_box2"];
      $product_box3 = 					$row["product_box3"];
      $product_box4 = 					$row["product_box4"];

      $product_weight = 				$row["product_weight"];
      $product_volume = 				$row["product_volume"];
      $product_description = 		$row["product_description"];

      //echo '<p>' .$product_name.$product_model. ' TEXT .</p>'; //для проверки
    }
    while($row = mysql_fetch_array($result)); /*выводим до тех пор пока не кончиться товар*/
  }
?>

<!-- .......................................... Для загрузки картинки .......................................... -->

<!-- TV_7 -->
	<?php 
		if($Card_Tovar_MODEL_var == "V 7204 H A") { $IMG_SRC = "images/TV_7_Catalog_V7204HA.png"; }
		if($Card_Tovar_MODEL_var == "T 7204 T P") { $IMG_SRC = "images/TV_7_Catalog_T7204TP.png"; }
		if($Card_Tovar_MODEL_var == "V 7204 T A") { $IMG_SRC = "images/TV_7_Catalog_V7204TA.png"; }
		if($Card_Tovar_MODEL_var == "V 7204 T S") { $IMG_SRC = "images/TV_7_Catalog_V7204TS.png"; }

		if($Card_Tovar_MODEL_var == "V 7204 K A") { $IMG_SRC = "images/TV_7_Catalog_V7204KA.png"; }
		if($Card_Tovar_MODEL_var == "V 7204 T P") { $IMG_SRC = "images/TV_7_Catalog_V7204TP.png"; }
		if($Card_Tovar_MODEL_var == "T 7204 T A") { $IMG_SRC = "images/TV_7_Catalog_T7204TA.png"; }
		if($Card_Tovar_MODEL_var == "T 7204 T S") { $IMG_SRC = "images/TV_7_Catalog_T7204TS.png"; }

		if($Card_Tovar_MODEL_var == "T 7204 H A") { $IMG_SRC = "images/TV_7_Catalog_T7204HA.png"; }
		if($Card_Tovar_MODEL_var == "T 7204 K A") { $IMG_SRC = "images/TV_7_Catalog_T7204KA.png"; }
	?>

<!-- TV_7 TRUCK -->	
	<?php
		if($Card_Tovar_MODEL_var == "T 7204 H T") { $IMG_SRC = "images/TV_7_Truck_Catalog_T7204HT.png"; }
		if($Card_Tovar_MODEL_var == "V 7204 H T") { $IMG_SRC = "images/TV_7_Truck_Catalog_V7204HT.png"; }
	?>

<!-- TV_6 -->	
	<?php
		if($Card_Tovar_MODEL_var == "T 6202") { $IMG_SRC = "images/TV_6_Catalog_T6202.png"; }
		if($Card_Tovar_MODEL_var == "6202") { $IMG_SRC = "images/TV_6_Catalog_6202.png"; }
	?>

<!-- TV_5 -->	
	<?php
		if($Card_Tovar_MODEL_var == "T 5216 R PRRC") { $IMG_SRC = "images/TV_5_Catalog_T5216RPRRC.png"; }
		if($Card_Tovar_MODEL_var == "T 5216") { $IMG_SRC = "images/TV_5_Catalog_T5216.png"; }
		if($Card_Tovar_MODEL_var == "V 5216 R") { $IMG_SRC = "images/TV_5_Catalog_V5216R.png"; }
		if($Card_Tovar_MODEL_var == "V 5214 N") { $IMG_SRC = "images/TV_5_Catalog_V5214N.png"; }

		if($Card_Tovar_MODEL_var == "V 5214 NR") { $IMG_SRC = "images/TV_5_Catalog_V5214NR.png"; }
		if($Card_Tovar_MODEL_var == "V 5216") { $IMG_SRC = "images/TV_5_Catalog_V5216.png"; }
		if($Card_Tovar_MODEL_var == "T 5214 NR") { $IMG_SRC = "images/TV_5_Catalog_T5214NR.png"; }
		if($Card_Tovar_MODEL_var == "V 5216 R PRRC") { $IMG_SRC = "images/TV_5_Catalog_V5216RPRRC.png"; }

		if($Card_Tovar_MODEL_var == "V 5216 PRRC") { $IMG_SRC = "images/TV_5_Catalog_V5216PRRC.png"; }
		if($Card_Tovar_MODEL_var == "V 5214 NR PRRC") { $IMG_SRC = "images/TV_5_Catalog_V5214NRPRRC.png"; }
		if($Card_Tovar_MODEL_var == "V 5214 N PRRC") { $IMG_SRC = "images/TV_5_Catalog_V5214NPRRC.png"; }
		if($Card_Tovar_MODEL_var == "T 5214 NR PRRC") { $IMG_SRC = "images/TV_5_Catalog_T5214NRPRRC.png"; }
		
		if($Card_Tovar_MODEL_var == "T 5214 N PRRC") { $IMG_SRC = "images/TV_5_Catalog_T5214NPRRC.png"; }
		if($Card_Tovar_MODEL_var == "T 5216 R") { $IMG_SRC = "images/TV_5_Catalog_T5216R.png"; }
		if($Card_Tovar_MODEL_var == "T 5214 N") { $IMG_SRC = "images/TV_5_Catalog_T5214N.png"; }		
	?>	

<!-- убираем характеристики для TV_5 -->
	<?php
		if($Card_Tovar_MODEL_var == "T 5216 R PRRC" || $Card_Tovar_MODEL_var == "T 5216" || $Card_Tovar_MODEL_var == "V 5216 R" || $Card_Tovar_MODEL_var == "V 5214 N"
			|| $Card_Tovar_MODEL_var == "T 5216 R" || $Card_Tovar_MODEL_var == "T 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR PRRC" || $Card_Tovar_MODEL_var == "V 5216"
				|| $Card_Tovar_MODEL_var == "V 5216 R PRRC" || $Card_Tovar_MODEL_var == "V 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR" || $Card_Tovar_MODEL_var == "V 5214 NR"
					|| $Card_Tovar_MODEL_var == "V 5216 PRRC" || $Card_Tovar_MODEL_var == "V 5214 NR PRRC" || $Card_Tovar_MODEL_var == "T 5214 N")
		{
			?>
				<style type="text/css">#Card_Tovar_Features { display: none; } </style>
			<?php
		}
	?>

<!-- .......................................... Для отправки писем с сайта .......................................... -->
<script type="text/javascript">
	$(document).ready(function() 
	{ 
		$("#ajaxform_call_form").submit(function()
		{ // перехватываем все при событии отправки
			var form = $(this); // запишем форму, чтобы потом не было проблем с this
			var error = false; // предварительно ошибок нет
			
			form.find('input, textarea').each( function()
			{ // пробежим по каждому полю в форме
				if ($(this).val() == '') 
				{ // если находим пустое					
					//<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Err_form').style.display='block';document.getElementById('Err_form_fade').style.display='block';disableWheelScroll();">

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
					url: 'scripts/send_mail_main.php', // путь до обработчика, у нас он лежит в той же папке
					dataType: 'json', // ответ ждем в json формате
					data: data, // данные для отправки

					beforeSend: function(data) 
					{ // событие до отправки
					  form.find('input[name="CB_Button1"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
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
								$('#CB_Edit1').val(''); //Сбрасываем поля ввода
								$('#CB_Edit2').val('');
								$('#CB_Edit3').val('');												    				
								$('#CB_Edit4').val('');						
																		     
  							document.getElementById('call_form_close-btn').onclick(); //Эмитация нажатия кнопки на закрытие формы      							
							}
					},
					 
					error: function (xhr, ajaxOptions, thrownError) 
					{ // в случае неудачного завершения запроса к серверу
					  alert(xhr.status); // покажем ответ сервера
					  alert(thrownError); // и текст ошибки
					},
					complete: function(data) 
					{ // событие после любого исхода
					  form.find('input[name="CB_Button1"]').prop('disabled', false); // в любом случае включим кнопку обратно
					}          
				});
			}
			return false; // вырубаем стандартную отправку формы
		});
	});
</script>

<!-- ..........................................  .......................................... -->

  <div id="Card_Tovar">
    <div id="Card_Tovar_pos">
    <!-- <?php echo $IMG_SRC ?> -->
      <div id="Card_Tovar_Description"> <!-- 1st GENERAL BLOCK -->
      	<div id="Card_Tovar_Description_Pic">
      		<img src= <?php echo $IMG_SRC ?> title="Продукция Технокар, <? echo $product_name?>" alt="Стенд развал-схождения <?echo $product_name?>" />
      	</div>
<!-- ... -->      
				<div id="Card_Tovar_Description_pos">
	        <div id="Card_Tovar_Description_Title">
	        	<p>
	        		<?php echo $product_name ?>
	        	</p>
	        </div>
		<!-- ... -->
	        <div id="Card_Tovar_Description_Model">
	        	<p>
	        		<?php echo $product_model ?>
	        	</p>
	        </div>	        
		<!-- ... -->
	        <div id="Card_Tovar_Description_Series">
	        	<p>
	        		<?php echo $product_series ?>
	        	</p>
	        </div>
<!-- ... -->
	        <div id="Card_Tovar_Description_Price">

				<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('CT_ReCall_form').style.display='block';document.getElementById('CT_ReCall_form_fade').style.display='block';disableWheelScroll();">
					<div id="Card_Tovar_Description_Price_ReCallBack_Button1">				
					<div id="ReCallBack_Button1">
						<INPUT TYPE="submit"
							ID="RCB_Button1" 
							NAME="RCB_Button1" 
							VALUE="Оставить заявку">
						</INPUT>													
					</div>			
					</div>
				</a>

	        	<div id="Card_Tovar_Description_Price_text">
		        	<p>
		        		Вы так же можете приобрести продукцию Техно Вектор в кредит. Подробности узнавайте у наших менеджеров.
		        	</p>
	        	</div>
	        </div>	        
	      </div>
<!-- ... -->        
      </div>

      <div id="Card_Tovar_Features"> <!-- 2st GENERAL BLOCK -->
				<div id="Card_Tovar_Features_Title">
					<p>Характеристики</p>
				</div>
<!-- ... -->
				<div id="Card_Tovar_Features_Table">
				<table>
					<tr><!-- <th class="Card_Tovar_Features_Table_1st_col">Заголовок 1</th><th>Заголовок 2</th> --></tr>

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Серия</TD>
   					<TD><?php echo $product_series_full ?></TD>
   				</tr>

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Количество камер</TD>
   					<TD><?php echo $product_cam ?></TD>
   				</tr>   			

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Тип монтажа</TD>
   					<TD><?php echo $product_mounting_type ?></TD>
   				</tr>

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Компьютерная стойка</TD>
   					<TD><?php echo $product_PC_stand ?></TD>
   				</tr>

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Применяемость</TD>
   					<TD><?php echo $product_usability ?></TD>
   				</tr>

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Расстояние от камер до центра передних поворотных платформ</TD>
   					<TD><?php echo $product_distance ?></TD>
   				</tr>

   				<tr>
   					<TD class="Card_Tovar_Features_Table_1st_col">Основные преимущества</TD>
   					<TD><?php echo $product_advantages ?></TD>
   				</tr>
   			</table>
				</div>
<!-- ... -->				
      </div>          

      <div id="Card_Tovar_Setup"> <!-- 3st GENERAL BLOCK -->
				<div id="Card_Tovar_Setup_Title">
					<p>Установка</p>
				</div>
				
				<div id="Card_Tovar_Setup_Text">
					<p>
						<?php echo  $product_setup ?>
					</p>
				</div>

<!-- ... -->				
      </div>          

      <div id="Card_Tovar_Size"> <!-- 4st GENERAL BLOCK -->
		<div id="Card_Tovar_Size_Title">
			<p>Габариты</p>
		</div>
				
		<div id="Card_Tovar_Size_Table">
			<table>
				<tr><th class="Card_Tovar_Size_Table_1st_col">Тип упаковки</th><th>Размеры (мм), (Д x Ш x В / Вес(кг))</th></tr>
<!-- ... -->
				<tr>
					<TD class="Card_Tovar_Size_Table_1st_col">Пленка (Передние поворотные опоры) </TD>
					<TD><?php echo $product_foil ?></TD>
				</tr>
<!-- ... -->
				<tr>
					<TD class="Card_Tovar_Size_Table_1st_col">Картонная коробка (захваты)  </TD>
					<TD><?php echo $product_box_catch ?></TD>
				</tr>
<!-- ... -->
				<tr>
					<TD class="Card_Tovar_Size_Table_1st_col">Картонная коробка (монитор) </TD>
					<TD><?php echo $product_box_monitor ?></TD>
				</tr>
<!-- ... -->
				<tr>
					<TD class="Card_Tovar_Size_Table_1st_col">Картонная коробка (принтер) </TD>
					<TD><?php echo $product_box_printer ?></TD>
				</tr>
<!-- ..........................................................................product_box1 -->
				<tr>
					<?php
/*Ящик фанерный*/
/*TV_7*/		if($Card_Tovar_MODEL_var == "V 7204 H A" || $Card_Tovar_MODEL_var == "T 7204 T P" || $Card_Tovar_MODEL_var == "V 7204 T A" || $Card_Tovar_MODEL_var == "V 7204 T S"
							|| $Card_Tovar_MODEL_var == "V 7204 K A" || $Card_Tovar_MODEL_var == "V 7204 T P" || $Card_Tovar_MODEL_var == "T 7204 T A" || $Card_Tovar_MODEL_var == "T 7204 T S"
								|| $Card_Tovar_MODEL_var == "T 7204 K A"

/*TV_7_TRUCK*/|| $Card_Tovar_MODEL_var == "T 7204 H T" || $Card_Tovar_MODEL_var == "V 7204 H T" || $Card_Tovar_MODEL_var == "T 7204 H A"

/*TV_5*/			|| $Card_Tovar_MODEL_var == "T 5216 R PRRC" || $Card_Tovar_MODEL_var == "T 5216" || $Card_Tovar_MODEL_var == "V 5216 R" || $Card_Tovar_MODEL_var == "V 5214 N" 
						|| $Card_Tovar_MODEL_var == "T 5216 R" || $Card_Tovar_MODEL_var == "T 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR PRRC" || $Card_Tovar_MODEL_var == "V 5216"
							|| $Card_Tovar_MODEL_var == "V 5216 R PRRC" || $Card_Tovar_MODEL_var == "V 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR" || $Card_Tovar_MODEL_var == "V 5214 NR"
								|| $Card_Tovar_MODEL_var == "V 5216 PRRC" || $Card_Tovar_MODEL_var == "V 5214 NR PRRC" || $Card_Tovar_MODEL_var == "T 5214 N")
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Ящик фанерный </TD> <?php 
						}
/*Картон*/
/*TV_6*/		if($Card_Tovar_MODEL_var == "T 6202" || $Card_Tovar_MODEL_var == "6202") 
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Картон </TD> <?php 
						}
					?>					
					<TD><?php echo $product_box1 ?></TD>
				</tr>
<!-- ..........................................................................product_box2 -->
				<tr>
					<TD class="Card_Tovar_Size_Table_1st_col">Ящик фанерный </TD>
					<TD><?php echo $product_box2 ?></TD>
				</tr>
<!-- ..........................................................................product_box3 -->
				<tr>
					<?php
/*Картон*/
/*TV_7*/	if($Card_Tovar_MODEL_var == "V 7204 H A" || $Card_Tovar_MODEL_var == "T 7204 T P" || $Card_Tovar_MODEL_var == "V 7204 T A" || $Card_Tovar_MODEL_var == "V 7204 T S"
							|| $Card_Tovar_MODEL_var == "V 7204 K A" || $Card_Tovar_MODEL_var == "V 7204 T P" || $Card_Tovar_MODEL_var == "T 7204 T A")
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Картон </TD> <?php 
						}					
/*Пленка*/
/*TV_7_TR*/	if($Card_Tovar_MODEL_var == "T 7204 H T" || $Card_Tovar_MODEL_var == "V 7204 H T") 
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Пленка </TD> <?php 
						}
/*Ящик фанерный*/						
/*TV_7*/		if($Card_Tovar_MODEL_var == "T 7204 H A" || $Card_Tovar_MODEL_var == "T 7204 K A"

/*TV_6*/			|| $Card_Tovar_MODEL_var == "T 6202" || $Card_Tovar_MODEL_var == "6202" || $Card_Tovar_MODEL_var == "T 7204 T S"

/*TV_5*/			||$Card_Tovar_MODEL_var == "T 5216 R PRRC" || $Card_Tovar_MODEL_var == "T 5216" || $Card_Tovar_MODEL_var == "V 5216 R" || $Card_Tovar_MODEL_var == "V 5214 N"
						|| $Card_Tovar_MODEL_var == "T 5216 R" || $Card_Tovar_MODEL_var == "T 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR PRRC" || $Card_Tovar_MODEL_var == "V 5216"
							|| $Card_Tovar_MODEL_var == "V 5216 R PRRC" || $Card_Tovar_MODEL_var == "V 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR" || $Card_Tovar_MODEL_var == "V 5214 NR"
								|| $Card_Tovar_MODEL_var == "V 5216 PRRC" || $Card_Tovar_MODEL_var == "V 5214 NR PRRC" || $Card_Tovar_MODEL_var == "T 5214 N")
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Ящик фанерный</TD> <?php 
						}						
					?>
					<TD><?php echo $product_box3 ?></TD>
				</tr>
<!-- ..........................................................................product_box4 -->
				<tr>

					<?php
/*Картон*/
/*TV_7*/		if($Card_Tovar_MODEL_var == "V 7204 H A" || $Card_Tovar_MODEL_var == "T 7204 T P" || $Card_Tovar_MODEL_var == "V 7204 T A" || $Card_Tovar_MODEL_var == "V 7204 T S" 
							|| $Card_Tovar_MODEL_var == "V 7204 K A" || $Card_Tovar_MODEL_var == "V 7204 T P" || $Card_Tovar_MODEL_var == "T 7204 T A" || $Card_Tovar_MODEL_var == "T 7204 T S"
								|| $Card_Tovar_MODEL_var == "T 7204 H A" || $Card_Tovar_MODEL_var == "T 7204 K A"

/*TV_7_TRUCK*/|| $Card_Tovar_MODEL_var == "T 7204 H T" || $Card_Tovar_MODEL_var == "V 7204 H T"

/*TV_5*/			||$Card_Tovar_MODEL_var == "T 5216 R PRRC" || $Card_Tovar_MODEL_var == "T 5216" || $Card_Tovar_MODEL_var == "V 5216 R" || $Card_Tovar_MODEL_var == "V 5214 N"
						|| $Card_Tovar_MODEL_var == "T 5216 R" || $Card_Tovar_MODEL_var == "T 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR PRRC" || $Card_Tovar_MODEL_var == "V 5216"
							|| $Card_Tovar_MODEL_var == "V 5216 R PRRC" || $Card_Tovar_MODEL_var == "V 5214 N PRRC" || $Card_Tovar_MODEL_var == "T 5214 NR" || $Card_Tovar_MODEL_var == "V 5214 NR"
								|| $Card_Tovar_MODEL_var == "V 5216 PRRC" || $Card_Tovar_MODEL_var == "V 5214 NR PRRC" || $Card_Tovar_MODEL_var == "T 5214 N")
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Картон </TD> <?php 
						}					
/*Обрешетка*/						
/*TV_6*/		if($Card_Tovar_MODEL_var == "T 6202" || $Card_Tovar_MODEL_var == "6202") 
						{ 
							?> <TD class="Card_Tovar_Size_Table_1st_col">Обрешетка  </TD> <?php 
						}
					?>						
					<TD><?php echo $product_box4 ?></TD>
				</tr>
			</table>
		</div>		

		<div id="Card_Tovar_Size_Text">	
			<p>Вес БРУТТО: <?php echo $product_weight ?> </p>
			<p>Объем: <?php echo $product_volume ?> </p>
		</div>
    </div>

    <div id="Card_Tovar_Text"> <!-- 5st GENERAL BLOCK -->
    	<p>
    		<?php echo $product_description ?>
    	</p>    	
    </div>

  </div> <!-- Card_Tovar_pos -->
  </div> <!-- Card_Tovar -->

<!-- ..........................................  .......................................... -->

<?php 
	require_once "Card_Tovar_ReCallBack.php"; /* inluding a form with CallBack */
	/*должна быть в самом конце, т.к. если она будет в начале, то переменным не присвоятся данные из БД и не чего не выведется*/ 
?>

<!-- ..........................................  .......................................... -->

<!-- GENERAL TEMPLATE - footer ...begin -->
  <?php require_once "footer.php"; ?>
<!-- GENERAL TEMPLATE - footer ...end -->

</BODY>
</HTML>      