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
    <div class="container bg-kuning p-5 w-50 mx-auto rounded-4" style="background-color:#F9F07A;">
      <div>
        <h4 class="fw-bold">Result : </h4>
        <div class="container bg-white p-5 fw-bold rounded-2 text-center text-truncate fs-2">
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $net_income = $_POST['net_income'];
            $interest_expense = $_POST['interest_expense'];
            $tax_rate = $_POST['tax_rate'];
            $average_total_assets = $_POST['average_total_assets'];

            $roa = ($net_income + ($interest_expense * (1 - $tax_rate))) * 100 / $average_total_assets;
            echo number_format($roa, 2) . '%';
          }
          ?>
        </div>
        <div class="mt-5">
          <h5>Net Income : </h5>
          <?php echo $net_income; ?>
          <h5>Interest Expense : </h5>
          <?php echo $interest_expense; ?>
          <h5>Tax Rate : </h5>
          <?php echo $tax_rate; ?>
          <h5>Average Total Assets : </h5>
          <?php echo $average_total_assets; ?>
        </div>
      </div>
    </div>
    <div class="container bg-kuning rounded p-5 w-50 mt-5 mx-auto rounded-4" style="background-color:#B7C9F2;">
      <h4 class="fw-bold">Rumus</h4>
      <div class="container bg-white p-4 rounded-3">
        <div class="row text-center">
          <h6>(Net Income + [Interest Expense x (1-Tax Rate)]) x 100</h6>
        </div>
        <div class="row">
          <hr class="border-2 z-0">
        </div>
        <div class="row text-center">
          <h6>Average Total Assets</h6>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php include 'footer.php' ?>
</body>

</html>