<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'eventER_mask';
$type          = 'mask';
$unit          = 'uncertain';
$phone 		   = '<span>8 977</span> 491 01 29';
$phone_link    = '+78001003231';
$mail          = 'infomoscow@synergy.ru';
$WA            = 'https://api.whatsapp.com/send/?phone=79774910129&text&app_absent=0';
$date          = '';
$quote_id      = '';
$speaker       = '';
$program       = '';
$gtm           = '';
$title         = 'Факультет <span>Event-менед<br>жмента</span>';
$desc          = 'Организуем твоё<br> высшее образование';
$link          = '';


$action = implode(array(

    $lander,

    '&land='     ,  $land,
    '&unit='     ,  $unit,
    '&type='     ,  $type,
    '&version='  ,  $version,
    '&partner='  ,  $partner,
    '&speaker='  ,  $speaker,
    '&program='  ,  $program,
    '&link='     ,  $link,
    '&quote_id=' ,  $quote_id,
    '&ignore-thanksall=true'
));

