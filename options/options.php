<?php
/**
* @copyright 2000-2011 Amiro.CMS. All rights reserved.
* @version $ Id: options.php 55079 2011-03-18 13:54:26  Anton $
* @package   Plugin_Sample
* @filesource
* @size 1214 xkqwnptqupgpzgmtimziluzszqytkxwtqtzrrxuutxpnpywngzrswxzmsiwkxlnkwzrnpnir
*/
?>
<?php


// Setting user defined plugin options during plugin installation

$api->setOption('option_bool', false); // RLT_BOOL
$api->setOption('option_uint', 0);     // RLT_UINT
$api->setOption('option_sint', -5);    // RLT_SINT
$api->setOption('option_float', 0.01);    // RLT_FLOAT
$api->setOption('option_char', 'some string');    // RLT_CHAR
$api->setOption('option_text', "text containing\nline\nbreaks");    // RLT_TEXT
$api->setOption('option_email', 'mail.1@domain.com,mail.2@domain.com');    // RLT_EMAIL
$api->setOption('option_enum', 'second');    // RLT_ENUM
$api->setOption('option_enum_multi_array', array ('first', 'third'));    // RLT_ENUM_MULTI_ARRAY
$api->setOption('option_enum_multi_array2', array ());    // RLT_ENUM_MULTI_ARRAY
$api->setOption('option_date_period', '-1 month');    // RLT_DATE_PERIOD
$api->setOption('option_date_period_positive', '1 hour');    // RLT_DATE_PERIOD_POSITIVE
$api->setOption('option_date_period_negative', '-1 minute');    // RLT_DATE_PERIOD_NEGATIVE
