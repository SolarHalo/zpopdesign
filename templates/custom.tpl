
        <div id="smallaythumb" class="smallLay-img">
        	<div id="thumbcontent" style=" position:relative;">
            {{foreach $cimgs as $img}}
			<img alt="" src="{{$urlroot}}{{$img}}" />
			{{/foreach}}
			</div>
        </div>
        <div class="smallLay-right">
            <h3><!--{{$ctitle}}-->
                {{$ctitle}}
            </h3> 
            <div id="ttcontent" class="text-conten">
            	<div id="p_content" >
                   {{$ctext}}
                </div>
            </div> 
            <div class="page">
            	<a  id="p_up" style="display:none">&and;</a><a id="p_down" >&or;</a>
            </div>
            <div class="ser">
               {{$cindustry}}
            </div>
            <div class="ser">
                 {{$cservices}} 
            </div>
            <div class="pageLR ser">
                {{if $preC != ''}}<a href="#{{$level}}/{{$preC}}"><font size="+1.2">&lt;</font> PREV</a>{{/if}}
                {{if $nexC != ''}}<a href="#{{$level}}/{{$nexC}}">NEXT <font size="+1.2">&gt;</font></a>{{/if}}
            </div>
            <a href="javascript:void(0)" class="lost" onclick="closeWindow();">
            	X
            </a>
        </div>
