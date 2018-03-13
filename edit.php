<?php 
 session_start();
 require('dbconnect.php');

 if (isset($_GET)){
  $sql = 'SELECT * FROM `tweets` WHERE `tweet_id`=?';
  $data = array($_GET['tweet_id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);
  $tweet_edit = $stmt->fetch(PDO::FETCH_ASSOC);

}

  if (!empty($_POST)){
  $sql = 'UPDATE `tweets` SET `tweet`=?, `modified`=NOW() WHERE `tweet_id`=?';
  $data = array($_POST['tweet'], $_GET['tweet_id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

 }

 ?>


 <!DOCTYPE html>
 <html lang='ja'>
 <head>
  <meta charset="UTF-8">
   <title>edit.php</title>
 </head>
 <body>
  <div>
    <form method="POST" action="">
      <!-- SELECT文で取ってきた値をデフォルトで設置しておく -->
      <input type="text" name="tweet" value="<?php echo $tweet_edit['tweet']; ?>">
      <input type="submit" value="更新">
    </form>
  </div>
 </body>
 </html>
