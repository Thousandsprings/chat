<?php
require_once('database.php');
$database = new Database();
$records = $database->all();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="./app.js"></script>
</head>

<body>
  <section>
    <div class="chat-main">
      <div class="chat-header">
        <div class="header-content">
          <p>#Seed Tech School<i class="far fa-star"></i></p>
          <div class="header-icon">
            <i class="far fa-user">16 |</i>
            <i class="fas fa-thumbtack">1 |</i>
            <span> Add a topic</span>
          </div>
        </div>
      </div>
      <div class="video-container">
        <video src="./Clouds.mp4" autoplay playsinline muted loop></video>
        <div class="chat-content" id='chat-content'>

          <?php foreach ($records as $record) : ?>

            <div class="message-content">
              <div class="left-image">
                <img src="./lady.png" alt="">
              </div>
              <div class="right-content">
                <p>Chatbot</p>
                <p><?php echo $record['content']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
        <div class="chat-message">
          <form action="" class="chat-form" id="form-ajax">
            <input type="text" class="form-text" placeholder="  Message" id="content">
            <div class="form-option">
              <input type="submit" value="送信" class="send-btn">
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
</body>

</html>