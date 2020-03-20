@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container">
    <form id="sizing" method="POST" action="{{route('customer.signup.style.save')}}" enctype="multipart/form-data">
        <div class="step-show m-4">
            <img src="/images/customer-signup/progress-style.svg" class="w-100"/>
        </div>

        <div class="row item item-show">
            <div class="m-auto text-center">
                    <p class="mt-3">Describe your personal style?</p>
                <div class="row">
                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-edgy.svg" />
                        </div>
                        <button class="select-btn">Edgy</button>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-casual.svg" />
                        </div>
                        <button class="select-btn">Casual</button>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-classic.svg" />
                        </div>
                        <button class="select-btn">Classic</button>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-retro.svg" />
                        </div>
                        <button class="select-btn">Retro</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row item">
            <div class="m-auto">
                <div class="my-form-row">

                    <p>Which colors would you NEVER wear? Select all that apply.</p>
                </div>

                <div class="dislike-color-palette">
                    <div class="dislike-color">
                    <div style="background-color:#673AB7">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#00BCD4">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#CDDC39">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFFFFF;border:1px solid lightgrey;">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#000000">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#9C27B0">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#03A9F4">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#8BC34A">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FF9800">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#795548">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#E91E63">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#5677FC">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#259B24">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFC107">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#9E9E9E">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#E51C23">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#3F51B5">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#009688">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFEB3B">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#607D8B">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Casual Shirts?</p>

                    <div class="row justify-content-center">
                        <button class="select-btn">Faux Leather</button>
                        <button class="select-btn">Polyester</button>
                        <button class="select-btn">Faux Fur</button>
                        <button class="select-btn">Gold</button>
                        <button class="select-btn">Nickel</button>
                        <button class="select-btn">Silver</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col m-auto">
                <div class="my-form-row text-center">
                    <p>Which patterns would you never wear? Select all that apply.</p>

                    <div class="row">
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/geometric.png" value="geometric">
                            </div>
                            <button class="select-btn">Geometric</button>
                        </div>
                        <div class="col">
                        <div class="m-0 p-0">
                            <img class="img-content" src="/images/customer-signup/animal_prints.png" value="animal_prints">
                        </div>
                        <button class="select-btn">Animal Prints</button>

                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/houndstooth.png" value="houndstooth">
                            </div>
                            <button class="select-btn">Houndstooth</button>

                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/camoflauge.png" value="camoflauge">
                            </div>
                            <button class="select-btn">Camoflauge</button>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/florals.png" value="florals">
                            </div>
                            <button class="select-btn">Florals</button>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/plaid.png" value="plaid">
                            </div>
                            <button class="select-btn">Plaid</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item end-part">
            <div class="col-8 offset-2 text-center">
              <h5 class="sub-page-title">You're almost done!</h5>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>How exciting should you capsule be?</p>

                <label class="radio-container mb-2">
                  Adventure - put me into play clothes based on a special event
                  <input type="radio" name="capsule" value="adventure">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Extremely - I want to look like an influencer, totally on today's trend
                  <input type="radio" name="capsule" value="extremely">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Morderately - I want to try a few new things but nothing too bold
                  <input type="radio" name="capsule" value="moerderately">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Rarely - I want to stick to what I know works for me but open to trying something a bit different here and there
                  <input type="radio" name="capsule" value="rarely">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Never - I want to blend in with "Stealth" mode
                  <input type="radio" name="capsule" value="never" checked>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>
              </div>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>How much are you willing to spend? (generally - we will try to work within your budget)</p>

                <label class="radio-container mb-2">
                  Single item
                  <input type="radio" name="spend" value="single">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 40 - 60$ (just one or two pieces)
                  <input type="radio" name="spend" value="one-or-two">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 70 - 150$ (outfit - lower end)
                  <input type="radio" name="spend" value="outfit-lower">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 150 - 250$ (higher end)
                  <input type="radio" name="spend" value="higher-end" checked>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 300$+ (luxury)
                  <input type="radio" name="spend" value="luxury">
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>
              </div>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>Share your social media profile so your stylist can get to know you better:</p>

                <div class="mb-3">
                  <label for="step5-instagram">Instagram</label>
                  <input id="step5-instagram" class="form-control" name="instagram" />
                </div>

                <div class="mb-3">
                  <label for="step5-twitter">Twitter</label>
                  <input id="step5-twitter" class="form-control" name="twitter" />
                </div>

                <div class="mb-3">
                  <label for="step5-pinterest">Pinterest</label>
                  <input id="step5-pinterest" class="form-control" name="pinterest" />
                </div>

                <div>
                  <label for="step5-linkedin">Linkedin</label>
                  <input id="step5-linkedin" class="form-control" name="linkedin" />
                </div>
              </div>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>Any additional notes for your stylist?</p>

                <label for="step5-notes">Notes</label>
                <br/>
                <textarea class="additional-note" id="step5-notes" name="notes" ></textarea>
                <!-- <input id="step5-notes" class="form-control" /> -->
              </div>
            </div>
          </div>
    </form>
</div>
@endsection

@section('js')

@endsection
