<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_image = get_sub_field('bg_image');
    $heading = get_sub_field('heading');
    $heading_text = get_sub_field('heading_text');
?>

<section <?php if( $custom_id ) { echo "id=$custom_id";} ?> style="background-image:url(<?php if( $bg_image ) { echo "$bg_image";} ?>)" class="bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto max-w-screen-lg items-center py-20">
        <h2 class="text-white text-center text-3xl title-color-1 font-bold">
            <?php if( $heading ) { echo "$heading";} else { echo "This is Heading";}  ?>
        </h2>
        <p class="text-white text-center"><?php if( $heading_text ) { echo "$heading_text";} else { echo "This is Heading Text";}  ?></p>
        <?php if( have_rows('list') ): ?>
            <ul class="flex flex-col gap-6 max-w-screen-md mx-auto py-8">
                <?php 
                while ( have_rows('list') ) : the_row(); 

                $list_text = get_sub_field('list_text');
                ?>
        
                <li class="flex items-center gap-2 text-white">
                    <i style="font-size:24px; color:#20CEAF;" class="fa-solid fa-circle-check"></i>
                    <?php if( $list_text ) { echo "$list_text";} else { echo "This is List Text";}  ?>
                </li>
                <?php  endwhile; ?>
            </ul>
        <?php endif; ?>	
    </div>
</section>