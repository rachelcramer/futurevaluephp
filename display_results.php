<?php
//get the data from the form
  $investment = filter_input(INPUT_POST, "investment");
  $interest_rate = filter_input(INPUT_POST, "interest_rate");
  $years = filter_input(INPUT_POST, "years");






?>
<!doctype html>
<html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <title>Future Value Calculator</title>
      <link rel="stylesheet" href="main.css">
  </head>

  <body>

   <main>
       <h1>Future Value Calculator</h1>

       <label>Investment Amount:</label>
       <span><?php echo $investment; ?></span><br>
       <label>Yearly Interest Rate:</label>
      <span><?php echo $interest_rate; ?></span><br>
       <label>Number of Years:</label>
       <span><?php echo $years; ?></span><br>
       <label>Future Value:</label>
       <span></span><br>
   </main> 

  </body>
  
</html>