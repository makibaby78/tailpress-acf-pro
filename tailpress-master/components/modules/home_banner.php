<?php 
    $custom_id = get_sub_field('custom_id');
    $image = get_sub_field('image');
    $headingtitle = get_sub_field('heading_title');
    $headingtitlecolor = get_sub_field('heading_title_color');
    $headingcontent = get_sub_field('heading_content');
    $headingcontentcolor = get_sub_field('heading_content_color');
    $text = get_sub_field('text');
    $button_text = get_sub_field('button_text');
    $button_text_color = get_sub_field('button_text_color');
    $button_color = get_sub_field('button_color');
    $bg_color = get_sub_field('bg_color');
    $link = get_sub_field('button_link');

    $id = ( $custom_id ) ? "id=$custom_id" : "";
    $bg_color = ( $bg_color ) ? "style='background-color: $bg_color;'" : "";
    $headingtitlecolor = ( $headingtitlecolor ) ? "color: $headingtitlecolor;" : "";
    $headingcontentcolor = ( $headingcontentcolor ) ? "color: $headingcontentcolor;" : "";
    $link = ( $link ) ? "href=$link;" : "";
    $button_text_color = ( $button_text_color ) ? "color:$button_text_color;" : "";
    $button_color = ( $button_color ) ? "background-color:$button_color;" : "";
?>

<section <?php echo $id; ?> <?php echo $bg_color; ?> class="homepage-banner flex items-center">
        <div class="container max-w-screen-xl mx-auto flex flex-row lg:py-28 md:py-20 py-14">
            <div class="lg:basis-6/12 md:basis-6/12 basis-8/12 flex flex-col gap-y-6">
                <h1 class="lg:text-4xl text-2xl md:text-4xl text-white font-bold leading-normal">
                    <?php if( $headingtitlecolor &&  $headingtitle ) : ?>
                        <span style="font-family: 'Rubik', sans-serif; <?php echo $headingtitlecolor ?>">
                            <?php echo $headingtitle ?>
                        </span>
                    <?php endif; ?>
                    <?php if( $headingcontent && $headingcontentcolor ) : ?>
                        <br/>
                        <span style="font-family: 'Rubik', sans-serif; <?php echo $headingcontentcolor ?>">
                            <?php echo $headingcontent ?>
                        </span>
                    <?php endif; ?>
                </h1>
                <?php if( $text ) : ?>
                    <p class="text-lg">
                        <?php echo  $text ?>
                    </p>
                <?php endif; ?>
                <?php if( $button_text_color && $button_color && $button_text ) : ?>
                    <div class="flex align-center gap-x-2">
                        <a <?php echo $link; ?> >
                            <button style="
                                    <?php echo $button_text_color ?>
                                    <?php echo $button_color ?>"
                                class="text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 font-bold whitespace-nowrap">
                                <?php echo $button_text ?>
                            </button>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if( $image ) : ?>
            <div class="homebanner-img" style="background-image: url(<?php echo $image; ?>);">
            </div>
        <?php endif; ?>
</section>