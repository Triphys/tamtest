@extends('layouts.app')

@section('content')
  @if (!have_posts())
		<section id="error-container">
			<h1>Sidan kan tyvärr inte hittas</h1>
		</section>
  @endif
@endsection
