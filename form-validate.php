<?php

// $_GET
// $_POST
// $_FILE
// $_SESSION
// $_SERVER

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo $_POST['field1'];
echo '<br>';
echo gettype($_POST['field1']);
echo '<br>';

echo $_POST['field2'];
echo '<br>';
echo gettype($_POST['field2']);
echo '<br>';

foreach ($_POST as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';
}

// for key, value in _POST.items():
//     print(f"{key}: {value}")
//     print('<br>')
