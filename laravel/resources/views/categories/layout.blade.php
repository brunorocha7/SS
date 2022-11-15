<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="{{ url('/') }}" class="btn btn-warning btn-sm" title="Home">Home</a>

        @yield('content')
    </div>
   
</body>
</html>