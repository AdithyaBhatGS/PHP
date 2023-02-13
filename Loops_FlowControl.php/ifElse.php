<?php

$num=100;

/*if:

if(condn) {

}

*/
if ($num>95){
    echo $num." is greater than 95<br />"; 
}
?>

<?php
/*if-else:
    
    if(cond) {

    }
    else{

    }
*/
?>
<?php
$num=101;

if($num%2==0) {
    echo $num." is Even!<br />";
}
else {
    echo $num." is Odd!<br />";
}
?>
<?php
/*if else ladder:

    if(condn) {

    }
    elseif{

    }
    elseif{

    }
    else{

    }
*/

$marks=78;

if ($marks>=90){
    echo "Grade A<br />";
}
elseif ($marks>=75 && $marks<90){
    echo "Grade B<br />";
}
elseif ($marks>=35 && $marks<75){
    echo "Grade C<br />";
}
else{
    echo "Grade D<br />";
}
?>
<?php
/*nested if:
    if(condn) {
        if(condn) {
            if(condn) {

            }
            else{

            }
        }
    }
*/

$num1=100;
$num2=120;
$num3=133;

if ($num1<$num2){
    if ($num1<$num3){
        echo $num1." is smaller than ".$num2." and ".$num3."<br />"; 
    }
}
?>