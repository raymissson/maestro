$(document).ready(function(){
    $('#dep').on('click',function(){
        var depID = $(this).val(); 
        console.log(depID);
        if(depID){
            $.ajax({
                type:'POST',
                url:'localhost/samelHelp/view/formFunc.php',
                data: 'depID=' + depID,
                success: function(data){
                    $('#cargoID').html(data);
                }

            });
        }
    });
});