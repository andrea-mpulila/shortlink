<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>
<body style="background:#be6f5500">
    <form action="{{ route('phones.store') }}" method="post">
        <label for="phone">Phone</label>
        <input id="phone" type="tel" name="phone">
        <input type="submit" value="Save">
        @csrf
    </form>
    {{-- <script>
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
          initialCountry: "auto", // Detects country based on user's IP
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Provides formatting and validation utilities
        });
      
        // Handle form submission to send the phone number in international format
        document.querySelector("form").addEventListener("submit", function(e) {
          var phoneNumber = iti.getNumber(); // Get the full international number
          input.value = phoneNumber; // Set the international number for backend validation
        });
      </script> --}}
</body>
</html>