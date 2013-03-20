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

?>