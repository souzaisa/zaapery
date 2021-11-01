<?php get_header(); ?>
<head>
    <div class="head-sobrenos">
        <div class="parallax-container">
        <div class="parallax"><img src="<?php the_field('imagem_sn', 285); ?>"></div>
        </div>
        <h3>Sobre Nós</h3>
    </div>
</head>
<section class="info-sobrenos">
    <p><?php the_field('texto_sobre_nos', 285); ?></p>
</section>
<?php get_footer(); ?>