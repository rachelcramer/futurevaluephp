<?php
//set default of variables for initial page load
if (!isset($investment))
{
  $investment = "";
}

if (!isset($interest_rate))
{
  $interest_rate = "";
}

if(!isset($years))
{
  $years = "";
}



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
  <?php 
   
   if (!empty($error_message))
   { ?>
     <p class="error"> <?php echo htmlspecialchars($error_message); ?></p>
   <?php }
   
   ?>
   <form action="display_results.php" method="post">
     
     <div id="data">
       
       <label for="investment">Investment Amount:</label>
       <input type="text" id="investment" name="investment" value="<?php echo htmlspecialchars($investment); ?>">
       <br>
       
       <label for="interest_rate">Yearly Interest Rate (&percnt;):</label>
      <input type="text" id="interest_rate" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>">
       
       <br>
       
       <label for="years">Number of Years:</label>
       <input type="text" id="years" name="years" value="<?php echo htmlspecialchars($years); ?>">
       <br>
     </div>
     
     <div id="buttons">
       <label for="submitbutton">&nbsp;</label>
     <input type="submit" value="Calculate" id="submitbutton" name="submitbutton">
       <br>
     
     
     </div>
     
     
     
   </form>
  
  
 </main> 
  
</body>
  
</html>
