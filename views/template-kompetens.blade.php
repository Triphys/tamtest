{{--
  Template Name: Kompetens
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-kompetens')
  @endwhile
@endsection
