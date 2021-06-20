@extends('base.template')


@section('title' , 'Home')

@section('content')
<div class="uk-container">
        <h1 class="uk-text-center">Albums</h1>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true">

            <ul class="uk-slideshow-items">
                <li>
                    <img src="https://getuikit.com/docs/images/photo.jpg" alt="" uk-cover>
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                        <h3 class="uk-margin-remove">Overlay Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </li>
                <li>
                    <img src="https://getuikit.com/docs/images/dark.jpg" alt="" uk-cover>
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                        <h3 class="uk-margin-remove">Overlay Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </li>
                <li>
                    <img src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover>
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                        <h3 class="uk-margin-remove">Overlay Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
    </div>
@endsection

<footer id="page-footer" class="uk-position-bottom" style="background-color: #f5f5f5;" uk-sticky>
    <div class="uk-container uk-padding-small">
        <p class="uk-text-small">&#169; Copyright</p>
        <p>Aodrën LACOT &#38; Jonathan TURPIN</p>
    </div>
</footer>
