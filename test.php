<script src="https://code.jquery.com/jquery-3.0.0-alpha1.js"></script>
<html>
    <head>
        <style>
            h2{
  color: red;
  text-decoration: underline;
}

body{
  font-family: sans-serif;
}

form{
  margin-top: 10px;
  margin-bottom: 10px;
}

button{
  margin-top: 10px;
  background: green;
  color: white;
  border: 1px solid green;
  border-radius: 5px;
  font-size: 20px;
}
        </style>
    </head>
<body>
  
<form id="ajax-upload" action="uploadfile.php" method="post" enctype="multipart/form-data">
File: <input type="file" name="submitted">
<input type="hidden" name="someParam" value="someValue"/>
  <button type="submit">Send via AJAX!</button>
</form>
  <div>
    Copy/Paste the URL below to see the uploaded file 
    <div id="result"></div>
  </div>  
  <script type="text/javascript">
      $(document).ready(function(){
      //based on: http://stackoverflow.com/a/9622978
      $('#ajax-upload').on('submit', function(e){
        e.preventDefault();
        var form = e.target;
        var data = new FormData(form);
        $.ajax({
          url: form.action,
          method: form.method,
          processData: false,
          contentType: false,
          data: data,
          processData: false,
          success: function(data){
            $('#result').text(data)
          }
        })
      })
    })
  </script>
</body>
</html>