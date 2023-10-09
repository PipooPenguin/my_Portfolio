
    <?php
      ob_start();
      include_once './partials/navbar.php'; 
      $stage=ob_get_clean();
      $stage=str_replace('      <a href="/">Home</a>
      ','      <a id="underline" href="/">Home</a>
      ',$stage);
      echo $stage;
      $clock=time();
      $clock+=60*24*60*60;      
    ?>
    <h2>Hai tháng nữa sẽ là tháng: <?php $date=date('F',$clock);
      echo $date;
    ?></h2>
  </body>
</html>
