<?php 
    $custom_id = get_sub_field('custom_id');
    $heading = get_sub_field('heading');
    $heading_color = get_sub_field('heading_color');
    $subheading = get_sub_field('subheading');
    $subheading_color = get_sub_field('subheading_color');

    $id = ( $custom_id ) ? "id=$custom_id" : "";
    $heading_color = ( $heading_color ) ? "style='color:$heading_color;'" : "";
?>

<section>
    <div <?php echo $id; ?> class="container mx-auto max-w-screen-lg items-center pt-20">
        <?php if( $heading ) : ?>
            <h2 <?php echo $heading_color ?> class="text-center text-3xl title-color-1 font-bold">
                <?php echo $heading ?>
            </h2>
        <?php endif; ?>   
        <h3 style="color:<?php if( $subheading_color) { echo "$subheading_color";} else { echo "#000";}  ?>" class="text-center mb-4 mt-14">
            <?php if( $subheading) { echo "$subheading";} else { echo "This is Subheading";}  ?>
        </h3>
        <?php if( have_rows('card') ): ?>
            <div class="grid xl:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <?php 
                while ( have_rows('card') ) : the_row(); 

                $card_image = get_sub_field('card_image');
                $card_title = get_sub_field('card_title');
                $card_text = get_sub_field('card_text');
                $card_bg_color = get_sub_field('card_bg_color');
                
                $card_bg_color = ( $card_bg_color ) ? "style='background-color:$card_bg_color;'" : "";
                ?>

                <div <?php echo $card_bg_color ?> class="flex flex-row rounded-lg p-8 col-span-1 items-center">
                    <?php if( $card_image): ?>
                        <div class="basis-4/12">
                            <img src="<?php echo $card_image ?>" />
                        </div>
                    <?php endif; ?>	
                    <?php if( $card_title && $card_text ): ?>
                        <div class="basis-8/12 flex flex-col gap-y-6">
                            <h4><?php echo $card_title ?></h4>
                            <p><?php echo $card_text ?></p>
                        </div>
                    <?php endif; ?>	
                </div>
                <?php  endwhile; ?>
            </div>
        <?php endif; ?>	
    </div>
</section>