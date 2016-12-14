<?php

$client = new SoapClient('http://adminstage.bilna.com/api/?wsdl');
// echo time()."\n";
// If somestuff requires api authentification,
// then get a session token
$session = $client->login('apitest', 'AKIAIFHF4WJYKCVMM2UQ');

// $result = $client->call($session, 'somestuff.method');
$result = $client->call($session, 'moxymagazine.getsessiondata', 'c94b3n42u888sqe7r8973rc4r4');
// $result = $client->call($session, 'somestuff.method', array('arg1', 'arg2', 'arg3'));
// $result = $client->multiCall($session, array(
//      array('somestuff.method'),
//      array('somestuff.method', 'arg1'),
//      array('somestuff.method', array('arg1', 'arg2'))
// ));

var_dump($result);
// echo "\n".time()."\n";
// If you don't need the session anymore
$client->endSession($session);

?>