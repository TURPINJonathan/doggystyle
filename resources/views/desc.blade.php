@extends('base.template')


@section('title' , 'Home')

@section('content')

<script src="{{ url('assets/js/desc.js') }}"></script>

<div class="uk-margin uk-text-center">
    <div class="uk-inline-block uk-child-width-1-1">

        <img src="{{ url('assets/img/slide1.jpg') }}" alt="" style="width: 600px; height:auto;">


        <div class="uk-position-medium uk-position-center-bottom-out uk-visible@s">

        <ul class="uk-list">
            <li><i class="fas fa-address-card" id="name"></i></li>
            <li><i class="fas fa-ruler" id="height"></i></li>
            <li><i class="fas fa-weight" id="weight"></i></li>
            <li><i class="fas fa-user-alt" id="temperament"></i></li>
            <li><i class="fas fa-heartbeat" id="lifespan"></i></li>
        </ul>


        </div>

    </div>
</div>

@endsection
