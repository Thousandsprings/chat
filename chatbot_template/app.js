$(function () {
  $("#form-ajax").on("submit", function (e) {
    e.preventDefault();

    content = $("#content").val();
    // console.log(content);

    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: { content: content },
      dataType: "json",
    })

      .done(function (data) {
        // console.log(data);
        let html = `<div class="message-content">
              <div class="left-image">
                <img src="./lady.png" alt="">
              </div>
              <div class="right-content">
                <p>Chatbot</p>
                <p>${data.content}</p>
              </div>
            </div>
         `;
        $("#chat-content").append(html);
        //app.jsでform送信後、input内を空にする処理と、最新の投稿までスクロールさ
        //   れる処理
        $("#content").val("");
        $("#chat-content").animate({
          scrollTop: $("#chat-content")[0].scrollHeight,
        });
      })
      .fail(function (error) {
        console.log(error);
      });
  });
});
