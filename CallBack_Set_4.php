<!-- Для отправки писем с сайта BLOCK-1 -->
<script type="text/javascript">
	$(document).ready(function() 
	{ 
		$("#ajaxform_CallBack_Set_4_form").submit(function()
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
					url: 'scripts/send_mail_Set_4.php', // путь до обработчика, у нас он лежит в той же папке
					dataType: 'json', // ответ ждем в json формате
					data: data, // данные для отправки

					beforeSend: function(data) 
					{ // событие до отправки
					  form.find('input[name="Set_4_CB_Button1"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
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
								$('#Set_4_CB_Edit1').val(''); //Сбрасываем поля ввода
								$('#Set_4_CB_Edit2').val('');
								$('#Set_4_CB_Edit3').val('');												    				
								$('#Set_4_CB_Edit4').val('');						
																		     
  							document.getElementById('CallBack_Set_4_close-btn').onclick(); //Эмитация нажатия кнопки на закрытие формы      							
							}
					},
					 
					error: function (xhr, ajaxOptions, thrownError) 
					{ // в случае неудачного завершения запроса к серверу
					  alert(xhr.status); // покажем ответ сервера
					  alert(thrownError); // и текст ошибки
					},
					complete: function(data) 
					{ // событие после любого исхода
					  form.find('input[name="Set_4_CB_Button1"]').prop('disabled', false); // в любом случае включим кнопку обратно
					}          
				});
			}
			return false; // вырубаем стандартную отправку формы
		});
	});
</script>


<!--.....................................................................-->


<!-- Вызывемая форма обратной связи -->
<div id="CallBack_Set_4_form_fade"> <!-- темный фон а весь сайт, за формой обратой связи, т.е. темная форма определяет текущее положение размера экрана -->			
	<div id="CallBack_Set_4_form"> <!-- форма обратной связи -->					
		<a id="CallBack_Set_4_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('CallBack_Set_4_form').style.display='none';document.getElementById('CallBack_Set_4_form_fade').style.display='none';enableWheelScroll();"></a>

		<div id="CallBack_Set_4_form_title"><p>ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ или оставить заявку на комплект «Техно Вектор 4» </p></div>		

		<form method="post" action="" id="ajaxform_CallBack_Set_4_form"> <br />
			<div id="CallBack_Set_4_form_blocks">
				<div id="CallBack_Set_4_form_Edit1">
					<INPUT TYPE="text" 
						ID = "Set_4_CB_Edit1"
						NAME="Set_4_CB_Edit1" 
						placeholder="Ваше имя"								
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="25">
					</INPUT>
				</div>
				
				<div id="CallBack_Set_4_form_Edit2">
					<INPUT TYPE="text" 
						ID = "Set_4_CB_Edit2"
						NAME="Set_4_CB_Edit2" 
						placeholder="Ваш телефон"								
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="11">
					</INPUT>
				</div>

				<div id="CallBack_Set_4_form_Edit3">
					<INPUT TYPE="text" 
						ID = "Set_4_CB_Edit3"
						NAME="Set_4_CB_Edit3"
						placeholder="Ваш email"								
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="50">
					</INPUT>
				</div>						
				
				<div id="CallBack_Set_4_form_Edit4">
					<INPUT TYPE="text" 
						ID = "Set_4_CB_Edit4"
						NAME="Set_4_CB_Edit4"						
						placeholder="Ваше сообщение"
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="50">
					</INPUT>
				</div>						

				<div id="CallBack_Set_4_Button1">
					<INPUT TYPE="submit"
						ID="Set_4_CB_Button1" 
						NAME="Set_4_CB_Button1" 
						VALUE="Отправить заявку">
					</INPUT>													
				</div>			
 
				<div id="CallBack_Set_4_additional_text"><p> Нажимая на кнопку отправки формы, Я принимаю <span><a href = "pdf/document.pdf" target="_blank">«Соглашение об обработке персональных данных»</a></span> </p></div>
			</div>
		</form>		
	</div> <!-- CallBack_Set_4_form -->
</div> <!-- CallBack_Set_4_form_fade -->