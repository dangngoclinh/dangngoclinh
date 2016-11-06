@extends('admin.shared._layout')

@section('content')
<div class="row">
	<div class="col-md-12">
    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
  		<div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title">Thêm Group</h3>
        </div>
        <!-- .box-header -->

  	    <div class="box-body">
          <div class="form-group">
            <label for="inputGroupId" class="col-sm-2 control-label">ID Group</label>
            <div class="col-md-10">
              <input type="text" name="group_id" id="inputGroupId" class="form-control" value="" required="required">
            </div>
          </div>
  		</div>
        <!-- .box-body -->

        <div class="box-footer clearfix">
          <button type="reset" class="btn btn-danger">Nhập Lại</button>
          <button type="submit" class="btn btn-primary pull-right">Lưu Tin Mới</button>
        </div>
        <!-- .box-footer -->
  		</div>
      <!-- END .box -->
    </form>
  </div>
</div>
@endsection