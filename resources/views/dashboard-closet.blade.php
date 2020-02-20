@extends('layouts.app')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
@endsection

@section('content')
    <form class = "col-6" method="post" action="/admin/file/vcUpload" enctype="multipart/form-data">
        <label class="btn btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="imgInp">Add files...</label>
        <input type="file" name="image" id="imgInp" required/>
        {{-- <label>
            Title
            <input type="text" name="title" required/>
        </label> --}}
        <input type="submit" class="btn btn-primary" value="Start upload" />
    </form>
    <form id="fileupload" action="/admin/file/vcUpload" method="POST" enctype="multipart/form-data" class="">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-info fileinput-button">
                    <i class="fa fa-plus"></i>
                    <span> Add files... </span>
                    <input type="file" name="files[]" multiple=""> </span>
                <button type="submit" class="btn btn-success start">
                    <i class="fa fa-upload"></i>
                    <span> Start upload </span>
                </button>
                <button type="reset" class="btn btn-dark cancel">
                    <i class="fa fa-times"></i>
                    <span> Cancel upload </span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="fa fa-trash"></i>
                    <span> Delete </span>
                </button>
                <!-- The global file processing state -->
                <span class="fileupload-process"> </span>
            </div>
            <!-- The global progress information -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width: 0%;"> </div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped clearfix">
            <tbody class="files"> </tbody>
        </table>
    </form>
@endsection

@section('page_vendor_scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


@endsection

@section('page_scripts')

@endsection
