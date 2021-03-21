<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>App & Me</title>
	<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="css/qna_write.css">
</head>

<body>
  <header>
    <img src="img/appandme_web_logo.png" alt="app&me" onclick="location.href='main.html'">
    <span style="margin-left: 40%;" onclick="location.href='about.html'">ABOUT</span>
    <span style="margin-left: 1%;" onclick="location.href='members_8th.html'">부원소개</span>
    <span style="margin-left: 1%;" onclick="location.href='submit.php'">지원하기</span>
    <span style="margin-left: 1%; color: #FF6384;" onclick="location.href='qna.php'">Q&A</span>
  </header>
  <div class="margin">
    <div class="title">Q&A 등록</div>
  </div>
  <center>
    <hr width="60%" color="#FF6384">
  </center>
  <div class="margin">
    <center>
      <div class="box">
        <form class="login-form" action="qnaaction.php" method="post">
          <table width="95%" class="list-table">
            <tr class="content">
              <td>제목</td>
              <td><input type="text" name="title" size="50"
                  style="float:left; margin-left: 5%; width: 69.5%; height:50px">
              </td>
            </tr>
            <tr class="content">
              <td>학번 이름</td>
              <td><input type="text" name="name" size="50"
                  style="float:left; margin-left: 5%; width: 33%; height:50px" placeholder="3100 김미림" required>
              </td>
            </tr>
            <tr> 
              <td colspan="10">
                <hr>
              </td>
            </tr>
            <tr class="content">
              <td>내용</td>
              <td colspan="2">
                <textarea id="test" name="content" onkeyup="len_chk()" style="width:92%; float:left; margin-left: 5%;"
                  rows="6" placeholder="내용을 입력해주세요. (200자 이내)" required></textarea>
                  <div id="test_cnt">(0 / 200)</div>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <input type="submit" class="apply" value="등록하기" onclick="location.href='qnaaction.php'">
    </center>
  </div>
  <script language="javascript">
    //글자수 제한 체크 
    function len_chk() {
      var frm = document.apply.reason;
      var frm2 = document.apply.todo;
      if (frm.value.length > 400) {
          alert("글자수는 200자로 제한됩니다.");
          frm.value = frm.value.substring(0, 400);
          frm.focus();
      } else if (frm2.value.length > 400) {
          alert("글자수는 200자로 제한됩니다.");
          frm2.value = frm2.value.substring(0, 400);
          frm2.focus();
      }
    }
    //글자수 카운트
    $(document).ready(function() {
        $('#test').on('keyup', function() {
            $('#test_cnt').html("("+$(this).val().length+" / 200)");
 
            if($(this).val().length > 200) {
                $(this).val($(this).val().substring(0, 200));
                $('#test_cnt').html("(200 / 200)");
            }
        });
    });
  </script>
</body>

</html>