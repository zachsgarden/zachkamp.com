<?php 
    get_header();
?>
<section class="offset-left">
    <div class="blue-bg">
        <div class="bubble-wrap">
            <div class="bubble-profile">
                <div class="bubble one"></div>
                <div class="bubble two"></div>
                <div class="profile-image">
                    <?php 
                    $image = get_field('profile_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <!-- <?php 
                    $mask_image = get_field('mask');
                    if( !empty( $mask_image ) ): ?>
                        <img src="<?php echo esc_url($mask_image['url']); ?>" alt="<?php echo esc_attr($mask_image['alt']); ?>" />
                    <?php endif; ?>  -->
                </div>
            </div>
        </div>   
    </div>   
</section>

<div class="max-width">

    <section>
        <h1 class="page-heading"><?php the_field('greeting'); ?></h1>
        <p><?php the_field('intro_paragraph'); ?></p>
    </section>

    <span class="section-div"></span>

    <section id="resume">
        <h1 class="page-heading style2"><?php the_field('resume_title'); ?></h1>
        <p><?php the_field('resume_paragraph'); ?></p>
        <?php 
        $image = get_field('cash');
        if( !empty( $image ) ): ?>
            <img class="cash animation-element" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="resume-block"><?php the_field('resume'); ?></div class="resume-block">
    </section>
    
    <span class="section-div"></span>

    <section id="my-work">
        <h1 class="page-heading style3"><?php the_field('my_work_title'); ?></h1>
        <p><?php the_field('my_work_paragraph'); ?></p>
        <?php 
        $image = get_field('nacho');
        if( !empty( $image ) ): ?>
            <img class="nacho animation-element" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="work-container">

            <div class="work-item">
                <div class="work-item-header">
                    <?php 
                    $image = get_field('first_work_image');
                    $link = get_field('first_work_link');
                    $title = get_field('first_work_title');
                    $desc = get_field('first_work_description');
                    if( !empty( $image ) ): ?>
                        <a href="<?php echo $link?>;" target="_blank">
                            <img class="work-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />                            
                        </a>     
                        <a href="<?php echo $link?>;" target="_blank">
                            <h2 class="work-title"><?php echo $title; ?></h2>
                        </a>    
                        <p class="description"><?php echo $desc; ?></p>
                    <?php endif; ?>            
                </div>                
            </div>

            <div class="work-item">
                <div class="work-item-header">
                    <?php 
                    $image = get_field('second_work_image');
                    $link = get_field('second_work_link');
                    $title = get_field('second_work_title');
                    $desc = get_field('second_work_description');
                    if( !empty( $image ) ): ?>
                        <a href="<?php echo $link?>;" target="_blank">
                            <img class="work-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />                            
                        </a>     
                        <a href="<?php echo $link?>;" target="_blank">
                            <h2 class="work-title"><?php echo $title; ?></h2>
                        </a>    
                        <p class="description"><?php echo $desc; ?></p>
                    <?php endif; ?>            
                </div>                
            </div>
            <div class="work-item">
                <div class="work-item-header">
                    <?php 
                    $image = get_field('third_work_image');
                    $link = get_field('third_work_link');
                    $title = get_field('third_work_title');
                    $desc = get_field('third_work_description');
                    if( !empty( $image ) ): ?>
                        <a href="<?php echo $link?>;" target="_blank">
                            <img class="work-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />                            
                        </a>     
                        <a href="<?php echo $link?>;" target="_blank">
                            <h2 class="work-title"><?php echo $title; ?></h2>
                        </a>    
                        <p class="description"><?php echo $desc; ?></p>
                    <?php endif; ?>            
                </div>                
            </div>

        </div>
    </section>

</div>

<?php 
    get_footer();
?>