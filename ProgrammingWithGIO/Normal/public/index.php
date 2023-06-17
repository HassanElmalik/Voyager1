<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_file' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

// print_r (scandir(FILES_PATH));
require APP_PATH . 'App.php';
require APP_PATH . 'helpers.php';
$files = getTransactionFiles(FILES_PATH);


$transactions = [];
foreach ($files as $file){
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransaction')); //(more flixable) now we can put any function beside the file variable 
}
$totals = calculateTotals($transactions);

require VIEWS_PATH . 'transactions.php';

//with the callable fn we can now do this:
// $files = getTransactionFiles(FILES_OTHER_PATH);
// $transactions = [];
// foreach ($files as $file){
//     $transactions = array_merge($transactions, getTransactions($file, 'extractTransactionfrombankY')); //(more flixable) now we can put any function beside the file variable 
// }

// require VIEWS_PATH . 'transactions.php';