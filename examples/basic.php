<?php
require __DIR__ . '/../vendor/autoload.php';

use Vemetric\Vemetric;

$vemetric = new Vemetric([
    'token' => 'WRlW37cPSLUAbXDk76wYU',
    'host' => 'http://localhost:4004',
]);

// Track an event
$vemetric->trackEvent('SignupCompleted', [
    'userIdentifier' => 'dmmIrnzUzVMJD03tjCiHXTEEgX6xIPJm',
    'eventData'      => ['plan' => 'Pro'],
    'userData'       => ['setOnce' => ['signupSource' => 'landing-page']],
]);

// Update user later
$vemetric->updateUser([
    'userIdentifier' => 'dmmIrnzUzVMJD03tjCiHXTEEgX6xIPJm',
    'userData'       => ['set' => ['plan' => 'Business']],
]);

echo "✅ Requests sent\n";