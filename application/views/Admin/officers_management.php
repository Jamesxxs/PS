<?php
    $pageTitle = "Officer Management";
    require('admin_header.php');
?>

<br>
<div class="container">
  <h2>Officers</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-primary">Create account for new officer</button>
  <button type="button" class="btn btn-danger">Delete an officer</button>
</div>
</body>
</html>
