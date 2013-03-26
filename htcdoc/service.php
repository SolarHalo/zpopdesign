<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$xml = loadXmlfile("services.xml");

$services = parseService($xml);

$smarty->assign("text", $services['text']);
$smarty->assign("design", $services['视觉设计']);
$smarty->assign("reserch", $services['策略及定性研究']);
$smarty->assign("salling", $services['营销推广']);
$smarty->assign("culture", $services['企业文化']);
$smarty->assign("mm", "service");
$smarty->assign("sm", "");
$smarty->display("service.tpl");
?>