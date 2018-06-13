<?php require_once "header.php"; ?>

<!-- ..........................................  .......................................... -->

  <div id="Article_page_poster_1">
    <div id="Article_Title_poster_galleries_1">
      <p><strong>Плакаты «Техно Вектор»</strong></p>
    </div>

<!-- ..........................................  .......................................... -->
       
    <div id="Poster_1_galleries_1_Block_1">        
      <div id="Poster_1_galleries_1_Block_1-pic">
        <a rel="simplebox" href="images/Poster_1_galleries_1.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/Poster_1_galleries_1.jpg" title="Плакаты «Техно Вектор», фото 1" alt = "(Фото 1) Плакаты «Техно Вектор»"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->   

    <div id="Poster_1_galleries_1_Block_2">        
      <div id="Poster_1_galleries_1_Block_2-pic">
        <a rel="simplebox" href="images/Poster_1_galleries_2.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/Poster_1_galleries_2.jpg" title="Плакаты «Техно Вектор», фото 2" alt = "(Фото 2) Плакаты «Техно Вектор»"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->       

    <div id="Poster_1_galleries_1_Block_3">        
      <div id="Poster_1_galleries_1_Block_3-pic">
        <a rel="simplebox" href="images/Poster_1_galleries_3.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/Poster_1_galleries_3.jpg" title="Плакаты «Техно Вектор», фото 3" alt = "(Фото 3) Плакаты «Техно Вектор»"/>
        </a>
      </div>
    </div>                

<!-- .......................................... -->       

    <div id="Poster_1_galleries_1_Block_4">        
      <div id="Poster_1_galleries_1_Block_4-pic">
        <a rel="simplebox" href="images/Poster_1_galleries_4.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/Poster_1_galleries_4.jpg" title="Плакаты «Техно Вектор», фото 4" alt = "(Фото 4) Плакаты «Техно Вектор»"/>
        </a>
      </div>
    </div>           

<!-- .......................................... -->       

    <div id="Poster_1_galleries_1_Block_5">        
      <div id="Poster_1_galleries_1_Block_5-pic">
        <a rel="simplebox" href="images/Poster_1_galleries_5.jpg"> <!-- to increase for click -->  
          <img height="240px" width="175px" src="images/Poster_1_galleries_5.jpg" title="Плакаты «Техно Вектор», фото 5" alt = "(Фото 5) Плакаты «Техно Вектор»"/>
        </a>
      </div>
    </div>               




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