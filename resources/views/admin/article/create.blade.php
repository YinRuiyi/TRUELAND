@extends('admin.index')

@section('title')
文章添加
@endsection

@section('text')
文章添加
@endsection

@section('img1')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="/admin/article" method="post" enctype="multipart/form-data" class="text-left">
                            <div class="form-group">
                                <label>文章标题</label>
                                <input class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>文章作者</label>
                                <input class="form-control" name="author">
                            </div>
                            <div class="form-group">
                                <label>文章头图</label>
                                <input type="file" class="form-control" name="pic">
                            </div>
                            <div class="form-group">
                                <label>文章内容</label>
                                <input class="form-control" name="content">
                            </div>

                            {{csrf_field()}}
                            <button type="submit" class="btn btn-white btn-info btn-bold menu-icon fa  fa-folder-open-o"> 添加</button>
                            <button type="reset" class="btn btn-white btn-default btn-round menu-icon fa  fa-folder-o"> 重置</button>
                        </form>
                    </div>
                    
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection





