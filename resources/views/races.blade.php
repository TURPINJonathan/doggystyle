@extends('base.template')


@section('title' , 'Races')

@section('content')

<script src="{{ url('assets/js/dogs.js') }}"></script>
<div class="uk-child-width-1-4@s test" uk-grid>
</div>
<template id="templateRaces">
        <div class="uk-text-center">
            <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0" style="width: 300px; height:200px;">
                <img src="" alt="" style="width: 300px; height:200px;">
                <div class="uk-position-center">
                    <div class="uk-transition-slide-top-small"><h4 class="uk-margin-remove" id="nameRace"></h4></div>
                </div>
            </div>
        </div>
</template>
</div>

@endsection
