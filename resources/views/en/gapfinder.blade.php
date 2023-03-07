<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('asset/image/logo.png')}}">
    <title>Gapfinder | Relationship Overviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    @include('en.header')
    <section class="main-breadcrum">
    <div class="main-b ">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="breadcrum-text">
                  <div>
                    <h2 class="white">The Gapfinder</h2>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

    <section style="padding-top: 40px;">
        <div class="piml-breadcrum">
          <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">The Gapfinder</li>
              </ol>
            </nav>
          </div>
        </div>
    </section>


    <section style="padding-top: 50px; padding-bottom: 50px;" class="">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <div class="heading">
                    <p class="small-header">TOOLS</p>
                    <h2>The Gapfinder</h2>
                    <hr>
                  </div>

                  <p class="justi">

                    The Gapfinder is a visual aid to conversations about the areas of vulnerability in a person's situation that could lead to a breakdown of their health and wellbeing.
                    It was developed by Steven Balmbra to help people about to leave a stay in hospital to avoid remission.
                    When an area of vulnerability has been identified the discussion can turn to how to establish the support, resources, and contingency measures that will help them to cope.
                    The Gapfinder is also useful in other settings where someone needs to review their circumstances.

                    <br><br>

                    It is free to download and print out.

                    <strong> <a  href="./asset/image/gapfinder.pdf" download>DOWNLOAD</a></strong> .
                  </p>

                  <div ><img style="padding-left:20%; padding-right:20%" class="img-fluid image"  src="{{asset('asset/image/gapfinder.png')}}"  alt=""></div>
              </div>
          </div>

      </div>

  </section>


  @include('en.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
