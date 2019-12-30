@extends('welcome')

@section('body')
    <h1 class="mb-5" style="text-align: center">Campaign</h1>

    @if(@session('report'))
        <p class="bg-info">{{ session('report') }}</p>
        @endif

    <form action="/email" method="POST" >
        @csrf
        <div class="row mb-5">
            <div class="col-2">Group</div>
            <div class="col-3">
                <select name="group" id="">
                    <option value="1">Test 1</option>
                </select>
            </div>
            <div class="col-2">Time</div>
            <div class="col-3">
                <select name="time" id="">
                    <option value="0" default>Now</option>
                    <option value="1">After 1 Day</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">Message</div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <textarea name="msg" id="" cols="35" rows="10"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <input class="btn btn-info btn-lg btn-block" type="submit" value="Send">
            </div>
        </div>
    </form>

@endsection
