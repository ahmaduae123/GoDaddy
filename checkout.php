<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <style>
    body {
      font-family: Arial;
      background-color: #fff8e1;
      text-align: center;
      padding: 50px;
    }
    h2 {
      color: #ff8f00;
    }
    .domain {
      font-size: 22px;
      margin: 20px;
      color: #000;
    }
    button {
      margin-top: 20px;
      padding: 12px 24px;
      background-color: #ef6c00;
      color: white;
      border: none;
    }
  </style>
</head>
<body>

<h2>Checkout</h2>
<div class="domain" id="cartDomain">Loading domain...</div>
<button onclick="checkout()">Confirm Purchase</button>

<script>
  const domain = localStorage.getItem('domain');
  if(domain){
    document.getElementById("cartDomain").innerText = "You are buying: " + domain;
  } else {
    document.getElementById("cartDomain").innerText = "No domain selected.";
  }

  function checkout(){
    alert("Thanks! You bought " + domain);
    localStorage.removeItem('domain');
    window.location.href = 'index.php';
  }
</script>

</body>
</html>
