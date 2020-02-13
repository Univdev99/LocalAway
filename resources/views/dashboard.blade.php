@extends('layouts.app')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
@endsection

@section('content')
    <!-- <h1 class = "">{{$collection}} image edit page</h1> -->
    <form class = "col-6 text-center m-5 p-5 mx-auto" method="post" action="/admin/file/upload?collection={{$collection}}" enctype="multipart/form-data">
        <label class="btn btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="imgInp">Upload New Image</label>
        <input type="file" name="image" id="imgInp" required/>
        <label>
            Title
            <input type="text" name="title" required/>
        </label>
        <input type="submit" class="btn btn-info" value="Upload" />
    </form>
    <div class = "mt-5">
        <h1 class = "text-center">Uploaded file list</span>
    </div>
    @if ($collection == "logo" || $collection == "hero")
        @foreach($images as $image)
            @if($image->extra==1)
                <form class = "bg-success" method = "post" action="/admin/file/update/{{$image->id}}?collection={{$collection}}">
            @else    
                <form method = "post" action="/admin/file/update/{{$image->id}}?collection={{$collection}}">
            @endif
                <li class = "py-3 text-center">
                    <img width="100px"  qq-max-size="100" qq-server-scale="" src="/storage/uploads/{{$image->filename}}">
                    @csrf
                    <input type="text" name="title" value="{{$image->title}}" />
                    <button type="submit" class="btn btn-primary">Update title</button>
                    @if ($image->extra == 1)
                        <a class="btn btn-secondary" href = "/admin/file/use/{{$image->id}}?collection={{$collection}}">Use this</a>
                    @else
                        <a class="btn btn-success" href = "/admin/file/use/{{$image->id}}?collection={{$collection}}">Use this</a>
                    @endif
                    <a class="btn btn-danger" href  = "/admin/file/delete/{{$image->id}}?collection={{$collection}}">Delete</a>
                </li>
                </form>
        @endforeach
    <hr>
    @else
        @foreach($images as $image)
        <form class = "" method = "post" action="/admin/file/update/{{$image->id}}?collection={{$collection}}">
            <hr>
            <li class = "mb-2 text-center">
                <img class = "mb-4" width="100px"  qq-max-size="100" qq-server-scale="" src="/storage/uploads/{{$image->filename}}">
                @csrf
                <input type="text" name="title" value="{{$image->title}}" />
                <button type="submit" class="btn btn-primary">Update title</button>
                <a class="btn btn-danger" href  = "/admin/file/delete/{{$image->id}}?collection={{$collection}}">Delete</a>
                <a class="btn btn-outline-primary" href = "/admin/file/move-up/{{$image->id}}?collection={{$collection}}">Move Up</a>
                <a class="btn btn-outline-secondary" href = "/admin/file/move-down/{{$image->id}}?collection={{$collection}}">Move Down</a>
            </li>
        </form>
        @endforeach
    <hr>
    @endif
@endsection

@section('page_vendor_scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
@endsection

@section('page_scripts')
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection