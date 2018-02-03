<?php
/**
 * Russian language file for Cinema module
 *
 * @package Yeelight
 * @author Alex Sokolov <admin@gelezako.com> http://blog.gelezako.com
 * @version 0.1
 *
 **/

$dictionary = array(

'CI_SCRIPT_NAME'=>'Название сценария',
'CI_APP_ABOUT' => 'Про модуль',
'CI_APP_CLOSE' => 'Закрыть',
'CI_APP_MODULE' => 'Модуль',
'CI_APP_PROJ' => 'Проект в',
'CI_APP_DISCUS' => 'Обсуждение модуля на форуме',
'CI_APP_DONATE' => 'Поддержать разработку и развитие модуля:',
'CI_APP_DONATE2' => 'Страничка для доната в:',
'CI_APP_DONATE3' => 'Внутренний счет в',
'CI_APP_Author' => 'Автор',
'CI_APP_NAME' => 'Фильмы в кинотеатре',
'CI_APP_SELECT' => 'Выберите ваш город',
'CI_APP_KIEV' => 'Киев ТРЦ «Блокбастер»',
'CI_APP_KHARKOV' => 'Харьков ТРЦ «Французский Бульвар»',
'CI_APP_ODESSA' => 'Одесса ТРЦ «City Center»',
'CI_APP_ODESSA2' => 'Одесса ТРЦ «City Center Котовский»',
'CI_APP_Lvov' => 'Львов ТРЦ «King Cross Leopolis»',
'CI_APP_SUMY' => 'Сумы ТРЦ «Мануфактура»',
'CI_APP_YALTA' => 'Ялта Сатурн',

);

foreach ($dictionary as $k=>$v)
{
   if (!defined('LANG_' . $k))
   {
      define('LANG_' . $k, $v);
   }
}

?>
