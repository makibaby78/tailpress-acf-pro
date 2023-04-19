<?php 
    $custom_id = get_sub_field('custom_id');
    $bg_color = get_sub_field('bg_color');
    $heading = get_sub_field('heading');
    $item_col_span = get_sub_field('item_col_span');

    $id = ( $custom_id ) ? "id=$custom_id" : "";
?>

<section <?php echo $id; ?> style="background-color:#F5F9F9">
    <div class="container mx-auto max-w-screen-<?php if($item_col_span<=3){ echo "lg";}else{echo "xl";}?> py-20">
        <?php if( $heading ) : ?>
            <h2 class="text-center text-3xl font-bold mb-5">
                <?php echo $heading ?>
            </h2>
        <?php endif; ?>  
        <?php if( have_rows('item') ): ?>
            <div class="grid :grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-4">
                <?php 
                    while ( have_rows('item') ) : the_row(); 

                    $item_icon = get_sub_field('item_icon');
                    $item_text = get_sub_field('item_text');
                ?>
                <div style="border: 3px solid #0C8097;" class="flex flex-row p-8 col-span-1 items-center gap-4 rounded-lg">
                    <?php if( $item_icon ): ?>
                        <div class="basis-4/12">
                            <img src="<?php echo "$item_icon" ?>" />
                        </div>
                    <?php endif; ?>	
                    <div class="basis-8/12">
                        <p><?php if( $item_text ) { echo "$item_text";} else{ echo "this is Text"; } ?></p>
                    </div>
                </div>
                <?php  endwhile; ?>
            </div>
        <?php endif; ?>	
    </div>
</section>