<div class="modal fade" id="ai_request_access_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-body p-5 mx-5">
        <form id="request_send_form" > <!--action='/survey' method='post'-->
        {{-- @csrf --}}
        <img class="d-lg-block mx-auto my-5 w-100" src="/images/newlanding/logo.png" style="max-width:80px;" alt="">
            <div class="col">
            <div class="d-flex" style="flex-direction: column;height: 100%;justify-content: space-between;">
                <h2 class="font-weight-bold mb-4 question text-center congrate title font-orange">Welcome to Local Away</h2>
                <h5 class="text-center mb-4 font-weight-bold">We are excited to get to know you</h5>
            </div>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="name" id="name-text" required placeholder="Full Name">
            </div>
            <div class="form-group">
            <input type="email" class="form-control" name="email" id="email-text" required placeholder="Email">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone-text" placeholder="Phone(Optional)">
            </div>
            <div class="form-group px-4">
            <label for="message-text" class="col-form-label">I am a..(Please select one)</label><br>
            <div class="px-3">
                <input id="radio_stylist" type="radio" name="person_type" value="stylist" required>
                <label for="radio_stylist">Brand or Boutique</label><br>
                <input id="radio_customer" type="radio" name="person_type" value="customer" required>
                <label for="radio_customer">Potential Customer</label><br>
            </div>
            </div>

            <div class="form-group">
            <textarea type="text" class="form-control" name="note" id="note-text" placeholder="Note(Optional)" style="height: 8em;"></textarea>
            </div>
            <!-- <div class="modal-footer"> -->
            <div class="clearfix text-center">
                <div class="spinner-border" role="status" style="display:none;">
                <span class="sr-only">Loading...</span>
                </div>
            </div>

            <div class="text-center mt-4">
                <input type="submit" id="btn-request-send"  class="btn btn-brown text-white mr-3 letter-spacing-1 text-center" value="Request Access"/>
            </div>
            <!-- </div> -->
        </form>
        </div>
    </div>
    </div>
</div>
