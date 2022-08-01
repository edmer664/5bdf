@extends('layouts.auth')
@section('heading', 'Settings')
@section('content')
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="card border-left-warning">
                    <div class="card-header">
                        <h5 class="card-title">
                            <i class="fas fa-cog"></i>
                            Settings
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('5bdf.admin.update_detail')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">
                                    <i class="fas fa-user"></i>
                                    Username
                                </label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            {{-- submit btn --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fas fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                        <div class="py-5">

                            <hr class="">
                        </div>
                        <h4 class="pb-3">
                            <i class="fas fa-lock"></i>
                            Change Password
                        </h4>
                        <form id="change_pass" action="{{route('5bdf.admin.update_password')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">
                                    <i class="fas fa-lock"></i>
                                    Password
                                </label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="">
                                    <i class="fas fa-lock"></i>
                                    Confirm Password
                                </label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            {{-- submit btn --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fas fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- check password if mathches confirm password --}}
    <script>
        $('#change_pass').submit(function(e){
            var password = $('input[name="password"]').val();
            var confirm_password = $('input[name="password_confirmation"]').val();
            if(password != confirm_password){
                e.preventDefault();
                alert('Password does not match');
            }
        });
    </script>

@endpush