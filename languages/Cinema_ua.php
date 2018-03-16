<?php
/**
 * Ukraine language file for Cinema module
 *
 * @package Cinema
 * @author Alex Sokolov <admin@gelezako.com> http://blog.gelezako.com
 * @version 0.1
 *
 **/

$dictionary = array(

'CI_SCRIPT_NAME'=>'Назва сценарію',
'CI_APP_ABOUT' => 'Про модуль',
'CI_APP_CLOSE' => 'Закрити',
'CI_APP_MODULE' => 'Модуль',
'CI_APP_PROJ' => 'Проект у',
'CI_APP_DISCUS' => 'Обговорення модуля на форумі',
'CI_APP_DONATE' => 'Підтримати розробку і розвиток модуля:',
'CI_APP_DONATE2' => 'Сторінка для доната у:',
'CI_APP_DONATE3' => 'Внутрішній рахунок у',
'CI_APP_Author' => 'Автор',
'CI_APP_NAME' => 'Фільми в кінотеатрі',
'CI_APP_SELECT' => 'Виберіть ваше місто',
'CI_APP_KIEV' => 'Київ ТРЦ «Блокбастер»',
'CI_APP_KHARKOV' => 'Харків ТРЦ «Французький Бульвар»',
'CI_APP_ODESSA' => 'Одеса ТРЦ «City Center»',
'CI_APP_ODESSA2' => 'Одеса ТРЦ «City Center Котовський»',
'CI_APP_Lvov' => 'Львів ТРЦ «King Cross Leopolis»',
'CI_APP_SUMY' => 'Суми ТРЦ «Мануфактура»',
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
