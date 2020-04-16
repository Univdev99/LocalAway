@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container signup-container">
    <div class="step-show m-4">
        <img src="/images/customer-signup/progress-style.svg" class="w-100"/>
    </div>
    <form id="style" method="POST" action="{{route('customer.signup.style.save')}}" enctype="multipart/form-data">
        @csrf
        <div class="row item first-row item-show">
            <div class="m-auto text-center">
                    <p class="mt-3">Describe your personal style?</p>
                <div class="row">
                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/men-style-edgy.svg" />
                        </div>
                        <input type="radio" id="style-1" name="style" value="Edgy" />
                        <label for="style-1"  class="select-btn">Edgy</label>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/men-style-casual.svg" />
                        </div>
                        <input type="radio" id="style-2" name="style" value="Casual" checked/>
                        <label for="style-2" class="select-btn">Casual</label>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/men-style-classic.svg" />
                        </div>
                        <input type="radio" id="style-3" name="style" value="Classic" />
                        <label for="style-3" class="select-btn">Classic</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item dislike">
            <div class="m-auto">
                <div class="my-form-row">
                    <p>Which colors would you NEVER wear? Select all that apply.</p>
                </div>

                <div class="dislike-color-palette">
                    <div class="dislike-color">
                    <div style="background-color:#673AB7">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#673AB7">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>

                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#00BCD4">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#00BCD4">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#CDDC39">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#CDDC39">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFFFFF;border:1px solid lightgrey;">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#FFFFFF">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#000000">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#000000">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#9C27B0">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#9C27B0">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#03A9F4">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#03A9F4">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#8BC34A">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#8BC34A">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FF9800">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#FF9800">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#795548">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#795548">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#E91E63">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#E91E63">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#5677FC">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#5677FC">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#259B24">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#259B24">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFC107">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#FFC107">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#9E9E9E">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#9E9E9E">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#E51C23">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#E51C23">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#3F51B5">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#3F51B5">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#009688">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#009688">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFEB3B">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#FFEB3B">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#607D8B">
                        <input type="checkbox" class="color-check" name="dislike-color[]" value="#607D8B">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row item dislike">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Any materials you don't like?</p>

                    <div class="row justify-content-center dislike">
                        <input type="checkbox" id="dislike-casual1" name="dislike-casual[]" value="Faux Leather"/>
                        <label for="dislike-casual1" class="select-btn">Faux Leather</label>

                        <input type="checkbox" id="dislike-casual2" name="dislike-casual[]" value="Polyester"/>
                        <label for="dislike-casual2" class="select-btn">Polyester</label>

                        <input type="checkbox" id="dislike-casual3" name="dislike-casual[]" value="Faux Fur"/>
                        <label for="dislike-casual3" class="select-btn">Faux Fur</label>

                        <input type="checkbox" id="dislike-casual4" name="dislike-casual[]" value="Gold"/>
                        <label for="dislike-casual4" class="select-btn">Gold</label>

                        <input type="checkbox" id="dislike-casual5" name="dislike-casual[]" value="Nickel"/>
                        <label for="dislike-casual5" class="select-btn">Nickel</label>

                        <input type="checkbox" id="dislike-casual6" name="dislike-casual[]" value="Silver"/>
                        <label for="dislike-casual6" class="select-btn">Silver</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item dislike">
            <div class="col m-auto">
                <div class="my-form-row text-center">
                    <p>Which patterns would you never wear? Select all that apply.</p>

                    <div class="row">
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/geometric.png" value="geometric">
                            </div>
                            <input type="checkbox" id="dislike-pattern1" name="dislike-pattern[]" value="Geometric"/>
                            <label for="dislike-pattern1" class="select-btn">Geometric</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/animal_prints.png" value="animal_prints">
                            </div>
                            <input type="checkbox" id="dislike-pattern2" name="dislike-pattern[]" value="Animal Prints" />
                            <label for="dislike-pattern2" class="select-btn">Animal Prints</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/houndstooth.png" value="houndstooth">
                            </div>
                            <input type="checkbox" id="dislike-pattern3" name="dislike-pattern[]" value="Houndstooth" />
                            <label for="dislike-pattern3" class="select-btn">Houndstooth</label>

                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/camoflauge.png" value="camoflauge">
                            </div>
                            <input type="checkbox" id="dislike-pattern4" name="dislike-pattern[]" value="Camoflauge" />
                            <label for="dislike-pattern4" class="select-btn">Camoflauge</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/florals.png" value="florals">
                            </div>
                            <input type="checkbox" id="dislike-pattern5" name="dislike-pattern[]" value="Florals" />
                            <label for="dislike-pattern5" class="select-btn">Florals</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/plaid.png" value="plaid">
                            </div>
                            <input type="checkbox" id="dislike-pattern6" name="dislike-pattern[]" value="Plaid" />
                            <label for="dislike-pattern6" class="select-btn">Plaid</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item item-submit end-part">
            <div class="col-8 offset-2 text-center">
              <h5 class="sub-page-title">You're almost done!</h5>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>How exciting should you capsule be?</p>

                <label class="radio-container mb-2">
                  Adventure - put me into play clothes based on a special event
                  <input type="radio" name="capsule" value="adventure" required>
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
                  <input type="radio" name="spend" value="single" required>
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

        <div class="row submit-btns m-4">
            <div class="col-6 offset-3 text-center">
                <input class="round-btn back-btn mr-5 float-left" type="button" value="Back"/>
                <input class="round-btn next-btn float-right" type="button" value="Next"/>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')

@endsection
