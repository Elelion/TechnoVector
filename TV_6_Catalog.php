<?php require_once "header.php"; ?>

<!-- ..........................................  .......................................... -->

	<div id="TV_6_Catalog_block"> <!-- PERSONAL!!! -->
    <div id="TV_Catalog_block_pos_1">
        <div id="TV_Catalog_block_title">
            <p>Каталог стендов «Техно Вектор 6»</p>
        </div>
    </div>

    <div id="TV_6_Catalog_block_pos_2"> <!-- PERSONAL -->
        
      <div id="TV_Catalog_Block_1">            	
		      <div id="TV_Catalog_Block_1_title"> <p>Техно Вектор 6<span> - T серия</span></p></div>
		    	<div id="TV_Catalog_Block_1_description"> <p><strong>сход-развал 3D (Free Motion)</strong></p></div>

	        <div id="TV_Catalog_Block_1_pic">
	          <img height="170px" width="215px" src="images/TV_6_Catalog_T6202.png" title="T6202 «Техно Вектор»" alt = "«Техно Вектор» T6202"/>
	        </div>

	        <div id="TV_Catalog_Block_1_text-1"> <p><strong> T 6202 </strong></p></div>      	        
	        
			<div id="TV_Catalog_Block_1_Btn_Buy">
	        	<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
		   		<input type="submit" name="" value="Купить">
			</a>
		   </div>

	        	<div id="TV_Catalog_Block_1_Btn_Details">
				<form name="Card_Tovar_Send" action="Card_Tovar.php" method="post"> <!-- передает обработку при клике файлу Card_Tovar.php -->								
					<input type="hidden" name="Card_Tovar_MODEL" value="T 6202" /><br />
					<input type="submit" name="Card_Tovar_DONE" value="Подробнее">
				</form>
			</div>

	        <div id="TV_Catalog_Block_1_text-3"><p><strong> Расстояние от камер: до 3500 мм </strong></p></div>                                                        	
      </div>

<!-- ......... -->

      <div id="TV_Catalog_Block_2">              	
			<div id="TV_Catalog_Block_2_title"><p>Техно Вектор 6<span> - Light</span></p></div>
			<div id="TV_Catalog_Block_2_description"> <p><strong>сход-развал 3D (Free Motion)</strong></p></div>

			<div id="TV_Catalog_Block_2_pic">
			  <img height="170px" width="215px" src="images/TV_6_Catalog_6202.png" title="6202 «Техно Вектор»" alt = "«Техно Вектор» 6202"/>
			</div>

			<div id="TV_Catalog_Block_2_text-1"><p><strong> 6202 </strong></p></div>      				  
			
			<div id="TV_Catalog_Block_1_Btn_Buy">
	        	<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
		   		<input type="submit" name="" value="Купить">
			</a>
		   </div>

	        	<div id="TV_Catalog_Block_1_Btn_Details">
				<form name="Card_Tovar_Send" action="Card_Tovar.php" method="post"> <!-- передает обработку при клике файлу Card_Tovar.php -->								
					<input type="hidden" name="Card_Tovar_MODEL" value="6202" /><br />
					<input type="submit" name="Card_Tovar_DONE" value="Подробнее">
				</form>
			</div>

			<div id="TV_Catalog_Block_2_text-3"><p><strong> Расстояние от камер: до 3500 мм </strong></p></div>                                                  		
      </div>

<!-- ......... -->

  	</div> <!-- pos 2 -->
  </div>    

<!-- ..........................................  .......................................... -->

<!-- GENERAL TEMPLATE - footer ...begin -->
  <?php require_once "footer.php"; ?>
<!-- GENERAL TEMPLATE - footer ...end -->

</BODY>
</HTML>      