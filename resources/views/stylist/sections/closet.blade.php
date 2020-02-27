@extends('stylist.layout')

@section('css')


<style>
.title {
    margin-top: 120px;
}
div.scrollmenu {

    overflow: auto;
    white-space: nowrap;
}

.btn-filter {
    display: inline-block;
    color: black;
    text-align: center;
    text-decoration: none;
    padding-left:20px;
    padding-right:20px;
    padding-bottom:5px;
    padding-top:5px;
    border: 2px solid #03bfb0!important;
    border-radius: 30px;
}

.btn-filter.active {
    background-color: #03bfb0;
}
</style>
@endsection

@section('content')

<section class="content">
    <div class="header">
        <div class="row justify-content-center align-items-center">
            <div class="col-md text-center title">
                <h1 class="heading">Closet</h1>
            </div>
        </div>
    </div>

    <div class="filter">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 ">
                @if (count($filter) > 0)
                    @foreach ($filter as $index)
                        <button class="btn-filter">{{ $index->name }}</button>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <div class="container">



    </div>
</section>
@endsection


