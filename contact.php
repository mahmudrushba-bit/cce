<?php
// 1. Database Credentials Configuration
$host     = "localhost";
$dbname   = "company_db"; 
$username = "root"; 
$password = ""; 

try {
    // 2. Establish Connection using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Set error mode to exception to catch errors cleanly
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// 3. Process the Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve and sanitize inputs to prevent cross-site scripting (XSS)
    $name    = htmlspecialchars(trim($_POST['name']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $address = htmlspecialchars(trim($_POST['address']));

    // Simple validation check
    if (empty($name) || empty($phone) || empty($email) || empty($address)) {
        die("Please fill out all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // 4. Prepare SQL Statement to prevent SQL Injection
        $sql = "INSERT INTO contacts (name, phone, email, address) VALUES (:name, :phone, :email, :address)";
        $stmt = $pdo->prepare($sql);

        // Bind data parameters safely
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Contact saved successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "An error occurred while saving information.";
        }

    } catch (PDOException $e) {
        echo "Error saving data: " . $e->getMessage();
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects — Alex Morgan</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    .contact{
      display: grid;
      gap: 2rem;
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <?php include_once ('common/header.php')?>
  <main>
    <h2>Contact</h2>
    <?php if (!empty($message)):?>
       <div class="message">
         <?=htmlspecialchars($message)?>
</div>
<?php  endif; ?>
   <form method="POST" action="">
    <div class="contact">
     <div>Address:
      <input type="text" id="address" name="address" placeholder="Enter your address" required>
     </div>
     <div>Name:
<input type="text" id="name" name="name" placeholder="Enter your name" required>
</div>
     <div>Email: 
      <input type="text" id="email" name="email" placeholder="Enter your email" required>
     </div>
      <div>Phone: 
      <input type="number" id="phone" name="phone" placeholder="Enter your phone" required>
      </div>
    </div>
<button type ="submit">save contract </button>
</Form>
  </main>
</body>
</html>

