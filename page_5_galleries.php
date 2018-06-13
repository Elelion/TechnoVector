<?php require_once "header.php"; ?>

<!-- ..........................................  .......................................... -->

  <div id="Article_page_galleries_5">
    <div id="Article_Title_page_galleries_5">
      <p><strong>Техно Вектор 4</strong></p>
    </div>

<!-- ..........................................  .......................................... -->
       
    <div id="Page_5_galleries_1_Block_1">        
      <div id="Page_5_galleries_1_Block_1-pic">
        <a rel="simplebox" href="images/page_5_galleries_1.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_1.jpg" title="Техно Вектор 4, фото 1" alt = "(Фото 1) Техно Вектор 4"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->   

    <div id="Page_5_galleries_1_Block_2">        
      <div id="Page_5_galleries_1_Block_2-pic">
        <a rel="simplebox" href="images/page_5_galleries_2.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_2.jpg" title="Техно Вектор 4, фото 2" alt = "(Фото 2) Техно Вектор 4"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->       

    <div id="Page_5_galleries_1_Block_3">        
      <div id="Page_5_galleries_1_Block_3-pic">
        <a rel="simplebox" href="images/page_5_galleries_3.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_3.jpg" title="Техно Вектор 4, фото 3" alt = "(Фото 3) Техно Вектор 4"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->       

    <div id="Page_5_galleries_1_Block_4">        
      <div id="Page_5_galleries_1_Block_4-pic">
        <a rel="simplebox" href="images/page_5_galleries_4.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_4.jpg" title="Техно Вектор 4, фото 4" alt = "(Фото 4) Техно Вектор 4"/>
        </a>
      </div>
    </div>           

<!-- .......................................... -->       

    <div id="Page_5_galleries_1_Block_5">        
      <div id="Page_5_galleries_1_Block_5-pic">
        <a rel="simplebox" href="images/page_5_galleries_5.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_5.jpg" title="Техно Вектор 4, фото 5" alt = "(Фото 5) Техно Вектор 4"/>
        </a>
      </div>
    </div>               

<!-- ..........................................  .......................................... -->

    <div id="Page_5_galleries_1_Block_6">        
      <div id="Page_5_galleries_1_Block_6-pic">
        <a rel="simplebox" href="images/page_5_galleries_6.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_6.jpg" title="Техно Вектор 4, фото 6" alt = "(Фото 6) Техно Вектор 4"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->   

    <div id="Page_5_galleries_1_Block_7">        
      <div id="Page_5_galleries_1_Block_7-pic">
        <a rel="simplebox" href="images/page_5_galleries_7.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_7.jpg" title="Техно Вектор 4, фото 7" alt = "(Фото 7) Техно Вектор 4"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->       

    <div id="Page_5_galleries_1_Block_8">        
      <div id="Page_5_galleries_1_Block_8-pic">
        <a rel="simplebox" href="images/page_5_galleries_8.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_8.jpg" title="Техно Вектор 4, фото 8" alt = "(Фото 8) Техно Вектор 4"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->       

    <div id="Page_5_galleries_1_Block_9">        
      <div id="Page_5_galleries_1_Block_9-pic">
        <a rel="simplebox" href="images/page_5_galleries_9.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_9.jpg" title="Техно Вектор 4, фото 9" alt = "(Фото 9) Техно Вектор 4"/>
        </a>
      </div>
    </div>           

<!-- .......................................... -->       

    <div id="Page_5_galleries_1_Block_10">        
      <div id="Page_5_galleries_1_Block_10-pic">
        <a rel="simplebox" href="images/page_5_galleries_10.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/page_5_galleries_10.jpg" title="Техно Вектор 4, фото 10" alt = "(Фото 10) Техно Вектор 4"/>
        </a>
      </div>
    </div>

<!-- .......................................... -->       

  </div>

<!-- GENERAL TEMPLATE - footer ...begin -->
  <?php require_once "footer.php"; ?>
<!-- GENERAL TEMPLATE - footer ...end -->




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

</BODY>
</HTML>      