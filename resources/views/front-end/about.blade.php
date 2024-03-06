@extends('front-end.layouts.main')

@section('content')
    <header>
      <div class="banner3 mt-3 mb-3" >
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                      <div class="row text ms-auto">
                          <h1 class="plans-heading col-lg-12 col-sm-12">About-Us</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>


    
          <section class="bio-section">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row text mx-4 my-5 ms-auto justify-content-center">
                    <h1 class=" bio fade-in-up mt-2 text-center">My Educational Milestones</h1>
                    <p class="bio mt-4 ms-3 text-center">

                      Hello, I'm Vrunda Patel, and my academic journey has been a dedicated exploration of the sciences. From the foundational knowledge gained at M.G Science Institute in Biochemistry to the specialized expertise acquired at Gujarat University in Food Science & Nutrition, I have forged a fulfilling path in the realm of health and nutrition.
                      
                      With a solid educational foundation, I hold a Bachelor's degree in Biochemistry and a Master's degree in Food Science & Nutrition. These qualifications have equipped me with a diverse skill set, empowering me to innovate and create solutions that bridge the crucial gap between health and nutrition.
                      
                      Each step of my education has fueled my passion for crafting healthier, more nourishing options for individuals and communities alike. My academic background has instilled in me a dedication to contributing to the field of health and nutrition with creativity and expertise.</p>
                  </div>
                </div>
              </div>
            </div>
            </section>
            <section class="bio-section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row text mx-4 my-5 ms-auto">
                      <h1 class="bio fade-in-up ms-4" style="font-size: 30px;">My Work Experience</h1>
                      <p class=" bio fade-in-up ms-4">I'm excited to share my professional journey with you. Starting at Basi Nutri Center, I developed skills and a love for the industry. I then had a rewarding internship at Florushid Company, enhancing my knowledge. The adventure continued at Fitlo Company, where I tackled new challenges and worked with an amazing team. These experiences shaped my expertise, reflecting my commitment to excellence and continuous learning. Explore my journey on this site, where I highlight transformative experiences that fuel my dedication to success.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 text-center position-relative">
                    <h4 class="textover">3  years<br> Experience</h4>
                    <div class="row image my-5 ms-auto">
                      <img class="col-md-12" src="{{asset("front-end/img/blond-woman-kitchen.jpg")}}" alt="#" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              </section>

             

              <section class="count mt-2 mb-5">
                <div class="container">
                  <h1 class="plans-heading">My Success</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3  mb-4 d-flex justify-content-center ">
                            <div class="count card text-center mt-3 ">
                                <div class="count card-body ">
                                    <h3 class="card-title">Clients</h3>
                                    <h4 class="card-text" data-target="500">500</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3 mb-4 d-flex justify-content-center">
                            <div class=" count card text-center mt-3 ">
                                <div class="count card-body ">
                                    <h3 class="card-title">Projects</h3>
                                    <h4 class="card-text" data-target="200">200</h4>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-3 col-md-3 mb-4  d-flex justify-content-center ">
                            <div class="count card text-center mt-3">
                                <div class="count card-body ">
                                    <h3 class="card-text">Team Members  </h3>
                                    <h4 class="card-text" data-target="30">30</h4>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-3 col-md-3 mb-4 d-flex justify-content-center ">
                            <div class="count card text-center mt-3 ">
                                <div class="count card-body">
                                    <h3 class="card-text">Years in Field</h3>
                                    <h4 class="card-text" data-target="3">3</h4>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
      

