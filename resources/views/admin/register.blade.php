@extends("layouts.login_register_public")
@section("content")
    @section("view_name","register")
    @section("box_msg","注册新会员")

        <form action="{{ route('register') }}" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="设置自己心仪的字母名称" value="{{ old('name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="注册邮箱" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="登陆密码">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="确认登陆密码">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> 我同意这些 <a href="#">条款</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    @section("order_link")
        @parent
            <a href="/login" class="text-center">我已经有会员资格了 去登陆</a>
        @stop
    @section("terms")
        @parent
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">条款</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    哈哈哈哈哈哈
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    噢噢噢噢噢噢噢
                </div>
                <!-- /.box-footer-->
            </div>
        <!-- SlimScroll -->
        <script src="/lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="/lte/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="/lte/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/lte/dist/js/demo.js"></script>
        @stop

@endsection