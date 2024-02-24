@extends('layouts.main')

@section('title')
    Update Profile
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Profile</h1>
        <a href="{{ route('profile.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
        </div>
        <div class="card-body">

            <form id="form-profil" class="needs-validation" action="{{ route('profile.update', [Crypt::encrypt($profile->id)]) }}" method="POST" novalidate>
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-4 position-relative mb-4">
                        <label for="firstname" class="form-label">First Name</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname') ? old('firstname') : $profile->firstname }}" placeholder="First name">

                            @error('firstname')
                                <div id="firstname_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 position-relative mb-4">
                        <label for="lastname" class="form-label">Last Name</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') ? old('lastname') : $profile->lastname }}" placeholder="Last name">

                            @error('lastname')
                                <div id="lastname_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 position-relative mb-4">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') ? old('username') : $profile->username }}" placeholder="Username">
                            @error('username')
                                <div id="username_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 position-relative mb-4">
                        <label for="city" class="form-label">City</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') ? old('city') : $profile->city }}" placeholder="City">

                            @error('city')
                                <div id="city_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 position-relative mb-4">
                        <label for="state" class="form-label">State</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state') ? old('state') : $profile->state }}" placeholder="State">

                            @error('state')
                                <div id="state_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 position-relative mb-4">
                        <label for="zip" class="form-label">Zip</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" value="{{ old('zip') ? old('zip') : $profile->zip }}" placeholder="Zip">

                            @error('zip')
                                <div id="zip_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 position-relative mb-4">
                        <label for="address" class="form-label">Address</label>
                        <div class="input-group has-validation">
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" cols="30" rows="2">{{ old('address') ? old('address') : $profile->address }}</textarea>

                            @error('address')
                                <div id="address_cek" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
