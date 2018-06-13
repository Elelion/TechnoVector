<!-- Для отправки писем с сайта BLOCK-1 -->
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


<!--.....................................................................-->


<form method="post" action="" id="ajaxform_call_form"> <br /> <!-- передаем все что ниже, методом POST в $("#ajaxform_call_form").submit(function().... --	>
	<!-- Вызывемая форма обратной связи -->	
	<!-- <div id="call_form"> <!-- форма обратной связи -->					
		<!-- <a id="call_form_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('call_form').style.display='none';document.getElementById('call_form_fade').style.display='none';enableWheelScroll();"></a> -->

		<div id="call_form_title"><p>ЗАКАЗАТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ </p></div>		
		
		<div id="call_form_blocks">
			<div id="call_form_Edit1">
				<INPUT TYPE="text" 
					ID = "CB_Edit1"
					NAME="CB_Edit1" 
					placeholder="Ваше имя"								
						onfocus="if(this.value==this.defaultValue)this.value='';" 
	  				onblur="if(this.value=='')this.value=this.defaultValue;"

					SIZE="40"
					MAXLENGHT="25">
				</INPUT>
			</div>
			
			<div id="call_form_Edit2">
				<INPUT TYPE="text" 
					ID = "CB_Edit2"
					NAME="CB_Edit2" 
					placeholder="Ваш телефон"								
						onfocus="if(this.value==this.defaultValue)this.value='';" 
	  				onblur="if(this.value=='')this.value=this.defaultValue;"

					SIZE="40"
					MAXLENGHT="11">
				</INPUT>
			</div>

			<div id="call_form_Edit3">
				<INPUT TYPE="text" 
					ID = "CB_Edit3"
					NAME="CB_Edit3"
					placeholder="Ваш email"								
						onfocus="if(this.value==this.defaultValue)this.value='';" 
	  				onblur="if(this.value=='')this.value=this.defaultValue;"

					SIZE="40"
					MAXLENGHT="50">
				</INPUT>
			</div>						
			
			<div id="call_form_Edit4">
				<INPUT TYPE="text" 
					ID = "CB_Edit4"
					NAME="CB_Edit4"
					placeholder="Ваше сообщение"
						onfocus="if(this.value==this.defaultValue)this.value='';" 
	  				onblur="if(this.value=='')this.value=this.defaultValue;"

					SIZE="40"
					MAXLENGHT="50">
				</INPUT>
			</div>						

			<div id="CallBack_Button1">
				<INPUT TYPE="submit"
					ID="CB_Button1" 
					NAME="CB_Button1" 
					VALUE="Отправить заявку">
				</INPUT>													
			</div>			
 
			<div id="call_form_additional_text"><p> Нажимая на кнопку отправки формы, Я принимаю <span><a href = "pdf/document.pdf" target="_blank">«Соглашение об обработке персональных данных»</a></span> </p></div>
		</div>
	<!-- </div> <!-- call_form -->	
</form>

<!-- Вызывемая форма с ошибкой - отключена!!! -->
	<!-- <div id="Err_form_fade"> <!-- темный фон а весь сайт, за формой обратой связи, т.е. темная форма определяет текущее положение размера экрана -->			
		<!-- <div id="Err_form"> <!-- форма обратной связи -->					
			<!-- <a id="Err_form_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('Err_form').style.display='none';document.getElementById('Err_form_fade').style.display='none';enableWheelScroll();"></a>
			<!-- <div id="Err_text">Заполните поле: <script>$(this).attr('placeholder');</script></div>				
		<!-- </div> <!-- Software_call_form -->
	<!-- </div> <!-- Software_call_form_fade -->