<div id="container">
        	<div class="left_nav">
            	<ul id="menu">
                    <li>
                        <a href="javascript:void(0)" class="{{if $mm == 'about'}}dq{{else}}xz{{/if}}">ABOUT<span class="hr">了解</span></a>
                        <ul {{if $mm == 'about'}}style="display:block;"{{else}}style="display:none;"{{/if}}>
                            <li><a href="{{$urlroot}}who.php" class="sub_nav" {{if $sm == 'who'}}style="color:red;"{{/if}}><span>众耀是谁</span></a></li>
                            <li><a href="{{$urlroot}}team.php" class="sub_nav" {{if $sm == 'team'}}style="color:red;"{{/if}}><span>众耀团队</span></a></li>
                            <li><a href="{{$urlroot}}news.php" class="sub_nav" {{if $sm == 'news'}}style="color:red;"{{/if}}><span>众耀动态</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{$urlroot}}service.php" class="{{if $mm == 'service'}}dq{{else}}xz{{/if}}">SERVICES<span class="hr">服务</span></a> 
                    </li> 
                    <li>
                        <a href="javascript:void(0)" class="{{if $mm == 'works'}}dq{{else}}xz{{/if}}">WORKS<span class="hr">工作</span></a>
                        <ul {{if $mm == 'works'}}style="display:block;"{{else}}style="display:none;"{{/if}}>
                            <li><a href="{{$urlroot}}figure.php" class="sub_nav" {{if $sm == 'figure'}}style="color:red;"{{/if}}><span>树形象</span></a></li>
                            <li><a href="{{$urlroot}}culture.php" class="sub_nav" {{if $sm == 'culture'}}style="color:red;"{{/if}}><span>铸人心</span></a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="{{$urlroot}}join.php" class="{{if $mm == 'joinus'}}dq{{else}}xz{{/if}}">JOIN US<span class="hr">加入</span></a> 
                    </li>
                    <li>
                        <a href="{{$urlroot}}contact.php" class="{{if $mm == 'contact'}}dq{{else}}xz{{/if}}">CONTACT<span class="hr">联系</span></a> 
                    </li>
                </ul> 
            </div>
            <!-- left_nav END -->