@extends("user.layout.UserPanelMasterApp")
@section("content")

<div class="change-password">
    <h5>change password</h5>
    <div class="form-group">
        <div class="form-inline">
            <label for="">old password</label>
            <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-inline">
            <label for=""></label>
            <input type="submit" name="submit" class="form-control btn btn-success" value="Submit">
        </div>
    </div>
</div>

@endsection