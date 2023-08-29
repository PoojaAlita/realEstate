

/*DataTable*/
var datatable = $("#service_tbl").DataTable({
    aLengthMenu: [
        [10, 30, 50, -1],
        [10, 30, 50, "All"],
    ],
    iDisplayLength: 10,
    language: {
        search: "",
    },
    ajax: {
        type: "POST",
        url: aurl + "/service/listing",
    },
    columns: [
        { data: "0" },
        { data: "1" },
        { data: "2" },
        { data: "3" },
        { data: "4" },
        
    ],
});
$(document).ready(function() {
    /* Validation Of Service Form */
    $("#service_form").validate({
        rules: {
            title: {
                required: true,
            },
            file: {
                required: function (element) {
                    if ($(".id").val() == '') {
                      return true;
                    } else {
                      return false;
                    }
                  },
            },
            description: {
                required: true,
            },
          
        },
        messages: {
            title: {
                required: "Please Enter Title",
            },
            file: {
                required: "Please Select File",
            },
            description: {
                required: "Please Enter Description",
            },
           
        },
    
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });



    
    /* Add Service Modal */
    $("body").on("click", ".add_service", function() {
        $("#service_form").validate().resetForm();
        $("#service_form").trigger("reset");
        $("#service_modal").modal("show");
        $('.service_image').hide();
        $(".id").val($(this).data("id"));
        $("#title_service_modal").text("Add Service");
        $(".submit_service").text("Add Service");
    });

    /* Adding And Updating Service Modal */
    $(".submit_service").click(function(event) {
    event.preventDefault();
    
    var pusher = new Pusher('37d71993b1332f8df814', {
        cluster: 'ap2'
      });
      var channel = pusher.subscribe('channel');
      channel.bind('notice', function(data) {
          if(data.from) {
              let pending = parseInt($('#' + data.from).find('.pending').html());
              if(pending) {
                  $('#' + data.from).find('.pending').html(pending + 1);
              } else {
                  $('#' + data.from).html('<a href="#" class="nav-link" data-toggle="dropdown"><i  class="fa fa-bell text-white"><span class="badge badge-danger pending">1</span></i></a>');
              }
          }
      });

        var form = $("#service_form")[0];
        var formData = new FormData(form);
        if ($("#service_form").valid()) {
            $.ajax({
                url: aurl + "/service/store",
                type: "POST",
                dataType: "JSON",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#service_modal").modal("hide");
                    toaster_message(data.message, data.icon);
                },
                error: function(request) {
                   
                    if(request.responseJSON){
                        $(".title_service").html(request.responseJSON.errors.title);
                        $(".file_service").html(request.responseJSON.errors.file);
                        $(".description_service").html(request.responseJSON.errors.description);
                      
                    }else{
                        toaster_message(
                            "Something Went Wrong! Please Try Again.",
                            "error"
                        ); 
                    }
                   
                },
            });
        }
    });

    /* Display Update Service Modal*/
    $("body").on("click", ".edit_service", function(event) {
        var id = $(this).data("id");
        $(".id").val(id);
        event.preventDefault();
        $.ajax({
            url: aurl + "/service/edit",
            type: "POST",
            data: { id: id },
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $("#service_form").trigger("reset");
                    $("#service_form").validate().resetForm();
                    $("#title_service_modal").text("Update Service");
                    $("#service_modal").modal("show");
                    $(".submit_service").text("Update Service");
                    $("#title").val(data.data.service.title);
                   
                     if(data.data.service.file){
                        $(".service_image").show(); 
                        $(".service_image").attr("src",aurl + "/assets/images/service/" + data.data.service.file);
                    }
                    // $("#file").val(data.data.service.file);
                    $("textarea[name='description']").val(data.data.service.description);
                } else {
                    toaster_message(data.message, data.icon);
                }
            },
            error: function(request) {
                toaster_message(
                    "Something Went Wrong! Please Try Again.",
                    "error"
                );
            },
        });
    });


    $("body").on("click", ".delete", function(event) {
        event.preventDefault();
        var id = $(this).data("id");
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
                    $.ajax({
                        type: "POST",
                        url: aurl + "/service/delete",
                        data: { id: id },

                        success: function(data) {
                            toaster_message(
                                data.message,
                                data.icon,    
                            );
                            datatable.ajax.reload(null, false);

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