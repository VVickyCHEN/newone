@extends('Admin.Common')

@section('title', '分页列表')

@section('Tablescurrent', 'current')

@section('content')

  <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            DataTables
          </h1>
        </div>
        <!-- DataTables Example -->

        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <i class="icon-table"></i>DataTable with Sorting
              </div>
              <div class="widget-content padded clearfix">

                <table class="table table-bordered table-striped" id="dataTable1">
                  <thead>
                    <th class=" check-header hidden-xs">
                      <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                    </th>
                    <th>
                      Title
                    </th>
                    <th>
                      Detail
                    </th>
                    <th>
                      Img
                    </th>
                    <th class="hidden-xs">
                      Date edit
                    </th>
                    <th class="hidden-xs">
                      Date Added
                    </th>
                    <th class="hidden-xs">
                      Status
                    </th>
                    <th></th>
                  </thead>
                  <tbody class="tbody">
                    @foreach ($result as $post)
                    <tr>
                      <td class="check hidden-xs">
                        <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                      </td>
                      <td>
                        {{ $post->title }}
                      </td>
                      <td>
                        {{ $post->detail }}
                      </td>
                      <td class="hidden-xs">
                        <img style="width:80px;height:100px;" src="../../{{ $post->img }}">
                      </td>
                      <td class="hidden-xs">
                        {{ $post->last_update }}
                      </td>
                      <td class="hidden-xs">
                        {{ $post->createdate }}
                      </td>
                      <td class="hidden-xs">
                        <!-- <span class="label label-warning">Pending</span> -->
                        <span class="label label-success">Approved</span>
                      </td>
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="#"><i class="icon-eye-open"></i></a>

                          <!-- 修改 -->
                          <a class="table-actions" href="{{ url('uploadedit',[$post->id]) }}"><i class="icon-pencil"></i></a>

                          <a class="table-actions" href="#"><i class="icon-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach  
                  </tbody>
                </table>

                <div class="dataTables_paginate paging_full_numbers">
                    <!-- 第一部分上一页和首页 -->

                    @if($prevPage==1)
                    <a class="first paginate_button paginate_button_disabled" id="dataTable1_first" href="javascript:void(0)" onclick="page(1)">First</a>
                    <a class="previous paginate_button paginate_button_disabled" id="dataTable1_previous" href="javascript:void(0)" onclick="page(<?php echo $prevPage ?>)">Prev</a>
                    @else
                    <a class="first paginate_button" id="dataTable1_first" href="javascript:void(0)" onclick="page(1)">First</a>
                    <a class="previous paginate_button" id="dataTable1_previous" href="javascript:void(0)" onclick="page(<?php echo $prevPage ?>)">Prev</a>
                    @endif


                    <!-- 第二部分 数字分页 -->
                    <span>
                    @foreach($number as $key=>$val)

                    @if($val == $page)
                      <a class="paginate_active">{{$val}}</a>
                    @else
                      <a href="javascript:void(0)" onclick="page({{ $val }})" class="paginate_button">{{$val}}</a>
                    @endif
                    @endforeach
                    </span>

                    <!-- 第一部分下一页和尾页 -->
                    @if($nextPage==$sum)
                    <a href="javascript:void(0)" onclick="page(<?php echo $nextPage ?>)"id="dataTable1_next" class="next paginate_button paginate_button_disabled" >Next</a>
                    <a href="javascript:void(0)" onclick="page(<?php echo $sum ?>)" class="last paginate_button paginate_button_disabled" id="dataTable1_last">Last</a>
                    @else
                    <a href="javascript:void(0)" onclick="page(<?php echo $nextPage ?>)"id="dataTable1_next" class="next paginate_button" >Next</a>
                    <a href="javascript:void(0)" onclick="page(<?php echo $sum ?>)" class="last paginate_button" id="dataTable1_last">Last</a>
                    @endif

                    

                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- end DataTables Example -->
      </div>
    </div>
  </body>
  <script>
/*
@分页
*/
function page(page){
  // console.log(page);return false;
  $.ajax({
    type:"get",
    url:"datatables",
    data:{
    page:page
    },
    success:function(msg){
      // console.log(msg);return false;
      if(msg){
        $('.main-content').html(msg)
      }
    }
  })
}
</script>
<style type="text/css">
  #dataTable1_paginate {
    display: none;
  }
</style>
</html>