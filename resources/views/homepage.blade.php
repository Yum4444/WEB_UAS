<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Glowies</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('spering-html/spering-html/css/bootstrap.css') }}" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('spering-html/spering-html/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('spering-html/spering-html/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
            <span>
              Glowies
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="work.html">Work </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.html"> Category </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="">
                <span>
                  Login
                </span>
              </a>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
          <div>
            {{-- <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div> --}}
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      {{-- <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div> --}}
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol> --}}
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      You Can <br>
                      Make Your Own Beauty <br>
                      Here
                    </h1>
                    <p>
                      Facial health involves skincare practices like cleansing, moisturizing, and sun protection to maintain clean, hydrated, and protected skin. 
                      A healthy lifestyle and skincare routine can achieve radiant facial skin, boosting confidence.
                    </p> 
                    <div class="btn-box">
                      <a href="/login" class="btn-1">
                        Login
                      </a>
                      <a href="/register" class="btn-2">
                        Register
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="{{ asset('spering-html/spering-html/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      You Can <br>
                      Hire Freelancer <br>
                      Here
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by
                      the readable content of a page
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      You Can <br>
                      Hire Freelancer <br>
                      Here
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by
                      the readable content of a page
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- experience section -->

  <section class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/experience-img.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Start caring about your health here
              </h2>
            </div>
            <p>
              Start caring about your health here" is a rallying call to prioritize one's well-being, encompassing physical, mental, and emotional dimensions. It's an invitation to embark on a journey of self-care and holistic wellness.
            </p>
            <div class="btn-box">
              <a href="" class="btn-1">
                Read More
              </a>
              <a href="" class="btn-2">
                Hire
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end experience section -->

  <!-- category section -->

  <section class="category_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Category
        </h2>
      </div>
      <div class="category_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/c1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Cleansing
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/c2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Hydration
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/c3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Acne Care
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/c4.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Sun Protection
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/c5.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Anti-Aging
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/c6.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Specialized Care
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end category section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="{{ asset('spering-html/spering-html/images/about-img.jpg')}}" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
        <h2>
          About Glowies Company
        </h2>
        <p>
          The company aims to assist its customers in achieving healthy, glowing, and well-cared-for skin through high-quality products and expert consultations.
        </p>
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- freelance section -->

  <section class="freelance_section ">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Taking care of facial skin offers numerous advantages
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="img-box">
                    <img src="{{ asset('spering-html/spering-html/images/f1.png')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      $250 Million
                    </h5>
                    <h3>
                      Healthy Skin
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="img-box">
                    <img src="{{ asset('spering-html/spering-html/images/f2.png')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      2 Million
                    </h5>
                    <h3>
                      Radiant Skin
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="img-box">
                    <img src="{{ asset('spering-html/spering-html/images/f3.png')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      700,000
                    </h5>
                    <h3>
                      Smoother Skin Texture
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <div class="img-box">
                    <img src="{{ asset('spering-html/spering-html/images/f4.png')}}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      98%
                    </h5>
                    <h3>
                      Skin <br>
                      Refreshment
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('spering-html/spering-html/images/freelance-img.jpg')}}" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('spering-html/spering-html/images/freelance-img.jpg')}}" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('spering-html/spering-html/images/freelance-img.jpg')}}" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('spering-html/spering-html/images/freelance-img.jpg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end freelance section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Testimonial
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                    Brigitte Vallery
                  </h4>
                  <p>
                    Visiting the facial health clinic was a game-changer for me. From the moment I stepped in, I felt welcomed and cared for. The staff were incredibly knowledgeable and took the time to understand my skin concerns before recommending personalized treatments. After just a few sessions, I noticed a significant improvement in my skin's texture and appearance. 
                  </p>
                  <img src="{{ asset('spering-html/spering-html/images/quote.png')}}" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Allana Maheswaraa
                  </h4>
                  <p>
                    Visiting the facial health clinic was a game-changer for me. From the moment I stepped in, I felt welcomed and cared for. The staff were incredibly knowledgeable and took the time to understand my skin concerns before recommending personalized treatments. After just a few sessions, I noticed a significant improvement in my skin's texture and appearance. 
                  </p>
                  <img src="{{ asset('spering-html/spering-html/images/quote.png')}}" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    Visiting the facial health clinic was a game-changer for me. From the moment I stepped in, I felt welcomed and cared for. The staff were incredibly knowledgeable and took the time to understand my skin concerns before recommending personalized treatments. After just a few sessions, I noticed a significant improvement in my skin's texture and appearance. 
                  </p>
                  <img src="{{ asset('spering-html/spering-html/images/quote.png')}}" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->



  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="{{ asset('spering-html/spering-html/images/logo.png')}}" alt="" />
            <span>
              Glowies
            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="{{ asset('spering-html/spering-html/images/fb.png')}}" alt="">
            </a>
            <a href="#">
              <img src="{{ asset('spering-html/spering-html/images/twitter.png')}}" alt="">
            </a>
            <a href="https://www.linkedin.com/in/fahmi-ihfa-7450292b2/">
              <img src="{{ asset('spering-html/spering-html/images/linkedin.png')}}" alt="">
            </a>
            <a href="https://www.instagram.com/zfkryh_/">
              <img src="{{ asset('spering-html/spering-html/images/instagram.png')}}" alt="">
            </a>
            <a href="https://www.youtube.com/@yumnaasaajidah2630">
              <img src="{{ asset('spering-html/spering-html/images/youtube.png')}}" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.html">About </a>
                  </li>
                  <li class="">
                    <a class="" href="work.html">Work </a>
                  </li>
                  <li class="">
                    <a class="" href="category.html">Category </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Offices
              </h5>
              <p>
                Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
              </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Information
              </h5>
              <p>
                Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
              </p>
            </div>

            <div class="col-md-3  offset-lg-1">
              <div class="info_form ">
                <h5>
                  Newsletter
                </h5>
                <form action="">
                  <input type="email" placeholder="Email">
                  <button>
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="{{ asset('spering-html/spering-html/images/location.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Location
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="{{ asset('spering-html/spering-html/images/mail.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        glowies@gmail.com
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="{{ asset('spering-html/spering-html/images/call.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +62 85848158960
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
        <a href="https://html.design/">Glowies Team</a>
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="{{asset('spering-html/spering-html/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{asset('spering-html/spering-html/js/bootstrap.js') }}"></script>
  <script src="{{asset('spering-html/spering-html/js/custom.js') }}"></script>
  



</body>
</body>

</html>