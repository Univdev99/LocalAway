      <section class="section testimonial-section">
        <div class="container mb-4">
          <div class="row">
            <div class="col-lg-4 divider-d-none">
              <hr>
            </div>
            <div class="col-lg-4 col-sm-12">
              <h3 class = "color-orange text-center mb-4">Other Fashion Itineraries</h3>
            </div>
            <div class="col-lg-4 divider-d-none">
              <hr>
            </div>
          </div>
        </div>
        <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            @foreach($itineraries as $itinerary)
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <div class="img-container">
                  <img src="/storage/uploads/{{$itinerary->filename}}" alt="{{$itinerary->title}}" class="mx-auto">
                  <p>{{$itinerary->title}}</p>
                </div>
              </div>
            </div>
            @endforeach          
          <!-- END slider -->
        </div>
      </section>