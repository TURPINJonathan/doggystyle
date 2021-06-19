@extends('base.template')


@section('title' , 'Home')

@section('content')
<div class="container uk-position-center">
   <form action="POST" class="uk-form-stacked">
    <div class="uk-margin">
        <div class="uk-form-label">Nom</div>
        <input class="uk-input uk-form-width-large" type="text" placeholder="Jean">
    </div>
    <div class="uk-margin">
        <div class="uk-form-label">Prénom</div>
        <input class="uk-input uk-form-width-large" type="text" placeholder="Dupont">
    </div>
    <div class="uk-margin">
        <div class="uk-form-label">E-mail</div>
        <input class="uk-input uk-form-width-large" type="text" placeholder="jeandupont@doggystyle.com">
    </div>
    <div class="uk-margin">
        <textarea class="uk-input uk-form-width-large" style="height:150px" name="com" id="com" cols="30" rows="10" placeholder="Votre commentaire ..."></textarea>
    </div>
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">envoyer votre message</button>
   </form>
</div>
@endsection
