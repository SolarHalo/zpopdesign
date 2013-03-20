{{include 'header.tpl'}}
{{include 'nav.tpl'}}

<div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum works-nav"  id="works">
                    	<ul class="works-show_nav">
                        	<li><a href="{{$urlroot}}works/figure/logo">标志/VI</a></li>
                            <li><a href="{{$urlroot}}works/figure/web">网站</a></li>
                            <li><a href="{{$urlroot}}works/figure/print">印刷品</a></li>
                            <li><a href="{{$urlroot}}works/figure/publish">品牌发布</a></li>
                        </ul> 
                        <div class="works-show slides">
                        {{foreach $banners as $img}}
                        	<img src="{{$urlroot}}{{$img}}" width="400" />
                        {{/foreach}}
                        	
                        </div> 
                        <div class="works-imgshow_list">
                        {{foreach $vipcs as $vip}}
                        	<div>
                            	<a href="#推荐客户/{{$vip.title}}"><img src="{{$urlroot}}{{$vip.thumb}}" /> 
                                <p>{{$vip.industry}}</p></a>
                             </div>
                        {{/foreach}}
                        </div>
                    </div> 
                    <div class="zhegai" style="height:525px;">&nbsp;<!--用于遮挡竖滚动条--></div> 
                </div>
                <div class="colum_list"> 
                	<h3 class="works-show_h">案例分析</h3>
                    <div class="works-show_list"> 
                        <ul>
                        {{foreach $normcs as $normc}}
                        	<li><a href="#其他客户/{{$normc.title}}">{{$normc.title}}</a></li> 
                       {{/foreach}}
                        </ul>
                    </div>
                    <div class="page"><span style="float:left; width:35px;">&nbsp;</span>
                        <a href="#">&or;</a><a href="#">&and;</a>
                    </div>
                    <div class="zhegai" style="height:530px;">&nbsp;<!--用于遮挡竖滚动条--></div>  
				</div> 
            </div> 
		<!-- container END --> 
		
		<div id="cwindow" class="tWindow">
			<div class="closeb"><a href="javascript:void(0)" onclick="closeWindow()">X</a></div>
			<div class="contentC">Content</div>
		</div>
		
		<script src="{{$urlroot}}js/windowjs.js" type="text/javascript"></script>
		<script>
    $(function() {
      $('.slides').slidesjs({
        width: 400,
        height: 200,
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
		
		
{{include 'footer.tpl'}}