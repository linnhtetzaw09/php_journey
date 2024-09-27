<?php

$students = [
    [
        "firstname" => "Lin Htet",
        "lastname" => "Zaw"
    ],
    [
        "firstname" => "Lin Lin",
        "lastname" => "Zaw"
    ],
    [
        "firstname" => "Htet Htet",
        "lastname" => "Zaw"
    ],
    [
        "firstname" => "Zaw Lin",
        "lastname" => "Htet"
    ],
    [
        "firstname" => "Zaw Htet",
        "lastname" => "Zaw"
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Working with HTML</title>
</head>
<body>
    <h1>Data land <?php echo "student lists"; ?></h1>
    <ul>
        <li><?php echo $students[0]["firstname"]. " " . $students[0]["lastname"]; ?></li>
        <li><?php echo $students[1]["firstname"]. " " . $students[1]["lastname"]; ?></li>
        <li><?php echo $students[2]["firstname"]. " " . $students[2]["lastname"]; ?></li>
        <li><?php echo $students[3]["firstname"]. " " . $students[3]["lastname"]; ?></li>
        <li><?php echo $students[4]["firstname"]. " " . $students[4]["lastname"]; ?></li>
    </ul>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Working with HTML</title>
</head>
<body>
    <h1>Data land <?php echo "student lists"; ?></h1>

    <ul>
        <?php foreach($students as $student): ?>
            <li>
                <?php echo $student["firstname"]. " " . $student["lastname"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <ul>
        <?php foreach($students as $student): ?>
            <li>
                <?php echo "{$student["firstname"]} {$student["lastname"]}"; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <ul>
        <?php foreach($students as $student): ?>
            <li>
                <?= "{$student["firstname"]} {$student["lastname"]}"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
