<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{{$appname}}</title>
<link href="{{$urlroot}}style/style.css" rel="stylesheet" />
<link href="{{$urlroot}}style/slidesStyle.css" rel="stylesheet" />
<script src="{{$urlroot}}js/jquery-1.8.0.min.js"></script>
<script src="{{$urlroot}}js/menu.js" type="text/javascript"></script>
<script src="{{$urlroot}}js/jquery.slides.min.js" type="text/javascript"></script>

<style text="text/css">
#p_content{ 
    position:relative;
}
</style>
</head>

<body>
	<div id="box">
    	<div class="header">
        	 <span class="headerlogo"><a href="#"><img src="{{$urlroot}}images/headerlogo.png" width="194" height="37" /></a></span>
             <div class="header_title">
				
             </div> 
             <img src="{{$urlroot}}images/headerlogo-x.png" width="155" height="20" style="float:right; padding:32px 15px 0 0;" />
        </div>
        <!-- header END -->



{{include 'nav.tpl'}}

<script type="text/javascript">
$(function() {
    $(document).mousemove(function(e) {
      //  $("#float").css("left", e.pageX-40).css("top", e.pageY-40);
        $("#float").css({left:e.pageX-40,top: e.pageY-40}); 
    });
    $("#float").click(function(e) {
//        if(Math.abs(e.pageX - $("#dis-b-logo").offset().left -20) > 40 ||
//                Math.abs(e.pageY -$("#dis-b-logo").offset().top -20) > 40){
//            return ;
//        }
    	$(document).unbind("mousemove"); 
    	//$("#float").removeAttr("style");
    	$("#float").animate({left:$("#dis-b-logo").offset().left,top:$("#dis-b-logo").offset().top},500, function(){
    		$("#logo-dt").attr("src","images/logo-dt.gif");
    		$("#dis-b-logo").attr("class","dis-b-logo");
    		$(".zhedang").animate({width:0},3000, function(){
				$("#flashbox").animate({
					'opacity': 0
					}, 600, function(){
						$("#flashbox").remove();
						});
		    });
        	});  
	    
		
	 }); 
});  

$(function() {
    $('.slides').slidesjs({
      width: 500,
      height: 500,
      navigation: false,
      play: {
          active: false,
          auto: true,
          interval: 4000,
          swap: true
        }
    });

  });
</script> 

<div id="backgroudimg" class="slides" style="width:100%; height:100%; left: 0;position: absolute; top: 0;background-color: white;z-index: -10;">
{{foreach $bgs as $img}}
    <img src="{{$urlroot}}{{$img}}" width="100%" height="100%"/>
{{/foreach}}
</div>

<div id="flashbox" style="width:100%; height:100%; left: 0;position: absolute; top: 0;background-color: white;">
	<div id="box">
		<div id="tie">
        	<img src="{{$urlroot}}images/logo-3.gif" id="dis-b-logo" /> 
        	<div class="zhedang1 zhedang">&nbsp;</div>
            <div class="zhedang2 zhedang">&nbsp;</div>
            <div class="zhedang3 zhedang">&nbsp;</div>
            <div class="zhedang4 zhedang">&nbsp;</div>
            <div class="zhedang5 zhedang">&nbsp;</div>
            <div class="zhedang6 zhedang">&nbsp;</div>
            <div class="zhedang7 zhedang">&nbsp;</div>
        </div>
        <div id="float" >
               <img alt="鼠标跟随图片" src="{{$urlroot}}images/shubiao-logo.png" id="logo-dt" /> 
        </div>
        <!-- box END --> 
    </div>
 </div>

{{include 'footer.tpl'}}