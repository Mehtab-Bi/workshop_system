<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Workshop Registration</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="heading">
    <h1>Workshop Registration Form</h1>
    <p class="tagline">
      Gain hands-on experience, learn from professionals, and get certified for your participation!
    </p>
  </div>

  <div class="form-container">
    <form action="register.php" method="POST">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" id="phone" required>
      </div>

      <div class="form-group">
        <label for="college">College Name:</label>
        <input type="text" name="college" id="college" required>
      </div>

      <button type="submit">Register</button>
    </form>
  </div>

</body>
</html>
