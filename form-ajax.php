<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<form id="myForm">
  username <input name="username" id="x"> <p></p>
  password <input name="password" id="y"> <p></p>
  <input type="submit" id="send" value="Login">
</form>
<div id="response"></div>
<script>
    $(document).ready(function() {
            $('#myForm').submit(function(event) {
            event.preventDefault();
            const formData = {
                username: $('#x').val(),
                password: $('#y').val()
            };
        

             $.ajax({
             url: 'proses_ajax1.php',
             type: 'POST',
             data: formData,
              success: function (response) {
                  $('#response').html(`<p>${response}</p>`);
               }
           })
        }); 
    });

</script>