<?php 
    $custom_id = get_sub_field('custom_id');
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
?>

<section <?php if( $custom_id ) { echo "id=$custom_id";} ?> class="leads-section">
        <div class="container max-w-screen-xl mx-auto xl:pt-28 md:pt-20 sm:pt-16 pt-16 xl:pb-28 md:pb-20 sm:pb-16 pb-16 px-10 lg:px-0">
            <?php if( $heading ): ?>
                <?php echo $heading ?>
            <?php endif; ?>	
            <?php if( $text ): ?>
                <p class="mx-auto max-w-xl text-center pb-8"><?php echo $text ?></p>
            <?php endif; ?>
            <?php if( have_rows('card') ): ?>
                <div class="box-wrapper grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-6">
                    <?php 
                    while ( have_rows('card') ) : the_row(); 

                    $card_text = get_sub_field('card_text');
                    $card_bg_color = get_sub_field('card_bg_color');
                    $card_text_color = get_sub_field('card_text_color');
                    ?>
                        <?php if( $card_bg_color && $card_text_color && $card_text): ?>
                            <div style="background-color:<?php echo $card_bg_color ?>" class="box-item-1 py-16 px-10">
                                <h5 style="color:<?php echo $card_text_color ?>" class="text-xl title-color-1 font-bold pb-6">
                                    <?php echo $card_text ?>
                                </h5>
                            </div>
                        <?php endif; ?>	
                    <?php  endwhile; ?>
                </div>
            <?php endif; ?>	
        </div>
</section>