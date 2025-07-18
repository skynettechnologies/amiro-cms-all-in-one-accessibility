<?php
/**
* @copyright 2000-2011 Amiro.CMS. All rights reserved.
* @version $ Id: rules.php 55636 2011-05-11 16:54:34  Anton $
* @package   Plugin_Sample
* @filesource
* @size 4092 xkqwxpzpsywtipnxrkysnliusxkyzuzqriqiuqngqlzurxuxllzmklqszrmlqplsnxwgpnir
*/
?>
<?php


/**
 * Splitter:
 *
 * $aOptions parameter is RLC_NONE always.
 * $defaultValue parameter is false always.
 */
$api->addRule(
    'spl_custom_options', RLT_SPLITTER,
    RLC_NONE, false
);

/**
 * Boolean option:
 *
 * $aOptions parameter is RLC_NONE always.
 * $defaultValue parameter is true or false.
 */
$api->addRule(
    'option_bool', RLT_BOOL,
    RLC_NONE, false
);

/**
 * Unsigned integer:
 *
 * $aOptions parameter is array containing optional borders
 * for possible value or RLC_NONE.
 *
 * $defaultValue parameter is unsigned integer.
 */
$api->addRule(
    'option_uint', RLT_UINT,
    array ('min' => 0, 'max' => 10), 0
);

/**
 * Signed integer:
 *
 * $aOptions parameter is array containing optional borders
 * for possible value or RLC_NONE.
 *
 * $defaultValue parameter is signed integer.
 */
$api->addRule(
    'option_sint', RLT_SINT,
    array ('min' => -10, 'max' => 10), -5
);

/**
 * Float number:
 *
 * $aOptions parameter is array containing optional borders
 * for possible value (i. e. array ('min' => -10, 'max' => 10)) or RLC_NONE.
 *
 * $defaultValue parameter is float number.
 */
$api->addRule(
    'option_float', RLT_FLOAT,
    RLC_NONE, 0.01
);

/**
 * String:
 *
 * $aOptions parameter is array containing optional borders
 * for possible value or RLC_NONE.
 *
 * $defaultValue parameter is float number.
 */
$api->addRule(
    'option_char', RLT_CHAR,
    array ('length_min' => 3, 'length_max'=> 255), 'some string'
);

/**
 * Text:
 *
 * $aOptions parameter is RLC_NONE always.
 * $defaultValue parameter is string.
 */
$api->addRule(
    'option_text', RLT_TEXT,
    RLC_NONE, "text containing\nline\nbreaks"
);

/**
 * Email address:
 *
 * $aOptions parameter is RLC_NONE always.
 * $defaultValue parameter is string containing comma separated email addresses.
 */
$api->addRule(
    'option_email', RLT_EMAIL,
    RLC_NONE, 'mail.1@domain.com,mail.2@domain.com'
);

/**
 * Array displayed like selectbox:
 *
 * $aOptions parameter is array.
 * $defaultValue parameter is int|string containing default value.
 *
 * @see _local/plugins_distr/sample/options/rules_values.lng
 */
$api->addRule(
    'option_enum', RLT_ENUM,
    array ('first', 'second', 'third'), 'second'
);

/**
 * Array:
 *
 * $aOptions parameter is array.
 * $defaultValue parameter is array containing default array value.
 *
 * @see _local/plugins_distr/sample/options/rules_values.lng
 */
$api->addRule(
    'option_enum_multi_array', RLT_ENUM_MULTI_ARRAY,
    array ('first', 'second', 'third'), array ('first', 'third')
);

/**
 * Array (can be ampty):
 *
 * $aOptions parameter is array, one of elememts is RLC_EMPTY.
 * $defaultValue parameter is array containing default array value.
 *
 * @see _local/plugins_distr/sample/options/rules_values.lng
 */
$api->addRule(
    'option_enum_multi_array2', RLT_ENUM_MULTI_ARRAY,
    array ('first', 'second', 'third', RLC_EMPTY), array ()
);

/**
 * Date/time period:
 *
 * $aOptions parameter is RLC_NONE always.
 *
 * $defaultValue parameter is string containing period
 * in PHP strtotime() function format.
 */
$api->addRule(
    'option_date_period', RLT_DATE_PERIOD,
    RLC_NONE, '-1 month'
);

/**
 * Date/time period:
 *
 * $aOptions parameter is RLC_NONE always.
 *
 * $defaultValue parameter is string containing period
 * in PHP strtotime() function format.
 */
$api->addRule(
    'option_date_period_positive', RLT_DATE_PERIOD_POSITIVE,
    RLC_NONE, '1 hour'
);

/**
 * Date/time period:
 *
 * $aOptions parameter is RLC_NONE always.
 *
 * $defaultValue parameter is string containing period
 * in PHP strtotime() function format.
 */
$api->addRule(
    'option_date_period_negative', RLT_DATE_PERIOD_NEGATIVE,
    RLC_NONE, '-1 minute'
);
