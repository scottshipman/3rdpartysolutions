<div style="width:100%;">
    <form id="regForm">
        <h1>Multi-Step Form:</h1>
        <!-- One "tab" for each step in the form: -->
        <div id="tabWrapper">
            <div class="tab">Name:
                <p><input class="forminput" autocomplete="off" placeholder="First name..."  name="fname"></p>
                <p><input class="forminput" autocomplete="off" placeholder="Last name..."  name="lname"></p>
            </div>
            <div class="tab">Contact Info:
                <p><input class="forminput" autocomplete="off" placeholder="E-mail..."  name="email"></p>
                <p><input class="forminput" placeholder="Phone..."  name="phone"></p>
            </div>
            <div class="tab">Birthday:
                <p><input class="forminput" placeholder="dd"  name="dd"></p>
                <p><input class="forminput" placeholder="mm"  name="nn"></p>
                <p><input class="forminput" placeholder="yyyy"  name="yyyy"></p>
            </div>
            <div class="tab">Login Info:
                <p><input class="forminput" placeholder="Username..."  name="uname"></p>
                <p><input class="forminput" placeholder="Password..."  name="pword" type="password"></p>
            </div>
        </div>
        <div class="text-center" id="formResponse" style="display:none;">
            <p>Thank you! Your information is secure with us.</p>
        </div>
        <div id="buttonsWrapper"  style="overflow:auto;">
            <div style="float:right;">
                <button class="formbutton" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="formbutton" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

<script>

    function formSubmit() {
        document.getElementById("tabWrapper").style.display = 'none'
        document.getElementById("buttonsWrapper").style.display = 'none'
        document.getElementById("formResponse").style.display = 'block'
    };

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    } else {
    document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
    // ... the form gets submitted:
    // document.getElementById("regForm").submit();
        formSubmit()
    return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
    // add an "invalid" class to the field:
    y[i].className += " invalid";
    // and set the current valid status to false
    valid = false;
    }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
    }
    </script>
</div>
