$(document).ready(function() {
    $("body").on("click", ".notification-item", function() {
        event.preventDefault();
        var id = $(this).data("id");
        $.ajax({
            url: aurl + "/notification",
            type: "POST",
            data: { id: id },
            dataType: "JSON",
            success: function(data) {
               
            },
           
        });

    });
});
