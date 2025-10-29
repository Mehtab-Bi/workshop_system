<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>Workshop Registration System</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f2f2f2, #e6ecff);
    }

    header {
      background-color: #5c67f2;
      color: white;
      padding: 30px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      margin: 0;
      font-size: 36px;
      letter-spacing: 1px;
    }

    .container {
      max-width: 900px;
      margin: 60px auto;
      text-align: center;
      padding: 40px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .container p {
      font-size: 18px;
      color: #333;
      margin-bottom: 30px;
    }

    .buttons {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    .btn {
      padding: 15px 30px;
      font-size: 18px;
      border: none;
      border-radius: 10px;
      background-color: #5c67f2;
      color: white;
      text-decoration: none;
      transition: background-color 0.3s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .btn:hover {
      background-color: #3e44c9;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #555;
      font-size: 14px;
      margin-top: 60px;
    }

    @media (max-width: 600px) {
      .buttons {
        flex-direction: column;
        gap: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to the Workshop Portal</h1>
  </header>

  <div class="container">
    <p>Register to participate in the upcoming workshop and gain valuable knowledge, skills, and a certificate of participation.</p>

    <div class="buttons">
      <a href="index.php" class="btn">Participant Registration</a>
      <a href="admin/login.php" class="btn">Admin Login</a>
    </div>
  </div>

  <footer>
    &copy; 2025 Workshop Registration System | Powered by PHP & MySQL
  </footer>

</body>
</html>
