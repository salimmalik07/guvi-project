$(document).ready(function() {
      $("#submit").on('click',function(){
            var email = $("#email").val();
           var password = $("#password").val();
           var age = $("#age").val();
           var name =$("#name").val();
           if (email == "" || password == ""){
          alert('Please fill the form');
           }
          else {
            $.ajax({
                  url:'registration.php',
                  method : 'POST',
                  data : {
                        login : 1,			
                        email : email,
                        password : password,
                        age : age,
                        name :name
                  },
                  success : function(response){
                        console.log(response);
                  },
                  dataType: 'text'
            }
            );
      }
            
      });
});
       
