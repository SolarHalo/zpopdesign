{{include 'header.tpl'}}
{{include 'nav.tpl'}}

<script type="text/javascript" src="{{$urlroot}}js/swfobject.js"></script>
<script type="text/javascript" src="{{$urlroot}}js/contact.js"></script>

 <div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum about_zpopnew"> 
                         <div class="map">
                         	<a href="javascript:void(0)" class="showMap" swf="{{$urlroot}}{{$swf1}}"><img src="{{$urlroot}}images/map1.jpg" /></a>
                            <a href="javascript:void(0)" class="showMap" swf="{{$urlroot}}{{$swf2}}"><img src="{{$urlroot}}images/map2.jpg" /></a>
                            {{$trans}}
                         </div>
                         <div class="table">
                         	<form>
                            	<table>
                                	<tr>
                                    	<td width="100">标题/TITLE</td>
                                        <td><input type="text" class="inp-text" /></td>
                                    </tr>
                                    <tr>
                                    	<td width="100">姓名/NAME</td>
                                        <td><input type="text" class="inp-text" /></td>
                                    </tr>
                                    <tr>
                                    	<td width="100">邮箱/EMAIL</td>
                                        <td><input type="text" class="inp-text" /></td>
                                    </tr>
                                    <tr>
                                    	<td width="100">内容/MESSAGE</td>
                                        <td><textarea style="width:285px; height:75px;border:1px solid #8c8c8c; padding:5px;"></textarea></td>
                                    </tr>
                                    <tr>
                                    	<td width="100">&nbsp;</td>
                                        <td><input type="submit" value="GO" style="background:#fff;border:1px solid #8c8c8c; width:33px; height:20px; cursor:pointer; color:#8c8c8c;" /></td>
                                    </tr>
                                </table>
                            </form>
                         </div> 
                    </div>  
                </div>
                <div class="colum_list">
                    <div class="about_zpopnew_list" id="contanct">
                    	 <p style=" display:block; padding:9px 0;"></p>
                    	{{$address}}
                         <p style=" display:block; padding:53px 0;"></p>
                        {{$contact}}  
                    </div>  
				</div>
            </div> 
		<!-- container END --> 

{{include 'footer.tpl'}}