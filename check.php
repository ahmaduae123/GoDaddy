<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Domain Check</title>
  <style>
    body {
      font-family: Arial;
      text-align: center;
      margin-top: 60px;
      background: #e3f2fd;
    }
    h2 { color: #333; }
    .result {
      font-size: 22px;
      margin: 20px;
    }
    button {
      margin: 10px;
      padding: 10px 20px;
      background-color: #43a047;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
<?php
$domain = $_GET['domain'] ?? '';
$available = rand(0, 1); // dummy logic
?>

<h2>Search Result</h2>
<div class="result">
  <?php echo $available ? "$domain is available ✅" : "$domain is taken ❌"; ?>
</div>

<?php if ($available): ?>
  <button onclick="addToCart()">Add to Cart</button>
  <script>
    function addToCart() {
      localStorage.setItem('domain', '<?php echo $domain; ?>');
      window.location.href = 'checkout.php';
    }
  </script>
<?php endif; ?>

<br>
<button onclick="window.location.href='index.php'">Search Another</button>

</body>
</html>
