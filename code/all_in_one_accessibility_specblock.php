<?php
/**
* @copyright 2000-2011 Amiro.CMS. All rights reserved.
* @version $ Id: ami_sample_specblock.php 55851 2011-06-16 18:05:47  Anton $
* @package   Module_Sample
* @filesource
* @size 632 xkqwurpprwnxyntluqnqxkswurqxnquuliuwklusntwqyuqtrppwsslrumugpwqqqzizpnir
* @since   5.12.0
*/
?>
<?php


$modId = 'Allinoneaccessibility';

/**
 * Add custom resource mapping
 */
/*
require_once $pluginParams['code_path'] . 'ami_sample_mapping.php';
require_once $pluginParams['code_path'] . 'ami_sample_mapping_frn.php';
*/

// Initialize controller
$plugin = AMI::getResource($modId . '/module/controller/frn', array($pluginParams));

// Set sample module specblock content
$resultHtml = $plugin->getResponse();
