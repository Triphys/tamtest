{{--
  Template Name: Platser
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-platser')
  @endwhile
@endsection
