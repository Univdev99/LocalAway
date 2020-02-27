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
                @if (count($filter) > 0)
                    @foreach ($filter as $index)
                        <button class="btn-filter">{{ $index->name }}</button>
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

<script type="text/javascript">
    var page = 1;
    $(document).ready(function (){
        loadMoreData(page);
    });
    $(".btn-filter").click(function (){
        if($(this).hasClass("active")){
            this.className = this.className.replace(" active", "");
        }else{
            this.className +=" active";
        }
    });


    $(window).scroll(function() {

        console.log($(document).height());
        if (Math.round($(window).scrollTop() + $(window).height()) >= Math.round($(document).height())) {
            page++;
            loadMoreData(page);
        }
    });

    function loadMoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: "get",
                beforeSend: function() {
                    $('.ajax-load').show();
                }
            })
            .done(function(data) {
                if (data.html == "") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                // alert('server not responding...');
            });
    }
</script>

@endsection

