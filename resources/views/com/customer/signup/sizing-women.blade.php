@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container">
    <form id="sizing" method="POST" action="{{route('customer.signup.sizing.save')}}" enctype="multipart/form-data">
        <div class="step-show m-4">
            <img src="/images/customer-signup/progress-sizing.svg" class="w-100"/>
        </div>

        <div class="women">
            <div class="row item first-row item-show">
                <div class="m-auto text-center">
                        <p class="mt-3">What is your body type?</p>
                    <div class="row">
                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap body-focus">
                                <img class="img-content" src="/images/customer-signup/body-women/type1.svg" />
                            </div>
                            <p>Hourglass</p>
                        </div>

                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap">
                                <img class="img-content" src="/images/customer-signup/body-women/type2.svg" />
                            </div>
                            <p>Round</p>
                        </div>

                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap">
                                <img class="img-content" src="/images/customer-signup/body-women/type3.svg" />
                            </div>
                            <p>Inverted triangle</p>
                        </div>

                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap">
                                <img class="img-content" src="/images/customer-signup/body-women/type4.svg" />
                            </div>
                            <p>Pear</p>
                        </div>

                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap">
                                <img class="img-content" src="/images/customer-signup/body-women/type5.svg" />
                            </div>
                            <p>Rectangle</p>
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
                        <button class="select-btn">XS</button>
                        <button class="select-btn">S</button>
                        <button class="select-btn">M</button>
                        <button class="select-btn">L</button>
                        <button class="select-btn">XL</button>
                    </div>
                        <select name="men_button_up_shirts_fit" class="afit-select">
                            <option value="none" placeholder="How do you like the fit?" hidden>How do you like the fit?</option>
                            <option value="smaller">Smaller</option>
                            <option value="normal">Normal</option>
                            <option value="larger">Larger</option>
                        </select>
                </div>
            </div>

            <div class="row item">
                <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                        <p class="mt-3">Button Up Blouse Size?</p>
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/women-blouse.svg" />
                        </div>

                        <div class="row justify-content-center my-3">
                            <button class="select-btn">0</button>
                            <button class="select-btn">2</button>
                            <button class="select-btn">4</button>
                            <button class="select-btn">6</button>
                            <button class="select-btn">8</button>
                            <button class="select-btn">10</button>
                            <button class="select-btn">12</button>
                            <button class="select-btn">14</button>
                            <button class="select-btn">16</button>
                            <button class="select-btn">18</button>
                        </div>

                        <select name="men_button_up_shirts_fit" class="afit-select">
                            <option value="none" placeholder="How do you like the fit?" hidden>How do you like the fit?</option>
                            <option value="smaller">Smaller</option>
                            <option value="normal">Normal</option>
                            <option value="larger">Larger</option>
                        </select>
                </div>
            </div>

            <div class="row item">
                <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Bra Size?</p>
                        <div class="img-wrap">
                            <img class="img-content-small" src="/images/customer-signup/women-bra-size.svg" />
                        </div>

                        <div class="row ml-3">
                            <h5 class="text-center my-auto"> Size </h5>
                            <button class="select-btn">28</button>
                            <button class="select-btn">30</button>
                            <button class="select-btn">32</button>
                            <button class="select-btn">34</button>
                            <button class="select-btn">36</button>
                            <button class="select-btn">38</button>
                        </div>

                        <div class="row ml-3">
                            <h5 class="text-center my-auto"> Cup </h5>
                            <button class="select-btn">AA</button>
                            <button class="select-btn">A</button>
                            <button class="select-btn">B</button>
                            <button class="select-btn">C</button>
                            <button class="select-btn">D</button>
                            <button class="select-btn">DD</button>
                            <button class="select-btn">DDD</button>
                            <button class="select-btn">G</button>
                            <button class="select-btn">+</button>
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
                            <button class="select-btn">High Rise</button>
                            <button class="select-btn">Natural</button>
                            <button class="select-btn">Medium Rise</button>
                            <button class="select-btn">Low Rise</button>
                        </div>

                        <div class="row ml-3 pant-setting">
                            <h5 class="text-center my-auto color-brown"> Rise </h5>
                            <button class="select-btn">Straight</button>
                            <button class="select-btn">Tapered</button>
                            <button class="select-btn">Bootcut</button>
                        </div>

                        <div class="row ml-3 pant-setting">
                            <h5 class="text-center my-auto color-brown"> Fit </h5>
                            <button class="select-btn">Relaxed</button>
                            <button class="select-btn">Classic</button>
                            <button class="select-btn">Slim</button>
                            <button class="select-btn">Skinny</button>
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
                            <button class="select-btn">0</button>
                            <button class="select-btn">2</button>
                            <button class="select-btn">4</button>
                            <button class="select-btn">6</button>
                            <button class="select-btn">8</button>
                            <button class="select-btn">10</button>
                            <button class="select-btn">12</button>
                            <button class="select-btn">14</button>
                            <button class="select-btn">16</button>
                            <button class="select-btn">18</button>
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
                            <button class="select-btn">Mini</button>
                            <button class="select-btn">Knee</button>
                            <button class="select-btn">Maxi</button>
                            <button class="select-btn">No Skirts</button>
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
                            <button class="select-btn">Shift</button>
                            <button class="select-btn">Fit & Flare</button>
                            <button class="select-btn">Sheath</button>
                            <button class="select-btn">A-line</button>
                            <button class="select-btn">I don't know</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row item end-part">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Shoe Size</p>
                        <div class="img-wrap">
                            <img class="img-content-small" src="/images/customer-signup/women-shoe.svg" />
                        </div>

                        <div class="row justify-content-center">
                            <button class="select-btn">5.5</button>
                            <button class="select-btn">6</button>
                            <button class="select-btn">6.5</button>
                            <button class="select-btn">7</button>
                            <button class="select-btn">7.5</button>
                            <button class="select-btn">8</button>
                            <button class="select-btn">8.5</button>
                            <button class="select-btn">9</button>
                            <button class="select-btn">9.5</button>
                            <button class="select-btn">10</button>
                            <button class="select-btn">10.5</button>
                            <button class="select-btn">11</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')

@endsection
