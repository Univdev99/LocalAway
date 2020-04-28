<div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content w-auto">
        <div class="modal-body py-4">
            <form id="upload-modal-form" action="/stylist/shop/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <h5 class="upload-modal-text my-3 text-center">Upload here:</h5>
                <input id="modal-upload-type" name="upload-type" hidden>
                <div class="fileinput fileinput-new mx-auto" data-provides="fileinput">
                    <div class="row mx-auto">
                        <div class="col">
                            <div class="btn-plus btn-file mx-auto my-4 text-center">
                                <i class="fa fa-plus" style="line-height: 50px;"></i>
                                <input type="hidden" value="" name="...">
                                <input type="file" name="product" required>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col mx-auto">
                            <h6 class="fileinput-filename"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn-brown">Upload</button>
                    </div>
                </div>
                <!-- </div> -->
            </form>
        </div>
        <button id="btn-access-back"><i class="fa fa-chevron-left"></i></button>
    </div>
    </div>
</div>


