<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_image = get_sub_field('bg_image');
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
    $circle_image = get_sub_field('circle_image');
    $heading_color = get_sub_field('heading_color');
    $class = get_sub_field('class');
?>

<section <?php if( $custom_id ) { echo "id=$custom_id";} ?> style="background-image: url(<?php if( $bg_image ) { echo "$bg_image";}  ?>" class="<?php if( $class ) { echo $class;} ?> leads-section bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto max-w-screen-lg items-center py-20 grid grid-cols-7 gap-4">
        <div style="max-width:570;" class="col-span-4 lg:col-span-4 md:col-span-4 xs:col-span-7 col-span-7">
            <h2 style="color:<?php if( $heading_color) { echo "$heading_color";}else{echo "#000";}  ?>" class="text-3xl font-bold mb-5 lg:text-left md:text-left xs:text-center text-center">
                <?php if( $heading) { echo "$heading";} else { echo "This is Heading";}  ?>
            </h2>
            <p class="max-w-md lg:text-left md:text-left xs:text-center text-center lg:ml-0 md:ml-0 mx-auto">
                <?php if( $text) { echo "$text";} else { echo "Text";}  ?>
            </p>
        </div>
        <?php if( $circle_image): ?>
            <div class="col-span-3 lg:col-span-3 md:col-span-3 xs:col-span-7 col-span-7">
                <div class="max-w-xs lg:ml-0 mx-auto">
                    <img src="<?php echo "$circle_image"; ?>" width="100%" />  
                </div>
            </div>
         <?php endif; ?>	  
    </div>
</section>