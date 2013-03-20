<div >
	{{foreach $cimgs as $img}}
	<img alt="" src="{{$urlroot}}{{$img}}">
	{{/foreach}}
</div>
<div>
<h3>{{$ctitle}}</h3>
<div>
{{$ctext}}
</div>
<div>
{{$cindustry}}
</div>
<div>
{{$cservices}}
</div>
<div>
{{if $preC != ''}}<a href="#{{$level}}/{{$preC}}">< PREV</a>{{/if}}
{{if $nexC != ''}}<a href="#{{$level}}/{{$nexC}}">NEXT ></a>{{/if}}
</div>
</div>