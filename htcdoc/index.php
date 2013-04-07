<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("home_bg.xml");

$smarty->assign("bgs", pasreSXml2Array($xml->children()));


$smarty->assign("mm", "");
$smarty->assign("sm", "");
$smarty->display("index.tpl");
?>