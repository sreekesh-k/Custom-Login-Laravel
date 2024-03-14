@extends('layout')
@section('title', 'Register')
@section('content')
    <div class="container">
        <form class="ms-auto me-auto" style="width:500px">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="email" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
