<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('sigFig'))
{
//function to h_generate_hrd_id
	function sigFig($value, $digits)
	{
    	
    if ($value == 0) {
        $decimalPlaces = $digits - 1;
    } elseif ($value < 0) {
        $decimalPlaces = $digits - floor(log10($value * -1)) - 1;
    } else {
        $decimalPlaces = $digits - floor(log10($value)) - 1;
    }

    $answer = round($value, $decimalPlaces);
    return $answer;
	}
}


if ( ! function_exists('generateRandomString'))
{
//function to h_generate_hrd_id
	function generateRandomString()
	{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';	
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;;
	}
}

if ( ! function_exists('h_generate_user_id'))
{
//function to h_generate_hrd_id
	function h_generate_user_id()
	{
    	return 'TEC-'.date('Yhis');
	}
}


if ( ! function_exists('h_generate_clt_id'))
{
//function to h_generate_hrd_id
	function h_generate_clt_id()
	{
    	return 'CLT'.date('Yhis');
	}
}



if ( ! function_exists('h_generate_clt_code'))
{
//function to h_generate_hrd_id
	function h_generate_clt_code()
	{
    	return 'RFQ'.date('his');
	}
}


//----------------------------------------------------
if ( ! function_exists('h_generate_transct_id'))
{
//function to h_generate_project_id
	function h_generate_transct_id()
	{  $num =rand(100000000, 1000000000);
    	return date('Yhis').$num;
	}
}
//----------------------------------------------------



if ( ! function_exists('h_generate_datetime'))
{
//function to h_generate_hrd_id
	function h_generate_datetime()
	{
    	return date('Y-m-d h:i:s');
	}
}



if ( ! function_exists('h_age'))
{
//function to h_generate_project_id
	function h_age($dateOfBirth)
	{ 

$today = date("Y/m/d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
//echo 'Age is '.$diff->format('%y');
    	return $diff->format('%y');
	}
}





if ( ! function_exists('h_get_word_initials'))
{
//function to h_get_word_initials
	function h_get_word_initials($string)
	{

		$words = explode(" ", $string);
		$acronym = "";

		if (!is_array($words) || $string == '') 
		{
			return '';
		}

		foreach ($words as $w) 
		{
			$acronym .= $w[0];
		}

		return strtoupper($acronym);
	}
}

if ( ! function_exists('h_delete_file'))
{

	/***
	*/
	
	function h_delete_file($path)
	{

		$real_path_p = realpath($path);
		$del = is_writable($real_path_p) ? unlink($real_path_p) : '';

		return $del ? 1 : 0;
		
	}
}

//---------------------------
if ( ! function_exists('h_convert_json_to_csv_type'))
{

	/***
	*/
	
	function h_convert_json_to_csv_type($json_string,$delimiter = ',')
	{
		
		$st = '';
		$multiple = array();

		$arr = array('string_text',$st,'array_type',$multiple);

		if (!$json_string) 
		{
			return $arr;
		}
		$implode = array();
		$multiple = json_decode($json_string, true);

		if (!is_array($multiple )) 
		{
			return $arr;
		}

		foreach($multiple as $key => $value)
		$st = $st ? $st.' '.$delimiter.' '.$value : $value;

		$arr['string_text'] = $st;
		$arr['array_type'] = $multiple;

		return (object) $arr;
	}
}
?>
