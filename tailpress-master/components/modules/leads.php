<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_image = get_sub_field('bg_image');
    $heading_val_1 = get_sub_field('heading_val_1');
    $heading_val_2 = get_sub_field('heading_val_2');
    $heading_val_3 = get_sub_field('heading_val_3');
    $heading_color_1 = get_sub_field('heading_color_1');
    $heading_color_2 = get_sub_field('heading_color_2');
    $text = get_sub_field('text');
    $list_color = get_sub_field('list_color');
    $column_image = get_sub_field('column_image');

    $id = ( $custom_id ) ? "id=$custom_id" : "";
    $bg_image = ( $bg_image ) ? "style='background-image: url($bg_image);'" : "";
?>

<section <?php echo $id; ?> <?php echo $bg_image ?> class="homepage-banner flex items-center">
        <div class="container max-w-screen-xl mx-auto flex flex-row lg:pt-28 pb-40 md:pt-20 px-10 lg:px-0">
            <div class="basis-6/12 flex flex-col gap-y-6">
                <?php if( $heading_val_1 || $heading_val_2 || $heading_val_3 ): ?>
                    <h1 style="color:<?php if( $heading_color_1 ) { echo "$heading_color_1";}else{ echo "#000"; }  ?>" class="text-6xl text-white font-bold leading-normal">
                            <?php if( $heading_val_1 ) { echo "$heading_val_1";}else{  echo "This is Heading 1";}  ?>
                            <span style="color:<?php if( $heading_color_2 ) { echo "$heading_color_2";} else{ echo "#000"; }  ?>">
                                <?php if( $heading_val_2 ) { echo "$heading_val_2";}else{  echo "This is Heading 2";}  ?>
                            </span>
                            <?php if( $heading_val_3 ) { echo "$heading_val_3";}else{  echo "This is Heading 3";}  ?>
                    </h1>
                <?php endif; ?>	
                <p class="text-lg"><?php if( $text ) { echo "$text";}else{  echo "This is Text";}  ?></p>        
            </div>
            <div class="basis-6/12">
                <?php if( $column_image ): ?>
                    <img src="<?php echo "$column_image"; ?>" width="100%" /> 
                <?php endif; ?>	   
            </div>
        </div>
</section>