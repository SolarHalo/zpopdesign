<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("contact.xml");

$swfs = pasreSXml2Array($xml->image[0]->children());

$trans = replaceFont(strval($xml->text[0]));
$address = replaceFont(strval($xml->text[1])); 
$con = replaceFont(strval($xml->text[2]));

$smarty->assign("trans", $trans);
$smarty->assign("address", $address);
$smarty->assign("contact", $con);
$smarty->assign("swf1", $swfs[0]);
$smarty->assign("swf2", $swfs[1]);

$smarty->assign("mm", "contact");
$smarty->assign("sm", "");
$smarty->display("contact.tpl");
?>