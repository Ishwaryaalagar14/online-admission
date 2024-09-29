<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>College Online Admission</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    

    
    .welcome-section {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      margin: 140px auto;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .welcome-text {
      text-align: center;
    }

    .btn-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .btn-admission {
      margin: 10px;
      border-radius: 30px;
      padding: 15px 30px;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .btn-ug {
      background-color: #007bff;
      color: #fff;
      border: 2px solid #007bff;
    }

    .btn-ug:hover {
      color: white;
    }

    .btn-pg {
      background-color: #47d147;
      color: #fff;
      border: 2px solid #6c757d;
    }

    .btn-pg:hover {
       color: white;
    }

    footer {
      background-color: #f8f9fa;
      padding: 15px 0;
      text-align: center;
    }
  </style>
</head>

<body>


  <main role="main">
    <div class="container">
      <div class="welcome-section">
        <div class="welcome-text">
          <h1>Welcome to G.Venkataswamy Naidu College!</h1>
          <p>Enroll in our diverse undergraduate and postgraduate programs and shape your future.</p>
        </div>
        <!-- Buttons for UG and PG Admissions -->
        <div class="btn-wrapper">
          <a href="ug.php" class="btn btn-admission btn-ug">Undergraduate Admission</a>
          <a href="pg.php" class="btn btn-admission btn-pg">Postgraduate Admission</a>
        </div>
      </div>
    </div>
  </main>

  <!-- <footer>
    <p>&copy; 2023 GVN College. All rights reserved.</p>
  </footer> -->

  <!-- Bootstrap JS and jQuery scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

