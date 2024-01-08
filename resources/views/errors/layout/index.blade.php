<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('error-title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
          font-family: "Dosis", sans-serif;
        }
      
        .button {
          transition: all 0.3s ease-in-out;
          margin: 10px;
          border: none;
          width: 40%;
          height: 50px;
          border-radius: 50px;
          box-shadow: 0 20px 30px -6px rgba(30, 161, 255, 0.5);
        }
      
        .button:hover {
          transform: translateY(10px);
          box-shadow: none;
        }
      
        .button:active {
          opacity: 0.5;
        }
      
        h1 {
         
          color: rgba(0, 123, 255, 0.7); 
          font-weight: bold;
          margin-bottom: 20px; 
        }
      
        p {
          color: rgba(144, 187, 233, 0.7); 
         
        }
    </style>
  </head>
<body>
    @yield('error-content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
