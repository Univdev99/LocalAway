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
        <input class="profile-progress" type="hidden" value="{{ $progress }}">
        <div class="row item first-row" id="row-women-style">
            <div class="m-auto text-center">
                    <p class="mt-3">Describe your personal style?</p>
                <div class="row">
                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-edgy.svg" />
                        </div>
                        <input type="radio" id="style1" name="style" value="Edgy" @if($style == "Edgy" || !$style) checked @endif >
                        <label for="style1" class="select-btn">Edgy</label>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-casual.svg" />
                        </div>
                        <input type="radio" id="style2" name="style" value="Casual" @if($style == "Casual") checked @endif >
                        <label for="style2" class="select-btn">Casual</label>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-classic.svg" />
                        </div>
                        <input type="radio" id="style3" name="style" value="Classic" @if($style == "Classic") checked @endif >
                        <label for="style3" class="select-btn">Classic</label>
                    </div>

                    <div class="d-block flex-wrap m-4 text-center">
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-style-retro.svg" />
                        </div>
                        <input type="radio" id="style4" name="style" value="Retro" @if($style == "Retro") checked @endif >
                        <label for="style4" class="select-btn">Retro</label>
                    </div>

                </div>
            </div>
        </div>
        <div class="row item dislike" id="row-women-color">
            <div class="m-auto">
                <div class="my-form-row">
                    <p>Which colors would you NEVER wear? Select all that apply.</p>
                </div>

                <div class="dislike-color-palette">
                    <div class="dislike-color">
                    <div style="background-color:#673AB7">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#673AB7 @if(strpos($dislike_color, "#673AB7") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>

                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#00BCD4">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#00BCD4 @if(strpos($dislike_color, "#00BCD4") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#CDDC39">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#CDDC39 @if(strpos($dislike_color, "#CDDC39") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFFFFF;border:1px solid lightgrey;">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value="#FFFFFF" @if(strpos($dislike_color, "#FFFFFF") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#000000">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#000000 @if(strpos($dislike_color, "#000000") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#9C27B0">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#9C27B0 @if(strpos($dislike_color, "#9C27B0") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#03A9F4">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#03A9F4 @if(strpos($dislike_color, "#03A9F4") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#8BC34A">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#8BC34A @if(strpos($dislike_color, "#8BC34A") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FF9800">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#FF9800 @if(strpos($dislike_color, "#FF9800") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#795548">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#795548 @if(strpos($dislike_color, "#795548") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#E91E63">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#E91E63 @if(strpos($dislike_color, "#E91E63") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#5677FC">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#5677FC @if(strpos($dislike_color, "#5677FC") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#259B24">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#259B24 @if(strpos($dislike_color, "#259B24") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFC107">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#FFC107 @if(strpos($dislike_color, "#FFC107") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#9E9E9E">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#9E9E9E @if(strpos($dislike_color, "#9E9E9E") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                    <div class="dislike-color">
                    <div style="background-color:#E51C23">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#E51C23 @if(strpos($dislike_color, "#E51C23") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#3F51B5">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#3F51B5 @if(strpos($dislike_color, "#3F51B5") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#009688">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#009688 @if(strpos($dislike_color, "#009688") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#FFEB3B">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#FFEB3B @if(strpos($dislike_color, "#FFEB3B") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>
                    <div class="dislike-color">
                    <div style="background-color:#607D8B">
                        <input type="checkbox" class="color-check" name="dislike_color[]" value=#607D8B @if(strpos($dislike_color, "#607D8B") != false) checked @endif>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row item dislike" id="row-women-material">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Any materials you don't like?</p>

                    <div class="row justify-content-center">
                        <input type="checkbox" id="style-casual1" name="dislike_material[]" value="Faux Leather" @if(strpos($dislike_material, "Faux Leather") != false) checked @endif>
                        <label for="style-casual1" class="select-btn">Faux Leather</label>

                        <input type="checkbox" id="style-casual2" name="dislike_material[]" value="Polyester" @if(strpos($dislike_material, "Polyester") != false) checked @endif>
                        <label for="style-casual2" class="select-btn">Polyester</label>

                        <input type="checkbox" id="style-casual3" name="dislike_material[]" value="Faux Fur" @if(strpos($dislike_material, "Faux Fur") != false) checked @endif>
                        <label for="style-casual3" class="select-btn">Faux Fur</label>

                        <input type="checkbox" id="style-casual4" name="dislike_material[]" value="Gold" @if(strpos($dislike_material, "Gold") != false) checked @endif>
                        <label for="style-casual4" class="select-btn">Gold</label>

                        <input type="checkbox" id="style-casual5" name="dislike_material[]" value="Nickel" @if(strpos($dislike_material, "Nickel") != false) checked @endif>
                        <label for="style-casual5" class="select-btn">Nickel</label>

                        <input type="checkbox" id="style-casual6" name="dislike_material[]" value="Silver" @if(strpos($dislike_material, "Silver") != false) checked @endif>
                        <label for="style-casual6" class="select-btn">Silver</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item dislike" id="row-women-pattern">
            <div class="col m-auto">
                <div class="my-form-row text-center">
                    <p>Which patterns would you never wear? Select all that apply.</p>

                    <div class="row">
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/geometric.png" value="geometric">
                            </div>
                            <input type="checkbox" id="style-pattern1" name="dislike_pattern[]" value="Geometric"@if(strpos($dislike_pattern, "Geometric") != false) checked @endif>
                            <label for="style-pattern1" class="select-btn">Geometric</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/animal_prints.png" value="animal_prints">
                            </div>
                            <input type="checkbox" id="style-pattern2" name="dislike_pattern[]" value="Animal Prints" @if(strpos($dislike_pattern, "Animal Prints" ) != false) checked @endif>
                            <label for="style-pattern2" class="select-btn">Animal Prints</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/houndstooth.png" value="houndstooth">
                            </div>
                            <input type="checkbox" id="style-pattern3" name="dislike_pattern[]" value="Houndstooth" @if(strpos($dislike_pattern, "Houndstooth" ) != false) checked @endif>
                            <label for="style-pattern3" class="select-btn">Houndstooth</label>

                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/camoflauge.png" value="camoflauge">
                            </div>
                            <input type="checkbox" id="style-pattern4" name="dislike_pattern[]" value="Camoflauge" @if(strpos($dislike_pattern, "Camoflauge" ) != false) checked @endif>
                            <label for="style-pattern4" class="select-btn">Camoflauge</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/florals.png" value="florals">
                            </div>
                            <input type="checkbox" id="style-pattern5" name="dislike_pattern[]" value="Florals" @if(strpos($dislike_pattern, "Florals" ) != false) checked @endif>
                            <label for="style-pattern5" class="select-btn">Florals</label>
                        </div>
                        <div class="col">
                            <div class="m-0 p-0">
                                <img class="img-content" src="/images/customer-signup/plaid.png" value="plaid">
                            </div>
                            <input type="checkbox" id="style-pattern6" name="dislike_pattern[]" value="Plaid" @if(strpos($dislike_pattern, "Plaid" ) != false) checked @endif>
                            <label for="style-pattern6" class="select-btn">Plaid</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item item-submit end-part" id="row-women-almost-done">
            <div class="col-8 offset-2 text-center">
              <h5 class="sub-page-title">You're almost done!</h5>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>How exciting should you capsule be?</p>

                <label class="radio-container mb-2">
                  Adventure - put me into play clothes based on a special event
                  <input type="radio" name="capsule" value="adventure" @if($capsule == "adventure" ) checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Extremely - I want to look like an influencer, totally on today's trend
                  <input type="radio" name="capsule" value="extremely" @if($capsule == "extremely") checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Morderately - I want to try a few new things but nothing too bold
                  <input type="radio" name="capsule" value="moerderately" @if($capsule == "moerderately") checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Rarely - I want to stick to what I know works for me but open to trying something a bit different here and there
                  <input type="radio" name="capsule" value="rarely" @if($capsule == "rarely") checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Never - I want to blend in with "Stealth" mode
                  <input type="radio" name="capsule" value="never"  @if($capsule == "never" || !$capsule) checked @endif>
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
                  <input type="radio" name="capsule_spend" value="single"  @if($capsule_spend == "single") checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 40 - 60$ (just one or two pieces)
                  <input type="radio" name="capsule_spend" value="one-or-two" @if($capsule_spend == "one-or-two") checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 70 - 150$ (outfit - lower end)
                  <input type="radio" name="capsule_spend" value="outfit-lower" @if($capsule_spend == "outfit-lower") checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 150 - 250$ (higher end)
                  <input type="radio" name="capsule_spend" value="higher-end"  @if($capsule_spend == "higher-end" || !$capsule_spend) checked @endif>
                  <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                  </span>
                </label>

                <label class="radio-container mb-2">
                  Capsules from 300$+ (luxury)
                  <input type="radio" name="capsule_spend" value="luxury" @if($capsule_spend == "luxury") checked @endif>
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
                  <input id="step5-instagram" class="form-control" name="instagram" value="{{ $instagram }}">
                </div>

                <div class="mb-3">
                  <label for="step5-twitter">Twitter</label>
                  <input id="step5-twitter" class="form-control" name="twitter" value="{{ $twitter }}">
                </div>

                <div class="mb-3">
                  <label for="step5-pinterest">Pinterest</label>
                  <input id="step5-pinterest" class="form-control" name="pinterest" value="{{ $pinterest }}">
                </div>

                <div>
                  <label for="step5-linkedin">Linkedin</label>
                  <input id="step5-linkedin" class="form-control" name="linkedin" value="{{ $linkedin }}">
                </div>
              </div>
            </div>

            <div class="col-8 offset-2 mt-3">
              <div class="my-form-row">
                <p>Any additional notes for your stylist?</p>

                <label for="step5-notes">Notes</label>
                <br/>
                <textarea class="additional-note" id="notes" name="notes" value="{{ $notes }}"></textarea>
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
