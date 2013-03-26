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
                        <ul>
                        {{foreach $allnews as $new}}
                            <li>
                                <a href="{{$urlroot}}about/news/{{$new.name}}" {{if $new.name == $nownews.name }}class="newlist_dq" {{/if}}>
                                    <font>{{$new.date}}</font>
                                    <h3>{{$new.title}}</h3>
                                </a>
                            </li>
                         {{/foreach}}
                        </ul> 
                    </div>
                    <div class="page"><span style="float:left; width:35px;">&nbsp;</span>
                        <a href="#">&or;</a><a href="#">&and;</a>
                    </div>
                    <div class="zhegai">&nbsp;<!--用于遮挡竖滚动条--></div> 
				</div>
            </div> 
		<!-- container END -->
		
{{include 'footer.tpl'}}