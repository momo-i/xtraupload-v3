<?php
/* vim: set ts=4 sw=4 sts=0: */

/**
 * XtraUpload
 *
 * A turn-key open source web 2.0 PHP file uploading package requiring PHP v5
 *
 * @package		XtraUpload
 * @author		Matthew Glinski
 * @copyright	Copyright (c) 2006, XtraFile.com
 * @license		http://xtrafile.com/docs/license
 * @link		http://xtrafile.com
 * @since		Version 2.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('lang'))
{
	function lang($msg)
	{
		return $msg;
	}
}

$config['available_lang'] = array(
	'af_ZA' => lang('Afrikaans'),
	'ar_SA' => lang('Arabic'),
	'bg_BG' => lang('Bulgarian'),
	'bn_BD' => lang('BengaliBangla'),
	'ca_ES' => lang('Catalan'),
	'cs_CZ' => lang('Czech'),
	'da_DK' => lang('Danish'),
	'de_DE' => lang('German'),
	'el_GR' => lang('Greek'),
	'en_GB' => lang('English (UK)'),
	'en_US' => lang('English (US)'),
	'es_AR' => lang('Spanish (Argentina)'),
	'es_ES' => lang('Spanish (Spain)'),
	'es_MX' => lang('Spanish (Mexico)'),
	'et_EE' => lang('Estonian'),
	'eu_ES' => lang('Basque'),
	'fa_IR' => lang('Persian'),
	'fi_FI' => lang('Finnish'),
	'fo_FO' => lang('Faroese'),
	'fr_FR' => lang('French'),
	'ga_IE' => lang('Irish'),
	'he_IL' => lang('Hebrew'),
	'hr_HR' => lang('Croatian'),
	'hu_HU' => lang('Hungarian'),
	'is_IS' => lang('Icelandic'),
	'it_IT' => lang('Italian'),
	'ja_JP' => lang('Japanese'),
	'ko_KR' => lang('Korean'),
	'lt_LT' => lang('Lithuanian'),
	'lv_LV' => lang('Latvian'),
	'mk_MK' => lang('Macedonian'),
	'ms_MY' => lang('Malay'),
	'nl_NL' => lang('Dutch'),
	'no_NO' => lang('Norwegian (Bokmal)'),
	'pl_PL' => lang('Polish'),
	'pt_BR' => lang('Portuguese (Brasil)'),
	'pt_PT' => lang('Portuguese (Portugal)'),
	'ro_RO' => lang('Romanian'),
	'ru_RU' => lang('Russian'),
	'sk_SK' => lang('Slovak'),
	'sl_SI' => lang('Slovenian'),
	'sr_RS' => lang('Serbian'),
	'sv_SE' => lang('Swedish'),
	'tn_ZA' => lang('Tswana'),
	'tr_TR' => lang('Turkish'),
	'uk_UA' => lang('Ukrainian'),
	'vi_VN' => lang('Vietnamese'),
	'zh_CN' => lang('Chinese (simplified)'),
	'zh_TW' => lang('Chinese (traditional)')
);

/* End of file language.php */
/* Location: ./application/config/language.php */
