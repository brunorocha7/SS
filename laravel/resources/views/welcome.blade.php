<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body> 
        <div class="container px-4 text-center">
            
        <h1 >CRUD Laravel 9</h1>

            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="{{ url('/category') }}" class="btn btn-info btn-lg" title="Categories">
                        Categorias
                        </a>
                    </div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light">
                    <a href="{{ url('/product') }}" class="btn btn-info btn-lg" title="Products">
                        Produtos
                    </a>
                </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
