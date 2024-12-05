@extends("../user.layout.BasicMasterApp")
@section("content")
        <div class="forget-pass">
            <div class="card">
                <form action="" method="POST">
                    <div class="card-body">
                      <h5 class="card-title">find your account</h5>
                      <p class="card-text">please enter your email address or mobile number to search for your account..</p>
                      <!-- <a href="#" class="card-link">Card link</a> -->
                       <input type="text" name="email" class="form-control" placeholder="Email address">
                       <div class="btn-group">
                            <a href="login.html" class="btn btn-secondary cancel">cancel</a>
                            <button type="submit" class="btn btn-primary search">search</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
@endsection