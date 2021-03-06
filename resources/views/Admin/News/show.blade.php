@extends('Admin.index')
@section('title')
	@foreach($news as $k=>$v)
		{{$v->newsname}}
	@endforeach
@endsection
@section('content')
<div class="main-content">
	<!-- #section:basics/content.breadcrumbs -->
	<div class="breadcrumbs" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="/admin">唯星库首页</a>
			</li>
			
			<li>
				<a href="/admin/news">新闻</a>
			</li>
			<li>
				<a href="">@foreach($news as $k=>$v) {{$v->newsname}}的详情信息 @endforeach</a>
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
							@foreach($news as $k => $v)
							<h3 class="lighter block blue">{{$v->newsname}}</h3>
							<div style="width: 1251px ; height: 624px; margin-top: 50px;">
								{!!$v->news!!}
							</div>
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