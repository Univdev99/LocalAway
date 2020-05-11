@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container signup-container">
    <div class="step-show m-4">
        <img src="/images/customer-signup/progress-sizing.svg" class="w-100"/>
    </div>
    <form id="sizing" method="POST" action="{{route('customer.signup.sizing.save')}}" enctype="multipart/form-data">
        @csrf
        <input class="profile-progress" type="hidden" value="{{ $progress }}">
        <div class="row item first-row" id="row-men-body-type">
            <div class="m-auto text-center">
                <p class="mt-3">What is your body type?</p>
                <div class="row">
                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div selected">
                            <img class="img-content" src="/images/customer-signup/body-men/type1.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="slender" @if($body_type == "slender" || !$body_type) checked @endif>
                        <label>Slender</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-men/type2.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="athletic" @if($body_type == "athletic") checked @endif>
                        <label>Athletic</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-men/type3.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body_type" value="husky" @if($body_type == "husky") checked @endif>
                        <label>Husky</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item" id="row-men-casual-shirt">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Casual Shirts?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/men-casual-shirt.svg" />
                    </div>

                    <div class="row justify-content-center my-3">
                        <input type="radio" id="men-casual1" name="casual_shirt_size" value="S" @if($casual_shirt_size == "S" || !$casual_shirt_size) checked @endif>
                        <label for="men-casual1" class="select-btn">S</label>

                        <input type="radio" id="men-casual2" name="casual_shirt_size" value="M" @if($casual_shirt_size == "M") checked @endif>
                        <label for="men-casual2" class="select-btn">M</label>

                        <input type="radio" id="men-casual3" name="casual_shirt_size" value="L" @if($casual_shirt_size == "L") checked @endif>
                        <label for="men-casual3" class="select-btn">L</label>

                        <input type="radio" id="men-casual4" name="casual_shirt_size" value="XL" @if($casual_shirt_size == "XL") checked @endif>
                        <label for="men-casual4" class="select-btn">XL</label>

                        <input type="radio" id="men-casual5" name="casual_shirt_size" value="XXL" @if($casual_shirt_size == "XXL") checked @endif>
                        <label for="men-casual5" class="select-btn">XXL</label>
                    </div>
                    <select name="casual_fit" class="afit-select" required>
                        <option value="none" placeholder="How do you like the fit?" disabled>How do you like the fit?</option>
                        <option value="smaller" @if($casual_fit == "smaller" || !$casual_fit) selected @endif>Smaller</option>
                        <option value="normal" @if($casual_fit == "normal") selected @endif>Normal</option>
                        <option value="larger" @if($casual_fit == "larger") selected @endif>Larger</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row item" id="row-men-shirt-size">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Dress shirt size?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/men-dress-shirt.svg" />
                    </div>

                    <div class="row justify-content-center">
                        <input type="radio" id="men-shirt1" name="dress_shirt_size" value="S" @if($dress_shirt_size == "S" || !$dress_shirt_size) checked @endif>
                        <label for="men-shirt1" class="select-btn">S</label>

                        <input type="radio" id="men-shirt2" name="dress_shirt_size" value="M" @if($dress_shirt_size == "M") checked @endif>
                        <label for="men-shirt2" class="select-btn">M</label>

                        <input type="radio" id="men-shirt3" name="dress_shirt_size" value="L" @if($dress_shirt_size == "L") checked @endif>
                        <label for="men-shirt3" class="select-btn">L</label>

                        <input type="radio" id="men-shirt4" name="dress_shirt_size" value="XL" @if($dress_shirt_size == "XL") checked @endif>
                        <label for="men-shirt4" class="select-btn">XL</label>

                        <input type="radio" id="men-shirt5" name="dress_shirt_size" value="XXL" @if($dress_shirt_size == "XXL") checked @endif>
                        <label for="men-shirt5" class="select-btn">XXL</label>
                    </div>

                    <div class="row p-4">
                        <div class="col-6">
                            <p class="text-left pl-2">Shirt Collar</p>
                            <select name="dress_shirt_collar_fit" class="afit-select" required>
                                <option value="" placeholder="How do you like the fit?" disabled>How do you like the fit?</option>
                                <option value="smaller" @if($dress_shirt_collar_fit == 'smaller' || !$dress_shirt_collar_fit) selected @endif>Smaller</option>
                                <option value="normal" @if($dress_shirt_collar_fit == 'normal') selected @endif>Normal</option>
                                <option value="larger" @if($dress_shirt_collar_fit == 'larger') selected @endif>Larger</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <p class="text-left p1-2">Shirt Shoulder</p>
                            <select name="dress_shirt_shoulder_fit" class="fit-select" required>
                                <option value="" placeholder="How do you like the fit?" disabled>How do you like the fit?</option>
                                <option value="smaller" @if($dress_shirt_shoulder_fit == 'smaller' || !$dress_shirt_shoulder_fit) selected @endif>Smaller</option>
                                <option value="normal" @if($dress_shirt_shoulder_fit == 'normal') selected @endif>Normal</option>
                                <option value="larger" @if($dress_shirt_shoulder_fit == 'larger') selected @endif>Larger</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item" id="row-men-pant-fit">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Pant fit?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/men-pant.svg" />
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Waist </h5>
                        <input type="radio" id="men-pant1" name="pant_waist_fit" value="High Rise" @if($pant_waist_fit == "High Rise" || !$pant_waist_fit) checked @endif>
                        <label for="men-pant1" class="select-btn">High Rise</label>

                        <input type="radio" id="men-pant2" name="pant_waist_fit" value="Natural" @if($pant_waist_fit == "Natural") checked @endif>
                        <label for="men-pant2" class="select-btn">Natural</label>

                        <input type="radio" id="men-pant3" name="pant_waist_fit" value="Medium Rise" @if($pant_waist_fit == "Medium Rise") checked @endif>
                        <label for="men-pant3" class="select-btn">Medium Rise</label>

                        <input type="radio" id="men-pant4" name="pant_waist_fit" value="Low Rise" @if($pant_waist_fit == "Low Rise") checked @endif>
                        <label for="men-pant4" class="select-btn">Low Rise</label>
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Fit </h5>
                        <input type="radio" id="men-fit1" name="pant_fit" value="Relaxed" @if($pant_fit == "Relaxed" || !$pant_fit) checked @endif>
                        <label for="men-fit1" class="select-btn">Relaxed</label>

                        <input type="radio" id="men-fit2" name="pant_fit" value="CLassic" @if($pant_fit == "CLassic") checked @endif>
                        <label for="men-fit2" class="select-btn">Classic</label>

                        <input type="radio" id="men-fit3" name="pant_fit" value="Slim" @if($pant_fit == "Slim") checked @endif>
                        <label for="men-fit3" class="select-btn">Slim</label>

                        <input type="radio" id="men-fit4" name="pant_fit" value="Skinny" @if($pant_fit == "Skinny") checked @endif>
                        <label for="men-fit4" class="select-btn">Skinny</label>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row item" id="row-men-waist">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Waist in Inches</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/men-waist.svg" />
                    </div>

                    <div class="row justify-content-center">
                        @for ($i = 31; $i <= 45; $i++)
                            @if ($i == 31)
                                <input type="radio" id={{ "men-waist" . ($i - 30) }} name="waist_size" value={{ $i }} @if(intval($waist_size) == $i || !$waist_size) checked @endif >
                            @else
                                <input type="radio" id={{ "men-waist" . ($i - 30) }} name="waist_size" value={{ $i }} @if(intval($waist_size) == $i) checked @endif>
                            @endif
                            <label for={{ "men-waist" . ($i - 30)}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="row item" id="row-men-shorts-length">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Shorts Length?</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/men-short-pant.svg" />
                    </div>

                    <div class="row justify-content-center">
                        <input type="radio" id="men-short1" name="shorts_length" value="At the knee" @if($shorts_length == "At the knee" || !$shorts_length) checked @endif>
                        <label for="men-short1" class="select-btn">At the knee</label>

                        <input type="radio" id="men-short2" name="shorts_length" value="Above the knee" @if($shorts_length == "Above the knee") checked @endif>
                        <label for="men-short2" class="select-btn">Above the knee</label>

                        <input type="radio" id="men-short3" name="shorts_length" value="Lower thigh" @if($shorts_length == "Lower thigh") checked @endif>
                        <label for="men-short3" class="select-btn">Lower thigh</label>

                        <input type="radio" id="men-short4" name="shorts_length" value="No shorts" @if($shorts_length == "No shorts") checked @endif>
                        <label for="men-short4" class="select-btn">No shorts</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item item-submit end-part" id="row-men-shoe">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Shoe Size</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/men-shoe.svg" />
                    </div>

                    <div class="row justify-content-center">
                        @for ($i = 7; $i <= 14.5; $i+=0.5)
                            @if ($i == 7)
                                <input type="radio" id={{ "men-shoe" . (($i - 7) * 2) }} name="shoe_size" value={{ $i }} @if(intval($shoe_size) == $i || !$shoe_size) checked @endif>
                            @else
                                <input type="radio" id={{ "men-shoe" . (($i - 7) * 2) }} name="shoe_size" value={{ $i }} @if(intval($shoe_size) == $i) checked @endif>
                            @endif
                            <label for={{ "men-shoe" . (($i - 7) * 2)}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>
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
