<?php get_header();?>

<div class="container">

    <div class="row">

        <div class="col-lg-8 mt-5">
        <?php
                        get_template_part("includes/part", "formFede");
                        ?>
        </div>
        <?php
        get_template_part("includes/part", "accesRap");
        ?>
    </div>
</div>
<?php get_footer() ?>