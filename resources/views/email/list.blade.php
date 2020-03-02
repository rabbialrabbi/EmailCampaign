@extends('welcome')

@section('body')

    @if(@$email)
    <p>{{$email->email}}</p>
    @endif
    <form action='/email' method="POST" >
        @csrf
        <div class="row mb-5">
            <div class="col-2">email</div>
            <div class="col-3">
                <input type="email" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <input class="btn btn-info btn-lg btn-block" type="submit" value="Calculate">
            </div>
        </div>
    </form>
    @endsection
