{{include 'header.tpl'}}
{{include 'nav.tpl'}}

 <div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum about_zpop"> 
                       {{$txt}}
                        <div class="teamimg">
                        	{{foreach $images as $img}}
			                	<img src="{{$urlroot}}{{$img}}" />
			                {{/foreach}}
                        </div>
                    </div> 
                    <div class="zhegai">&nbsp;<!--用于遮挡竖滚动条--></div> 
                </div> 
            </div> 
        <!-- container END --> 
        
{{include 'footer.tpl'}}