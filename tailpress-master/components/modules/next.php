<?php 
    $custom_id = get_sub_field('custom_id');
    $heading = get_sub_field('heading');
    $link_description = get_sub_field('link_description');
    $link_text = get_sub_field('link_text');
    $link = get_sub_field('link');
    $bottom_text = get_sub_field('bottom_text');

    $id = ( $custom_id ) ? "id=$custom_id" : "";
?>

<section <?php echo $id; ?> class="bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto max-w-screen-lg items-center py-20">
        <?php if( $heading ) : ?>
            <h2 style="color:#032130;" class="text-center text-3xl font-bold mb-5">
                <?php echo $heading ?>
            </h2>
        <?php endif; ?>
            <p class="mb-4 text-center">
                <?php if( $link_description ) : ?>
                    <?php echo $link_description ?> 
                <?php endif; ?>
                <?php if( $link && $link_text ) : ?>
                    <?php 
                        $link = ( $link ) ? "href=$link" : "";    
                    ?>
                    <a <?php echo $link; ?> >
                        <?php echo $link_text ?>
                    </a>
                <?php endif; ?>
            </p>
        <?php if( $bottom_text ) : ?>
            <p class="mb-4 text-center">
                <?php echo $bottom_text ?>
            </p>
        <?php endif; ?>
    </div>
</section>