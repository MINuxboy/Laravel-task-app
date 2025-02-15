<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js','resources/scss/app.scss'])
        @else
          
        @endif
    </head>
    <body>
        <button class="btn btn-info" id="find" onclick="find()">Test</bu tton>
      
    </body>
    <script>
        function find(){
            Swal.fire({
            position: "center",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
            });
        }
    
    </script>
</html>
