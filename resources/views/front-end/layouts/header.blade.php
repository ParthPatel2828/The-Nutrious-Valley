<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("front-end/css/index.css")}}">
    <link rel="stylesheet" href="{{asset("front-end/css/slick-theme.css")}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="icon" type="image/x-icon" href="{{ asset("front-end/img/Nutritious velley.png") }}">

    <title>The Nutritious Valley</title>
  </head>
  <body>
    <a id="back-to-top" href="#" title="Back to Top"><i class="fa fa-angle-up"></i></a>
    <a id="whatsapp"  href="https://wa.me/9825524050">
      <i class="fa fa-whatsapp mb-5 text-center"></i>
      
  </a>
  
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <i class="logo m-2">
            <img src="{{asset("front-end/img/Nutritious_velley-removebg-preview.png")}}" height="85px">
          </i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link me-4 mt-2" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 mt-2" href="{{url('/about')}}">About-Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 mt-2" href="{{url('/service')}}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 mt-2" href="{{url('/contact')}}">Contact-Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
