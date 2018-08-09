@extends('layouts.app')

@section('content')
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="text">
            <p class="text1">
                We would like you to <br/>
                share your experiences <br/>
                and thoughts with us on <br/>
                your cancer diagnosis
            </p>
            <p class="text2">
                Please take a moment to answer a series of short questions for us to </br>
                understand how your cancer diagnosis impacted your life
            </p>
            <button class="btn study"><p class="btn-text">Take part in the study</p></button>
        </div>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
        <img class="cancers" src="{{asset('images/Cancers.png')}}">
    </div>
@endsection