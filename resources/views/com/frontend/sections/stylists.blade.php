<section class="section testimonial-section">
        <div class="container mb-4">
          <div class="row">
            <div class="col-lg-3 col-sm-1 divider-d-none">
              <hr>
            </div>

            <div class="col-lg-6 col-sm-10">
              <h1 class = "color-orange text-center">Meet a few of our local stylist</h3>
              <p class = "text-center">Loerm ipsum dolor sit amet, consecterut adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="col-lg-3 col-sm-1 divider-d-none">
              <hr>
            </div>
          </div>
          <div class="js-carousel-1 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            @foreach($stylists as $stylist)
            <div class="testimonial text-center slider-item">
                <div class="author-image mb-3">
                  <div class="img-container">
                    <img src="/storage/uploads/{{$stylist->filename}}" alt="{{$stylist->title}}" class="mx-auto">
                    <p class = "h4 mt-2 text-left text-black"> {{$stylist->title}}</p>
                  </div>
                </div>
            </div>
            @endforeach
          </div> 
          <div class=" text-center">
            <a href="#" data-fancybox="" class="btn btn-brown text-white mr-3 letter-spacing-1 text-center">
              View All
            </a> 
          </div>
        </div>
          <!-- END slider -->
      </section>