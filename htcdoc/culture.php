<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("case2.xml");

$cultureText = strval($xml->txt);
$smarty->assign("cultureText", $cultureText);

$banners = pasreSXml2Array($xml->banner->children());
$smarty->assign("banners", $banners);

$vipc = $xml->xpath("/case/推荐客户");
$vipc = parseSXmlCase($vipc[0]->children());
$smarty->assign("vipcs", $vipc);

$normalc = $xml->xpath("/case/其他客户");
$normalc = parseSXmlCase($normalc[0]->children());
$smarty->assign("normcs", $normalc);

$smarty->assign("mm", "works");
$smarty->assign("sm", "culture");
$smarty->display("culture.tpl");

?>
