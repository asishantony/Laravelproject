@extends('layout')
@section('title')
    User
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">User</h1>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{route('store')}}">
                @csrf
                <label for="title">Name*</label>
                <input type="text" name="title" id="title" class="form-control mb-2"/>
                <label for="title">Phone Number*</label>
                <input type="phone" name="phoneno" id="phone" class="form-control mb-2"/>
                <label for="title">Department Name*</label>
                <input type="text" name="depname" id="title2" class="form-control mb-2"/>
                <label for="title">Designation Name*</label>
                <input type="text" name="desname" id="title3" class="form-control mb-2"/>
                <input type="submit" class="btn btn-dark btn-block" value="Submit"/>
            </form>
        </div>
    </div>
</div>

@endsection