<?php
  $db_host = '???'; /*когда сайт будет в интеренете не чего менять не надо*/
  $db_user = '???'; /*пользователь которого мы создали*/
  $db_pass = '???'; 
  $db_database = 'techvektor_db'; /*БД которую мы создали, подключаемся к ней*/

  $link = mysql_connect($db_host, $db_user, $db_pass); /*стандартная ф-ция для подключения к БД*/

  mysql_select_db($db_database, $link) or die ("Нет соединения с БД".mysql_error()); /*выбор БД, статус подключения, если подключение не произошло, то появиться сообщение с ошибкой*/
  mysql_query("SET names utf8"); /*без UTF8 будут  крякозяблы*/
?>