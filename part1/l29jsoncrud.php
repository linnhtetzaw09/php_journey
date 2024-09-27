<?php

// Read the JSON data from the file
$getdatas = file_get_contents('studentdb.json');

// Decode JSON to array
$datasde = json_decode($getdatas, true);

// Read and print data
foreach ($datasde as $datas) {
    foreach ($datas as $key => $data) {
        echo $key . " = " . $data . "<br/>";
    }
    echo "<hr/>";
}

// Create new data
$newdatas = [
    [
        "id" => 8,
        "name" => "tin tin",
        "city" => "mandalay"
    ],
    [
        "id" => 9,
        "name" => "tun tun",
        "city" => "bago"
    ],
    [
        "id" => 10,
        "name" => "chan chan",
        "city" => "yangon"
    ]
];

// Append new data to the existing data
foreach($newdatas as $newdata){
    $datasde[] = $newdata;
}


// Update data
foreach ($datasde as $key => $datas) {
    if ($datas['id'] === 9) {
        // Update the name for the record with id 9
        $datasde[$key]['name'] = "chit su";
    }
}

// Save the updated data back to the file
file_put_contents('./studentdb.json', json_encode($datasde));

//=>Delete
$idxs = [];
foreach($datasde as $key => $datas){
    if($datas['id'] === 10){
        $idxs[] = $key;
    }
}

// Delete value from array
foreach($idxs as $idx){
    unset($datasde[$idx]);
}

// Save the updated data back to the file
file_put_contents("./studentdb.json", json_encode($datasde, JSON_PRETTY_PRINT));

// Print the updated data
echo "<pre>".print_r($datasde, true)."</pre>";

?>


