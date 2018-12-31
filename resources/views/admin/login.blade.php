@extends("layouts.login_register_public")
@section("content")
    @section("view_name","login")
    @section("box_msg","请先登陆登陆")

        <form action="{{ route('login')  }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> 记住我
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    @section("order_link")
        @parent
            <a href="/forgot">忘记密码</a><br>
            <a href="/register" class="text-center">注册新的账号</a>
        @stop
@endsection