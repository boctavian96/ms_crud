<?php
//PHP Server.

include ('vendor/autoload.php');

use prodigyview\network\Request;
use prodigyview\network\Response;

//Mini-Database.
$articles = array(
	1 => array('title' => 'Little Red Riding Hood', 'description' => 'A sweet innocent girl meets a werewolf'),
	2 => array('title' => 'Snow White and the Seven Dwarfs', 'description' => 'A sweet girl, a delicious apple, and lots of little men.'),
	3 => array('title' => 'Gingerbread Man', 'description' => 'A man who actively avoids kitchens and hungry children.'),
);

$request = new Request();

$method = strtolower($request->getRequestMethod());

$data = $request->getRequestData('array');

//Routing the request.
if($method == 'get'){
    get($data);
} else if($method == 'put'){
   //PUT si DELETE nu primesc array ca argument.
   parse_str($data, $data);
   put($data);
} else if($method == 'post'){
   post($data);
} else if($method == 'delete'){
   parse_str($data, $data);
   delete($data);
}

function get($data){
    global $articles;

    $response = array();

    if(isset($data['id']) && isset($articles[$data['id']])){
	$response = $articles[$data['id']];
    }else{
	$response = $articles;	
    }

    echo Response::createResponse(200, json_encode($response));
    exit();
};

function put($data){
    global $articles;

    $response = array();

    if(isset($data['id']) && isset($articles[$data['id']])){
    	if(isset($data['title'])){
	    $articles[$data['id']]['title'] = $data['title'];
	}

	if(isset($data['description'])){
	    $articles[$data['id']['description'] = $data['description']];
	}
	$response = array('status' => 'Article Successfully Updated', 'content' => $articles[$data['id']]);
    }else{
	$response = array('status' => 'Unable to update');
    }

    echo Response::createResponse(200, json_encode($response));
    exit();
};

function post($data){
    global $articles;

    $response = array();

    if(isset($data['title']) && isset($data['description'])){
	    $articles[] = $data;
	    $response = array('status' => 'Article successfully added');
    }else{
	    $response = array('status' => 'Unable to add article');
    }

    echo Response::createResponse(200, json_encode($response));
};

function delete($data){
    global $articles;

    $response = array();

    if(isset($data['title']) && isset($data['description'])){
	$articles[] = $data;
    	$response = array('status' => 'Article successfully added');
    }else{
    	$response = array('status' => 'Unable to add article');
    }

    echo Response::createResponse(200, json_encode($response));
    exit();
};

?>
