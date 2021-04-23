<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Testing</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>CRUD testing</h1>
  <div class="container">
    @yield('main')
    <button type="button" onclick="window.location='{{ url("category") }}' ">Add Category</button>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>