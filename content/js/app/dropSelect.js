$(document).ready(function() {  
    $(document).on('change','#dep', function() {
        var depID = $(this).val();
        console.log(depID);
        if (depID) {
            $.ajax({
                type: 'POST',
                cache: false,
                url: 'formFunc.php',
                data: 'depID=' + depID,
                success: function(html) {
                    $('#cargo').html(html);
                     
                }
            });
        }
    });
});