{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Blog Laravel | {{ $title }}</title>
  </head>
  <body>


        @include('partials.navbar')
    

      <div class="container mt-4">
          @yield('container')
      </div>
      <footer>
        <div class="text-center p-4 mt-5" style="background-color: rgba(0, 0, 0, 0.2);">
          © 1969 Copyright: PTsahat.
        </div>  
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/357009db18.js" crossorigin="anonymous"></script>
  </body>
</html> --}}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sekul | Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Swiper slider-->
    <link rel="stylesheet" href={{ asset("/blog/vendor/swiper/swiper-bundle.min.css") }}>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href={{ asset("/blog/vendor/owl.carousel2/assets/owl.carousel.min.css") }}>
    <link rel="stylesheet" href={{ asset("/blog/vendor/owl.carousel2/assets/owl.theme.default.min.css") }}>
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href={{ asset("/blog/css/style.default.css") }} id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{ asset("/blog/css/custom.css") }}>
    <!-- Favicon-->
    <link rel="shortcut icon" href={{ asset("/blog/img/favicon.png") }}>
  </head>
  <body>
    <!-- Header-->
    @include('partials.header')
    <!-- Container-->
    <div class="py-4">
      @yield('container')
    </div>
    <!-- Footer-->
    @include('partials.footer')
    <!-- JavaScript files-->
    <script src={{ asset("/blog/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("/blog/vendor/swiper/swiper-bundle.min.js") }}></script>
    <script src={{ asset("/blog/js/front.js") }}></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>