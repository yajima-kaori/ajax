<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>フォーム</title>
  <script type="text/javascript" src="jquery-2.2.4.js"></script>
  <script>
  $(function(){
    $("#thisform").submit(function(event){
      event.preventDefault();

      var $arrVal = $(this).serialize();
      // console.log($arrVal);

      $.post(
      "post.php",
      $arrVal,
      function(data){
        console.log($arrVal);
        alert('ok');
      }

      );

      });
  });
  </script>



</head>
<body>
  <form id="thisform" action="post.php" method="post">

  <p>
  お名前:<br><input type="name" name="name">
  </p>
  <p>
  コメント:<br><textarea name="comment" style="width:300px; height:150px;"></textarea>
  </p>
  <br>
  <input type="submit" value="送信" style="border:none; background-color:#1e90ff; color:#ffffff; width:50px; height:30px">
  </form>

</body>
</html>