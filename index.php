<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>제1차 신입생환영회 Quiz</title>
    <link rel="stylesheet" href="./styles/index-style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        var tableHTMLStr = "";

        for(var i=1;i<=5;++i){
          tableHTMLStr += "<tr>";
          for(var j=1;j<=4;++j){
            var problemNo = ((i-1)*5+j-(i-1));
            tableHTMLStr += "<td id='_"+problemNo+"'><a href='./pages/"+problemNo+".html' id='"+problemNo+"' target='_blank'><img src='./images/idea.png' alt=''><p>"+problemNo+"</p></a></td>";
          }
          tableHTMLStr += "</tr>";
        }

        $(".quiz-table").html(tableHTMLStr);

        $(".quiz-table > tr > td > a").click(function(){
          var id = $(this).attr('id');
          $("#"+id+" > img").attr("src","./images/idea-correct.png");
          $("#"+id+" > p").text("Clear");
          $("#"+id+" > p").css("color", "#0000ff");
        });
      });
    </script>
  </head>
  <body>
    <header>
      <h2 class="top-title">2020학년도 한양대학교 ERICA 소프트웨어학부</br>제1차 신입생환영회 Quiz</h2>
    </header>

    <article class="contents">
      <table class="quiz-table">
      </table>
    </article>
  </body>
</html>
