{{--
  Template Name: Utblick
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-utblick')
  @endwhile
@endsection
