<?php
$perguntas = get_posts([
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
]);
get_header(); ?>
<head>
    <div class="head-faq">
        <div class="parallax-container">
        <div class="parallax"><img src="<?php the_field('imagem_faq', 285); ?>"></div>
        </div>
        <div class="titulo-faq">
            <h4>FAQ</h4>
            <h5>perguntas frequentes</h5>        
        </div>
        
    </div>
</head>
<section>
    <div class="faq container">
        <?php foreach ($perguntas as $pergunta) :
            setup_postdata($pergunta); ?>
        <div class="card-faq">
            <a class="toggle" data-id="<?php echo $pergunta->ID?>">
            <h6><?php echo $pergunta->post_title ?>
                <i class="toggle-icon fas fa-angle-down rotate" data-id="<?php echo $pergunta->term_id ?>"></i>
            </h6>
            </a>
            <div class="perguntas" id="<?php echo $pergunta->ID?>">
                <p><?php echo $pergunta->post_content; ?></p>
            </div>
        </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>