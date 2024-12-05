@extends("user.layout.UserPanelMasterApp")
@section("content")

<div class="address">
    <h5>address</h5>
    <div class="form-group">
        <div class="form-inline">
            <label for="">first name</label>
            <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-inline">
            <label for="">last name</label>
            <input type="text" name="lname" class="form-control">
        </div>
        <div class="form-inline">
            <label for="">email</label>
            <input type="email" name="email" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="form-inline">
            <label for="">mobile number</label>
            <input type="number" name="number" class="form-control">
        </div>
        <div class="form-inline" style="width: 65%;">
            <label for="">full address</label>
            <input type="text" name="faddress" class="form-control" placeholder="House No-58, Block-C, Neharipara, Akhalia">
        </div>
    </div>
    <!-- <div class="form-group">
    </div> -->
    <div class="form-group">
        <div class="form-inline division">
            <label for="">division</label>
            <select class="form-select" name="division" aria-label="Default select example">
                <option selected>select division</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-inline district">
            <label for="">district</label>
            <select class="form-select" name="district" aria-label="Default select example">
                <option selected>select district</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-inline upazila">
            <label for="">upazila</label>
            <select class="form-select" name="upazila" aria-label="Default select example">
                <option selected>select upazila</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-inline">
            <label for="">postal code</label>
            <input type="text" name="upazila" class="form-control">
        </div>
        <div class="form-inline">
            <label for=""></label>
            <input type="submit" name="submit" class="form-control btn btn-success" value="Updae">
        </div>
    </div>
</div>

@endsection