<div id="success_message" class="alert alert-success" style="display: none"></div>

<form id="enquiry">

    <h2>Send an enquiry about <?php the_title(); ?></h2>

    <input type="hidden" name="registration" value="<?php the_field('registration'); ?>" >

    <div class="form-group row mb-3">
        <div class="col-lg-6">
            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-lg-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-lg-6">
            <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number" required>
        </div>
    </div>
    <div class="form-group mb-3">
        <textarea name="enquiry" class="form-control" placeholder="Your Enquiry" required></textarea>
    </div>
    <div class="form-group mb-3">
        <button name="enquiry" type="submit" class="btn btn-success btn-block">Send your enquiry</button>
    </div>
</form>

<script>
    (function ($){
        $('#enquiry').submit(function (event){

            event.preventDefault();

            var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
            var form = $('#enquiry').serialize();
            var formdata = new FormData;

            formdata.append('action', 'enquiry');
            formdata.append('nonce', '<?php echo wp_create_nonce('ajax-nonce'); ?>');
            formdata.append('enquiry', form);

            $.ajax(endpoint, {
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                success: function (res){

                    $('#enquiry').fadeOut(200);

                    $('#success_message').text('Thanh for your enquiry').show();

                    $('#enquiry').trigger('reset');

                    $('#enquiry').fadeIn(500);

                },
                error: function (err){

                }

            })

        })
    })(jQuery);
</script>