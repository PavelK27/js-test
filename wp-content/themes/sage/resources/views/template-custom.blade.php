{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.landing-header')
    @include('partials.pricing')
    @include('partials.tools')
    @include('partials.features')
  @include('partials.content-page')
  @endwhile
@endsection
