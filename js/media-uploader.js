jQuery(document).ready(function ($) {
    $('#pilih_media').click(function (e) {
        e.preventDefault();
        var image_frame;
        if (image_frame) {
            image_frame.open();
        }
        image_frame = wp.media({
            title: 'Pilih Media',
            multiple: true,
            library: {
                type: 'image',
            }
        });

        // image_frame.on('close', function () {
        //     var selection = image_frame.state().get('selection');
        //     var gallery_ids = new Array();
        //     var my_index = 0;
        //     selection.each(function (attachment) {
        //         gallery_ids[my_index] = attachment['id'];
        //         my_index++;
        //     });
        //     var ids = gallery_ids.join(",");
        //     $('input#image_id').val(ids);
        //     Refresh_Image(ids);
        // });


        image_frame.on('close', function () {
            var selection = image_frame.state().get('selection');
            var gallery_ids = new Array();
            var my_index = 0;
            selection.each(function (attachment) {
                gallery_ids[my_index] = attachment['id'];
                my_index++;
            });
            var ids = gallery_ids.join(",");
            if (ids != '') {
                $('#fcg-submit').removeAttr('disabled').addClass('active');
                $('.fcg-help-text').removeClass('hide');
            } else {
                $('#fcg-submit').attr('disabled', 'disabled').removeClass('active');
                $('.fcg-help-text').addClass('hide');
            }
            $('input#image_id').val(ids);
            Refresh_Image(ids);
        });

        image_frame.on('open', function () {
            var selection = image_frame.state().get('selection');
            var ids = $('input#image_id').val().split(',');
            ids.forEach(function (id) {
                var attachment = wp.media.attachment(id);
                attachment.fetch();
                selection.add(attachment ? [attachment] : []);
            });

        });

        image_frame.open();
    });
});
