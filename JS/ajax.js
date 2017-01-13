$(document).ready(function() 
{
    $(".link").on("click", function(e)
    {
        e.preventDefault();
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];

        $.ajax({
            type : "GET",
            data: arr,
            url: "",
            success : function(data)
            {
                $(".page").html(data);
                console.log("ok");
            }
        });
    });
});