<?php

header("Foo: baz");

// redirection temporaire
$url = '/hello.php';
header("Location: {$url}", 302);
