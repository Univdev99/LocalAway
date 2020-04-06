<div class="modal fade" id="ai_access_modal" role="dialog" aria-labelledby="aiModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content w-auto">
            <div class="modal-body p-5">
            <form id="request-access-form" >
                <div class="text-center">
                    <img class="d-lg-block mx-auto my-4 w-100" src="/images/green-logo.png" style="max-width:40px;" alt="">
                </div>
                <div class="col">
                    <div class="d-flex" style="flex-direction: column;height: 100%;justify-content: space-between;">
                        <h4 class="font-weight-bold mb-4 question text-center congrate title font-orange">Welcome to LocalAway</h4>
                        <p class="text-center mb-4 ">Please enter your members<br> access code to enter. </p>
                    </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control h-auto" name="name" id="access-code" required placeholder="Access Code">
                    <span id="access_code_error" class="invalid-feedback" role="alert">
                        <strong>This access code does not match our record.</strong>
                    </span>
                </div>

                <div class="clearfix text-center">
                    <div class="spinner-border" role="status" style="display:none;">
                    <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <input type="submit" id="btn-access-submit" class="btn btn-brown text-white text-center btn-modal" value="Submit"/>
                </div>

                <div class="text-center mt-4">
                    <p class="text-center mb-4 ">Don't have a code?</p>
                    <input type="button" id="btn-request-access"  class="btn btn-brown text-white text-center btn-modal" value="Request Access"/>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

