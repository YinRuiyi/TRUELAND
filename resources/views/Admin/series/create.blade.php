@extends('Admin.index')
@section('title')
内容添加
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
			<a href="/admin/series">series</a>
			</li>
			<li>
				<a href="">内容添加</a>
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
							<h3 class="lighter block blue">请输入以下信息</h3>

							<form class="form-horizontal " method="post" rolm="form" action="/admin/series" enctype="multipart/form-data">
								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">名称:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="proname" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="proh1">h1:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="proh1" id="proh1" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="proh2">h2:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="proh2" id="proh2" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="proh3">h3:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="proh3" id="proh3" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="proh4">h4:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<!-- <input type="text" name="fname" id="fname" class=" bg-primary col-xs-12 col-sm-4" /> -->
											<textarea name="proh4" id="proh4" cols="30" rows="5" class=" bg-primary col-xs-12 col-sm-4"></textarea>
										</div>
									</div>
								</div>

								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="profile">图片:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="profile" id="profile" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<!-- <div style="border: 1px solid #333; width: 690px; height: 300px;" class="col-md-offset-1">
									<img src="" alt="该功能还未实现,敬请期待..">
								</div> -->
								<div class="space-2"></div>
								{{csrf_field()}}
								<div class="col-md-3 col-md-offset-3">
									
									<button type="submit" class="btn btn-white btn-info btn-bold">
										<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
										保存
									</button>
									
									<button type="reset" class="btn btn-white btn-pink btn-round">
										<i class="ace-icon fa fa-pencil red2"></i>
										重置
									</button>
								</div>
							</form>
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