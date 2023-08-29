let currentLocation = window.location.href.split("/")[3];
// console.log(currentLocation);


function toaster_message(message, icon, url) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger me-2",
        },
        buttonsStyling: false,
    });
    swalWithBootstrapButtons
        .fire({
            text: message,
            icon: icon,
            confirmButtonText: "OK",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.value) {
                typeof url === "undefined" ?
                    $("#" + currentLocation + "_tbl")
                    .DataTable()
                    .ajax.reload() :
                    (window.location.href = aurl + "/" + url);
            }
        });
}

function error_toaster_message(message, icon)
{
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger me-2",
        },
        buttonsStyling: false,
    });
    swalWithBootstrapButtons
        .fire({
            text: message,
            icon: icon,
            confirmButtonText: "OK",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.value) {
                
            }
        });
}