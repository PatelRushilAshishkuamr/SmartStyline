
<!------------------Java script validation------------------------->

<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||
				(charCode == 32))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
				
            }
        }

    </script>
                  <input placeholder="Enter Name (input only alphabets)" type="text" name="cust_fullname" class="form-control required" onKeyPress="return onlyAlphabets(event,this);">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
				 <script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||
				(charCode == 32))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
				
            }
        }

    </script>
                  <input placeholder="Enter City (input only alphabets)" type="text" name="city" class="form-control required" onKeyPress="return onlyAlphabets(event,this);">
                </div>
              </div>
			  <div class="col-sm-6">
                <div class="mb-3 mb-30">
                  <input placeholder="Address (Maximum 200 length)" type="text" name="address" maxlength="200" class="form-control required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
				             					 <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
	<span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                  <input placeholder="Mobile no (input only 0-9 digits)" type="text" maxlength="10" minlength="10" name="mob_number" class="form-control required" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                </div>
              </div>
			  
		
			  <div class="col-sm-6">
                <div class="mb-3 mb-30">
				 <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
	<span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                  <input placeholder="Pincode (input only 0-5 digits)" type="text" maxlength="6" minlength="6" name="pin_code" class="form-control required" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                </div>
              </div>
			 
			 <div class="col-sm-6">
			 <div class="mb-3 mb-30">
                     <select name="gender"  class="form-control required" >
        	<option value="gender" >Gender	</option>
			<option value="male" >Male	</option>
			<option value="female" >Female</option>
			</select>
			 </div>
			</div>
			<br></br>
			  <div class="col-sm-6">
                <div class="mb-3 mb-30">
				
				             					 <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
	                </div>
              </div>
              <div class="col-sm-12">
                <div class="mb-3 mb-0 mt-0">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" name="register" class="btn btn-theme-colored1 btn-round" data-loading-text="Please wait..." style="color:white;"><b>Submit Now</b></button>
                </div>
              </div>
            </div>
          </form>