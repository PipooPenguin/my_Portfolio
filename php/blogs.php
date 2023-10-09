
<?php
ob_start();
    include './partials/navbar.php';
    $stage=ob_get_clean();
    $stage=str_replace('<a href="../blogs.php','<a id="underline" href="../blogs.php',$stage);
    echo $stage;
    
?>
    <div id="content">
      <h2>blogs #1</h2>
      <!-- <input type="text" placeholder="your story here" value=""> -->
      <p><?php $non=include './partials/lorem100.php'?></p>
    </div>
</body>
</html>
