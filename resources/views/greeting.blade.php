<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <body>
        <h1>Hello, {{ $name }}</h1>
        <?php echo $name; ?>
        <h1> The current UNIX timestamp is {{ time() }}.</h1>
    </body>
</html>

<!-- Displaying unescaped data -->
Hello, {!! $name !!}.

<!-- Blade and JavaScript Frameworks -->
<h1> Laravel </h1>
Hello, @{{ name }}. <br><br>

<!-- Rendering JSON -->
<script>
    var app = <?php echo json_encode($array); ?>;
    console.log(app);
    //document.write(<br>);
    document.write(app);
</script>

<!-- Blade Directives if statements -->

@if (count($array) === 1)
  <br>I have on record!
@elseif (count($array) > 1)
   <br><br>
      I have multiple records!
@else
       I don't have any records!
@endif

@unless (!Auth::check())
    You are not signed in.
@endunless

    @auth
        // The user is authenticated...
    @endauth

    @guest
        // The user is not authenticated...
    @endguest



    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->name }}</p>
    @else

    @comment This section is only visible to guests
    @endcomment
    <p>Please login to view this content.</p>

    @endif

@production
    Is in production mode
@endproduction


@env('local')
    // The application is running in "local"...
@endenv

@env(['staging', 'production'])
    // The application is running in "staging" or "production"...
@endenv

@session('status')
    <div class="p-4 bg-green-100">
        {{ $value }}
    </div>
@endsession

@foreach ($array as $array)
    <p>This is array {{ $array[1] }}</p>
@endforeach

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor

<x-button />
