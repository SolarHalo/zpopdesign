{{include 'header.tpl'}}
{{include 'nav.tpl'}}

<div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum about_zpopnew">
                         <h1>{{$nownews.title}}</h1>
                         <font>{{$nownews.date}}</font>
                         {{foreach $nownews.image as $img}}
                         <img src="{{$urlroot}}{{$img}}" />
                         <img src="{{$urlroot}}{{$img}}" />
                         {{/foreach}}
                        <p>
                            {{$nownews.text}}
                        </p> 
                    </div> 
                    <div class="zhegai">&nbsp;<!--用于遮挡竖滚动条--></div> 
                </div>
                <div class="colum_list">
                    <div class="about_zpopnew_list">	
                        <ul id="c_content" style="position:relative;">
                        {{foreach $allnews as $new}}
                            <li>
                                <a href="{{$urlroot}}news.php?new={{$new.name}}" {{if $new.name == $nownews.name }}class="newlist_dq" {{/if}}>
                                    <font>{{$new.date}}</font>
                                    <h3>{{$new.title}}</h3>
                                </a>
                            </li>
                         {{/foreach}}
                        </ul> 
                    </div>
                    <div class="page"><span style="float:left; width:35px;">&nbsp;</span>
                        <a  id="c_down" href="javascript:void(0)">&or;</a><a id="c_up" style="display:none" href="javascript:void(0)">&and;</a>
                    </div>
                    <div class="zhegai">&nbsp;<!--用于遮挡竖滚动条--></div> 
				</div>
            </div> 
		<!-- container END -->
		
		<script type="text/javascript">
		cscroll("#c_up", "#c_down", "#c_content", $(".about_zpopnew_list").innerHeight());
</script>
{{include 'footer.tpl'}}