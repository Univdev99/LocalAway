<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
    <title>Go Survey</title>
    <link rel="stylesheet" href="/css/newlanding/survey/survey.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/59286bb0a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid m-0 p-0">
                <h2 id="title" class="row justify-content-center font-weight-bold d-none" style="opacity:0;"></h2>
            <form action="{{ route('post.store') }}" method="post" class="wizard-container" id='survey-form'>
                {{ csrf_field() }}

                <div class="wizard-body" style="top: 0">

                    <div class="item item-show row start-part">
                        <div class="col-lg-4 text-center">
                            <img src="/images/newlanding/logo.png" alt="logo" width="100">       
                            <p class="h5 mt-3 text-secondary">Tell us more about your preferences and we’ll send you what you need.</p>
                            <button class="btn-circle my-3 item-button justify-content-center" data-key="13" id="start-button" type="button">Start</button>
                            <div class="arrow-btn">Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row item-show first-part">
                        <div class="col-lg-6">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2 m-0" aria-hidden="true"></i>
                                    What kind of fashion are you selling?<br>
                                </span>
                                <p class="color-brown mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="1-a" name="fashion_style[]" value="women's colthes">
                                <label for="1-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Women’s Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="1-b" name="fashion_style[]" value="men's colthes">
                                <label for="1-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Men’s Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="1-c" name="fashion_style[]" value="kid's colthes">
                                <label for="1-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Kids' Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="1-d" name="fashion_style[]" value="second-hand colthes">
                                <label for="1-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Second-Hand Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="1-e" name="fashion_style[]" value="sustainable-brand">
                                <label for="1-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Sustainable Brands</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="1-f" name="fashion_style[]" value="sales">
                                <label for="1-f" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Sales-Items/Outlet</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="71"  id="1-g" name="fashion_style[]" value="accessories">
                                <label for="1-g" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Accessories( Sunglasses, Jewelry, Bags, Hats, Scarves...)</span>
                                    </div>
                                </label>                                    

                                <input type="checkbox" data-key="72"  id="1-h" name="fashion_style[]" value="event">
                                <label for="1-h" class="answer d-flex">
                                    <div class="character ">
                                        <span>H</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Event-specific</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What kind of style does your boutique offer?<br>
                                </span>
                            </div>
                            <div class="answers my-4">
                                <input type="radio" data-key="65"  id="2-a" name="boutique_style" value="Business">
                                <label for="2-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Business</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="2-b" name="boutique_style" value="Casual">
                                <label for="2-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Casual</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="2-c" name="boutique_style" value="Chic/Elegant">
                                <label for="2-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Chic/Elegant</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="2-d" name="boutique_style" value="Sophisticated">
                                <label for="2-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Sophisticated</span>
                                    </div>
                                </label>
                                <input type="radio" data-key="69"  id="2-e" name="boutique_style" value="Vintage">
                                <label for="2-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Vintage</span>
                                    </div>
                                </label>
                                
                                <input type="radio" data-key="70"  id="2-f" name="boutique_style" value="Sportive">
                                <label for="2-f" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Sportive</span>
                                    </div>
                                </label>
                            
                                <input type="radio" data-key="71"  id="2-g" name="boutique_style" value="Bohemian">
                                <label for="2-g" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Bohemian</span>
                                    </div>
                                </label>
                            
                                <input type="radio" data-key="72"  id="2-h" name="boutique_style" value="Rocker">
                                <label for="2-h" class="answer d-flex">
                                    <div class="character ">
                                        <span>H</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Rocker</span>
                                    </div>
                                </label>
                                
                                <input type="radio" data-key="73"  id="2-i" name="boutique_style" value="Maternity">
                                <label for="2-i" class="answer d-flex">
                                    <div class="character ">
                                        <span>I</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Maternity</span>
                                    </div>
                                </label>
                                
                                <input type="radio" data-key="74"  id="2-j" name="boutique_style" value="Event-specific">
                                <label for="2-j" class="answer d-flex">
                                    <div class="character ">
                                        <span>J</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Event-specific</span>
                                    </div>
                                </label>
                                
                                <input type="radio" data-key="75"  id="2-k" name="boutique_style" value="Other">
                                <label for="2-k" class="answer d-flex other">
                                    <div class="character ">
                                        <span>K</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other</span>
                                        <input type="text" class="hidden-text" style="display: none;" name="boutique_style_other">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What sizes do you sell?<br>
                                </span>
                                <p class="color-brown mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers my-4">
                                <input type="checkbox" data-key="65"  id="3-a" name="size[]" value="XS / US Size 0-4 / EU Size 30-34">
                                <label for="3-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>XS / US Size 0-4 / EU Size 30-34</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="3-b" name="size[]" value="S / US Size 6-8 / EU Size 36-38">
                                <label for="3-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>S / US Size 6-8 / EU Size 36-38</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="3-c" name="size[]" value="M / US Size 10-12 / EU Size 40-32">
                                <label for="3-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>M / US Size 10-12 / EU Size 40-32</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="3-d" name="size[]" value="L / US Size 14-16 / EU Size 44-46">
                                <label for="3-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>L / US Size 14-16 / EU Size 44-46</span>
                                    </div>
                                </label>
                                <input type="checkbox" data-key="69"  id="3-e" name="size[]" value="XL / US Size 18-20 / EU Size 48-50">
                                <label for="3-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>XL / US Size 18-20 / EU Size 48-50</span>
                                    </div>
                                </label>
                                
                                <input type="checkbox" data-key="70"  id="3-f" name="size[]" value="XXL / US Size 22-24  / EU Size 52-54">
                                <label for="3-f" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>XXL / US Size 22-24  / EU Size 52-54</span>
                                    </div>
                                </label>
                            
                                <input type="checkbox" data-key="71"  id="3-g" name="size[]" value="XXXL / US Size 26- 28 / EU Size 56-58">
                                <label for="3-g" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>XXXL / US Size 26- 28 / EU Size 56-58</span>
                                    </div>
                                </label>
                            
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How many fashion items would you like to add to your L/A portfolio?<br>
                                </span>
                            </div>
                            <div class="answers my-4">
                                <input type="radio" data-key="65"  id="4-a" name="fashion_items" value="< 5">
                                <label for="4-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span> < 5</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="4-b" name="fashion_items" value="5 - 10">
                                <label for="4-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span> 5 - 10</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="4-c" name="fashion_items" value="10 - 20">
                                <label for="4-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span> 10 - 20</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="4-d" name="fashion_items" value="> 20">
                                <label for="4-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>> 20</span>
                                    </div>
                                </label>
                                
                            
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you have an online shop, and if so, on what platform(s)?<br>
                                </span>
                                <p class="color-brown mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="5-a" name="online_shop[]" value="No">
                                <label for="5-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="5-b" name="online_shop[]" value="Boutique’s webpage">
                                <label for="5-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Boutique’s webpage</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="5-c" name="online_shop[]" value="Instagram">
                                <label for="5-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Instagram</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="5-d" name="online_shop[]" value="Facebook">
                                <label for="5-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Facebook</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="5-e" name="online_shop[]" value="Partner shop">
                                <label for="5-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Partner shop</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="5-f" name="online_shop[]" value="Other">
                                <label for="5-f" class="answer d-flex other">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other</span>
                                        <input type="text" class="hidden-text" style="display: none;" name="online_shop_other">
                                    </div>
                                </label>

                                
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What technology you are using for your online shop?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="6-a" name="shop_technology" value="Shopify">
                                <label for="6-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Shopify</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="6-b" name="shop_technology" value="Magento">
                                <label for="6-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Magento</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="6-c" name="shop_technology" value="Other">
                                <label for="6-c" class="answer d-flex other">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other</span>
                                        <input type="text" class="hidden-text"  name="shop_technology_other" style="display: none;">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How many people are employed by your boutique?<br>
                                </span>
                            </div>
                            <div class="answers my-4">
                                <input type="radio" data-key="65"  id="7-a" name="employee_number" value="1">
                                <label for="7-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>1</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="7-b" name="employee_number" value="2">
                                <label for="7-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>2</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="7-c" name="employee_number" value="3">
                                <label for="7-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>3</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="7-d" name="employee_number" value="4">
                                <label for="7-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>4</span>
                                    </div>
                                </label>
                                <input type="radio" data-key="69"  id="7-e" name="employee_number" value="5">
                                <label for="7-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>5</span>
                                    </div>
                                </label>
                                
                                <input type="radio" data-key="70"  id="7-f" name="employee_number" value=">5">
                                <label for="7-f" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>>5</span>
                                    </div>
                                </label>
                            
                                <input type="radio" data-key="71"  id="7-g" name="employee_number" value=">10">
                                <label for="7-g" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>>10</span>
                                    </div>
                                </label>
                            
                                <input type="radio" data-key="72"  id="7-h" name="employee_number" value=">20">
                                <label for="7-h" class="answer d-flex">
                                    <div class="character ">
                                        <span>H</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>>20</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How do you style your customers?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="8-a" name="customer_style" value="We are also stylists" class="link-expand">
                                <label for="8-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>We are also stylists</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="8-b" name="customer_style" value="We work with/ have separate stylist"  class="link-expand">
                                <label for="8-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>We work with/ have separate stylist</span>
                                    </div>
                                </label>

                                <!-- <label class="answer expanded d-flex" style="visibility: hidden;">
                                    <span>How many:</span>
                                    <div class="answer-body">
                                        <input type="text" class="hidden-text" name="stylist_number">
                                    </div>
                                </label> -->
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What percentage of revenue comes from online business?<br>
                                </span>
                            </div>
                            <div class="answers my-4">
                                <input type="radio" data-key="65"  id="9-a" name="online_percentage" value="10%">
                                <label for="9-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>< 10%</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="9-b" name="online_percentage" value="10-30%">
                                <label for="9-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>10-30%</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="9-c" name="online_percentage" value="30-60%">
                                <label for="9-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>30-60%</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="9-d" name="online_percentage" value="60-80%">
                                <label for="9-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>60-80%</span>
                                    </div>
                                </label>
                                <input type="radio" data-key="69"  id="9-e" name="online_percentage" value="80-90%">
                                <label for="9-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>80-90%</span>
                                    </div>
                                </label>
                                
                                <input type="radio" data-key="70"  id="9-f" name="online_percentage" value="90-100%">
                                <label for="9-f" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>90-100%</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What percentage of customers are locals/”friends”/referring  (vs. 1-time customers (from abroad)?<br>
                                </span>
                            </div>
                            <div class="answers my-4">
                                <input type="radio" data-key="65"  id="10-a" name="customer_percent" value="<50%">
                                <label for="10-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>< 50%</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="10-b" name="customer_percent" value=">50%">
                                <label for="10-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>> 50%</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="10-c" name="customer_percent" value=">75%">
                                <label for="10-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>> 75%</span>
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row first-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How do you advertise your brand?
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="11-a" name="advertize_method" value="Google">
                                <label for="11-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Google</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="11-b" name="advertize_method" value="Facebook">
                                <label for="11-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Facebook</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="11-c" name="advertize_method" value="Instagram">
                                <label for="11-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Instagram</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="11-d" name="advertize_method" value="Offline">
                                <label for="11-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Offline (Flyers, Newspaper, Magazines, Events,...)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row second-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What are your target customers?
                                </span>
                                <p class="color-brown mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="12-a" name="taget_customer[]" value="Low income level">
                                <label for="12-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Low income level</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="12-b" name="taget_customer[]" value="Medium income level">
                                <label for="12-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Medium income level</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="12-c" name="taget_customer[]" value="High income level">
                                <label for="12-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>High income level</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="12-d" name="taget_customer[]" value="Age below 30">
                                <label for="12-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Age below 30</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="12-e" name="taget_customer[]" value="Age between 30 and 50">
                                <label for="12-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Age between 30 and 50</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="12-f" name="taget_customer[]" value="Age 50+">
                                <label for="12-f" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Age 50+</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="71"  id="12-g" name="taget_customer[]" value="Local customers">
                                <label for="12-g" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Local customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="72"  id="12-h" name="taget_customer[]" value="International customers">
                                <label for="12-h" class="answer d-flex">
                                    <div class="character ">
                                        <span>H</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>International customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="73"  id="12-i" name="taget_customer[]" value="Likely to travel ">
                                <label for="12-i" class="answer d-flex">
                                    <div class="character ">
                                        <span>I</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Likely to travel </span>
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row third-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How would you like to deliver illustrations of your fashion pieces<br> (for the upload to our fashion portfolio)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="13-a" name="illustration_method" value="Send transparent .png files">
                                <label for="13-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Send transparent .png files</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="13-b" name="illustration_method" value="Send photographs">
                                <label for="13-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Send photographs</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="13-c" name="illustration_method" value="I would like to request a professional photographer">
                                <label for="13-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>I would like to request a professional photographer</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How would you like to get notified in case of a sold item?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="14-a" name="notification_method" value="E-mail">
                                <label for="14-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>E-Mail</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="14-b" name="notification_method" value="Text Message">
                                <label for="14-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Text Message</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="14-c" name="notification_method" value="Other">
                                <label for="14-c" class="answer d-flex other">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other(How)</span>
                                        <input type="text" class="hidden-text" name="notification_method_other" style="display: none;">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you use an Inventory Management System (IMS)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="15-a" name="use_IMS" value="No" class="if">
                                <label for="15-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="15-b" name="use_IMS" value="Yes, Paper" class="if">
                                <label for="15-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, Paper</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="15-c" name="use_IMS" value="Yes, Excel" class="if">
                                <label for="15-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, Excel</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="15-d" name="use_IMS" value="Yes, I use a software system" class="if">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, I use a software system</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Is the shipping	 of clothes a logistic possibility for you?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="16-a" name="shipping_possiblity" value="No">
                                <label for="16-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No </span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="16-b" name="shipping_possiblity" value="Yes, international shipping">
                                <label for="16-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, international shipping</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="16-c" name="shipping_possiblity" value="Yes, but inland shipping only">
                                <label for="16-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, but inland shipping only</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="16-d" name="shipping_possiblity" value="Yes, but only by courier (parcel pick-up service)">
                                <label for="16-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, but only by courier (parcel pick-up service)</span>
                                    </div>
                                </label>


                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row ">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What payment services do you accept?
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="17-a" name="paymnet_method" value="Cash">
                                <label for="17-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Cash</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="17-b" name="paymnet_method" value="Credit Card">
                                <label for="17-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Credit Card</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="17-c" name="paymnet_method" value="Debit">
                                <label for="17-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Debit</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="17-d" name="paymnet_method" value="Paypal">
                                <label for="17-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Paypal</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row third-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you accept returns (from LocalAway buyers)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="18-a" name="accept_return" value="No">
                                <label for="18-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="18-b" name="accept_return" value="Yes">
                                <label for="18-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="18-c" name="accept_return" value="Yes, but not for sales items">
                                <label for="18-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, but not for sales items</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row item-show forth-part">
                        <div class="col-lg-6">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2 m-0" aria-hidden="true"></i>
                                    What kind of return do you expect from renting out clothes? <br>
                                </span>
                                <p class="color-brown mt-4">Please choose up to three options that are the most important to you</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="19-a" name="return_type[]" value="Financial return on rented clothes to customers">
                                <label for="19-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Financial return on rented clothes to customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="19-b" name="return_type[]" value="Financial return on style-consulting for customers">
                                <label for="19-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Financial return on style-consulting for customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="19-c" name="return_type[]" value="Increased sales to international customers">
                                <label for="19-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Increased sales to international customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="19-d" name="return_type[]" value="Increased visibility and prominence of your boutique/brand">
                                <label for="19-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Increased visibility and prominence of your boutique/brand</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="19-e" name="return_type[]" value="Customer data (aggregated)">
                                <label for="19-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Customer data (aggregated)</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="19-f" name="return_type[]" value="Other">
                                <label for="19-f" class="answer d-flex other">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other</span>
                                        <input type="text" class="hidden-text" style="display: none;" name="return_type_other" >
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row text-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What is a good phone number to reach you in the future?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="phone" value="" placeholder = "Type your answer here..." >
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row text-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What is your postal address?
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="postal_address" value="" placeholder = "Type your answer here..." >
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row forth-part text-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Is there anything else you would like to add?
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="anything_else" value="" placeholder = "Type your answer here..." >
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row end-part">
                        <div class="col-lg-4 text-center">
                            <img src="/images/newlanding/logo.png" alt="logo" width="100">       
                            <p class="h5 mt-3 text-secondary">Thank you for your answer.</p>
                            <button type="submit" class="btn-circle my-3 item-button justify-content-center" data-key="13">Submit</a>
                        </div>
                    </div>



                    <!-- <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Is your boutique part of a fashion-chain?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="9-a" name="fashion_chain" value="">
                                <label for="9-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="9-b" name="fashion_chain" value="">
                                <label for="9-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What percentage of revenue comes from offline/online?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="revenue_percentage" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                        How What kind of fashion are you selling?y?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="combine_strategy" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What What kind of fashion are you selling?c  vs. 1-time customers (from abroad)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="abroad_percentage" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row first-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How What kind of fashion are you selling?r>
                                </span>
                                <p class="color-brown mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="14-a" name="advertize_offline[]" value="">
                                <label for="14-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Flyers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="14-b" name="advertize_offline[]" value="">
                                <label for="14-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Newspaper</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="14-c" name="advertize_offline[]" value="">
                                <label for="14-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Magazine</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="14-d" name="advertize_offline[]" value="">
                                <label for="14-d" class="answer d-flex other">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>etc</span>
                                        <input type="text" class="hidden-text" style="display: none;">
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row second-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What kind of fashion are you selling?s?<br>
                                </span>
                                <p class="color-brown mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="16-a" name="customer_habit[]" value="">
                                <label for="16-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>brand loyalty</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="16-b" name="customer_habit[]" value="">
                                <label for="16-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>impulse buyer</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="16-c" name="customer_habit[]" value="">
                                <label for="16-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>price awareness</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="16-d" name="customer_habit[]" value="">
                                <label for="16-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>quality awareness</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="16-d" name="customer_habit[]" value="">
                                <label for="16-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>unique features they look out for</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="item row third-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you need a photographer to come by and take pictures of your fashion portfolio?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="17-a" name="photographer_needed" value="">
                                <label for="17-a" class="answer d-flex">
                                    <div class="character">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="17-b" name="photographer_needed" value="">
                                <label for="17-b" class="answer d-flex">
                                    <div class="character">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, I have enough capacity and the skills to take pictures myself (based on guidelines)</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="17-c" name="photographer_needed" value="">
                                <label for="17-c" class="answer d-flex">
                                    <div class="character">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, I already have illustrations of my fashion portfolio</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How often would you need the service of a photographer?<br>(OR how often does your collection change?)<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="18-a" name="photographer_period" value="">
                                <label for="18-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Never</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="18-b" name="photographer_period" value="">
                                <label for="18-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Once/month</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="18-c" name="photographer_period" value="">
                                <label for="18-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Every 4 months</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="18-d" name="photographer_period" value="">
                                <label for="18-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Every 6 months</span>
                                    </div>
                                </label>    

                                <input type="radio" data-key="69"  id="18-e" name="photographer_period" value="">
                                <label for="18-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Once/year</span>
                                    </div>
                                </label>    
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                 
                    <div class="item row if-no" style="visibility:hidden;">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    If no, how do you keep your inventory up-to-date?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="21-a" name="inventory_update_method" value="">
                                <label for="21-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Excel</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="21-b" name="inventory_update_method" value="">
                                <label for="21-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Paper</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row if-yes" style="visibility:hidden;">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    If yes (1), what kind of IMS do you use?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="22-a" name="IMS_type" value="">
                                <label for="22-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Excel</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="22-b" name="IMS_type" value="">
                                <label for="22-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Software-Based: Name</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row if-yes" style="visibility:hidden;">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    If yes (2), do you sell your clothes through 3rd party platforms like Amazon?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="23-a" name="3rd_party" value="">
                                <label for="23-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, It is </span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="23-b" name="3rd_party" value="">
                                <label for="23-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, It is </span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="23-c" name="3rd_party" value="">
                                <label for="23-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, but I am open to sell clothes through a curated 3rd party platform</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="23-d" name="3rd_party" value="">
                                <label for="23-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, but I am open to advertise your clothes/brand on 3rd party platform</span>
                                    </div>
                                </label>


                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Would you agree on shipping several sizes to a customer (for fitting purposes)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="26-a" name="shipping_several" value="">
                                <label for="26-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="26-b" name="shipping_several" value="">
                                <label for="26-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row forth-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What do you expect from partnering with L/A?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="28-a" name="expect" value="">
                                <label for="28-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>1</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="28-b" name="expect" value="">
                                <label for="28-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>2</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="28-c" name="expect" value="">
                                <label for="28-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>3</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    I would agree to give LocalAway 10% of the price of items sold via the platform<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="29-a" name="fee" value="" class='link-expand'> 
                                <label for="29-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="29-b" name="fee" value="" class='link-expand'>
                                <label for="29-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <label class="answer expanded d-flex" style="visibility: hidden;">
                                    <span>Why:</span>
                                    <div class="answer-body">
                                        <input type="text" class="hidden-text" name="stylist_number">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div> -->

                </div>
            </form>

            
            <div class="navigation-bar d-flex" style="opacity:0;">
                    <div id="myProgress">
                            <div id ="pagination">1/23</div>
                    <div id="myBar"></div>
                </div>
                <button class="btn btn-primary prev-button mx-2">Prev</button>
                <button class="btn btn-primary next-button">Next</button>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/survey/survey.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>