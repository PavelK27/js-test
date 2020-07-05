{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')
<div class="orange-bar"></div>
@include('partials.landing-header')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.pricing')
    @include('partials.tools')
    @include('partials.features')
  @include('partials.content-page')
  @endwhile
@endsection