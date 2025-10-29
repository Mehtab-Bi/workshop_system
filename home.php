<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Workshop Registration System</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e0c3fc, #8ec5fc);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px 20px;
    }

    .box {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      text-align: center;
      max-width: 700px;
      width: 100%;
    }

    .box h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #4b0082;
    }

    .box p {
      font-size: 18px;
      color: #444;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .btn-container {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .btn {
      background-color: #5a2c8d;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .btn:hover {
      background-color: #3f1e61;
    }

    .page-title {
      text-align: center;
      font-size: 36px;
      color: #2d145e;
      margin: 50px 0 10px;
    }

    .subtitle {
      text-align: center;
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }

    footer {
      background: #f1f1f1;
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <h1 class="page-title">Welcome to the Workshop Registration Portal</h1>
  <p class="subtitle">Empowering Students with Real-Time DBMS Skills</p>

  <div class="content">
    <div class="box">
      <h2>About the DBMS Workshop</h2>
      <p>
        This workshop is designed to provide hands-on experience in working with databases,
        creating real-time applications, and understanding the core of data-driven systems.
        Participants will gain practical knowledge and receive a certificate of completion.
      </p>
      <p>
        Get started by registering as a participant or log in as an admin to manage and approve entries.
      </p>
      
      <div class="btn-container">
        <a href="index.php" class="btn">Register for Workshop</a>
        <a href="admin/login.php" class="btn">Admin Login</a>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Department of Computer Applications, BIT | Workshop Registration System
  </footer>

</body>
</html>
