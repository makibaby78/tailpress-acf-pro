<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_image = get_sub_field('bg_image');
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
    $text_2 = get_sub_field('text_2');
    $circle_image = get_sub_field('circle_image');
    $heading_color = get_sub_field('heading_color')
?>

<section <?php if( $custom_id ) { echo "id=$custom_id";} ?> class="how-section bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto max-w-screen-lg items-center py-20 grid grid-cols-7 gap-4">
        <?php if( $circle_image): ?>
            <div class="col-span-3 lg:block md:block sm:hidden hidden">
                <div class="max-w-xs">
                    <img src="<?php echo "$circle_image"; ?>" width="100%" />  
                </div>
            </div>
         <?php endif; ?>	 
         <div style="max-width:570;" class="col-span-4 lg:col-span-4 md:col-span-4 xs:col-span-7 col-span-7">
            <h2 style="color:<?php if( $heading_color) { echo "$heading_color";}else{echo "#000";}  ?>" class="text-3xl font-bold mb-5 lg:text-left md:text-left xs:text-center text-center">
                <?php if( $heading) { echo "$heading";} else { echo "This is Heading";}  ?>
            </h2>
            <p class="max-w-md lg:text-left md:text-left xs:text-center text-center lg:ml-0 md:ml-0 mx-auto">
                <?php if( $text) { echo "$text";} else { echo "Text";}  ?>
            </p>
            <br/>
            <p class="max-w-md lg:text-left md:text-left xs:text-center text-center lg:ml-0 md:ml-0 mx-auto">
                <?php if( $text_2) { echo "$text_2";} else { echo "Text";}  ?>
            </p>
        </div>
        <?php if( $circle_image): ?>
            <div class="mx-auto col-span-3 lg:col-span-3 md:col-span-3 xs:col-span-7 col-span-7 lg:block md:block lg:hidden md:hidden sm:block block">
                <div class="max-w-xs lg:ml-0 mx-auto">
                    <img src="<?php echo "$circle_image"; ?>" width="100%" />  
                </div>
            </div>
         <?php endif; ?>	
    </div>
</section>