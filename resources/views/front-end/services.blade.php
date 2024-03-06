@extends('front-end.layouts.main')

@section('content')
  
      
   
  <header>
    <div class="banner4 mt-3 mb-3" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="row text ms-auto">
                        <h1 class="plans-heading col-lg-12 col-sm-12">Our-Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


       
      <section>
        <!-- Weight Management Section -->
        <div class="banner4 " >
          <div class="container">
            <div class="row">
                <div class=" mt-3 col-lg-6 col-md-12 col-sm-12"  id="weight-management"   >
                    <div class=" wm  row card text mx-4 my-4"  >
                      <h1 class="plans-heading  card-title ">Weight Management</h1>
                      <p class="wm mt-3 ">Unlock your best self with our effortless weight management solutions. We believe in simple, sustainable changes that seamlessly integrate into your daily life. No complicated diets or strenuous workouts—just practical steps towards a healthier you. Start your journey today because achieving your weight goals should be as easy as living them.</p>
                      <div class="col-lg-12 col-sm-12 ">
                        <a class="wm btn c3 ms-1 my-4 ms-auto" href="https://docs.google.com/forms/d/e/1FAIpQLSerynwPqCTjJBmo4QgQzxLOsNZ7x6HkCuj-r-eP8gmPRXdNrQ/viewform">BOOK NOW</a>
                      </div>
                    </div>
                  </div>
              <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <div class="row image ">
                    <div class="img-fluid text-center " >
                  <img class="servimg" src="{{asset("front-end/img/8440459-removebg-preview.png")}}" alt="Weight Management" class="img-fluid mt-3">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section >
        <!-- Diabetes Section -->
        <div class="banner4" >
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-6 col-md-12 col-sm-12 order-md-2 order-2 text-center">
                        <div class="row image ">
                            <img src="{{asset("front-end/img/Tiny_doctors_with_glucometer_flat_vector_illustration-removebg-preview.png")}}" alt="Diabetes" class="img-fluid mt-3">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1" >
                        <div class="  wm row card text mx-4 my-5"  >
                            <h1 class="plans-heading card-title">Diabetes</h1>
                            <p class="wm mt-3">Control sugar via medicinal properties of food. Our personalized approach focuses on maintaining a balanced diet to support your journey in managing diabetes. Explore a customized plan designed to empower you towards a healthier and more vibrant life.</p>
                            <div class="col-lg-12 col-sm-12 ">
                                <a class="wm btn c3 ms-1 my-4 ms-auto" href="https://docs.google.com/forms/d/e/1FAIpQLSerynwPqCTjJBmo4QgQzxLOsNZ7x6HkCuj-r-eP8gmPRXdNrQ/viewform">BOOK NOW</a>
                              </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>
    
      <section>
        <!-- PCOD/PCOS Section -->
        <div class="banner4">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12  order-md-2 order-2 text-center">
                <div class="row image ">
                  <img src="{{asset("front-end/img/pcod_pcos_image.png")}}" alt="PCOD/PCOS" class="img-fluid mt-3">
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12"  id="pcod-pcos">
                <div class="wm row card text mx-4 my-5"   >
                  <h1 class="plans-heading  card-title">PCOD/PCOS</h1>
                  <p class=" wm mt-3 ">Our specialized program helps to treat symptoms and maintain weight. With a focus on holistic well-being, we guide you towards a balanced lifestyle. Start your journey towards managing PCOD/PCOS with our expert guidance and personalized support.</p>
                  <div class="col-lg-12 col-sm-12 ">
                    <a class="wm btn c3 ms-1 my-4 ms-auto" href="https://docs.google.com/forms/d/e/1FAIpQLSerynwPqCTjJBmo4QgQzxLOsNZ7x6HkCuj-r-eP8gmPRXdNrQ/viewform">BOOK NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  @endsection

     