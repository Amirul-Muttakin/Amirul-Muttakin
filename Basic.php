 <html>
<head>
<title>
My First php Page
</title>

<body>


<?php
//multiplication
/*
$a=5;
$b=7;
$z= ($a+$b)*5;

echo"The total value is {$z}";
*/
//Exercise 2: Value added tax 


/*
$price= 100;
$vat= 0.15;
$Totalprice= ($price*$vat)+$price;

echo"The price= {$price}<br>";
echo" The vat= {$vat}<br>";
echo "Total Price= {$Totalprice}<br>";
*/

/*
$x=5;
$y=3;
$z=6;
$sum= $x+$y+$z;

$Avarage= ($x+$y+$z)/3;

echo "The first number={$x}<br>";
echo "The second number is={$y}<br>";
echo "The second number is={$z}<br>";
echo "The sum of the numbers={$sum}<br>";
echo "The avarage is={$Avarage}";
*/

//array
$a[0]="Rose";
$a[1]="Jessy";
$a[2]="Jack";
$a[3]="Shajib";
echo $a[0] ;
echo $a[3];

//second,

$a=array("Rose","Jessy","Jack","shajib");

echo $a[2] ;


//3rd
$B=array("Ohi","Abid","sadik","Saiful");
echo"The First employee's Name Is ".$B[0];
echo "<br>";
echo "The Second Employee's Name Is ".$B[1];
echo "<br>";
echo " The Third Employee's Name Is ".$B[2];
echo "<br>";
echo "The fourth Employee's Name Is ".$B[3];
echo "<br>";

//creat array

/*The foreach loop in PHP construct produces the most comfortable way to iterate the array components. 
It runs on arrays and objects both. The foreach loop iterates over an array of entities; 
the enactment is streamlined and completes the loop in a limited time */

$numbers=array(1,2,3,4,5);

foreach($numbers as $value)
{
    echo "Value is $value<br/>";
}


$N=array(1,2,3,4,5,6);
foreach($N as $value)
{
    echo "The Number is $value<br/>";
}

//more

$colors=array("red","green","blue","pink");
foreach($colors as $a)
{
    echo "The Name of color is $a<br>";
}

//more

/* 

$a=array("Ohe","Sadik","Abid");
foreach($a as $Employee)
{
    echo "Name of the emplyee's is $Employee<br>";
}

*/


$song[0]='Tonight will be forever';
$song[1]='My heart';
$song[2]='don\'t move';


for($i=0;$i<3;$i++)

echo $song[$i]."<br/>";

?>

</body>
</head>
</html>
