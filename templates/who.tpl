{{include 'header.tpl'}}
{{include 'nav.tpl'}}

<div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum about_zpop">
                       <div  id="p_content" > 
					  {{$txt}}
						</div>
                    </div>
                    <div class="page"><a id="p_down" >&or;</a><a  id="p_up" style="display:none">&and;</a></div>
                    <div class="zhegai">&nbsp;<!--用于遮挡竖滚动条--></div> 
                </div>
                <div class="colum_list about_zpopimg">
                {{foreach $images as $img}}
                	<img src="{{$urlroot}}{{$img}}" />
                {{/foreach}}
                </div>
            </div> 
            
            
<style text="text/css">
#p_content{ 
    position:relative;
}
</style>
<script type="text/javascript">
$(function() { 

	//初始移动高度
	var height=400;
	//点击次数，此处取该结果集的最大整数
	var count = Math.ceil($("#p_content").height()/height);
	var i = 0;
	//往下移动
	$("#p_down").click(function(e){ 
		     		 
		$("#p_up").css("display","block");
		if(i>=count-1){
			return false;
		}else{
			i++;
			$("#p_content").animate({
				top: 0-(height)*i	 
			},600);
		}
       
		
   });
	//往上移动
   $("#p_up").click(function(e){
   	
		 var divtop = $("#p_content").offset().top;
		// alert(divtop);
		 //alert(i);
		 if(i<=0){
			return false;
		 }else{
		 	i--;
			$("#p_content").animate({
				top: 0-height*i
			},600);
		 }
		
   });
   
});  
</script> 
            
{{include 'footer.tpl'}}