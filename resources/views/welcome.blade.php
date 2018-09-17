
@extends('layouts.main')
@section('content')
<div id="app">
    <section class="hero  is-info is-large is-bold  ">
        @include('sections.navbar')
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title home animated flipInX">
                    Çynergie
                </h1>
                <h2 class="subtitle home animated flipInX">
                    Consommation énergétique en temps réel
                </h2>
            </div>

        </div>
    </section>
    {{--@include('auth.login')e

    @include('auth.register')--}}

    @include('sections.resume')

    @include('sections.projet')

    @include('sections.technologies')

    @include('sections.prometheus')

    @include('sections.grafana')

    @include('sections.partenaires')

    @include('sections.contact')

    @include('sections.footer')

</div>
@endsection
