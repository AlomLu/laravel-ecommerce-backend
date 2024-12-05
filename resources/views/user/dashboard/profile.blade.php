

    @extends("user.layout.UserPanelMasterApp")
    @section("content")
    
    <div class="update-profile ">
        <h5 class="">personal information</h5>
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
                <input type="text" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label for="">mobile number</label>
                <input type="text" name="mnumber" class="form-control">
            </div>
                <div class="form-inline ">
                    <label for="">gender</label>
                    <div class="form-group gender">
                        <div class="form-check male">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="male">
                            male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2">
                            <label class="form-check-label" for="female">
                                female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-inline birthday">
                    <label for="">birthday</label>
                    <input type="date" name="birthday" class="form-control">
                </div>
        </div>
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
            <div class="form-inline union-parishad">
                <label for="">union parishad</label>
                <select class="form-select" name="union parishad" aria-label="Default select example">
                    <option selected>select union parishad</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-inline">
                <label for=""></label>
                <input type="submit" name="submit" class="form-control btn btn-success" value="Updae">
            </div>
        </div>
    </div>
    @endsection