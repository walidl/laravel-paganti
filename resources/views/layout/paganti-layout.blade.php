<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagamenti</title>



        <!-- Styles -->

        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>
    <body>

        @yield('title')
        <div class="container">
          <div class="table">

            <div class="row title">
              <div class="id">
                ID
              </div>
              <div class="name">
                NAME
              </div>
              <div class="lastname">
                LASTNAME
              </div>

              @yield('otherColumns')


            </div>

            @yield('rows')

          </div>
        </div>
    </body>
</html>
