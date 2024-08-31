
<script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/feather.min.js"></script>
<script src="{{asset('assets')}}/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('assets')}}/plugins/apexchart/apexcharts.min.js"></script>
<script src="{{asset('assets')}}/plugins/apexchart/chart-data.js"></script>
<script src="{{asset('assets')}}/js/script.js"></script>
<script>
    function togglePasswordVisibility(inputId) {
        // Get the password input field by its ID
        var inputField = document.getElementById(inputId);
        
        // Check the current type of the input field and toggle between 'password' and 'text'
        if (inputField.type === "password") {
            inputField.type = "text";
        } else {
            inputField.type = "password";
        }
    }
    </script>
    <script>
        // Feather icon initialization
        feather.replace();
      </script>
<script>
    function togglePasswordVisibility(inputId, iconId) {
        var inputField = document.getElementById(inputId);
        var iconField = document.getElementById(iconId);
    
        if (inputField.type === "password") {
            inputField.type = "text";
            iconField.classList.remove("feather-eye");
            iconField.classList.add("feather-eye-off");
        } else {
            inputField.type = "password";
            iconField.classList.remove("feather-eye-off");
            iconField.classList.add("feather-eye");
        }
    }
    </script>
          
@stack('js')