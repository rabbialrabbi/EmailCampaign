@extends('welcome')

@section('body')
    <h1 class="mb-5" style="text-align: center">Campaign</h1>

    @if(@session('report'))
        <p class="bg-info">{{ session('report') }}</p>
        @endif

    <form action='/age' method="POST" >
        @csrf
        <div class="row mb-5">
            <div class="col-2">Name</div>
            <div class="col-3">
                <input type="text" name="name">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-2">Age</div>
            <div class="col-3">
                <input type="date" name="dob">
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <input class="btn btn-info btn-lg btn-block" type="submit" value="Calculate">
            </div>
        </div>
    </form>

    @if(@$age)
    <p>Hello Mr. {{$name}} . Your age is {{$age}}</p>
    @endif

@endsection
