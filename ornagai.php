<?php
/**
 * Ornagai
 * 
 * Ornagai API SDK
 *
 * @author saturngod
 * @version 0.5
 */
class ornagai
{
	
	function __construct()
	{
		
	}
	/**
	 * get_word
	 * 
	 * Get word from Ornagai API
	 *
	 * @author saturngod
	 * @param string $word
	 * @param int page
	 * @return array $return
	 */
	function get_word($word,$page=1)
	{
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://www.ornagai.com/index.php/api/word/q/".$word."/page/".$page."/format/json");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TRANSFERTEXT, TRUE);
		$return=curl_exec($ch);
		return json_decode($return);
	}
	
	/**
	 * get_word_count
	 * 
	 * Get Total word count from ornagai api
	 *
	 * @author saturngod
	 * @param string $word
	 * @return array $return
	 */
	function get_word_count($word)
	{
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://www.ornagai.com/index.php/api/word/q/".$word."/count/1/format/json");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TRANSFERTEXT, TRUE);
		$return=curl_exec($ch);
		return json_decode($return);
	}
	
}
?>