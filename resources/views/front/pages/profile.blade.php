@extends('site.layouts.dashboard.dashboard-master')
@section('content')
    <main class="layout-main">
        <div class="content-wrapper">
            <section class="profile-edit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="profile-edit-head">
                                <div class="profile-head">
                                    <h3>My Profile</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="user-profile-form">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-8 col-xxl-7 col-sm-12 col-12">

                                <form action=" ">
                                    <div class="profile-fields">
                                        <input type="text" placeholder="Full Name">
                                    </div>
                                    <div class="profile-fields">
                                        <input type="number" placeholder="Phone Number">
                                    </div>
                                    <div class="profile-fields">
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="save-button">
                                        <button class="edit">Edit Profile</button>
                                        <button class="change">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
