<?php get_header(); ?>
<section class="page-contato">
    <div class="info-contato">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/message.png" class="hide-on-small-only">
        <div>
            <h5>Entre em contato conosco!</h5>
            <div>
                <div class="forms-contato">
                    <?php echo do_shortcode('[contact-form-7 id="11" title="Formulário de contato 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contato">
    <?php if (get_field('endereco1', 285) && get_field('endereco2', 285) != ""){ //validando o endereço, pois até o momento o cliente não possui loja física ?>
        <div class="contato-icon">
            <i class="fas fa-map-marker-alt"></i>
                <p><?php the_field('endereco1', 285); ?><br>
                <?php the_field('endereco2', 285); ?></p>
        </div>
    <?php }?>
        <h6>Fale conosco!</h6>
        <div class="contato-icon">
            <i class="fas fa-phone-alt"></i>
            <p><?php the_field('telefone', 285); ?></p>
        </div>
        <div class="contato-icon">
            <i class="far fa-envelope"></i>
            <a href="mailto:<?php the_field('email', 285); ?>">
                <p><?php the_field('email', 285); ?></p>
            </a>    
        </div>
        <div class="contato-icon">
            <i class="fab fa-whatsapp"></i>
            <a href="<?php the_field('link_wpp', 285); ?>">
                <p>Clique aqui e nos mande uma mensagem!</p>
            </a>
        </div>
        <div class="redes-sociais">
            <p>Siga nossas redes sociais:</p>
            <div class="redes-sociais-icon">
                <a href="<?php the_field('link_fb', 285); ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php the_field('link_insta', 285); ?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>