<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$type = $_GET['type'];

$xml = loadXmlfile("case1.xml");
$typeResult = $xml->xpath("/case/".$type);
if($typeResult){
	$smarty->assign("banners", pasreSXml2Array($typeResult[0]->banner->children()));
	
	$vipc = $xml->xpath("/case/".$type."/推荐客户");
	$vipc = parseSXmlCase($vipc[0]->children());
	$smarty->assign("vipcs", $vipc);
	
	$normc = $xml->xpath("/case/".$type."/其他客户");
	$normc = parseSXmlCase($normc[0]->children());
	$smarty->assign("normcs", $normc);
	
}else{
	header('HTTP/1.1 404 Not Found');
	header("status: 404 Not Found");
}


$smarty->display("figure.tpl");
?>