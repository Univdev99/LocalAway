@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container signup-container">
    <div class="step-show m-4">
        <img src="/images/customer-signup/progress-sizing.svg" class="w-100">
    </div>
    <form id="sizing" method="POST" action="{{route('customer.signup.sizing.save')}}" enctype="multipart/form-data">
        @csrf
        <input class="profile-progress" type="hidden" value="{{ $customer->progress }}">
        <div class="row item first-row" id="row-women-body-type">
            <div class="m-auto text-center">
                <p class="mt-3">What is your body type?</p>
                <div class="row">
                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div selected">
                            <img class="img-content" src="/images/customer-signup/body-women/type1.svg" >
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="hourglass" @if($customer->body_type == "hourglass" || !$customer->body_type) checked @endif>
                        <label>Hourglass</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type2.svg" >
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="round" @if($customer->body_type == "round") checked @endif>
                        <label>Round</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type3.svg" >
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="inverted_triangle" @if($customer->body_type == "inverted_triangle") checked @endif>
                        <label>Inverted triangle</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type4.svg" >
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="pear" @if($customer->body_type == "pear") checked @endif>
                        <label>Pear</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type5.svg" >
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="rectangle" @if($customer->body_type == "rectangle") checked @endif>
                        <label>Rectangle</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item" id="row-women-casual-shirt">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Casual Shirt Size?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-casual-shirt.svg" >
                    </div>

                    <div class="row justify-content-center my-3">
                        <input type="radio" id="women-casual1" name="casual_shirt_size" value="S" @if($customer->casual_shirt_size == "S" || !$customer->casual_shirt_size) checked @endif>
                        <label for="women-casual1" class="select-btn">S</label>

                        <input type="radio" id="women-casual2" name="casual_shirt_size" value="M" @if($customer->casual_shirt_size == "M") checked @endif>
                        <label for="women-casual2" class="select-btn">M</label>

                        <input type="radio" id="women-casual3" name="casual_shirt_size" value="L" @if($customer->casual_shirt_size == "L") checked @endif>
                        <label for="women-casual3" class="select-btn">L</label>

                        <input type="radio" id="women-casual4" name="casual_shirt_size" value="XL" @if($customer->casual_shirt_size == "XL") checked @endif>
                        <label for="women-casual4" class="select-btn">XL</label>

                        <input type="radio" id="women-casual5" name="casual_shirt_size" value="XXL" @if($customer->casual_shirt_size == "XXL") checked @endif>
                        <label for="women-casual5" class="select-btn">XXL</label>
                    </div>
                        <select name="casual_fit" class="afit-select" required>
                            <option value="none" placeholder="How do you like the fit?" disabled>How do you like the fit?</option>
                            <option value="smaller" @if($customer->casual_fit == "smaller" || !$customer->casual_fit) selected @endif>Smaller</option>
                            <option value="normal" @if($customer->casual_fit == "normal") selected @endif>Normal</option>
                            <option value="larger" @if($customer->casual_fit == "larger") selected @endif>Larger</option>
                        </select>
                </div>
            </div>
        </div>

        <div class="row item" id="row-women-blouse-size">
            <div class="col-xl-5 col-lg-6 col-md-8 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Button Up Blouse Size?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-blouse.svg" >
                    </div>

                    <div class="row justify-content-center my-3">
                        @for ($i = 0; $i <= 18; $i+=2)
                            @if ($i == 0)
                                <input type="radio" id={{ "women-blouse" . $i }} name="buttonup_blouse_size" value={{ $i }} @if(intval($customer->buttonup_blouse_size) == $i || !$customer->buttonup_blouse_size) checked @endif>
                            @else
                                <input type="radio" id={{ "women-blouse" . $i }} name="buttonup_blouse_size" value={{ $i }} @if(intval($customer->buttonup_blouse_size) == $i) checked @endif>
                            @endif
                            <label for={{ "women-blouse" . $i}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>

                    <select name="buttonup_blouse_fit" class="afit-select" required>
                        <option value="none" placeholder="How do you like the fit?" disabled>How do you like the fit?</option>
                        <option value="smaller" @if($customer->buttonup_blouse_fit == "smaller" || !$customer->buttonup_blouse_fit) selected @endif>Smaller</option>
                        <option value="normal" @if($customer->buttonup_blouse_fit == "normal") selected @endif>Normal</option>
                        <option value="larger" @if($customer->buttonup_blouse_fit == "larger") selected @endif>Larger</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row item" id="row-women-bra-size">
            <div class="col-xl-5 col-lg-6 col-md-8 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Bra Size?</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/women-bra-size.svg" >
                    </div>

                    <div class="row ml-3">
                        <h5 class="text-center my-auto"> Size </h5>
                        @for ($i = 28; $i <= 38; $i+=2)
                            @if ($i == 28)
                                <input type="radio" id={{ "women-bra" . $i }} name="bra_size" value={{ $i }} @if(intval($customer->bra_size) == $i || !$customer->bra_size) checked @endif >
                            @else
                                <input type="radio" id={{ "women-bra" . $i }} name="bra_size" value={{ $i }} @if(intval($customer->bra_size) == $i) checked @endif >
                            @endif
                            <label for={{ "women-bra" . $i}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>

                    <div class="row ml-3">
                        <h5 class="text-center my-auto"> Cup </h5>
                        <input type="radio" id="women-cup1" name="bra_cup" value="AA" @if($customer->bra_cup == "AA" || !$customer->bra_cup) checked @endif>
                        <label for="women-cup1" class="select-btn">AA</label>

                        <input type="radio" id="women-cup2" name="bra_cup" value="A"  @if($customer->bra_cup == "A" ) checked @endif>
                        <label for="women-cup2" class="select-btn">A</label>

                        <input type="radio" id="women-cup3" name="bra_cup" value="B" @if($customer->bra_cup == "B") checked @endif>
                        <label for="women-cup3" class="select-btn">B</label>

                        <input type="radio" id="women-cup4" name="bra_cup" value="C"  @if($customer->bra_cup == "C" ) checked @endif>
                        <label for="women-cup4" class="select-btn">C</label>

                        <input type="radio" id="women-cup5" name="bra_cup" value="D"  @if($customer->bra_cup == "D" ) checked @endif>
                        <label for="women-cup5" class="select-btn">D</label>

                        <input type="radio" id="women-cup6" name="bra_cup" value="DD"  @if($customer->bra_cup == "DD" ) checked @endif>
                        <label for="women-cup6" class="select-btn">DD</label>

                        <input type="radio" id="women-cup7" name="bra_cup" value="DDD"  @if($customer->bra_cup == "DDD" ) checked @endif>
                        <label for="women-cup7" class="select-btn">DDD</label>

                        <input type="radio" id="women-cup8" name="bra_cup" value="D"  @if($customer->bra_cup == "D" ) checked @endif>
                        <label for="women-cup8" class="select-btn">G</label>

                        <input type="radio" id="women-cup9" name="bra_cup" value="+"  @if($customer->bra_cup == "+" ) checked @endif>
                        <label for="women-cup9" class="select-btn">+</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="row item" id="row-women-pant-fit">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Pant fit?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-pant.svg" >
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Waist </h5>
                        <input type="radio" id="women-waist1" name="pant_waist_fit" value="High Rise" @if($customer->pant_waist_fit == "High Rise" || !$customer->pant_waist_fit) checked @endif>
                        <label for="women-waist1" class="select-btn">High Rise</label>

                        <input type="radio" id="women-waist2" name="pant_waist_fit" value="Natural" @if($customer->pant_waist_fit == "Natural") checked @endif>
                        <label for="women-waist2" class="select-btn">Natural</label>

                        <input type="radio" id="women-waist3" name="pant_waist_fit" value="Medium Rise" @if($customer->pant_waist_fit == "Medium Rise") checked @endif>
                        <label for="women-waist3" class="select-btn">Medium Rise</label>

                        <input type="radio" id="women-waist4" name="pant_waist_fit" value="Low Rise" @if($customer->pant_waist_fit == "Low Rise") checked @endif>
                        <label for="women-waist4" class="select-btn">Low Rise</label>
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Rise </h5>
                        <input type="radio" id="women-rise1" name="pant_rise" value="Straight" @if($customer->pant_rise == "Straight" || !$customer->pant_rise) checked @endif>
                        <label for="women-rise1" class="select-btn">Straight</label>

                        <input type="radio" id="women-rise2" name="pant_rise" value="Tapered" @if($customer->pant_rise == "Tapered") checked @endif>
                        <label for="women-rise2" class="select-btn">Tapered</label>

                        <input type="radio" id="women-rise3" name="pant_rise" value="Bootcut" @if($customer->pant_rise == "Bootcut") checked @endif>
                        <label for="women-rise3" class="select-btn">Bootcut</label>
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Fit </h5>
                        <input type="radio" id="women-fit1" name="pant_fit" value="Relaxed" @if($customer->pant_fit == "Relaxed" || !$customer->pant_fit) checked @endif>
                        <label for="women-fit1" class="select-btn">Relaxed</label>

                        <input type="radio" id="women-fit2" name="pant_fit" value="CLassic" @if($customer->pant_fit == "CLassic") checked @endif>
                        <label for="women-fit2" class="select-btn">Classic</label>

                        <input type="radio" id="women-fit3" name="pant_fit" value="Slim" @if($customer->pant_fit == "Slim") checked @endif>
                        <label for="women-fit3" class="select-btn">Slim</label>

                        <input type="radio" id="women-fit4" name="pant_fit" value="Skinny" @if($customer->pant_fit == "Skinny") checked @endif>
                        <label for="women-fit4" class="select-btn">Skinny</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item" id="row-women-pant-size">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Pant Size?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-pant.svg" >
                    </div>

                    <div class="row justify-content-center">
                        @for ($i = 0; $i <= 18; $i+=2)
                            @if ($i == 0)
                                <input type="radio" id={{ "women-pant" . ($i) }} name="pant_size" value={{ $i }} @if(intval($customer->pant_size) == $i || !$customer->pant_size) checked @endif>
                            @else
                                <input type="radio" id={{ "women-pant" . ($i) }} name="pant_size" value={{ $i }} @if(intval($customer->pant_size) == $i) checked @endif>
                            @endif
                            <label for={{ "women-pant" . ($i)}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="row item multiselect-row" id="row-women-skirt-length">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Skirt Length?</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/women-skirt.svg" >
                    </div>

                    <div class="row justify-content-center">
                        <input type="checkbox" id="women-short1" name="skirt_size[]" value="Mini" @if($customer->skirt_size == "Mini" || !$customer->skirt_size) checked @endif >
                        <label for="women-short1" class="select-btn">Mini</label>

                        <input type="checkbox" id="women-short2" name="skirt_size[]" value="Knee" @if($customer->skirt_size == "Knee") checked @endif >
                        <label for="women-short2" class="select-btn">Knee</label>

                        <input type="checkbox" id="women-short3" name="skirt_size[]" value="Maxi" @if($customer->skirt_size == "Maxi") checked @endif >
                        <label for="women-short3" class="select-btn">Maxi</label>

                        <input type="checkbox" id="women-short4" name="skirt_size[]" value="No skirts" @if($customer->skirt_size == "No skirts") checked @endif >
                        <label for="women-short4" class="select-btn">No skirts</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item multiselect-row" id="row-women-dress-style">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Dress Style?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-dress.svg" >
                    </div>

                    <div class="row justify-content-center">
                        <input type="checkbox" id="women-dress1" name="dress_style[]" value="Shift"  @if($customer->dress_style == "Shift" || !$customer->dress_style) checked @endif>
                        <label for="women-dress1" class="select-btn">Shift</label>

                        <input type="checkbox" id="women-dress2" name="dress_style[]" value="Fit & Flare" @if($customer->dress_style == "Fit & Flare") checked @endif>
                        <label for="women-dress2" class="select-btn">Fit & Flare</label>

                        <input type="checkbox" id="women-dress3" name="dress_style[]" value="Sheath"  @if($customer->dress_style == "Sheath" ) checked @endif>
                        <label for="women-dress3" class="select-btn">Sheath</label>

                        <input type="checkbox" id="women-dress4" name="dress_style[]" value="A-line"  @if($customer->dress_style == "A-line" ) checked @endif>
                        <label for="women-dress4" class="select-btn">A-line</label>

                        <input type="checkbox" id="women-dress5" name="dress_style[]" value="I don't know"  @if($customer->dress_style == "I don't know" ) checked @endif>
                        <label for="women-dress5" class="select-btn">I don't know</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item item-submit end-part" id="row-women-shoe">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Shoe Size</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/women-shoe.svg" >
                    </div>

                    <div class="row justify-content-center">
                        @for ($i = 5.5; $i <= 11; $i+=0.5)
                            @if ($i == 5.5)
                                <input type="radio" id={{ "men-shoe" . (($i - 5.5) * 2) }} name="shoe_size" value={{ $i }} @if(intval($customer->shoe_size) == $i || !$customer->shoe_size) checked @endif>
                            @else
                                <input type="radio" id={{ "men-shoe" . (($i - 5.5) * 2) }} name="shoe_size" value={{ $i }} @if(intval($customer->shoe_size) == $i) checked @endif>
                            @endif
                            <label for={{ "men-shoe" . (($i - 5.5) * 2)}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="row submit-btns m-4">
            <div class="col-lg-6 offset-lg-3 text-center">
                <input class="round-btn back-btn mr-5 float-left" type="button" value="Back">
                <input class="round-btn next-btn float-right" type="button" value="Next">
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
@endsection
