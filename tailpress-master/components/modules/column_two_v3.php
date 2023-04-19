<?php 
    $custom_id = get_sub_field('custom_id');
    $circle_image = get_sub_field('circle_image');
    $bold_text_1 = get_sub_field('bold_text_1');
    $bold_text_2 = get_sub_field('bold_text_2');
    $bold_text_color_1 = get_sub_field('bold_text_color_1');
    $bold_text_color_2 = get_sub_field('bold_text_color_2');
    $text = get_sub_field('text');
?>

<section>
    <div <?php if( $custom_id ) { echo "id=$custom_id";} ?> class="container mx-auto max-w-screen-lg items-center py-20 grid grid-cols-7 gap-4">
        <div style="max-width:570;" class="lg:col-span-4 col-span-7 lg:ml-0 mx-auto">
            <h5 style="color:<?php if( $bold_text_color_1 ) { echo "$bold_text_color_1";}else{echo "#000";}  ?>" class="max-w-md text-xl font-bold mb-5">
                <?php if( $bold_text_1 ) { echo "$bold_text_1";} else { echo "This is Heading";}  ?>
            </h5>
            <h5 style="color:<?php if( $bold_text_color_2 ) { echo "$bold_text_color_2";}else{echo "#000";}  ?>" class="max-w-md text-xl font-bold mb-5">
                <?php if( $bold_text_2 ) { echo "$bold_text_2";} else { echo "This is Heading";}  ?>
            </h5>
            <p class="max-w-md lg:text-left md:text-left xs:text-center text-center lg:ml-0 md:ml-0 mx-auto">
                <?php if( $text) { echo "$text";} else { echo "Text";}  ?>
            </p>
        </div>
        <?php if( $circle_image): ?>
            <div class="col-span-3 lg:col-span-3 md:col-span-7 xs:col-span-7 col-span-7">
                <div class="max-w-xs lg:ml-0 mx-auto">
                    <img src="<?php echo "$circle_image"; ?>" width="100%" />  
                </div>
            </div>
         <?php endif; ?>	  
    </div>
</section>