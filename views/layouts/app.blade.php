<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="wrap" role="document">
      @php do_action('get_header') @endphp
      @include('partials.header')
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
      @php do_action('get_footer') @endphp
        @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
</html>
