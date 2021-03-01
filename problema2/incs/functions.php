<?php

	function antiInjection($sql){
		$forbiddenValues = "/([Ff][Rr][Oo][Mm]|[Ss][Ee][Ll][Ee][Cc][Tt]|[Cc][Oo][Uu][Nn][Tt]|[Tt][Rr][Uu][Nn][Cc][Aa][Tt][Ee]|[Ee][Xx][Pp][Ll][Aa][Ii][Nn]|[Ii][Nn][Ss][Ee][Rr][Tt]|[Dd][Ee][Ll][Ee][Tt][Ee]|[Ww][Hh][Ee][Rr][Ee]|[Uu][Pp][Dd][Aa][Tt][Ee]|[Ee][Mm][Pp][Tt][Yy]|[Dd][Rr][Oo][Pp] [Tt][Aa][Bb][Ll][Ee]|[Ll][Ii][Mm][Ii][Tt]|[Ss][Hh][Oo][Ww] [Tt][Aa][Bb][Ll][Ee][Ss]|[Oo][Rr][Dd][Ee][Rr] [Bb][Yy]|#|\*|'|--|\\\)/";
		$sql = preg_replace($forbiddenValues, "" ,$sql);
		$sql = trim($sql);
		$sql = strip_tags($sql);
		return $sql;
	}
		  
	function broke($_caracter, $_value){ 
		return (explode($_caracter, $_value));
	
	}  
	
	function contains($needle, $haystack){
		return strpos($haystack, $needle) !== false;
	}
	

	function getWorkingDays($startDate, $endDate)
{
    $begin = strtotime($startDate);
    $end   = strtotime($endDate);
    if ($begin > $end) {
        echo "startdate is in the future! <br />";

        return 0;
    } else {
        $no_days  = 0;
        $weekends = 0;
        while ($begin <= $end) {
            $no_days++; // no of days in the given interval
            $what_day = date("N", $begin);
            if ($what_day > 5) { // 6 and 7 are weekend days
                $weekends++;
            };
            $begin += 86400; // +1 day
        };
        $working_days = $no_days - $weekends;

        return $working_days;
    }
}
	
	function limiter($_raw_value, $_length){
		if (strlen($_raw_value) >= $_length){
			return (substr($_raw_value, 0, $_length-1)."...");
		}else{ 
			return $_raw_value;
		}
		

	}
	
	function randString($size){
        //String com valor possíveis do resultado, os caracteres pode ser adicionado ou retirados conforme sua necessidade
        $basic = 'abcdefghijklmnopqrstuvwxyz0123456789';

        $return= "";

        for($count= 0; $size > $count; $count++){
            //Gera um caracter aleatorio
            $return.= $basic[rand(0, strlen($basic) - 1)];
        }
  
        return $return; 
    } 
	
	function kill($_LINK, $_RESULT){	
		mysqli_free_result($_RESULT->result);
		mysqli_close($_LINK);
		 
	}	
	
	function countNumbers($str){
		return count(preg_grep('~^[0-9]$~', str_split($str)));
	}

