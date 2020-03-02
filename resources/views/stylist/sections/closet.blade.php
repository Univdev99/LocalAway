@extends('stylist.layout')

@section('css')
    <link rel="stylesheet" href="/css/stylist/grid.css">
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

    <div class="filter my-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 ">
                <button class="btn-all active" data-btn="all">See All</button>
                @if (count($filter) > 0)
                    @foreach ($filter as $index)
                        <button class="btn-filter" data-btn="{{ $index->id }}">{{ $index->name }}</button>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-9" >
                <div class="container list-box clearfix">
                    <div class="clearfix">
                        <ol class="products-list clearfix" id="post-data">
                            @include('stylist.sections.products')
                        </ol>
                        <div class="ajax-load text-center" style="display:none">
                            <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>

</section>
@endsection

@section('js')

<script src="/js/closet.js"></script>

@endsection

