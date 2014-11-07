$(document).ready(function()
{
    $(".alert-warning").css({"display":"none"});

    $("#boton").on("click", function()
    {
        $.ajax({
            type: "GET",
            url: "fetchData",
            success: function(data)
            {
                $(".alert-warning").html(data.data).css({"display":"block"});
            }
        });
    });
});