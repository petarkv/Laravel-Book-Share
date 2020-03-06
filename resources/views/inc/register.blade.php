<!-- Begin Left Column -->
<div id="registration">

    <div class="container">

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        @endif

        <form class="form-horizontal" role="form" action="{{route('registration')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" name="name" value="{{old('name')}}" placeholder="First Name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="lastName" name="surname" value="{{old('surname')}}" placeholder="Last Name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="ddate_of_birth" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{old('date_of_birth')}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-3 control-label">Address*</label>
                <div class="col-sm-9">
                    <input type="text" id="address" name="address" value="{{old('address')}}" placeholder="Address" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="postal_code" class="col-sm-3 control-label">Postal code*</label>
                <div class="col-sm-9">
                    <input type="text" id="postal_code" name="postal_code" value="{{old('postal_code')}}" placeholder="Postal code" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="col-sm-3 control-label">City*</label>
                <div class="col-sm-9">
                    <input type="text" id="city" name="city" value="{{old('city')}}" placeholder="City" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="state" class="col-sm-3 control-label">State*</label>
                <div class="col-sm-9">
                    <input type="text" id="state" name="state" value="{{old('state')}}" placeholder="State" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number*</label>
                <div class="col-sm-9">
                    <input type="text" id="phoneNumber" name="phone_number" value="{{old('phone_number')}}" placeholder="Phone number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email*</label>
                <div class="col-sm-9">
                    <input type="email" id="email" value="{{old('email')}}" placeholder="Email" class="form-control" name= "email">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label">Username*</label>
                <div class="col-sm-9">
                    <input type="text" id="username" name="username" value="{{old('username')}}" placeholder="Username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label" style="display: inline;">Confirm Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" name="password_confirmation" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="femaleRadio" value="Female"> Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="maleRadio" value="Male"> Male
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="avatar" class="col-sm-3 control-label">Avatar</label>
                <div class="col-sm-9">
                    <input type="file" id="avatar" placeholder="AVATAR" class="form-control" name= "avatar">
                </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <span class="help-block">*Required fields</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form> <!-- /form -->

    </div> <!-- ./container -->

    <script src="{{asset('js/app.js')}}"></script>
    <!--         <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

</div>
<!-- End Left Column -->
