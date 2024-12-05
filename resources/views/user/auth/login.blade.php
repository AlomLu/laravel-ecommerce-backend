@extends("user.layout.MasterApp")
@section("content")
        <!-- Login area start -->
        <div class="login-area">
            <div class="login">
                <h4>login</h4>
                <form action="" method="POST">
                        <div class="form-inline">
                            <label for="">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-inline">
                            <label for="">password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-inline">
                            <input type="submit" name="submit" class="form-control btn btn-success" value="login">
                        </div>
                </form>
                <div class="forgot-pass">
                    <a href="{{route('forgot-password')}}">forgotten account?</a>
                </div>
                <div class="create-account">
                    <a href="{{route('signup')}}">create new account</a>
                </div>
            </div>
        </div>
        <!-- Login area end -->
@endsection