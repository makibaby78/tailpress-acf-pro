<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_image = get_sub_field('bg_image');
    $heading = get_sub_field('heading');

    $id = ( $custom_id ) ? "id=$custom_id" : "";
    $bg_image = ( $bg_image ) ? "style='background-image:url($custom_id);'" : "";
?>

<section <?php echo $id; ?> <?php echo $bg_image ?> class="bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto max-w-screen-lg items-center py-20">
        <h2 style="color:#032130;" class="text-center text-3xl font-bold mb-5">
            <?php if( $heading ) { echo "$heading";} else{ echo "This is Heading"; } ?>
        </h2>
        <?php if( have_rows('paragraph') ): ?>
            <?php 
                while ( have_rows('paragraph') ) : the_row(); 
            ?>
           
                <?php if( $paragraph_content = get_sub_field('paragraph_content') ) : ?>
                    <p class="mb-4"><?php echo $paragraph_content?></p>
                <?php endif; ?>    
            <?php  endwhile; ?>
        <?php endif; ?>	
    </div>
</section>