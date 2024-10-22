<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offcanvas Menu Example</title>
  <!-- Bootstrap CSS (Optional, for styling) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    /* Custom styles for offcanvas menu */
    .offcanvas {
      position: fixed;
      top: 40px;
      left: -250px;
      /* Hide offcanvas initially */
      width: 250px;
      height: 100%;
      background-color: #f8f9fa;
      transition: all 0.3s ease;
    }

    .offcanvas.show {
      left: 0;
      /* Show offcanvas */
    }

    .offcanvas .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }

    .offcanvas .menu {
      margin-top: 50px;
      padding: 0 20px;
    }

    .offcanvas .menu li {
      list-style: none;
      margin-bottom: 10px;
    }

    .offcanvas .menu li a {
      color: #333;
      text-decoration: none;
    }
  </style>
</head>

<body>

  <!-- Toggle button with SVG icons -->
  <button class="btn btn-primary toggle-btn" type="button">
    <svg class="open-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
      xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M3 18V16H21V18H3ZM3 13V11H21V13H3ZM3 6V4H21V6H3Z"></path>
    </svg>
    <svg class="close-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
      xmlns="http://www.w3.org/2000/svg" style="display:none;">
      <path fill-rule="evenodd"
        d="M18.707 4.293a1 1 0 0 1 1.414 1.414L13.414 12l6.707 6.293a1 1 0 0 1-1.414 1.414L12 13.414l-6.293 6.707a1 1 0 1 1-1.414-1.414L10.586 12 3.293 5.707a1 1 0 0 1 1.414-1.414L12 10.586l6.293-6.293z">
      </path>
    </svg>
  </button>

  <!-- Offcanvas menu -->
  <div class="offcanvas" id="offcanvas">
    <span class="close-btn">&times;</span>
    <ul class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>

  <script>
    $(document).ready(function () {
      // Toggle offcanvas menu
      $('.toggle-btn').click(function () {
        $('#offcanvas').toggleClass('show');
        $('.open-icon, .close-icon').toggle(); // Toggle visibility of SVG icons
      });

      // Close offcanvas when close button is clicked
      $('.close-btn').click(function () {
        $('#offcanvas').removeClass('show');
        $('.open-icon, .close-icon').toggle(); // Toggle visibility of SVG icons
      });

      // Close offcanvas when clicking outside of it
      $(document).click(function (event) {
        if (!$(event.target).closest('#offcanvas, .toggle-btn').length) {
          $('#offcanvas').removeClass('show');
          $('.open-icon, .close-icon').toggle(); // Toggle visibility of SVG icons
        }
      });
    });
  </script>

</body>

</html>