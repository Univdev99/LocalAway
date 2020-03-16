<form id="step5">
<div class="row">
  <div class="col-12">
    <h5 class="sub-page-title">You're almost done!</h5>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 1</p>
      <p>How adventurous should you capsule be?</p>
      
      <label class="radio-container mb-2">
        Adventure - put me into play clothes based on a special event
        <input type="radio" name="capsule" value="adventure">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Extremely - I want to look like an influencer, totally on today's trend
        <input type="radio" name="capsule" value="extremely">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Morderately - I want to try a few new things but nothing too bold
        <input type="radio" name="capsule" value="moerderately">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Rarely - I want to stick to what I know works for me but open to trying something a bit different here and there
        <input type="radio" name="capsule" value="rarely">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Never - I want to blend in with "Stealth" mode
        <input type="radio" name="capsule" value="never" checked>
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>
    </div>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 2</p>
      <p>How much are you willing to spend? (generally - we will try to work within your budget)</p>
      
      <label class="radio-container mb-2">
        Single item
        <input type="radio" name="spend" value="single">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Capsules from 40 - 60$ (just one or two pieces)
        <input type="radio" name="spend" value="one-or-two">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Capsules from 70 - 150$ (outfit - lower end)
        <input type="radio" name="spend" value="outfit-lower">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Capsules from 150 - 250$ (higher end)
        <input type="radio" name="spend" value="higher-end" checked>
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Capsules from 300$+ (luxury)
        <input type="radio" name="spend" value="luxury">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>
    </div>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 3 (Optional)</p>
      <p>Share your social media profile so your stylist can get to know you better:</p>

      <div class="mb-3">
        <label for="step5-instagram">Instagram</label>
        <input id="step5-instagram" class="form-control" name="instagram" />
      </div>

      <div class="mb-3">
        <label for="step5-twitter">Twitter</label>
        <input id="step5-twitter" class="form-control" name="twitter" />
      </div>

      <div class="mb-3">
        <label for="step5-pinterest">Pinterest</label>
        <input id="step5-pinterest" class="form-control" name="pinterest" />
      </div>

      <div>
        <label for="step5-linkedin">Linkedin</label>
        <input id="step5-linkedin" class="form-control" name="linkedin" />
      </div>
    </div>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 4</p>
      <p>Any additional notes for your stylist?</p>

      <label for="step5-notes">Notes</label>
      <br/>
      <textarea class="additional-note" id="step5-notes" name="notes" ></textarea>
      <!-- <input id="step5-notes" class="form-control" /> -->
    </div>
  </div>

  <div class="col-12">
    <div class="my-form-row text-right">
      <button class="round-btn next-button" type="button">Next Section</button>
    </div>
  </div>
</div>
</form>
