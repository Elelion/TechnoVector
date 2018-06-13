<?php require_once "header.php"; ?>

<!-- ..........................................  .......................................... -->

	<div id="TV_7_Truck_Catalog_block"> <!-- PERSONAL!!! -->
    <div id="TV_Catalog_block_pos_1">
      <div id="TV_Catalog_block_title">
          <p>Каталог «Техно Вектор 7 Truck»</p>
      </div>
    </div>

    <div id="TV_7_Truck_Catalog_block_pos_2"> <!-- PERSONAL -->
        
      <div id="TV_Catalog_Block_1">            	
	      <div id="TV_Catalog_Block_1_title"> <p>Техно Вектор 7 <span> - V серия</span></p></div>
	    	<div id="TV_Catalog_Block_1_description"> <p><strong>стенд сход-развал 3D (Truck)</strong></p></div>

        <div id="TV_Catalog_Block_1_pic">
          <img height="170px" width="215px" src="images/TV_7_Truck_Catalog_V7204HT.png" title="V7204HT «Техно Вектор»" alt = "«Техно Вектор» V7204HT"/>
        </div>

        <div id="TV_Catalog_Block_1_text-1"> <p><strong> V 7204 H T </strong></p></div>      	        
	        
				<div id="TV_Catalog_Block_1_Btn_Buy">
	        <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
			   		<input type="submit" name="" value="Купить">
			   		<?php $CatalogBuyBtn_V7204HT = "V 7204 H T"; ?>
					</a>
			  </div>
				
				<div id="TV_Catalog_Block_1_Btn_Details">
					<form name="Card_Tovar_Send" action="Card_Tovar.php" method="post"> <!-- передает обработку при клике файлу Card_Tovar.php -->								
						<input type="hidden" name="Card_Tovar_MODEL" value="V 7204 H T" /><br />
						<input type="submit" name="Card_Tovar_DONE" value="Подробнее">
					</form>
				</div>

	      <div id="TV_Catalog_Block_1_text-3"><p><strong> Расстояние от камер: 2000 - 3500 мм </strong></p></div>                                                        	
      </div>

<!-- ......... -->

      <div id="TV_Catalog_Block_2">              	
				<div id="TV_Catalog_Block_2_title"><p>Техно Вектор 7 <span> - T серия</span></p></div>
				<div id="TV_Catalog_Block_2_description"> <p><strong>стенд сход-развал 3D (Turck)</strong></p></div>

				<div id="TV_Catalog_Block_2_pic">
				  <img height="170px" width="215px" src="images/TV_7_Truck_Catalog_T7204HT.png" title="T7204HT «Техно Вектор»" alt = "«Техно Вектор» T7204HT"/>
				</div>

				<div id="TV_Catalog_Block_2_text-1"><p><strong> T 7204 H T </strong></p></div>      				  
				
				<div id="TV_Catalog_Block_1_Btn_Buy">
		      <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
			   		<input type="submit" name="" value="Купить">			   		
					</a>
			  </div>

		    <div id="TV_Catalog_Block_1_Btn_Details">
					<form name="Card_Tovar_Send" action="Card_Tovar.php" method="post"> <!-- передает обработку при клике файлу Card_Tovar.php -->								
						<input type="hidden" name="Card_Tovar_MODEL" value="T 7204 H T" /><br />
						<input type="submit" name="Card_Tovar_DONE" value="Подробнее">
					</form>
				</div>

				<div id="TV_Catalog_Block_2_text-3"><p><strong> Расстояние от камер: 2000 - 3500 мм </strong></p></div>                                                  		
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