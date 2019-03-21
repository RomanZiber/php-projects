<?php
$arr = [1=>'Пн', 2=>'Вт', 3=>'Ср', 4=>'Чт', 5=>'Пт', 6=>'Сб', 7=>'Вс'];
$day = 4;
//$dayX = 5
foreach ($arr as $key=>$val) {
    if ($key == $day/*$key == $dayX */){
        echo '<em>'.$val.'</em>'.'<br>';
    } else{
        echo $val.'<br>';
    }
   // foreach ($arr as $key=>$val)
      //  if ($key ==$dayX) {
           // echo '<strong>'.$val.'</strong>'.'<br>';
      //  } else{
          //  echo $val.'<br>';
       // }
}
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
//Текущий день должен храниться в переменной $day.
?>



