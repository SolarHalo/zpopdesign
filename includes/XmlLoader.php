<?php

function loadXmlfile($filename){
	$xml = simplexml_load_file(BASE_HOME."htcdoc/xml/".$filename);
	return $xml;
}

function pasreSXml2Array($sxml){
	$a = array();
	foreach($sxml as $name=>$node){
		$a[] = $node;
	}
	return $a;
}

function parseSXmlCase($sxml){
	$a = array();
	foreach ($sxml as $name => $node){
		$client = array();
		$client['title'] = xml_attribute($node,'title');
		$img = array();
		foreach ($node->image->children() as $name1=>$node1){
			if($name1 == "thumb"){
				$client['thumb'] = strval($node1);
			}else{
				$img[] = strval($node1);
			}
		}
		$client['img'] = $img;
		
		$client['text'] = strval($node->text);
		$client['industry'] = strval($node->industry);
		$client['services'] = strval($node->services);
		
		$a[] = $client;
	}
	return $a;
}

function xml_attribute($object, $attribute)
{
    if(isset($object[$attribute]))
        return (string) $object[$attribute];
}


function parseNews($node){
	$news = array();
	foreach ($node->children() as $name => $new) {
		if($name == "node"){
			continue;
		}
		$n = array();
		$n['name'] = $name;
		$n['title'] = xml_attribute($new, 'title');
		$n['date'] = xml_attribute($new, "date");
		$n['text'] = strval($new->text);
		$images = array();
		foreach ($new->image->children() as $img){
			$images[] = strval($img);
		}
		$n['image'] = $images;
		$news[] = $n;
	}
	return $news;
}

function parseService($node){
	$service = array();
	foreach ($node->children() as $n=>$s){
		$service[$n] = strval($s);
	}
	return $service;
}

function parseJoin($node){
	$join = array();
	foreach ($node->children() as $n=>$no){
		if($n == "Welcome"){
			$we = array();
			$we['title'] = xml_attribute($no->text, "title");
			$we['text'] = strval($no->text);
			$we['sendmail'] = strval($no->sendmail);
			$join['welcome'] = $we;
		}else{
			$js = array();
			foreach ($no->children() as $t){
				$js[xml_attribute($t, 'title')] = strval($t); 
			}
			$join['works'][ xml_attribute($no, "title")] = $js;
		}
	}
	return $join;
}

?>