$(document).ready(function(){
    $("#send-btn").on("click", function(){
            $value = $("#texto").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
            $(".form").append($msg);
            $("#texto").val('');
            //Iniciar Código Ajax
            $.ajax({
                url: 'message.php',
                type :'POST',
                data: 'text='+$value,
                success : function(result){
                    $replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>'+ result +'</p></div></div>';
                    $(".form").append($replay);
                }
            });
        });
});