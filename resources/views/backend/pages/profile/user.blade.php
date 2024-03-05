@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        {{-- breadcrumb --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- breadcrumb ends here --}}
        <section class="content">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="profile-card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-picture">
                                        <img src="https://beforeigosolutions.com/wp-content/uploads/2021/12/dummy-profile-pic-300x300-1.png"
                                            alt="Profile Picture">
                                        <div class="name-info">
                                            <h3>Mohin Hasan Abir</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 position-relative">
                                    <div class="user-info mt-2">
                                        <h5>Email:</h5>
                                        <p>john.doe@example.com</p>
                                        <h5>Phone:</h5>
                                        <p>+1234567890</p>
                                        <h5>Gender:</h5>
                                        <p>Male</p>
                                        <button class="btn btn-primary edit-profile-btn"><i
                                                class="bi bi-pencil-fill me-1"></i>Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
