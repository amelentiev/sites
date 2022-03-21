<?
function m_preobr($str,$year)
{
	if ($str=="01") {
		$a=31;
	}
	elseif ($str=="02") {
		if ($year % 4 == 0){
			$a=29;
		}else $a=28;
	}
	elseif ($str=="03") {
		$a=31;
	}
	elseif ($str=="04") {
		$a=30;
	}
	elseif ($str=="05") {
		$a=31;
	}
	elseif ($str=="06") {
		$a=30;
	}
	elseif ($str=="07") {
		$a=31;
	}
	elseif ($str=="08") {
		$a=31;
	}
	elseif ($str=="09") {
		$a=30;
	}
	elseif ($str=="10") {
		$a=31;
	}
	elseif ($str=="11") {
		$a=30;
	}
	elseif ($str=="12") {
		$a=31;
	
	}
	return $a;

}

?>