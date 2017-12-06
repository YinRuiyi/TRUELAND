@extends('Backstage.index')
@section('title')
	@foreach($pro as $k=>$v)
		{{$v->proname}}的修改
	@endforeach
@endsection
@section('content')
<div class="main-content">
	<!-- #section:basics/content.breadcrumbs -->
	<div class="breadcrumbs" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="/">唯星库首页</a>
			</li>

			<li>
				<a href="/pro">轮播图</a>
			</li>
			<li>
				<a href="/pro/create">
					@foreach($pro as $k=>$v)
					
					{{$v->proname}}的修改
					
					@endforeach
				</a>
			</li>
		</ul><!-- /.breadcrumb -->

		<!-- #section:basics/content.searchbox -->
			

		<!-- /section:basics/content.searchbox -->
	</div>

	<div class="page-content">
		<!-- /section:settings.box -->
		<div class="page-content-area">

			<div class="row">
				<div class="col-xs-12">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							@foreach($pro as $k => $v)
							<h3 class="lighter block blue">请修改 {{$v->proname}} 的信息</h3>
							<table style="position: relative;width: 80%;" class="table table-bordered table-hover table-striped">
								<form method="post" action="/pro/{{$v->id}}" enctype="multipart/form-data">
								<tr>
									<td class="text-center col-md-1">id</td>
									<td>{{$v->id}}</td>
								</tr>
								<tr>
									<td class="text-center">名称</td>
									<td>
										<input type="text" value="{{$v->proname}}" name="proname" id="proname" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">h1</td>
									<td>
										<input type="text" value="{{$v->proh1}}" name="proh1" id="proh1" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">h2</td>
									<td>
										<input type="text" value="{{$v->proh2}}" name="proh2" id="proh2" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">h3</td>
									<td>
										<input type="text" value="{{$v->proh3}}" name="proh3" id="proh3" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">h4</td>
									<td>
										<input type="text" value="{{$v->proh4}}" name="proh4" id="proh4" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">状态</td>
									<td>
										
										<input type="radio" style="padding-top: 15px;" <?php if ($v->status==1): ?> checked='true' <?php endif ?> value="1" name="status">
										<span class="label label-success arrowed">使用</span>
										<br>
										
										<input type="radio" style="padding-top: 15px;" <?php if ($v->status!=1): ?> checked='true' <?php endif ?> value="0" name="status">
										<span class="label label-sm label-warning">&nbsp;&nbsp;禁用&nbsp;&nbsp; </span>
										
									</td>
								</tr>
								<tr>
									<td class="text-center">原版图片</td>
									<td>
										<!-- <img src="{{$v->profile}}" alt="图片丢失" style="width: 100%; height: auto"> -->
										<input type="file" style="width: ">
									</td>
								</tr>
								<hr>
								{{method_field('PUT')}}
								{{csrf_field()}}
									&nbsp;&nbsp;
								<button type="submit" class="btn btn-white btn-info btn-bold">
									<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
									决定就这样了=.=
								</button>
									&nbsp;
								<button type="reset" class="btn btn-white btn-pink btn-round" >
									<i class="ace-icon fa fa-pencil red2"></i>
									重置
								</button>
								
								</form>
							</table>

							@endforeach
						</div>
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content-area -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

@endsection		
@section('js')

@endsection