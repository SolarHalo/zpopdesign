/* 
   Simple JQuery Accordion menu.
   HTML structure to use:

   <ul id="menu">
     <li><a href="#">Sub menu heading</a>
     <ul>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       ...
       ...
     </ul>
     <li><a href="#">Sub menu heading</a>
     <ul>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       ...
       ...
     </ul>
     ...
     ...
   </ul>

Copyright 2007 by Marco van Hylckama Vlieg

web: http://www.i-marco.nl/weblog/
email: marco@i-marco.nl
Download by http://sc.xueit.com
Free for non-commercial use
*/

function initMenu() {
  //$('#menu ul').hide();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  }
$(document).ready(function() {initMenu();});

function cscroll(upid, dowid, contentid , height) { 

	
	//点击次数，此处取该结果集的最大整数
	var count = Math.ceil($(contentid).height()/height);
	var i = 0;
	//往下移动
	$(dowid).click(function(e){ 
		     		 
		$(upid).css("display","block");
		if(i>=count-1){
			return false;
		}else{
			i++;
			$(contentid).animate({
				top: 0-(height)*i	 
			},600);
		}
       
		
   });
	//往上移动
   $(upid).click(function(e){
   	
		 var divtop = $(contentid).offset().top;
		// alert(divtop);
		 //alert(i);
		 if(i<=0){
			return false;
		 }else{
		 	i--;
			$(contentid).animate({
				top: 0-height*i
			},600);
		 }
		
   });
   
};  