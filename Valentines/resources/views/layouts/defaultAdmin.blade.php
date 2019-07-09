<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body id="page-top">
  <header>
      @include('includes.headerAdmin')
  </header>
  <div id="main">
    <div class="container-fluid">
      <div class="row">
        @yield('content')
      </div>
    </div>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script>
     window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')
 </script>
 <!-- @javascript popper -->
 <!-- @javascript bootstrap -->

 <!-- Icons -->
 <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
 <script>
     feather.replace()
 </script>

 <script>
     window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
     ga('create', '<!-- @googleAnalyticsSiteID | UA-XXXXX-X -->', 'auto'); ga('send', 'pageview')
 </script>
 <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>
</html>
