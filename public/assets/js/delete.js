/* let urlLocation = window.location.href;
console.log(urlLocation); */

$(document).ready(function() {
    $("body").on("click", ".delete", function(event) {
        event.preventDefault();
        var id = $(this).data("id");
        var url = $(this).attr('data-url');
        // var url = $(this).data("url");
        console.log(url);
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger me-2",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.value) {
                    console.log(aurl + "/" + urlLocation.split("/")[4]);
                    $.ajax({
                        type: "DELETE", 
                        data: { id: id },
                        // http://localhost:8000/service/delete
                        url: aurl + "/" + urlLocation.split("/")[4],    
                        success: function(data) {
                            toaster_message(
                                data.message,
                                data.icon,
                                data.redirect_url
                            );
                        },
                        error: function(request) {
                            toaster_message(
                                "Something Went Wrong! Please Try Again.",
                                "error"
                            );
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelled",
                        "Your Data Is Safe",
                        "info"
                    );
                }
            });
    });
});