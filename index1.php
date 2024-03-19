<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="rumus.css" rel="stylesheet">
  <link rel="icon" href="logo.png" type="image/x-icon">
  <title>ROA Calculator</title>
</head>

<body>
  <?php include 'header.php' ?>
  <div class="container-fluid px-5 d-flex flex-column justify-content-center mb-5">
    <h3 class="fw-bold text-center m-3 pb-5">Calculator Return of Assets (ROA)</h3>
    <div class="container bg-kuning rounded-4 p-5 w-50 mx-auto">
      <form action="index2.php" method="POST">
        <label for="net_income" class="form-label fw-bold">Net Income</label>
        <input type="text" class="form-control" id="net_income" name="net_income" required><br>
        <label for="interest_expense" class="form-label fw-bold">Interest Expense</label>
        <input type="text" class="form-control" id="interest_expense" name="interest_expense" required><br>
        <label for="tax_rate" class="form-label fw-bold">Tax Rate</label>
        <input type="text" class="form-control" id="tax_rate" name="tax_rate" required><br>
        <label for="average_total_assets" class="form-label fw-bold">Average Total Assets</label>
        <input type="text" class="form-control" id="average_total_assets" name="average_total_assets" required><br>
        <div class="text-center">
          <button type="submit" class="btn btn-custom px-5">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php include 'footer.php' ?>
</body>

</html>