<?php

header('Application: Belajar PHP Web');
header('Author: Gusti Alifiraqsha');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";
