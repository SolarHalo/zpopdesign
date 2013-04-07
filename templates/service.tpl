{{include 'header.tpl'}}
{{include 'nav.tpl'}}

 <div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum services"> 
                         <img src="{{$urlroot}}images/services.jpg" /> 
                        {{$text}}
                    </div>  
                </div>
                <div class="colum_list services_list">
                	<span class="services-title">
                    	<img src="images/ioc1.jpg" /><br />
                        外树形象
                    </span>
                    <span class="services-title">
                    	<img src="images/ioc2.jpg" /><br />
                        内铸文化
                    </span>
                    <div class="services-list shijue">
                    	<h3>视觉设计</h3>
                    	{{$design}}
                    </div>
                    <div class="services-list celve">
                    	<h3>策略及定性研究</h3>
                        {{$reserch}}
                    </div>
                    <div class="services-list yingxiao">
                    	<h3>营销推广</h3>
                       {{$salling}}
                    </div>
                    <div class="services-list qiye">
                    	<h3>企业文化(人心工程)</h3>
                        {{$culture}}
                    </div>
				</div>
            </div> 
		<!-- container END --> 

{{include 'footer.tpl'}}