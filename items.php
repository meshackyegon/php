<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="about.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <ul>

      <li><a href="contacts.php">Contacts</a></li>
      <li><a href="about.php" class="current">About</a></li>
      <li><a href="items.php">Items</a></li>
      <li><a href="header.php">Home</a></li>

    </ul>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">Upload</button>
  </body>
</html>