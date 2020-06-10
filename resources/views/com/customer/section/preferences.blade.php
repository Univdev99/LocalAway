@extends('com.customer.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/customer/customer-signup.css">
    <link rel="stylesheet" type="text/css" href="/css/customer/avatar.css">
    <link rel="stylesheet" type="text/css" href="/css/customer/preference.css">
@endsection
@section('content')


<section class="container">
<form id="step1" class="mb-5">
    {{-- <div class="row first-row">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle mx-4 mb-3" id="kt_user_avatar_3">
            <div class="kt-avatar__holder"></div>
            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                <i class="fa fa-plus"></i>
                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
            </label>
            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                <i class="fa fa-times"></i>
            </span>
        </div>

        <div class="name text-center my-auto">
            {{-- <h4> {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h4> --}}
            <h4> Customer Localaway</h4>
        </div>
    </div> --}}
    <div class="row first-row">
        <div class="col-md-6 col-sm-12">
            <div class="my-form-row">
                <label for="gender">Gender</label>
                <input id="gender" name="gender" class="form-control" value="{{$gender}}"/>
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" value="{{auth()->user()->email}}"/>
                <label for="destination">Destination</label>
                <input id="destination" name="destination" class="form-control" value="{{$destination}}"/>
                <label for="phone-number">Phone</label>
                <input id="phone-number" class="form-control" name="phone-number" type="tel" value="{{auth()->user()->phone_number}}">
                <label for="budget">Budget</label>
                <input id="budget" name="budget" class="form-control" value="{{ $budget }}"/>
                <label for="notes">Notes</label>
                <textarea id="notes" name="notes" class="form-control" style="width: 100%; height: 8em;resize:none;" value="{{ $notes }}"></textarea>
                <label for="age">Age</label>
                <input id="age" name="age" class="form-control" type="text" value="{{$age}}"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 text-center p-5">
        @if ($complete < 4)
            <h5>Finish the <a href="/customer" class=""><u>Style Quiz</u></a> to complete your <br> preferences and start an order.</h5>
        @else
            <p class="text-left font-weight-bold">
                <strong style="color: black">Sizing</strong>
            </p>
            @if ($customer->gender == 'female')
                <div class="row">
                    <div class="col-6 quiz-item">
                        <div class="d-flex">
                            @if ($customer->body_type == 'Hourglass')
                            <img src="/images/customer-signup/body-women/type1.svg" style="height: 10em;">
                            @elseif ($customer->body_type == 'Round')
                            <img src="/images/customer-signup/body-women/type2.svg" style="height: 10em;" >

                            @elseif ($customer->body_type == 'inverted_triangle')
                            <img src="/images/customer-signup/body-women/type3.svg" style="height: 10em;" >

                            @elseif ($customer->body_type == 'pear')
                            <img src="/images/customer-signup/body-women/type4.svg" style="height: 10em;" >

                            @else
                            <img src="/images/customer-signup/body-women/type5.svg" style="height: 10em;" >
                            @endif
                            <div class="customer-quiz-value">
                                {{ ucwords(preg_replace('/_/i', ' ', $customer->body_type)) }}
                                <br/>
                                {{ $customer->height_size }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-skirt.svg" >
                        <br/>
                        Skirt Lengths <span class="customer-quiz-value">{{ $customer->skirt_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-bra-size.svg" >
                        <br/>
                        Bra Size <span class="customer-quiz-value">{{ $customer->bra_cup }} {{ $customer->bra_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-casual-shirt.svg" >
                        <br/>
                        Casual Shirts <span class="customer-quiz-value">{{ $customer->casual_shirt_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-dress.svg" >
                        <br/>
                        Dress Style <span class="customer-quiz-value">{{ $customer->dress_shirt_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-blouse.svg" >
                        <br/>
                        Button-Up Shirts <span class="customer-quiz-value">{{ $customer->buttonup_blouse_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-short-pant.svg" />
                        <br/>
                        Short Length <span class="customer-quiz-value">{{ $customer->shorts_length }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-waist.svg" />
                        <br/>
                        Waist <span class="customer-quiz-value">{{ $customer->waist_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-shoe.svg" >
                        <br/>
                        Shoe Size <span class="customer-quiz-value"{{ $customer->shoe_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/women-pant.svg" >
                        <br/>
                        Pants <span class="customer-quiz-value">{{ $customer->pant_size }}</span>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-6 quiz-item">
                        <div class="d-flex">
                            @if ($customer->body_type == 'slender')
                            <img src="/images/customer-signup/body-men/type1.svg" style="height: 10em;">
                            @elseif ($customer->body_type == 'athletic')
                            <img src="/images/customer-signup/body-men/type2.svg" style="height: 10em;" >
                            @else
                            <img src="/images/customer-signup/body-men/type3.svg" style="height: 10em;" >
                            @endif
                            <div class="ml-3">
                                <span>Body Type</span>
                                <span class="customer-quiz-value">{{ ucwords(preg_replace('/_/i', ' ', $customer->body_type)) }}</span>
                                <br/>
                                <span>Height</span>
                                <span class="customer-quiz-value">{{ $customer->height_size }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" style="width: 6em;" src="/images/customer-signup/men-casual-shirt.svg" >
                        <br/>
                        <p>Casual Shirt</p>
                        <div>
                            <span>Size</span><span class="customer-quiz-value">{{ $customer->casual_shirt_size }}</span><br/>
                            <span>Fit</span><span class="customer-quiz-value">{{ ucfirst($customer->casual_fit) }}</span>
                        </div>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-dress-shirt.svg" >
                        <br/>
                        <p>Dress Shirt</p>
                        <div>
                            <span>Size</span><span class="customer-quiz-value">{{ $customer->dress_shirt_size }}</span><br/>
                            <span>Collar Fit</span><span class="customer-quiz-value">{{ ucfirst($customer->dress_shirt_collar_fit) }}</span><br/>
                            <span>Shoulder Fit</span><span class="customer-quiz-value">{{ ucfirst($customer->dressshoulder_fit) }}</span>
                        </div>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-pant.svg" style="width: 2em;" />
                        <br/>
                        <p>Pant</p>
                        <div>
                            <span>Waist Fit</span><span class="customer-quiz-value">{{ ucfirst($customer->pant_waist_fit) }}</span><br/>
                            <span>Rise</span><span class="customer-quiz-value">{{ ucfirst($customer->pant_rise) }}</span><br/>
                            <span>Fit</span><span class="customer-quiz-value">{{ ucfirst($customer->pant_fit) }}</span><br/>
                            <span>Size</span><span class="customer-quiz-value">{{ ucfirst($customer->pant_size) }}</span><br/>
                        </div>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-waist.svg" />
                        <br/>
                        Waist <span class="customer-quiz-value">{{ $customer->waist_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-short-pant.svg" />
                        <br/>
                        Shorts Length<span class="customer-quiz-value">{{ $customer->shorts_length }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                        <img class="quiz-image" src="/images/customer-signup/men-shoe.svg" />
                        <br/>
                        Shoe Size <span class="customer-quiz-value">{{ $customer->shoe_size }}</span>
                    </div>
                    <div class="col-6 quiz-item">
                    @if (strtolower($customer->style) == 'casual')
                        <img class="quiz-image" src="/images/customer-signup/men-style-casual.svg" />
                    @elseif (strtolower($customer->style) == 'classic')
                        <img class="quiz-image" src="/images/customer-signup/men-style-classic.svg" />
                    @else
                        <img class="quiz-image" src="/images/customer-signup/men-style-edgy.svg" />
                    @endif
                        <br/>
                        Personal Style <span class="customer-quiz-value">{{ ucfirst($customer->style) }}</span>
                    </div>
                </div>
            @endif

            <p class="text-left font-weight-bold">
                <strong style="color: black;">Dislikes</strong>
            </p>

            <div class="text-left">Color</div>
            <div class="d-flex">
            @forelse  ($dislike_color as $color)
                <div style="background-color: {{ $color }}; border-radius: 10px; margin-right: 10px; width: 3em; height: 3em"></div>
            @empty
                <small>Undefined</small>
            @endforelse
            </div>

            <div class="text-left mt-3">Materials</div>
            <div class="d-flex">
            @forelse ($dislike_material as $material)
                <div class="customer-quiz-value">{{ $material }}</div>
            @empty
                <small>Undefined</small>
            @endforelse
            </div>

            <div class="text-left mt-3">Patterns</div>
            <div class="d-flex">
            @forelse ($dislike_pattern as $pattern)
                <img class="img-content" src="/images/customer-signup/{{ strtolower($pattern) }}.png">
            @empty
                <small>Undefined</small>
            @endforelse
            </div>
        @endif
        </div>
    </div>
    </form>
</section>

@endsection

@section('js')
    <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
@endsection
