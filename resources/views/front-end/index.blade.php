  @extends('front-end.layouts.main')

  @section('content')
    <section>
      <div class="banner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 ">
              <div class="row image mx-4 my-5 ms-auto justify-content-center">
                <img src="{{asset("front-end/img/9762674-removebg-preview.png")}}" alt="#"  class="img-fluid mt-3 slider-image ">
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row text  mx-4 my-5 ms-auto">
                <h4 class="mt-4">Welcome To The Nutritious valley</h4>
                <p class=" mt-3 ">Welcome to The Nutritious valley , where <span>DT VRUNDA PATEL</span> embark on a journey dedicated to your well-being. Our mission is to guide you towards a healthier and happier life through the power of nutrition. With a health of knowledge accumulated over four years, we are committed to providing you with expert personalized and the latest advice.</p>
                <div class="col-lg-12  col-sm-12">
                  <a class="btn c3 ms-1 mx-4 my-4" type="submit" href="https://docs.google.com/forms/d/e/1FAIpQLSerynwPqCTjJBmo4QgQzxLOsNZ7x6HkCuj-r-eP8gmPRXdNrQ/viewform">BOOK AN APPOINTMENT</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="ban">
        <div class="container mt-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row text ms-auto">
                <h1 class="fade-in-up mt-4">Welcome To Health Care Nutrition</h1>
                <p>Welcome to Health Care Nutrition, where we embark on a journey dedicated to your well-being. Our mission is to guide you towards a healthier and happier life through the power of nutrition. With a wealth of knowledge accumulated over four years, we are committed to providing you with expert insights, personalized advice, and the latest in health care nutrition trends. Join us in prioritizing your health and unlocking the secrets to a balanced and fulfilling lifestyle. Let's embrace the path to wellness together!</p>
                <a class="buy col-lg-8 col-md-12 btn c3 ms-1 my-4" type="submit" href="{{route('about.index')}}">About-Us</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-center position-relative">
              <h4 class="textover mt-4">3  years<br> Experience</h4>
              <div class="row image my-5 ms-auto">
                <img class="col-md-12" src="{{asset("front-end/img/blond-woman-kitchen.jpg")}}" alt="#" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="plans">
        <div class="container mt-5 mb-5">
          <div class="plans-heading">
            <h1>Package Charges</h1>
          </div>
          <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 ">
            <div class="col col-md-6 col-sm-6 d-flex justify-content-center">
              <div class=" pcg card mt-2">
                <h5 class="card-title text-center mt-2">1 Month Plan</h5>
                <h2 class="card-title text-center">Rs:1,500</h2>
                <hr>
                <div class="card-body" >
                  <p class="card-text">Get started with our 1-month plan.</p>
                  <ul>
                    <li>4 Sessions</li>
                    <li>Meal Plans in Mobile</li>
                    <li>E-Mail Support</li>
                    <li>Phone Support</li>
                  </ul>
                  <a class="active buy btn mx-4" type="submit" href="{{ route('nopayment.index') }}">Buy Now</a>

                </div>
              </div>
            </div>
            <div class="col col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="pcg card mt-2">
                <h5 class="card-title text-center mt-2">3 Months Plan</h5>
                <h2 class="card-title text-center">Rs:4,100</h2>
                <hr>
                <div class="card-body">
                  <p class="card-text"> Get started with our 3-months plan.</p>
                  <ul>
                    <li>12 Sessions</li>
                    <li>Meal Plans in Mobile</li>
                    <li>E-Mail Support</li>
                    <li>Phone Support</li>
                  </ul>
                  <a class="active buy btn mx-4" type="submit" href="{{ route('nopayment.index') }}">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="pcg card mt-2">
                <h5 class="card-title text-center mt-2">6 Months Plan</h5>
                <h2 class="card-title text-center">Rs:8,000</h2>
                <hr>
                <div class="card-body">
                  <p class="card-text"> Get started with our 6-months plan.</p>
                  <ul>
                    <li>24 Sessions</li>
                    <li>Meal Plans in Mobile</li>
                    <li>E-Mail Support</li>
                    <li>Phone Support</li>
                  </ul>
                  <a class="active buy btn mx-4" type="submit" href="{{ route('nopayment.index') }}">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="pcg card mt-2">
                <h5 class="card-title text-center mt-2">12 Months Plan</h5>
                <h2 class="card-title text-center">Rs:15,000</h2>
                <hr>
                <div class="card-body">
                  <p class="card-text"> Get started with our 12-months plan.</p>
                  <ul>
                    <li>48 Sessions</li>
                    <li>Meal Plans in Mobile</li>
                    <li>E-Mail Support</li>
                    <li>Phone Support</li>
                  </ul>
               <a class="active buy btn mx-4" type="submit" href="{{ route('nopayment.index') }}">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="bmi container mb-3 ">
        <div class="plans-heading mt-2 ">
          <h1>Calculate BMI</h1>
        </div>
        <div class="row">
          
           <div class="col-lg-6  col-md-6 col-sm-12">
             <div class="row text mx-4 my-5 ms-auto">
               <h1 class="mt-2 "> Body Mass Index (BMI)</h1>
                <p class="bmip ">BMI is a measure of a person's leanness or corpulence based on their height and weight, quantifying tissue mass. Widely used as a general indicator of healthy body weight, it categorizes individuals as underweight, normal weight, overweight, or obese based on calculated values.</p>
                <div class="text-center">
                <img class="bmig img-fluid w-60 " src="{{asset("front-end/img/Wavy_Bus-09_Single-06.jpg")}}">
              </div>
              </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-12">
   

    <form class="col-lg-6 mt-2" id="bmiForm" method="POST" action="{{ route('calculate.bmi') }}" onsubmit="return calculateBMI();" >
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required>
        @error('weight')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="height" required>
        @error('height')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="hidden" id="bmiResultInput" name="bmi" />

        <button class="mt-3 mb-3" type="submit" >Calculate BMI</button>

        <div id="bmiResultSection" class="mt-3 hidden">
        <p id="bmiResult"></p>
    </div>
        @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @if(isset($bmi))
        <p>BMI Value: {{ $bmi['value'] }}</p>
        <p>BMI Category: {{ $bmi['category'] }}</p>
    @endif
@endif
    </form>
</div>


          </div>
         </div>
       </div>
    </section>
    <script>
   var calculateBmiUrl = "{{ route('calculate.bmi') }}";
</script>
<script src="{{ asset('front-end/js/index.js')}}" defer></script>


    @endsection
   
