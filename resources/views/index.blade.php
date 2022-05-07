<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            {{ \DcatAdmin\PermissionPlus\PermissionPlusServiceProvider::setting('box_title') ?: '导入明细' }}
        </h3>
        <p class="help-block">
            {{ \DcatAdmin\PermissionPlus\PermissionPlusServiceProvider::setting('box_help') ?: '请点击下方按钮开始导入' }}
        </p>

    </div>
    <div class="box-body">
        <div class="box-body fields-group" style="margin-bottom: 20px;">
            <textarea readonly class="form-control" name="" id="displayContainer" cols="20" rows="18"></textarea>
        </div>

        <!-- /.box-body -->
        <div class="box-footer row" style="display: flex">
            <div class="col-md-2">
                <iframe name="hide-frame" style="display: none"></iframe>
                <form action="{{ admin_route('permission-plus.import') }}" method="post" target="hide-frame">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary pull-left">
                        {!! \DcatAdmin\PermissionPlus\PermissionPlusServiceProvider::setting('box_btn') ?: '<i class="feather icon-save"></i> 导入权限' !!}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
