<?php
//PHP Client.
//Note: This file may become index.php

include('vendor/autoload.php');

use prodigyview\network\Curl;

$host = "127.0.0.1:8080/server.php";

echo"\nRESTful tests...\n";

//Retrieve all stories.
echo "\n*****All the stories*****\n";
$curl = new Curl($host);
$curl->send('get');
echo $curl->getResponse();
echo "\n\n";

//Retrieve a single story.
echo "\n*****Story with id=1*****\n";
$curl = new Curl($host);
$curl->send('get', array('id'=>1));
echo $curl->getResponse();
echo "\n\n";

//Unsuccessful post.
echo "\n*****Unsuccessful post*****\n";
$curl = new Curl($host);
$curl->send('post', array('POST' => 'CREATE'));
echo $curl->getResponse();
echo "\n\n";

//Successfuly create a story.
echo "\n*****Create a story*****\n";
$curl = new Curl($host);
$curl->send('post', array('title'=>'Mica Printasa', 'description'=>'O printasa mica mica mica...'));
echo $curl->getResponse();
echo "\n\n";

//Update a story.
echo "\n*****Update a story*****\n";
$curl = new Curl($host);
$curl->send('put', array('id'=>'2', 'title'=>'KOH'));
echo $curl->getResponse();
echo "\n\n";

//Unsuccessfully delete a story.
echo "\n*****Unsuccessfully delete a story*****\n";
$curl = new Curl($host);
$curl->send('delete', array('delete' => 'salam'));
echo $curl->getResponse();
echo "\n\n";

//Delete a story.
echo "\n*****Delete a story*****\n";
$curl = new Curl($host);
$curl->send('delete', array('id'=>1));
echo $curl->getResponse();
echo "\n\n";

?>
