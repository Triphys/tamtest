{{--
  Template Name: Ledning och Styrelse
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-ledning')
  @endwhile
@endsection
