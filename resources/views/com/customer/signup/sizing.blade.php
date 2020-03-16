@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container">
    <form id="sizing" method="POST" action="{{route('customer.signup.sizing.save')}}" enctype="multipart/form-data">
        <div class="row first-row">

            <div class="col-12 mt-3">
                    <p class="mt-3">What is your body type?</p>

                    <div class="d-flex flex-wrap mb-2">
                        <img class="woman-body-type mr-3" src="/images/customer-signup/body-men/type1.svg" />
                        <label >Slender</label>
                    </div>

                    <div class="d-flex flex-wrap mb-2">
                        <img class="woman-body-type mr-3" src="/images/customer-signup/body-men/type2.svg" />
                        <label >Athletic</label>
                    </div>

                    <div class="d-flex flex-wrap mb-2">
                        <img class="woman-body-type mr-3" src="/images/customer-signup/body-men/type3.svg" />
                        <label >Husky</label>
                    </div>

            </div>

            <div class="col-12">
            <div class="my-form-row">
                <img src="/images/customer-signup/casual-shirt.svg" />
                <p class="mt-3">Casual Shirts?</p>

                <label class="radio-container mb-2">
                XS
                <input type="radio" name="men_casual_shirts" value="XS">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                S
                <input type="radio" name="men_casual_shirts" value="S">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                M
                <input type="radio" name="men_casual_shirts" value="M">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                L
                <input type="radio" name="men_casual_shirts" value="L" checked>
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                XL
                <input type="radio" name="men_casual_shirts" value="XL">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>


            </div>
            </div>

            <div class="col-12">
            <div class="my-form-row">
                <img src="/images/customer-signup/button-up-shirt.svg" />
                <p class="mt-3">Button-Up Shirts?</p>

                <label class="radio-container mb-2">
                XS
                <input type="radio" name="men_button_up_shirts" value="XS">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                S
                <input type="radio" name="men_button_up_shirts" value="S">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                M
                <input type="radio" name="men_button_up_shirts" value="M">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                L
                <input type="radio" name="men_button_up_shirts" value="L" checked>
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                XL
                <input type="radio" name="men_button_up_shirts" value="XL">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <select name="men_button_up_shirts_fit" class="form-control fit-select">
                <option value="none" placeholder="How do you like to fit?" hidden>How do you like to fit?</option>
                <option value="smaller">Smaller</option>
                <option value="normal">Normal</option>
                <option value="larger">Larger</option>
                </select>
            </div>
            </div>

            <div class="col-12">
            <div class="my-form-row">
                <img src="/images/customer-signup/waist.svg" />
                <p class="mt-3">Waist?</p>

                <label class="radio-container mb-2">
                36(0)
                <input type="radio" name="men_waist" value="36">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                38(2)
                <input type="radio" name="men_waist" value="38">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                40(6)
                <input type="radio" name="men_waist" value="40">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                42(8)
                <input type="radio" name="men_waist" value="42" checked>
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                43(10)
                <input type="radio" name="men_waist" value="43">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>
            </div>
            </div>

            <div class="col-12">
            <div class="my-form-row">
                <img src="/images/customer-signup/inseams.svg" />
                <p class="mt-3">Inseams?</p>

                <label class="radio-container mb-2">
                24
                <input type="radio" name="men_inseams" value="24">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                25
                <input type="radio" name="men_inseams" value="25">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                26
                <input type="radio" name="men_inseams" value="26">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                26.5
                <input type="radio" name="men_inseams" value="26.5" checked>
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                27
                <input type="radio" name="men_inseams" value="27">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>
            </div>
            </div>

            <div class="col-12">
            <div class="my-form-row">
                <img src="/images/customer-signup/jeans.svg" />
                <p class="mt-3">How do you like to jeans to fit?</p>

                <label class="radio-container mb-2">
                I'm a no on jeans.
                <input type="radio" name="men_jeans" value="none" checked>
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                38(2)
                <input type="radio" name="men_jeans" value="38">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                40(4)
                <input type="radio" name="men_jeans" value="40">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                42(6)
                <input type="radio" name="men_jeans" value="42">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                44(8)
                <input type="radio" name="men_jeans" value="44">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                46(10)
                <input type="radio" name="men_jeans" value="46">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>
            </div>
            </div>


            <div class="col-12">
            <div class="my-form-row">
                <p class="question">Question 7</p>

                <img src="/images/customer-signup/shorts.svg" />
                <p class="mt-3">How do you prefer shorts?</p>

                <label class="radio-container mb-2">
                I don't wear shorts
                <input type="radio" name="men_shorts" value="none">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                At the knee
                <input type="radio" name="men_shorts" value="knee">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                Above the knee
                <input type="radio" name="men_shorts" value="above_knee">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                Lower thigh
                <input type="radio" name="men_shorts" value="lower_thigh" checked>
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <label class="radio-container mb-2">
                Upper thigh
                <input type="radio" name="men_shorts" value="upper_thigh">
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
                </label>

                <select name="men_shorts_fit" class="form-control fit-select">
                <option value="none" placeholder="How do you like to fit?" hidden>How do you like to fit?</option>
                <option value="smaller">Smaller</option>
                <option value="normal">Normal</option>
                <option value="larger">Larger</option>
                </select>
                </select>
            </div>
            </div>

            <div class="col-12">
            <div class="my-form-row">
                <p class="question">Question 8</p>

                <img src="/images/customer-signup/men-shoe.svg" />
                <p class="mt-3">Shoe size?</p>

                <div class="row">
                <div class="col-6">
                    <label class="radio-container mb-2">
                    35.5(5.5)
                    <input type="radio" name="men_shoe" value="35.5">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    38.5(8.5)
                    <input type="radio" name="men_shoe" value="38.5">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    36(6)
                    <input type="radio" name="men_shoe" value="36">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    39
                    <input type="radio" name="men_shoe" value="39(9)">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    36.5(6.5)
                    <input type="radio" name="men_shoe" value="36.5">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    39.5(9.5)
                    <input type="radio" name="men_shoe" value="39.5">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    37(7)
                    <input type="radio" name="men_shoe" value="37" checked>
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    40(10)
                    <input type="radio" name="men_shoe" value="40">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    37.5(7.5)
                    <input type="radio" name="men_shoe" value="37.5">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    41(11)
                    <input type="radio" name="men_shoe" value="41">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    38(8)
                    <input type="radio" name="men_shoe" value="38">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>

                <div class="col-6">
                    <label class="radio-container mb-2">
                    42(12)
                    <input type="radio" name="men_shoe" value="12">
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                    </label>
                </div>
                </div>
            </div>
            </div>

            <div class="col-12">
            <div class="my-form-row text-right">
                <button class="round-btn next-button" type="button">Next Section</button>
            </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
    <script src="/js/customer/customer-signup.js"></script>
@endsection
