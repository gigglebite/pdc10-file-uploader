<!DOCTYPE HTML>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
    <h2 class="card-title">Registration Form</h2>
    <form method="POST" enctype="multipart/form-data" action="index.php">
  <div class="mb-3">
    <label for="fullname" class="form-label">Complete Name</label>
    <input type="fullname" class="form-control" id="fullname" name="complete_name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
  </div>
  <div class="mb-3 form-check">
    <label for="input_file" class="form-label">Picture</label>
    <input name="picture_path" class="form-control" type="file" id="picture_path" accept="image/*" required>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Submit Registration</button>
  </form>
</div>
  </div>
</div>
</body>
</html>
