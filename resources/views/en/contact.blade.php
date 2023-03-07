<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('asset/image/logo.png')}}">
    <title>Contact | Relationship Overviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/pricing.css')}}">
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
                    <h2 class="white">Contact Steven Balmbra</h2>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

    <section class="breadcrum">
        <div class="piml-breadcrum">
          <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Steven Balmbra</li>
              </ol>
            </nav>
          </div>
        </div>
    </section>

    <section class="pricing py-5">
      <div class="container">
        <div class="row">
          <p style="text-align: center;">Join the  <strong>Relationship Overviews</strong>  contact list and you will be kept up to date with news and developments.
            Relationship Overviews is not sponsored through advertising, and we will not share your information.
            <!-- <br><br>
            <strong>
              Email:  smbalmbra@gmail.com
            </strong>
            <br>
            <strong>
              Phone no: +47 90 23 38 85
            </strong> -->
          </p>

        </div>
      </div>
    </section>

    <section class="form-icon " style="padding-top:30px ;">
        <section class="contact-info-area">

            <div class="container">
            <div class="row">
            <div class="col-12">

            <div class="section-heading text-center">


           </div>
            </div>
            </div>
            <div class="row">

            <div class="col-12 col-md-4 ">
            <div class=" text-center mb-100 boxe"  >
            <div class="contact-icon">
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
            </div>
            <h5>Address</h5>
            <h6>Bodinveien 56, 8010 Bodø, Norway</h6>
            </div>
            </div>

            <div class="col-12 col-md-4 ">
            <div class=" text-center mb-100 wow fadeInUp boxe">
            <div class="contact-icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <h5>Phone</h5>
                  <h6>(+47) 969 232 10 </h6>
            </div>
            </div>

            <div class="col-12 col-md-4 ">
            <div class="text-center mb-100  boxe" >
            <div class="contact-icon">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <h5>Email</h5>
            <h6>smbalmbra@gmail.com</h6>
            </div>
            </div>
            </div>
            <div class="c-border"></div>

            <hr>
        </div>
            </section>
    </section>



    <a style="visibility: hidden;" id="hiddenro" href="#order" ></a>
    <section id="order" class="contact-form padding-tb">
        <section class="contact-area section-padding-100-0">
            <div class="container">
            @if(Session::has('success'))
                <script>
                    // document.getElementById('contact').disabled = false;
                    document.getElementById('hiddenro').click();
                </script>
                <section id="alert"  style="padding-bottom: 1rem;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> &#10004;</strong> {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                </section>
            @endif

                <div class="row justify-content-center">
                     <div class="col-12 col-lg-5">
                        <div class="contact-content mb-100">

                            <div class="section-heading">
                                 <p class="small-header">Contact now</p>
                                <h2><span>Get In Touch</span> With Us</h2>
                              </div>

                             <div class="contact-form-area">
                                  <form class="contact_form" action="{{route('en.contact.email')}}" method="POST">
                                    @csrf
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                      </div>
                                      <div class="col-lg-12">
                                         <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                      </div>


                                     <div class="col-12">
                                     <textarea style="height: 70px;" name="message" class="form-control" cols="30" rows="10" placeholder="Your Message" required></textarea>
                                     </div>

                                     <div class="col-12">
                                      <button id="contact"  class="btn button">Send Message</button>
                                    </div>
                                 </div>
                                 </form>
                             </div>

                             <!-- <script>
                                let contactButton =   document.getElementById('contact')
                                setTimeout(() => {
                                    contactButton.addEventListener('click', (e)=>{
                                    e.preventDefault();
                                        contactButton.disabled = true;
                                })
                                }, 2000);

                             </script> -->

                        </div>
                     </div>


                 </div>
             </div>

            </section>

    </section>

  @include('en.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
