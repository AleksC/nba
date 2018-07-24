
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NBA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   
</head>

  <body>

    @include('partials.header')
    <div class="container">
      <br>
        <div class="row">

            <div class="col-sm-8 blog-main">
    
                @yield('content')
    
            </div><!-- /.blog-main -->
    
            <div class="col-sm-3 offset-sm-1 blog-sidebar">
              <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p><em>The best</em> 
                  site for your NBA needs.
                </p>          
              </div>
              
              </div>
            </div><!-- /.blog-sidebar -->
    
          </div><!-- /.row -->
    
    </div><!-- /.container -->
    
    
  </body>
</html>
