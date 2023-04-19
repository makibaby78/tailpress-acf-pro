<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_image = get_sub_field('bg_image');
    $heading = get_sub_field('heading');
?>
<section <?php if( $custom_id ) { echo "id=$custom_id";} ?> style="background-image:url(<?php if($bg_image){ echo "$bg_image";} ?>)" class="bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto max-w-screen-xl items-center py-20">
        <h2 style="color:#032130;" class="text-center text-3xl font-bold mb-5">
            <?php if($heading){ echo "$heading";}else{ echo "This is Heading"; } ?>
        </h2>
        <?php if( have_rows('dropdown') ): ?>

            <div class="dropdown-wrapper">
                <?php 
                    while ( have_rows('dropdown') ) : the_row(); 

                    $question = get_sub_field('dropdown_item');
                    $answer = get_sub_field('dropdown_item_text');
                ?>
                    <?php if($question !== '' && $answer !== '') : ?>
                        <div class="drop-down">
                            <div class="faq-question">
                                <div class="flex flex-row w-full justify-between py-6">
                                    <p class="font-bold">
                                        <?php echo $question  ?>
                                    </p>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                            </div>
                            <div class="faq-answer">
                                 <?php echo $answer  ?>
                            </div>
                        </div>
                    <?php endif ?>

                <?php  endwhile; ?>
            </div>
            
        <?php endif; ?>	
    </div>
</section>