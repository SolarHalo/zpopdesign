<?php
include '../configs/load.php';
include BASE_HOME.'includes/XmlLoader.php';

$path = $_POST['path'];
$hash = $_POST['hash'];

$path = explode("/", $path);
$case = $path[2];
$xpath = array();
$xpath[] = "case";
if(count($path) > 3){
$xpath[] = $path[3];
}
if($case == "figure"){
	if(count($xpath)==1){
		$xpath[] = "logo";
	}
}

$hash = explode("/", substr($hash, 1));
$level = $hash[0];
$xpath[] = $level;
$custom = $hash[1];
if ($case == "figure"){
	$case = "case1.xml";
}else if($case == "culture"){
	$case = "case2.xml";
}else{
	echo "没有找到要找的企业。";
	exit(0);
}

$xml = loadXmlfile($case);
$typeResult = $xml->xpath("/".join("/", $xpath));
if($typeResult){
	$customs = parseSXmlCase($typeResult[0]->children());
	$preC = '';
	$nexC = '';
	$nowC = '';
	$count = count($customs);
	foreach ($customs as $k=>$c){
		if($c['title'] == $custom){
			$nowC = $c;
			if($k > 0){
				$preC = $customs[$k -1]['title'];
			}
			if($k < $count-1){
				$nexC = $customs[$k + 1]['title'];
			}
			break;
		}
	}
	
	if(!is_array($nowC)){
		echo "没有找到要找的企业。";
		exit(0);
	}
	
	$smarty->assign("cimgs", $nowC['img']);
	$smarty->assign("ctitle", $nowC['title']);
	$smarty->assign('ctext', $nowC['text']);
	$smarty->assign("cindustry", $nowC['industry']);
	$smarty->assign("cservices", $nowC['services']);
	$smarty->assign("preC", $preC);
	$smarty->assign("nexC", $nexC);
	$smarty->assign("level", $level);
	
	echo $smarty->fetch("custom.tpl");
	
}else{
	echo "没有找到要找的企业。";
	exit(0);
}

?>