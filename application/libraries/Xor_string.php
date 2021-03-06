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

/**
 * XtraUpload XOR Encryption Library
 *
 * @package		XtraUpload
 * @subpackage	Libraries
 * @category	Libraries
 * @author		Matthew Glinski
 * @link		http://xtrafile.com/docs/lib/xor
 */
class Xor_string {

	/**
	 * Xor_string::process()
	 *
	 * Xor process
	 *
	 * @access	public
	 * @param	string	$str	String
	 * @param	string	$crypt_direction	encrypt or decrypt
	 * @param	string	$key	Encrypt key
	 * @return	string
	 */
	public function process($str, $crypt_direction, $key='')
	{
		$crypt_method = ( $crypt_direction == 'encrypt' ? 'encrypt' : 'decrypt' );
		$new_pass = $this->$crypt_method($str, $key);
		return $new_pass;
	}

	/**
	 * Xor_string::encrypt()
	 *
	 * Encrypt string
	 *
	 * @access	public
	 * @param	string	$str	String
	 * @param	string	$enc_string	String
	 * @return	string
	 */
	public function encrypt($str, $enc_string) 
	{	
		$str_encrypted = "";
		if ($enc_string % 2 == 1) { // we need even number of characters
			$enc_string .= $enc_string{0};
		}
		for ($i=0; $i < strlen($str); $i++) { // encrypts one character - two bytes at once
			$str_encrypted .= sprintf("%02X", hexdec(substr($enc_string, 2*$i % strlen($enc_string), 2)) ^ ord($str{$i}));
		}
		return $str_encrypted;
	} 

	/**
	 * Xor_string::decrypt()
	 *
	 * Decrypt string
	 *
	 * @access	public
	 * @param	string	$str_encrypted	Encrypted string
	 * @param	string	$enc_string	String
	 * @return	string
	 */
	public function decrypt($str_encrypted, $enc_string) 
	{
		$str = "";
		if ($enc_string % 2 == 1) 
		{
			$enc_string .= $enc_string{0};
		}
		for ($i=0; $i < strlen($str_encrypted); $i += 2) 
		{
			$str .= chr(hexdec(substr($enc_string, $i % strlen($enc_string), 2)) ^ hexdec(substr($str_encrypted, $i, 2)));
		}
		return $str;
	}
}

/* End of file Xor_string.php */
/* Location: ./application/libraries/Xor_string.php */
