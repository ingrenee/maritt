<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	
	
	<!--   precio  -->
	
	<?PHP
	$precio_base = get_post_meta( $post->ID, 'precio-base', true ); 
	?>
	<div class="precio-base">
	Precio:
	<span id="precio-base">
	<?PHP  
	echo $precio_base[0]['precio'];
	?>
	</span>
	</div>
	<input type="text" id="input-precio-base" value="<?PHP  
	echo $precio_base[0]['precio'];
	?>">
	<!--  fin precio base -->
	
	<div class="tipo-de-hotel">
	<?PHP 
	$temp = get_post_meta( $post->ID, 'tipo-de-hotel', true );
		?>
		<select class="select-precio" name="tipo-de-hotel">
	<?PHP	
		foreach( $temp as $v):
	?>
	<option value="<?PHP echo $v['precio-incremento']; ?>">
	<?PHP echo $v['hoteles']; ?>
	</option>
<?
endforeach;
?>
</select>
	</div>
	
	
	<!-- fin de itinerario -->
	<div class="itinerario"><h1>Itinerario</h1>
<?PHP
$Itinerario = get_post_meta( $post->ID, 'Itinerario', true ); 
foreach( $Itinerario as $v):
	?>
	<div class="item">
<h2>	<?PHP echo $v['dia']; ?></h2>
	
<p>	<?PHP echo $v['descripcion']; ?> </p>
</div>
<?
endforeach;
?>
</div>
	<!--   fin de itinerario  -->	
	
	<a href="#" class="inline consultar"> Consultar</a>
	<a href="#reservar" class="inline reservar"> Reservar </a>
	
	
	<div id="reservar" style="width:400px; height:auto">
	
	<form action="reservar.php" method="post">
	<input type="hidden" name="post_id" value="<?PHP echo $post->ID?>">
	<div class="row">
	nombre <input  name="nombres">
	</div>
	<div class="row">
	apellidos <input name="apellidos">
	</div>
	<div class="row">
	e-mail <input name="email">
	</div>
	
	<div class="row">
	Origen <input name="pais">
	</div>
	
	<div class="row">
	Fecha de salida <input name="fecha_salida" id="fecha_salida">
	</div>
	
	
	
	
	<input type="submit" value="reservar">
	</form>
	
	</div>
	
	
	
	</div><!-- .entry-content -->
	
	
	
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
