<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       $('#sortpicture').on('change', function() {
    var file_data = $('#sortpicture').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    $.ajax({
                url: 'upload.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response); // display response from the PHP script, if any
                }
     });
});
    });
</script>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<input id="sortpicture" type="file" name="sortpic" />
</form>
