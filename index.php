<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GoDaddy Clone - Domain Search</title>
  <style>
    body {
      font-family: Arial;
      text-align: center;
      margin-top: 80px;
      background: #f1f1f1;
    }
    input {
      padding: 10px;
      font-size: 16px;
      width: 300px;
    }
    button {
      padding: 10px 20px;
      background-color: #0070f3;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
  <h1>Search Domain</h1>
  <input type="text" id="domain" placeholder="e.g. mysite.com">
  <button onclick="check()">Check Availability</button>

  <script>
    function check() {
      let domain = document.getElementById("domain").value.trim();
      if(domain){
        window.location.href = "check.php?domain=" + encodeURIComponent(domain);
      } else {
        alert("Please enter a domain.");
      }
    }
  </script>
</body>
</html>
