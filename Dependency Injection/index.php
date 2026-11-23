<?php

require_once 'Wallet.php';
require_once 'Keys.php';
require_once 'Smartphone.php';
require_once 'TransportCard.php';
require_once 'Person.php';

$wallet = new Wallet();
$keys = new Keys();
$smartphone = new Smartphone();
$transportCard = new TransportCard();

$person = new Person($wallet, $keys, $smartphone, $transportCard);

$person->leaveHome();
$person->usePublicTransport();
$person->makePayment();
$person->makeCall();