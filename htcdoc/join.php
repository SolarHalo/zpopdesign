<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("join.xml");

$works = parseJoin($xml);

$bumen = "";
if(isset($_GET['bumen'])){
	$bumen = $_GET['bumen'];
}

$zhiwei = "";
if(isset($_GET['zhiwei'])){
	$zhiwei = str_replace("@", "/", $_GET['zhiwei']);
}

if($bumen == "" || $zhiwei == ""){
	$smarty->assign("title", $works['welcome']['title']);
	$smarty->assign("text",  $works['welcome']['text']);
	$smarty->assign("sendmail",  $works['welcome']['sendmail']);
}else{
	$smarty->assign("title", $zhiwei);
	$smarty->assign("text",  $works['works'][$bumen][$zhiwei]);
	$smarty->assign("sendmail",  "");
}

$smarty->assign("works", $works['works']);

$smarty->assign("mm", "joinus");
$smarty->assign("sm", "");
$smarty->display("join.tpl");
?>