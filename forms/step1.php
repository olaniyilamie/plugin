<fieldset>
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">Event Information:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 1 - 3</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label class="fieldlabels">What will you like to register as: *</label> 
            </div>
            <div class="col-4">
                <input type="radio" name="ictguest" value="attendee" id="attendee" class="input-hidden req" checked required />
                <label for="attendee">
                    <img src="<?php echo MULTISTEP_DIR.'assets/attendee.png'?>" class="img-fluid" alt="attendee" />
                </label>
            </div>
            <div class="col-4">
                <input type="radio" name="ictguest" value="exhibitor" id="exhibitor" class="input-hidden" />
                <label for="exhibitor">
                    <img src="<?php echo MULTISTEP_DIR.'assets/Exhibitors.jpg'?>" class="img-fluid" alt="exhibitor" />
                </label>
            </div>
            <div class="col-4">
                <input type="radio" name="ictguest" value="sponsor" id="sponsor" class="input-hidden" />
                <label for="sponsor">
                    <img src="<?php echo MULTISTEP_DIR.'assets/sponsor.jpg'?>" class="img-fluid" alt="sponsor" />
                </label>
            </div>
        </div>
        <div class="row my-1 ">
            <div class="col-md-6 ">
                <label class="fieldlabels">Which of the days are you likely to miss ?</label> <br>
                    <input type="checkbox" id="day1" name="day1" value="Day 1">
                    <label class="fieldlabels mr-3" for="day1">Day 1</label>
                    <input type="checkbox" id="day2" name="day2" value="Day 2">
                    <label class="fieldlabels mr-3" for="day2">Day 2</label>
                    <input type="checkbox" id="day3" name="day3" value="Day 3">
                    <label class="fieldlabels mr-3" for="day3">Day 3</label>
                    <input type="checkbox" id="day4" name="day4" value="Day 4">
                    <label class="fieldlabels mr-3" for="day4">Day 4</label>
                    <input type="checkbox" id="day5" name="day5" value="Day 5">
                <label class="fieldlabels" for="day5">Day 5</label>
            </div> 
            <div class="col-md-6">
                <label class="fieldlabels">Will you like to recieve email reminder about the event ?</label> <br>
                <input type="radio" id="yesMail" name="recieveMail" value="Yes" required > 
                <label class="fieldlabels" for="yesMail">Yes</label>
                <input type="radio" id="noMail" name="recieveMail" value="No">
                <label class="fieldlabels" for="noMail">No</label>
            </div>  
        </div>
        <div class="row d-none" id="exibitorInfo">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <label class="fieldlabels col-form-label">Organisation Name: <span class="text-danger">*</span></label> 
                        <input type="text" name="orgname" required class="form-control form-control-sm"> 
                    </div>
                    <div class="col-md-6">
                        <label class="fieldlabels">Organisation Email: <span class="text-danger">*</span></label> 
                        <input type="email" name="orgmail" required class="form-control form-control-sm">
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fieldlabels">Organisation Address: <span class="text-danger">*</span></label> 
                        <input type="text" name="orgadd" required class="form-control form-control-sm"> 
                    </div>
                    <div class="col-md-6">
                        <label class="fieldlabels">Organisation Contact: <span class="text-danger">*</span></label> 
                        <input type="text" name="orgcon" required class="form-control form-control-sm">
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="fieldlabels font-weight-bold mb-4">Social Media Handle</label>
                            </div>
                            <div class="col-md-6 text-center">
                                <label class="fieldlabels"><i class="fab fa-instagram-square"></i> Instagram</label>
                                <input type="text" name="ighandle" class="form-control form-control-sm" />
                            </div>
                            <div class="col-md-6 text-center">
                                <label class="fieldlabels"><i class="fab fa-facebook-square"> Facebook</i></label>
                                <input type="text" name="fbhandle" class="form-control form-control-sm" />
                            </div>
                            <div class="col-md-6 text-center">
                                <label class="fieldlabels"><i class="fab fa-twitter-square"></i> Twitter</label>
                                <input type="text" name="twihandle" class="form-control form-control-sm" />
                            </div>
                            <div class="col-md-6 text-center">
                                <label class="fieldlabels"><i class="fab fa-whatsapp-square"></i> Whatsapp Number</label>
                                <input type="text" name="whatsapphandle" class="form-control form-control-sm" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="fieldlabels" for="product">Upload Product Sample:</label>
                                <input type="file" required id="product" name="product" class="form-control form-control-sm" multiple>
                            </div>
                            <div class="col-12">
                                <label class="fieldlabels" for="desc">Your Organisation's main message <span class="text-danger">*</span></label>
                                <textarea id="desc" required name="desc" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row d-none" id="sponsorInfo">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <label class="fieldlabels">Contribution Level: <span class="text-danger font-weight-bold"> (NGN) *</span></label> 
                        <input type="text" name="amount" required class="form-control form-control-sm">
                    </div>
                    <div class="col-md-6">
                        <label class="fieldlabels">Method of Payment</label> <br>
                        <input type="radio" id="cheque" name="payment" value="cheque"> 
                        <label class="fieldlabels" for="cheque">Cheque</label>
                        <input type="radio" id="creditcard" name="payment" value="creditcard">
                        <label class="fieldlabels" for="creditcard">Credit Card</label>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row my-1">
            <div class="col-12">
                <label class="fieldlabels">Have you attended ICT week before ?</label> <br>
                <input type="radio" id="firstTime" name="attending" value="Yes" required> 
                <label class="fieldlabels" for="firstTime">Yes</label>
                <input type="radio" id="regural" name="attending" value="No">
                <label class="fieldlabels" for="regural">No</label>
            </div>  
        </div>
    </div> 
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>