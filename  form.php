<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>フォーム</title>
  <script type="text/javascript" src="jquery-2.2.4.js"></script>
  <script>

  $(function(){
    $("img").hide();
    $("#thisform").submit(
      function(event){
      event.preventDefault();


      if($("input[name='name']").val() == "")
      {
        $('.error_name').html('<br>名前を入力してください!');
      }
      if($("textarea[name='comment']").val() == "")
      {
        $('.error_comment').html('<br>コメントを入力してください!</p>');
      }
      else
      {
      $("#btn").prop("disabled",true);
      $("img").show();
      var $arrVal = $("#thisform").serialize();
      // console.log($arrVal);

      $.post(
      "post.php",
      $arrVal,
      function(data){
        console.log($arrVal);
        // alert('post');
      }
      );

      $.get(
        "comment.php",
        function(data){
         // alert(data);
        $('.kiji').html(data);
        $("input[name='name']").val("");
        $("textarea[name='comment']").val("");
        $("#btn").prop("disabled",false);
        $("img").hide();
        }
        );



      }
      });
  });
  </script>
</head>
<body>
  <form id="thisform" action="post.php" method="post">

  <p>
  お名前:<br><input type="name" name="name">
  <span class="error_name" style="color:red;"></span>
  </p>
  <p>
  コメント:<br><textarea name="comment" style="width:300px; height:150px;"></textarea>
  <span class="error_comment" style="color:red;"></span>
  </p>
  <br>
  <input id="btn" type="submit" value="送信" style="border:none; background-color:#1e90ff; color:#ffffff; width:50px; height:30px; float:left">
  <img src="loading.gif" style="float:left; width:30px; height:30px;"></div>
  </form>
  <br>
  <h2>コメント一覧</h2>
  <hr>
    <div class="kiji">
    コメントはありません｡
    </div>


</body>
</html>