<?
  require"preobr_month.php";
function next_day($str){

  $day=$str[6].$str[7];
  $month=$str[4].$str[5];
  $year=$str[0].$str[1].$str[2].$str[3];
  $day++;
  if($day<10){
    $day='0'.$day;
  }



  if($day>m_preobr($month,$year)){
  $day='01';
  $month++;
  if ((int)$month<10){
    $month='0'.$month;
  }
}
if($month>12){
  $year++;
  $month='01';
}

$a=$year.$month.$day;
return $a;
}
?>