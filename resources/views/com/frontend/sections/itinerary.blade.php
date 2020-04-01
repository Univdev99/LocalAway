      <section class="section testimonial-section">
        <div class="container mb-4">
          <div class="row">
            <div class="col-lg-2 divider-d-none">
              <hr>
            </div>
            <div class="col-lg-8 col-sm-12">
              <h1 class = "text-center section-title mb-4">Support local boutiques now!</h1>
            </div>
            <div class="col-lg-2 divider-d-none">
              <hr>
            </div>
          </div>
          <div class="text-center">
            <a href="#" style="color: #fd5c48;" class="font-weight-bold">View all boutiques</a>
          </div>
        </div>
        <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            @foreach($itineraries as $itinerary)
            <div>
              <img src="/storage/uploads/{{$itinerary->filename}}">
              <div class="carousel-description">
                <h3 class="text-white" style="font-size:23px;">DISCOVER</h3>
                <hr class="carousel-line"></br>
                <h2 class="text-white">{{$itinerary->title}}</h2>
                <p style="font-size: 12px;" class="text-white">{{$itinerary->description}}</p>
              </div>
            </div>
            @endforeach          
          <!-- END slider -->
        </div>
      </section>