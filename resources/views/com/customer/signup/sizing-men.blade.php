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
        <div class="men">
            <div class="row item first-row item-show">
                <div class="m-auto text-center">
                        <p class="mt-3">What is your body type?</p>
                    <div class="row">
                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap body-focus">
                                <img class="img-content" src="/images/customer-signup/body-men/type1.svg" />
                            </div>
                            <p>Slender</p>
                        </div>

                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap">
                                <img class="img-content" src="/images/customer-signup/body-men/type2.svg" />
                            </div>
                            <p>Athletic</p>
                        </div>

                        <div class="d-block flex-wrap m-4 p-4 text-center">
                            <div class="img-wrap">
                                <img class="img-content" src="/images/customer-signup/body-men/type3.svg" />
                            </div>
                            <p>Husky</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row item">
                <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Casual Shirts?</p>
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/men-casual-shirt.svg" />
                        </div>

                        <div class="row justify-content-center">
                            <button class="select-btn">S</button>
                            <button class="select-btn">M</button>
                            <button class="select-btn selected">L</button>
                            <button class="select-btn">XL</button>
                            <button class="select-btn">XXL</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row item">
                <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Dress shirt size?</p>
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/men-dress-shirt.svg" />
                        </div>

                        <div class="row justify-content-center">
                            <button class="select-btn">S</button>
                            <button class="select-btn">M</button>
                            <button class="select-btn">L</button>
                            <button class="select-btn">XL</button>
                            <button class="select-btn">XXL</button>
                        </div>

                        <div class="row p-4">
                            <div class="col-6">
                                <p class="text-left pl-2">Shirt Collar</p>
                                <select name="men_button_up_shirts_fit" class="afit-select">
                                    <option value="none" placeholder="How do you like the fit?" hidden>How do you like the fit?</option>
                                    <option value="smaller">Smaller</option>
                                    <option value="normal">Normal</option>
                                    <option value="larger">Larger</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <p class="text-left p1-2">Shirt Shoulder</p>
                                <select name="men_button_up_shirts_fit" class="fit-select">
                                    <option value="none" placeholder="How do you like the fit?" hidden>How do you like the fit?</option>
                                    <option value="smaller">Smaller</option>
                                    <option value="normal">Normal</option>
                                    <option value="larger">Larger</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row item">
                <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Pant fit?</p>
                        <div class="img-wrap">
                            <img class="img-content" src="/images/customer-signup/men-pant.svg" />
                        </div>

                        <div class="row ml-3 pant-setting">
                            <h5 class="text-center my-auto color-brown"> Waist </h5>
                            <button class="select-btn">High Rise</button>
                            <button class="select-btn">Natural</button>
                            <button class="select-btn">Medium Rise</button>
                            <button class="select-btn">Low Rise</button>
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
                <div class="col-xl-6 col-lg-8 col-md-10 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Waist in Inches</p>
                        <div class="img-wrap">
                            <img class="img-content-small" src="/images/customer-signup/men-waist.svg" />
                        </div>

                        <div class="row justify-content-center">
                            <button class="select-btn">31</button>
                            <button class="select-btn">32</button>
                            <button class="select-btn">33</button>
                            <button class="select-btn">34</button>
                            <button class="select-btn">35</button>
                            <button class="select-btn">36</button>
                            <button class="select-btn">37</button>
                            <button class="select-btn">38</button>
                            <button class="select-btn">39</button>
                            <button class="select-btn">40</button>
                            <button class="select-btn">41</button>
                            <button class="select-btn">42</button>
                            <button class="select-btn">43</button>
                            <button class="select-btn">44</button>
                            <button class="select-btn">45</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row item">
                <div class="col-xl-8 col-lg-10 col-md-12 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Shorts Length?</p>
                        <div class="img-wrap">
                            <img class="img-content-small" src="/images/customer-signup/men-short-pant.svg" />
                        </div>

                        <div class="row justify-content-center">
                            <button class="select-btn">at the knee</button>
                            <button class="select-btn">above the knee</button>
                            <button class="select-btn">lower thigh</button>
                            <button class="select-btn">No shorts</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row item end-part">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center mx-auto">
                    <div class="my-form-row">
                        <p class="mt-3">Shoe Size</p>
                        <div class="img-wrap">
                            <img class="img-content-small" src="/images/customer-signup/men-shoe.svg" />
                        </div>

                        <div class="row justify-content-center">
                            <button class="select-btn">7</button>
                            <button class="select-btn">7.5</button>
                            <button class="select-btn">8</button>
                            <button class="select-btn">8.5</button>
                            <button class="select-btn">9</button>
                            <button class="select-btn">9.5</button>
                            <button class="select-btn">10</button>
                            <button class="select-btn">10.5</button>
                            <button class="select-btn">11</button>
                            <button class="select-btn">11.5</button>
                            <button class="select-btn">12</button>
                            <button class="select-btn">12.5</button>
                            <button class="select-btn">13</button>
                            <button class="select-btn">13.5</button>
                            <button class="select-btn">14</button>
                            <button class="select-btn">14.5</button>
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
