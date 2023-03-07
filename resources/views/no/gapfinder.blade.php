<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('asset/image/logo.png')}}">
    <title>Gapfinderen | Relasjonsoverblikk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    @include('no.header')
    <section class="main-breadcrum">
    <div class="main-b ">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="breadcrum-text">
                  <div>
                    <h2 class="white">Gapfinderen</h2>
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
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Hjem</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gapfinderen</li>
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
                    <p class="small-header">VERKTØY</p>
                    <h2>Gapfinderen</h2>
                    <hr>
                  </div>

                  <p class="justi">

                    Gapfinderen er et visuelt hjelpemiddel til samtaler om de sårbare områdene i en persons liv som kan føre til en kollaps i deres helse og velvære.
                    Den ble utviklet av Steven Balmbra for å hjelpe pasienter som var i ferd til å avslutte et varig sykehusopphold til å unngå tilbakefall
                    Når et sårbar område er identifisert, kan samtalen dreie seg om hvordan etablere støtte, ressurser og beredskap som vil hjelpe dem til å klare seg.
                    Gapfinderen er også nyttig i andre sammenhenger da noen har behov for å revurdere deres livssituasjon.


                    <br><br>

                    Den er gratis å laste ned og skrive ut.

                    <strong> <a  href="./asset/image/gapfinder.pdf" download>LAST NED HER</a></strong> .
                </p>

                  <div ><img style="padding-left:20%; padding-right:20%" class="img-fluid image"  src="{{asset('asset/image/gapfinder.png')}}"  alt=""></div>
              </div>
          </div>

      </div>

  </section>


  @include('no.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
