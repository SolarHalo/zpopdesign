<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("news.xml");
$parent = array();
$parent = parseNews($xml);


$new = "";
if(array_key_exists("new", $_GET)){
	$new = $_GET['new'];
}
$nownews = "";
foreach ($parent as $key => $news){
	if($new == ""){
		$nownews = $news;
		break;
	}else if($new == $news['name']){
		$nownews = $news;
		break;
	}
}

$smarty->assign("nownews", $nownews);
$smarty->assign("allnews", $parent);

$smarty->assign("mm", "about");
$smarty->assign("sm", "news");
$smarty->display("news.tpl");
?>