@extends('front-end.layouts.main')

@section('content')
      <header>
        <div class="banner5 mt-3 mb-3" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="row text ms-auto">
                            <h1 class="plans-heading col-lg-12 col-sm-12">Contact-Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

      <div class="container mt-3 mb-4">
        <div class=" text-center">
        <p>Feel free to reach out to us using the information below.</p>
      </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-3" >
                <h5>Contact Information</h5>
                    <p><i class="fa fa-map-marker mt-2"></i>
                      <a style="text-decoration: none; color: black;" href="https://www.google.com/maps/place/The+Nutritious+valley+-+Dietitian+Vrunda+Patel/@23.0500318,72.549713,15z/data=!4m6!3m5!1s0x395e85e1803be3a5:0xe29d54e8ad5a7c68!8m2!3d23.0500318!4d72.549713!16s%2Fg%2F11t_zhj542?entry=ttu" target="_blank"> A/18 Aryan Flat Near Sant Kabir School Naranpura, Ahmedabad-380013 </a></p>
                    <p><i class="fa fa-envelope mt-2"></i> <a style="text-decoration: none; color: black;" href="mailto:thenutritiousvalley@gmail.com">thenutritiousvalley@gmail.com </a></p>
                    <p><i class="fa fa-phone mt-2"></i><a style="text-decoration: none; color: black;" href="tel:098255 24050"> 098255 24050</a></p>
                    <div class="img-fluid text-center " >
                      <img class="servimg" src="{{asset("front-end/img/5129682-removebg-preview.png")}}" alt="contactus" class="img-fluid mt-3">
                        </div>
                  </div>
            <div class="col-md-6 mb-3">
                <h4>Quick Contact Form</h4>
                <form action="{{ route('contact.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="phone" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Your Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>

            </div>
        </div>
    </div>
@endsection

      