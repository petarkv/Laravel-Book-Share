<div class="container emp-profile">
    <form method="post">
        <div class="col-md-4">

            <div class="profile-img">
                <img src="{{asset(\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="user_avatar"/>
                <div class="file btn btn-lg btn-primary">Change Photo
                    <input type="file" name="file"/>
                </div>
            </div>

            <div class="profile-head">
                <h5>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h5><br>
            </div>

            <div class="col-md-6">
                <p>RANKINGS : <span>8/10</span></p>
            </div>

            <label id="about"> About</label><br>

        </div>

        <div class="col-md-8">

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div class="row">
                    <div class="col-md-6">
                        <label>User Id</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->id}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Username</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->username}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Surname</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->surname}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->date_of_birth}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Address</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->address}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Postal Code</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->postal_code}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>City</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->city}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>State</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->state}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>E Mail</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->email}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone Number</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->phone_number}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Gender</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{Auth::user()->gender}}</p>
                    </div>
                </div>

            </div>

            <div>
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>

        </div>
    </form>
</div>
