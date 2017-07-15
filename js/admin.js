
 $(document).ready(function(){

      $('.nav li:has(ul)').click(function (e) {
           e.preventDefault();

           if($(this).hasClass('active')){
              $(this).removeClass('active');  
              $(this).children('ul').slideUp();


           }else{
              $('.nav li ul').slideUp();
              $('.nav li').removeClass('active');
              $(this).addClass('active');
              $(this).children('ul').slideDown();

           }

      });




 });