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
        <div class="row item first-row item-show">
            <div class="m-auto text-center">
                <p class="mt-3">What is your body type?</p>
                <div class="row">
                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div selected">
                            <img class="img-content" src="/images/customer-signup/body-women/type1.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body-type" value="Hourglass" checked/>
                        <label>Hourglass</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type2.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body-type" value="Round"/>
                        <label>Round</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type3.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body-type" value="inverted_triangle"/>
                        <label>Inverted triangle</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type4.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body-type" value="pear"/>
                        <label>Pear</label>
                    </div>

                    <div class="d-block flex-wrap m-4 p-4 text-center img-selector">
                        <div class="img-wrap img-div">
                            <img class="img-content" src="/images/customer-signup/body-women/type5.svg" />
                        </div>
                        <input type="radio" class="img-radio" name="body-type" value="rectangle"/>
                        <label>Rectangle</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <p class="mt-3">Casual Shirt Size?</p>
                <div class="img-wrap">
                    <img class="img-content" src="/images/customer-signup/women-casual-shirt.svg" />
                </div>

                <div class="row justify-content-center my-3">
                    <input type="radio" id="women-casual1" name="casual-size" value="S" />
                    <label for="women-casual1" class="select-btn">S</label>

                    <input type="radio" id="women-casual2" name="casual-size" value="M" />
                    <label for="women-casual2" class="select-btn">M</label>

                    <input type="radio" id="women-casual3" name="casual-size" value="L" checked/>
                    <label for="women-casual3" class="select-btn">L</label>

                    <input type="radio" id="women-casual4" name="casual-size" value="XL" />
                    <label for="women-casual4" class="select-btn">XL</label>

                    <input type="radio" id="women-casual5" name="casual-size" value="XXL" />
                    <label for="women-casual5" class="select-btn">XXL</label>
                </div>
                    <select name="casual-fit" class="afit-select" required>
                        <option value="none" placeholder="How do you like the fit?" hidden>How do you like the fit?</option>
                        <option value="smaller">Smaller</option>
                        <option value="normal">Normal</option>
                        <option value="larger">Larger</option>
                    </select>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-5 col-lg-6 col-md-8 text-center mx-auto">
                    <p class="mt-3">Button Up Blouse Size?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-blouse.svg" />
                    </div>

                    <div class="row justify-content-center my-3">
                        @for ($i = 0; $i <= 18; $i+=2)
                            @if ($i == 0)
                                <input type="radio" id={{ "women-blouse" . $i }} name="blouse-size" value={{$i}} checked/>
                            @else
                                <input type="radio" id={{ "women-blouse" . $i }} name="blouse-size" value={{$i}}/>
                            @endif
                            <label for={{ "women-blouse" . $i}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>

                    <select name="blouse-fit" class="afit-select" required>
                        <option value="none" placeholder="How do you like the fit?" hidden>How do you like the fit?</option>
                        <option value="smaller">Smaller</option>
                        <option value="normal">Normal</option>
                        <option value="larger">Larger</option>
                    </select>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-5 col-lg-6 col-md-8 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Bra Size?</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/women-bra-size.svg" />
                    </div>

                    <div class="row ml-3">
                        <h5 class="text-center my-auto"> Size </h5>
                        @for ($i = 28; $i <= 38; $i+=2)
                            @if ($i == 28)
                                <input type="radio" id={{ "women-bra" . $i }} name="women-bra" value={{$i}} checked/>
                            @else
                                <input type="radio" id={{ "women-bra" . $i }} name="women-bra" value={{$i}}/>
                            @endif
                            <label for={{ "women-bra" . $i}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>

                    <div class="row ml-3">
                        <h5 class="text-center my-auto"> Cup </h5>
                        <input type="radio" id="women-cup1" name="women-cup" value="AA" checked/>
                        <label for="women-cup1" class="select-btn">AA</label>

                        <input type="radio" id="women-cup2" name="women-cup" value="A" />
                        <label for="women-cup2" class="select-btn">A</label>

                        <input type="radio" id="women-cup3" name="women-cup" value="B"/>
                        <label for="women-cup3" class="select-btn">B</label>

                        <input type="radio" id="women-cup4" name="women-cup" value="C" />
                        <label for="women-cup4" class="select-btn">C</label>

                        <input type="radio" id="women-cup5" name="women-cup" value="D" />
                        <label for="women-cup5" class="select-btn">D</label>

                        <input type="radio" id="women-cup6" name="women-cup" value="DD" />
                        <label for="women-cup6" class="select-btn">DD</label>

                        <input type="radio" id="women-cup7" name="women-cup" value="DDD" />
                        <label for="women-cup7" class="select-btn">DDD</label>

                        <input type="radio" id="women-cup8" name="women-cup" value="D" />
                        <label for="women-cup8" class="select-btn">G</label>

                        <input type="radio" id="women-cup9" name="women-cup" value="+" />
                        <label for="women-cup9" class="select-btn">+</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Pant fit?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-pant.svg" />
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Waist </h5>
                        <input type="radio" id="women-waist1" name="pant-waist-fit" value="High Rise" />
                        <label for="women-waist1" class="select-btn">High Rise</label>

                        <input type="radio" id="women-waist2" name="pant-waist-fit" value="Natural" checked/>
                        <label for="women-waist2" class="select-btn">Natural</label>

                        <input type="radio" id="women-waist3" name="pant-waist-fit" value="Medium Rise" />
                        <label for="women-waist3" class="select-btn">Medium Rise</label>

                        <input type="radio" id="women-waist4" name="pant-waist-fit" value="Low Rise" />
                        <label for="women-waist4" class="select-btn">Low Rise</label>
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Rise </h5>
                        <input type="radio" id="women-rise1" name="pant-rise" value="Straight" />
                        <label for="women-rise1" class="select-btn">Straight</label>

                        <input type="radio" id="women-rise2" name="pant-rise" value="Tapered" checked/>
                        <label for="women-rise2" class="select-btn">Tapered</label>

                        <input type="radio" id="women-rise3" name="pant-rise" value="Bootcut" />
                        <label for="women-rise3" class="select-btn">Bootcut</label>
                    </div>

                    <div class="row ml-3 pant-setting">
                        <h5 class="text-center my-auto color-brown"> Fit </h5>
                        <input type="radio" id="women-fit1" name="pant-fit" value="Relaxed" />
                        <label for="women-fit1" class="select-btn">Relaxed</label>

                        <input type="radio" id="women-fit2" name="pant-fit" value="CLassic" checked/>
                        <label for="women-fit2" class="select-btn">Classic</label>

                        <input type="radio" id="women-fit3" name="pant-fit" value="Slim" />
                        <label for="women-fit3" class="select-btn">Slim</label>

                        <input type="radio" id="women-fit4" name="pant-fit" value="Skinny" />
                        <label for="women-fit4" class="select-btn">Skinny</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Pant Size?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-pant.svg" />
                    </div>

                    <div class="row justify-content-center">
                        @for ($i = 0; $i <= 18; $i+=2)
                            @if ($i == 0)
                                <input type="radio" id={{ "women-pant" . ($i) }} name="pant-size" value={{$i}} checked/>
                            @else
                                <input type="radio" id={{ "women-pant" . ($i) }} name="pant-size" value={{$i}}/>
                            @endif
                            <label for={{ "women-pant" . ($i)}} class="select-btn">{{ $i }}</label>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Skirt Length?</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/women-skirt.svg" />
                    </div>

                    <div class="row justify-content-center">
                        <input type="radio" id="women-short1" name="women-short" value="Mini" />
                        <label for="women-short1" class="select-btn">Mini</label>

                        <input type="radio" id="women-short2" name="women-short" value="Knee" checked/>
                        <label for="women-short2" class="select-btn">Knee</label>

                        <input type="radio" id="women-short3" name="women-short" value="Maxi" />
                        <label for="women-short3" class="select-btn">Maxi</label>

                        <input type="radio" id="women-short4" name="women-short" value="No skirts" />
                        <label for="women-short4" class="select-btn">No skirts</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Dress Style?</p>
                    <div class="img-wrap">
                        <img class="img-content" src="/images/customer-signup/women-dress.svg" />
                    </div>

                    <div class="row justify-content-center">
                        <input type="radio" id="women-dress1" name="women-dress" value="Shift" />
                        <label for="women-dress1" class="select-btn">Shift</label>

                        <input type="radio" id="women-dress2" name="women-dress" value="Fit & Flare" checked/>
                        <label for="women-dress2" class="select-btn">Fit & Flare</label>

                        <input type="radio" id="women-dress3" name="women-dress" value="Sheath" />
                        <label for="women-dress3" class="select-btn">Sheath</label>

                        <input type="radio" id="women-dress4" name="women-dress" value="A-line" />
                        <label for="women-dress4" class="select-btn">A-line</label>

                        <input type="radio" id="women-dress5" name="women-dress" value="I don't know" />
                        <label for="women-dress5" class="select-btn">I don't know</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row item item-submit end-part">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center mx-auto">
                <div class="my-form-row">
                    <p class="mt-3">Shoe Size</p>
                    <div class="img-wrap">
                        <img class="img-content-small" src="/images/customer-signup/women-shoe.svg" />
                    </div>

                    <div class="row justify-content-center">
                        @for ($i = 5.5; $i <= 11; $i+=0.5)
                            @if ($i == 5.5)
                                <input type="radio" id={{ "men-shoe" . (($i - 5.5) * 2) }} name="men-shoe" value={{$i}} checked/>
                            @else
                                <input type="radio" id={{ "men-shoe" . (($i - 5.5) * 2) }} name="men-shoe" value={{$i}}/>
                            @endif
                            <label for={{ "men-shoe" . (($i - 5.5) * 2)}} class="select-btn">{{ $i }}</label>
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
