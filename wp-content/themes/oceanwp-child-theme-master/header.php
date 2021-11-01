<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'oceanwp' ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>
		
		<div id="wrap" class="clr">
			<?php do_action( 'ocean_top_bar' ); ?>
			<?php do_action( 'ocean_header' ); ?>
			<?php if(!is_product_category() && !is_shop()): //checando se não é a página de produtos ou de alguma categoria, pois a barra de categorias quebra quando o usuário coloca para visualizar os produtos em lista  ?>
				<div class="navbarCategoria">
					<?php echo do_shortcode( '[product_categories orderby="popularity" hide_empty = 0 columns = 8]' ); ?>
				</div>
			<?php endif;?>

			<?php if(is_front_page()){  ?>
			<div class="banner carousel carousel-slider">
				<div class="carousel-prev">
				<a class="prev waves-effect waves-light">
					<i class="fas fa-chevron-left"></i>
                </a>
				</div>
				
				<?php
					$imagem = get_field('fotos', 285);
					$size = 'banner-zaapery';
					$cont = 0;
					if ($imagem) :
						foreach ($imagem as $fotos_id) : ?>
							<a class="carousel-item">
								<?php echo wp_get_attachment_image($fotos_id, $size); ?>
							</a>
						
					<?php $cont++;
					endforeach;
					endif;
				// Checando se há somente uma imagem, para não mostrar a seta do carrossel 
				if($cont == 1): ?>
					<style>
						.carousel-prev, .carousel-next{
							visibility: hidden;
						}
					</style>
				<?php endif;
				// Se não há imagem, retirar o espaço que o carrossel ocupa
				if($cont == 0):?>
					<style>
						.banner{
							margin: -360px;
						}
						.carousel-prev, .carousel-next{
							visibility: hidden;
						}
					</style>
				<?php endif;?>

				<div class="carousel-next">
				<a class="next waves-effect waves-light">
					<i class="fas fa-chevron-right"></i>
                </a>
				</div>
			  </div>

			  <!-- Kits  -->
			  <div class="kits">
			  <?php if (get_field('titulo_kit1', 285) && get_field('link_kit1', 285) && get_field('imagem_kit1', 285)!= "") {//Checando se há ao menos um kit?>
				  <div class="card-kit">
					<div class="secao1-kit">
					  	<h5><?php the_field('titulo_kit1', 285); ?></h5>
					  	<a href="<?php the_field('link_kit1', 285); ?>" class="waves-effect waves-light btn btn-kit">Aproveite</a>
					</div>
					<img src="<?php the_field('imagem_kit1', 285); ?>">
				  </div>
				  	<style>
						.kits{
							margin: 3.5rem 1rem 1rem;			
						}
						@media only screen and (min-width: 425px){
							.kits {
								margin: 3rem 2rem 1rem;
						}
						@media only screen and (min-width: 500px) {
    						.kits {
       							 margin: 3rem auto 1rem;
							}
						}
					</style>
				<?php };
					if (get_field('titulo_kit2', 285) && get_field('link_kit2', 285) && get_field('imagem_kit2', 285)!= "") {?>
				  <div class="card-kit">
					<div class="secao1-kit">
					  	<h5><?php the_field('titulo_kit2', 285); ?></h5>
					  	<a href="<?php the_field('link_kit2', 285); ?>" class="waves-effect waves-light btn btn-kit">Aproveite</a>
					</div>
					<img src="<?php the_field('imagem_kit2', 285); ?>">
				  </div>
				  	<style>
						.kits{
							margin: 3.5rem 1rem 1rem;
						}
						@media only screen and (min-width: 425px){
							.kits {
								margin: 3rem 2rem 1rem;
						}
						@media only screen and (min-width: 500px) {
    						.kits {
       							 margin: 3rem auto 1rem;
							}
						}
					</style>
				<?php };?>
			  </div>
						
			<?php } ?>


		<?php do_action( 'ocean_before_main' ); ?>

		<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

