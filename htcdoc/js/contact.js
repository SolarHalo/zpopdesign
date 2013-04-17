$(document).ready(function (){
	$(".showMap").click(function(){
		var p = $(this).find("img").offset();
		var img = $(this).html();
		var w1 = $(this).find("img").outerWidth();
		var h1 = $(this).find("img").outerHeight();	
		var p2 = $(".right_colum").offset();
		var w2 = $(".right_colum").outerWidth();
		var h2 = $(".right_colum").outerHeight();
		
		var swf = $(this).attr("swf");
		
		
		var div = $("<div id='mapwindow'>" + img + "</div>");
		div.find("img").css({'width': '100%', 'height': '100%', 'left': 0, 'top': 0});
		div.css({
			'position': 'absolute',
			'left': p.left,
			'top': p.top,
			'width': w1,
			'height': h1
		});
		
		$('body').append(div);
		
		div.animate({
			'left': p2.left,
			'top': p2.top,
			'width': w2,
			'height': h2
		}, 600, 'linear', function(){
			var flashvars = "";  
		    var params = {  
		        menu: "false",  
		        scale: "noScale",  
		        allowFullscreen: "true",  
		        allowScriptAccess: "never",
		        allownetworking: "none",
		        play: "true" ,
		        wmode:"transparent"
		    }; 
			$("#mapwindow").html("<div style='position:relative; left:0; top:0;'>" +
					"<div style='position:absolute; left:0px; top: 0px; width:"+w2+"px; height: "+h2+"px;'><div id='swfobj'></div></div>" +
					"<div id='overflows' style='position:absolute; left:0px; top: 0px; width:"+w2+"px; height: "+h2+"px;'></div></div>");
			swfobject.embedSWF(swf, "swfobj", w2, h2, "9.0.0", "expressInstall.swf", flashvars, params);
			$("#overflows").click(function(){
				div.animate({
					'left': p.left,
					'top': p.top,
					'width': w1,
					'height': h1
				}, 500, function(){
					div.remove();
				});
			});
		});
	});
});