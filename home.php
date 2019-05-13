
<?php

// voorbeeld array
$citées = ['genk', 'bokrijk', 'zwartberg', 'waterschei', 'sledderlo', 'winterslag'];


// voorbeeld associative array
$details = ['infrastructuur'=> '275 wegen' , 'religie'=> '27 kerken', 'groenaanleg'=> '305 pleinen', 'shoppen'=> '1333 winkels', 'groothandels'=> '77 supermarkten'];


// voorbeeld object 
$inwoner_object = (object)[
    "naam" => "giuseppe",
    "leeftijd" => "60",
];


// push new values

for($i=0; $i<1; $i++){

    $citées[] = "kolderbos";
    print_r ($citées);
    echo '<br>';

    $details['autowegen'] = '299 bruggen';
    print_r($details);
    echo '<br>';
    
    $inwoner_object->wijk = 'richter';
    print_r($inwoner_object);
    echo '<br>';
}

// if-statement with at least 20% chance

$chance = mt_rand(0,100);

if($chance >= 20){

    $random_keys1=array_rand($citées,3);
    echo ("<br> <p style=padding-left:75px > <font color='green'  size='4pt' >" . $citées[$random_keys1[0]]."<br>");
    echo ($citées[$random_keys1[1]]."<br>");
    echo ($citées[$random_keys1[2]]."<br>");

    $random_keys2=array_rand($details,3);
    echo ("<br> <p style=padding-left:75px > <font color='purple'  size='4pt' >" . $details[$random_keys2[0]]."<br>");
    echo ($details[$random_keys2[1]]."<br>");
    echo ($details[$random_keys2[2]]."<br>");


    //convert object to array
    $arr = (array) $inwoner_object;
    echo ("<br> <font color='orange' size='4pt' >");
    echo ("<br>");
    print_r($arr);

} else {
    echo( "<br> <font color='blue' size='4pt' >not 20% chance echo-ing ... then try running again ... and again ... <br>");
}


// call function to save the data

saveData($citées, $details, $inwoner_object);

// function to save all data
function saveData($cit,$det,$inw){
    $_SESSION['ar'] = $cit;
    $_SESSION['as'] = $det;
    $_SESSION['ob'] = $inw;
}

echo ("<br><br><font color='blue' size='4pt' >");
print_r($_SESSION['ar']);
echo '<br>';
print_r($_SESSION['as']);
echo '<br>';
print_r($_SESSION['ob']);
echo '<br>';





?>
