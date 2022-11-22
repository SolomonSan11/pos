@extends('layouts.app')

@section('content')
    <div class="container-lg-fluid">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 bg-light shadow-sm p-3">
                    <h3 class="text-center">Register Your Account.</h3>
                    <form action="" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name..." class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter Name..." class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="">Phone</label>
                            <input type="number" name="phone" id="phone" placeholder="Enter phone..." class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="">Address</label>
                            <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter Address..."></textarea>
                        </div>
                        <div class="mt-3">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password...">
                        </div>
                        <div class="mt-3">
                            <label for="">Confirm Password</label>
                            <input type="password" name="passwordConfirmation" id="passwordConfirmation" class="form-control" placeholder="Enter Password...">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark mt-3 w-100">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
