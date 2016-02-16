$(document).ready( function() {
 	$('input[name=submit]').click( 
        function () 
        {
          if (document.getElementById('text').value=="") {
          document.getElementById('err_text').innerHTML='Введите текст';
          return false;
              };
          if (document.getElementById('deadline').value=="") {
          document.getElementById('err_text').innerHTML='Введите дату';
          return false;
              };

           var textarea = $('textarea[id=text]').val();
           var datetoadd = $('input[id=deadline]').val();
           // отправляем AJAX запрос
           $.ajax(
              {
                 type: "POST",
                 data: {
                    text: $('textarea[id=text]').val(),
                    deadline: $('input[id=deadline]').val(),
                    },
                 url: "../php/addzapis.php"
              }
              );
        }
     );
  $('a[class=done]').click( 
        function () 
        {
           var id = this.id;
           // отправляем AJAX запрос
           $.ajax(
              {
                 type: "POST",
                 data: {
                    id: id,
                    },
                 url: "../php/deletevent.php",
                 success: function() {
                  location.reload();
                 }
              }
              );
        }
     );
   });

