<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>GoDaddy Clone - Dashboard</title>
  <style>
    body {
      font-family: Arial;
      background-color: #fdfdfd;
      padding: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #0070f3;
      color: white;
    }
    button {
      padding: 6px 12px;
      background-color: #673ab7;
      color: white;
      border: none;
    }
  </style>
</head>
<body>

<h2>Your Registered Domains</h2>
<table>
  <tr>
    <th>Domain</th>
    <th>Expiry Date</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>mydomain.com</td>
    <td>2026-01-01</td>
    <td><button onclick="window.location.href='manage.php'">Manage</button></td>
  </tr>
</table>

</body>
</html>
