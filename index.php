<?php
echo "<h2> Question 01 </h2>";
echo "ifelse Result Grading";
echo "<br>";
// Question 01:
//Rishita’s subject marks:
//ifelse statement
$SubjectA = 75; 
$SubjectB = 80;
$SubjectC = 65; 
$SubjectD = 90;
$total_mark = $SubjectA + $SubjectB + $SubjectC + $SubjectD;
$avarage_mark = $total_mark / 4;

if($SubjectA < 40 || $SubjectB < 40 || $SubjectC < 40 || $SubjectD < 40){
    echo "Your Result is F";
}
else if($SubjectA > 100 || $SubjectB > 100 || $SubjectC > 100 || $SubjectD > 100){
    echo "Your Result Not Found";
}else if($avarage_mark >= 80 && $avarage_mark <=100){
    echo "Your Grade is A+";
}
else if($avarage_mark < 80 && $avarage_mark >=70){
    echo "Rishita Grading: A";
}else if($avarage_mark < 70 && $avarage_mark >=60){
    echo "Your Grade is A-";
}else if($avarage_mark < 60 && $avarage_mark >=50){
    echo "Your Grade is B";
}else if($avarage_mark < 40 && $avarage_mark >=0){
    echo "Your Grade is F";
}else{
   echo "Your Result Not Found";
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "Switch case Result Grading";
echo "<br>";
//switch statement
//Grading System
$total_mark = (int) (77.5/10);
switch ($total_mark) {
    case 10;
    echo "A+";
    break;

    case 9;
    echo "A+";
    break;

    case 8;
    echo "A+";
    break;

    case 7;
    echo "Rishita Grading:"." ". "A";
    break;

    case 5;
    echo "B";
    break;

    case 4;
    echo "C";
    break;

   default:
   echo "Your Resul Not Found";
   break;
}

echo "<h2> Question 02 </h2>";
// When you click on the power/start button, your bike takes a start, 
// When you click stop, your bike takes a stop, 
// When you press the break, your bike take break, 
// when you give the gear, your bike move faster and faster, 
// when you press the signal button, your bike shows a signal light.
// When you press the headlight button, your bike’s headlight will start.

$my_bike = "headlight";

switch($my_bike){
    case "start";
    echo "I started my bike";
    break;
    
    case "stop";
    echo "I stopped my bike";
    break;
    
    case "break";
    echo "I braked my bike";
    break;

    case "speed";
    echo "I am increasing my bike speed";
    break;

    case "signal";
    echo "I signaled my bike";
    break;

    case "headlight";
    echo "I turned on my bike headlights";
    break;

    default:
    echo "My bike is resting";
    break;
}






