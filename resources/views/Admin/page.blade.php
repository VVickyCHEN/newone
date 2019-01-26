@extends('Admin.Common')
<div id="box">
<!-- 第一部分 -->
<a href="javascript:void(0)" onclick="page(1)">首页</a>
<a href="javascript:void(0)" onclick="page(<?php echo $prev ?>)">上一页</a>
<a href="javascript:void(0)" onclick="page(<?php echo $next ?>)">下一页</a>
<a href="javascript:void(0)" onclick="page(<?php echo $sums ?>)">尾页</a><br />
<!-- 第二部分 数字分页 -->
@foreach($pp as $key=>$val)
@if($val == $page)
{{$val}}
@else
<a href="javascript:void(0)" onclick="page({{ $val }})">{{$val}}</a>
@endif
@endforeach
<!-- 表 -->
<table border="1" id="">

	<tr>
		<td>Title</td>
		<td>Detail</td>
		<td>时间</td>
	</tr>

	@foreach($data as $val)
		<tr>
		<td>{{$val->title}}</td>
		<td>{{$val->detail}}</td>
		<td>{{$val->createdate}}</td>
		</tr>
	@endforeach

</table>
</div>
</body>
</html>
<script>
/*
@分页
*/
function page(page){
	// console.log(page);return false;
	$.ajax({
		type:"get",
		url:"page",
		data:{
		page:page
		},
		success:function(msg){
			if(msg){
				$("#box").html(msg)
			}
		}
	})
}
</script>
