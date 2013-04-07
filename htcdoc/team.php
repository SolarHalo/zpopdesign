<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("team.xml");

$imgs = pasreSXml2Array($xml->image->children());

$txt = replaceFont(strval($xml->text));
$smarty->assign("txt", $txt);
$smarty->assign("images", $imgs);
$smarty->assign("mm", "about");
$smarty->assign("sm", "team");
$smarty->display("team.tpl");
?>