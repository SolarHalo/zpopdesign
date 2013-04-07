{{include 'header.tpl'}}
{{include 'nav.tpl'}}
<script type="text/javascript">
$(document).ready(function(){
	$("#imgthumb img").mouseenter(function(){
			var thumbwidth = $("#imgthumb").width();
			var thumbleft = $("#imgthumb").offset().left;
			var iw = $(this).width();
			var ih = $(this).height();
			var p = $(this).offset();
			var div = $("<div id='thumbscal'></div>");
			div.html($(this).clone());
			div.css({'position':'absolute', 'width':$(this).width(),'height':$(this).height(), 'left':$(this).offset().left,
				'top':$(this).offset().top});
			div.children().css({'width': '100%', 'height': '100%'});
			div.animate({'width': $(this).width()*2 + 15, 'height': $(this).height()*2 +15,
							'left': (thumbwidth -$(this).offset().left + thumbleft) > $(this).width() *2 +15 ? $(this).offset().left : $(this).offset().left - $(this).width() -15  },
							500);
			$("body").append(div);
			div.mouseleave(function(){
				div.animate({'width': iw, 'height': ih,
					'left': p.left },
					500, function(){div.remove();});
				});
		});
});

</script>
 <div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum about_zpop"> 
                       {{$txt}}
                        <div id="imgthumb" class="teamimg">
                        	{{foreach $images as $img}}
			                	<img src="{{$urlroot}}{{$img}}" />
			                {{/foreach}}
                        </div>
                    </div>  
                </div> 
            </div> 
        <!-- container END --> 
        
{{include 'footer.tpl'}}