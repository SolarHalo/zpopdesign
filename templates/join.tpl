{{include 'header.tpl'}}
{{include 'nav.tpl'}}

<div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum about_zpopnew"> 
                         <p><font style="color:#e60013">{{$title}}</font></p>
                         {{$text}}
                         {{$sendmail}}
                 </div>
               
 				     </div>
 				      <div class="colum_list">
                    <div class="about_zpopnew_list" id="joinus">
                    {{foreach $works as $key=>$work}}
                    	<span>{{$key}}</span>	
                        <ul>
                        {{foreach $work as $k=>$w}}
                            <li>
                                <a href="{{$urlroot}}join.php?bumen={{$key}}&zhiwei={{$k|replace:'/':'@'}}" {{if $title == $k}} class="newlist_dq" {{/if}}> 
                                   {{$k}}
                                </a>
                            </li>
                        {{/foreach}}
                          
                        </ul> 
                     {{/foreach}}
                    </div>
                     
            </div> 
		<!-- container END --> 
		
{{include 'footer.tpl'}}