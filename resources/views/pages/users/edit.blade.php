@extends('layouts.app')

@section('title', 'Edit User')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Little Win Coffee</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                    <li class="breadcrumb-item active">New User</li>
                </ol>
            </div>
            <h4 class="page-title">New User</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('users.update', $user) }}" method="POST" class="parsley-examples" data-parsley-validate="" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">User Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" parsley-trigger="change" required="" placeholder="Enter user name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" name="phone" value="{{ $user->phone }}" parsley-trigger="change" class="form-control" id="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input id="password" name="password" type="password" placeholder="Password" value="{{ $user->password }}" class="form-control @error('email') is-invalid @enderror" required="">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password2">Confirm Password <span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#password" type="password" required="" placeholder="Password" value="{{ $user->password }}" class="form-control" id="password2">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Roles</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="role" value="admin" class="selectgroup-input"
                                                @if ($user->role == 'admin') checked @endif>
                                            <span class="selectgroup-button">Admin</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="role" value="user" class="selectgroup-input"
                                                @if ($user->role == 'user') checked @endif>
                                            <span class="selectgroup-button">User</span>
                                        </label>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Save
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary waves-effect">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </div><!-- end col-->

</div>
@endsection