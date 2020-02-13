<form id="step2">
<div class="row">
  <div class="col-12">
    <h5 class="sub-page-title">First tell us more about you</h5>
  </div>

  <div class="col-12">
    <div class="my-form-row">
      <p class="question">Question 1</p>
      
      <p>How do you dress?</p>
      
      <label class="radio-container mb-2">
        Chic
        <input type="radio" name="dress" value="chic">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Trendy
        <input type="radio" name="dress" value="trendy">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Workwear
        <input type="radio" name="dress" value="workwear" checked>
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        Athleisure
        <input type="radio" name="dress" value="athleisure">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        None of above
        <input type="radio" name="dress" value="none">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>
    </div>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 2</p>
      <div class="d-flex flex-wrap">
        <div class="mr-5 gender-option">
          <div class="gender-image">
            <img src="/images/customer-signup/gender-circle.svg" />
            <img src="/images/customer-signup/gender-man.svg" />
          </div>

          <label class="radio-container mb-2">
            Man
            <input type="radio" name="gender" class="gender" value="man">
            <span class="checkmark">
              <i class="fas fa-check check-sign"></i>
            </span>
          </label>
        </div>

        <div class="mr-5 gender-option">
          <div class="gender-image selected">
            <img src="/images/customer-signup/gender-circle.svg" />
            <img src="/images/customer-signup/gender-woman.svg" />
          </div>

          <label class="radio-container mb-2">
            Woman
            <input type="radio" name="gender" class="gender" value="woman" checked>
            <span class="checkmark">
              <i class="fas fa-check check-sign"></i>
            </span>
          </label>
        </div>

        <div class="mr-5 gender-option">
          <div class="gender-image">
            <img src="/images/customer-signup/gender-circle.svg" />
            <img src="/images/customer-signup/gender-non.svg" />
          </div>

          <label class="radio-container mb-2">
            Non-Binary
            <input type="radio" name="gender" class="gender" value="non-binary">
            <span class="checkmark">
              <i class="fas fa-check check-sign"></i>
            </span>
          </label>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 3</p>
      
      <p>Metric System?</p>
      
      <label class="radio-container mb-2">
        Yes
        <input type="radio" name="metric" value="yes">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>

      <label class="radio-container mb-2">
        No, Imperial
        <input type="radio" name="metric" value="no" checked>
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>
    </div>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Question 4</p>
      
      <p>Height?</p>
      
      <div class="row">
        <div class="col-4 col-lg-2">
          <div class="my-form-row">
            <label for="step2-feet">Feet</label>
            <input id="step2-feet" name="height_feet" class="form-control" />
          </div>
        </div>

        <div class="col-4 col-lg-2">
          <div class="my-form-row">
            <label for="step2-inches">Inches</label>
            <input id="step2-inches" name="height_inch" class="form-control" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="my-form-row text-right">
      <button class="round-btn next-button" type="button">Next Section</button>
    </div>
  </div>
</div>
</form>
