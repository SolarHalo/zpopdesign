function addFragmentChangeEvent(callback) {
	var source = document.URL;
	var url = source.split("#")[0];
	if (window.location.hash) {
		var base_hash = "#____base____hash____";//改变hash，使得页面初始化的时候触发一下事件函数。 
		window.location = url + base_hash;
	}
	var prevHash = window.location.hash;
	window.setInterval(function() {
		if (window.location.hash != prevHash) {
			prevHash = window.location.hash;
			callback(prevHash);
		}
	}, 100);
	if (window.location.hash) {
		window.location = source;
	}
}

function windowShow(hash){
	if(!hash){
		return;
	}
	if($("#cwindow").is(":hidden")){
		$("#cwindow").css({
			'display': 'block',
			'left': $('body').width()/2 - 250,
			'top': $('body').height()/2 - 100
		});
		$("#cwindow").animate({
			'width': 850,
			'height': 500,
			'opacity': 1,
			'left': $('body').width()/2 - 425,
			'top': $('body').height()/2 - 250
		}, 600);
	}
	
	$.ajax({
		'url': 'ajaxopt.php',
		'type': 'POST',
		'data': {'case': casetype,'type':type, 'hash': hash},
		'success': function(data){
		//	$("#cwindow").append(data);
			document.getElementById("cwindow").innerHTML =data;
			cscroll("#p_up", "#p_down", "#p_content", $("#ttcontent").innerHeight());
		}
	})
}

function closeWindow(){
	$("#cwindow").animate({
		'width': 500,
		'height': 200,
		'opacity': 0,
		'left': $('body').innerWidth()/2 - 250,
		'top': $('body').innerHeight()/2 - 100
	}, 600, function(){
		$("#cwindow").css("display", "none");
	});
}


$(document).ready(function(){
	addFragmentChangeEvent(windowShow);
	
	$("#smallaythumb").live("mouseenter", function(e){
		$(this).bind("mousemove", thumbscroll)
		
	});
	$("#smallaythumb").live("mouseleave", function(e){
		$(this).unbind("mousemove", thumbscroll)
		
	});
});



function  thumbscroll(e){
	var x = e.pageY - $("#smallaythumb").offset().top;
	var h1 = $("#smallaythumb").height();
	var h2 = $("#thumbcontent").height();
	$("#thumbcontent").animate({"top": ((x/h1) > 0.5) ? ((h1- x/h1*h2 + h2) < 0 || h1- x/h1*h2 > 0 ? h1-h2: h1- x/h1*h2)  : (0- x/h1*h2 > 0 || h2- x/h1*h2 > 0  ? 0 : 0- x/h1*h2 )}, { duration: 600, queue: false });
}