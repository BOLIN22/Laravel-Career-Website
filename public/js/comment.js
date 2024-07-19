$(document).ready(function() {
    $("#commentForm").submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'post',
            url: '/ideas/' + ideaId + '/comment',
            data: formData,
            success: function(response) {
                $("#chatbox").html(response.html);
                $("#usermsg").val("");
            },
            error: function(xhr, status, error) {
            console.error(xhr.responseText);
            }
        });
    });
});
  
