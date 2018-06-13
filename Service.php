<?php require_once "header.php"; ?>
<?php require_once "ReCallBack.php"; ?> <!-- inluding a form with CallBack -->  

<!-- ..........................................  .......................................... -->

  <div id="Service">
    <div id="Service_Title">
      <p>Служба сервиса</p>
    </div>

    <div id="Service_pic">
      <img height="280px" width="215px" src="images/Service.jpg" title="Сервис «ТЕХНО ВЕКТОР»" alt = "Служба сервиса «ТЕХНО ВЕКТОР»"/>
    </div>

    <div id="Service_description">
      <p>
        Наша компания постоянно развивает собственный сервисный центр и контролирует качество выполненных работ. <br><br>

        Если вдруг ваше оборудование по каким либо причинам вышло из строя, и без специалиста не обойтись, то вы можете: <br>
        - Обратиться в наш сервисный центр; <br>
        - <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
            Оставить заявку</a>
          , что бы наши специалисты связались с Вами; <br><br>

        <strong>Наша служба сервисного ремонта :</strong> <br><br>

        Бесплатный тел.: <a href="tel:88002004801">8 (800) 200 48 01</a><br>
        Тел.: <a href="tel:84742552100">+7 (4742) 552 100</a> (доб. +3)
      </p>
    </div>

    <div id="Service_text">
      <p>Наши сертифицированные сервисные центры</p>
    </div>



  </div>

    <div id="Service_map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qAlbS4P-zR3diKa6VIAPmTUAKn-uW6Mk&amp;width=100%25&amp;height=527&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
    </div>

<!-- ..........................................  .......................................... -->

<!-- GENERAL TEMPLATE - footer ...begin -->
  <?php require_once "footer.php"; ?>
<!-- GENERAL TEMPLATE - footer ...end -->

</BODY>
</HTML>      