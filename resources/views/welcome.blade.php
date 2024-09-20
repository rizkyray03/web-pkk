@extends('layouts.main')
@section('hero')
    @include('frontend.hero-section')
    <div class="p-10">
        @include('frontend.pokja-section')
        @include('frontend.video-section')
        @include('frontend.profile-section')
        @include('frontend.berita-section')
    </div>
@endsection
