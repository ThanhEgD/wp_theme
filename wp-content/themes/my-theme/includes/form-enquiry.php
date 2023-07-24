<form>

    <h2>Send an enquiry about <?php the_title(); ?></h2>

    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-lg-6 row">
            <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number" required>
        </div>
    </div>
    <div class="form-group">
        <textarea name="enquiry" class="form-control" placeholder="Your Enquiry" required></textarea>
    </div>
    <div class="form-group">
        <button name="enquiry" type="submit" class="btn btn-success btn-block">Send your enquiry</button>
    </div>
</form>

<script>
    (function ($){
        $('#enquiry').submit(function (){

            alert('ok');

        })
    })(jQuery);
</script>