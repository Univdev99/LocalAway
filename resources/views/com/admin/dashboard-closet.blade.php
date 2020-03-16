@extends('layouts.app')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
@endsection

@section('content')
    <form id="fileupload" action="/admin/file/vcUpload" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="col-md-9">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-info btn-file">
                    <i class="fa fa-plus"></i>
                    <span class="fileinput-new"> Add file... </span>
                    <span class="fileinput-exists"> Change </span>
                    <input type="hidden" value="" name="...">
                    <input type="file" name="product" required>
                </span>
                <span class="fileinput-filename"></span> &nbsp;
                <button type="submit" class="btn btn-success start">
                    <i class="fa fa-upload"></i>
                    <span> Start upload </span>
                </button>
                <button type="reset" class="btn btn-danger cancel">
                    <i class="fa fa-times"></i>
                    <span> Cancel upload </span>
                </button>

            </div>
        </div>
    </form>
@endsection

@section('page_vendor_scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


@endsection

@section('page_scripts')
<script src="/js/fileinput.js"></script>

@endsection
