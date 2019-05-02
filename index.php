<?php

//index array

$one = array("one","two","three" );
echo $one[0];

//associative array

$assoc=array(
	'name'=> 'Naimul Islam Nabin',
	'age'=> 23,
	'pro'=>'web developer'
);

echo '<pre>';
print_r($assoc);




//multiDimensional array

$prothom=array(

	array(
		'name'=>'Naimul Islam Nabin',
		'age'=>23,
		'pro'=>'Web Developer'

	),

	array(
		'name'=>'Niamul Islam Neher',
		'age'=>22,
		'pro'=>'Software Developer'

	),

	array(
		'name'=>'Tareq Rahaman',
		'age'=>16,
		'pro'=>'Web Designer'

	)



);

echo '<pre>';
print_r($prothom);
$prothom[1];


//for loop

for($x=1;$x<51;$x++){

	echo "We are learining PHP"."<br>";

}

//foreach loop



$first =["one","two","three"];

foreach($first as $second){
	echo $second."<br>";

}




//while loop

$a=1;

while ($a>= -34) {
	$a--;
	echo $a."<br>";
}


//do while loop


$a= -35;
do{
	echo $a;
	$a--;
}while($a>=-36);


//array_merge

$first =["one","two","three"];

$second =["four","five","six"];

$third = array_merge($first,$second);

echo'<pre>';

print_r($third);


//floor(It is used to convert float number into integer)

$number= 111.99;

echo floor($number);

echo pi();