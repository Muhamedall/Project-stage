<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Preloader Example</title>
  <style>
    /* Preloader styles */
    .loader-wrapper {
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      background-color: whitesmoke;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      overflow: hidden;
    }
  </style>
</head>
<body>
  <!-- Preloader HTML -->
  <div class="loader-wrapper">
    <div class="loader">
      <!-- Your SVG or preloader image goes here -->
      <script defer src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

  
       <dotlottie-player src="https://lottie.host/7ff811ef-e183-4155-81ec-632ebdd301fd/WDoullFWj6.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
    </div>
  </div>

  <!-- Rest of your webpage content -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    // Set a timeout to hide the preloader after 2 seconds
    setTimeout(function() {
      $('.loader-wrapper').fadeOut(500, function() {
        $(this).remove();
      });
    }, 5000);
  </script>
</body>
</html>
