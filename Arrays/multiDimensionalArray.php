<?php

$books_collection=array();
$books_collection[0]=array("id"=>10,"title"=>"Bhagavad Gita","author"=>"Srila Prabhupada","qty"=>1,"price"=>280);
$books_collection[1]=array("id"=>27,"title"=>"Yoga Vasistha","author"=>"Venkatesananda","qty"=>1,"price"=>233);
$books_collection[2]=array("id"=>380,"title"=>"Day to day Economics","author"=>"Satish Y Deodhar","qty"=>1,"price"=>189);
$books_collection[3]=array("id"=>111,"title"=>"Ramayana","author"=>"Valmiki","qty"=>1,"price"=>300);
$books_collection[4]=array("id"=>298,"title"=>"Mahabharatha","author"=>"Vyasa","qty"=>1,"price"=>300);


// Also we can directly take it as:
// $books_collection=
// array(
    // array("id"=>10,"title"=>"Bhagavad Gita","author"=>"Srila Prabhupada","qty"=>1,"price"=>280),
    // array("id"=>27,"title"=>"Yoga Vasistha","author"=>"Venkatesananda","qty"=>1,"price"=>233),
    // array("id"=>380,"title"=>"Day to day Economics","author"=>"Satish Y Deodhar","qty"=>1,"price"=>189),
    // array("id"=>111,"title"=>"Ramayana","author"=>"Valmiki","qty"=>1,"price"=>300),
    // array("id"=>298,"title"=>"Mahabharatha","author"=>"Vyasa","qty"=>1,"price"=>300),
// )

echo "---Book Collection---<br /><br />";
foreach ($books_collection as $sub_arr)
{
    print_r($sub_arr);
    echo "<br />";
    echo "<br />";
}

//Another way:
echo "---Book Collection---<br /><br />";
for($i=0;$i<count($books_collection);$i++)
{
    $temp_arr=$books_collection[$i];
    echo "Book $i details : <br />";
    foreach($temp_arr as $key=>$val)
    {
        echo $key."=>".$val."<br />";
    }
    echo "<br /><br />";
}

?>