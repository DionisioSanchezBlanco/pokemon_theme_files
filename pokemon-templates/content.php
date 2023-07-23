<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    // Shorthand
    $prefix = 'pokemon_';
    $name               = get_post_meta( $post->ID, $prefix . 'name', true );
    $description        = get_post_meta( $post->ID, $prefix . 'description', true );
    $primary_type       = get_post_meta( $post->ID, $prefix . 'primary_type', true );
    $secondary_type     = get_post_meta( $post->ID, $prefix . 'secondary_type', true );
    $weight             = get_post_meta( $post->ID, $prefix . 'weight', true );
    $picture            = get_post_meta( $post->ID, $prefix . 'picture', true );
    $old_pokedex_number = get_post_meta( $post->ID, $prefix . 'old_pokedex_number', true );
    $new_pokedex_number = get_post_meta( $post->ID, $prefix . 'new_pokedex_number', true );

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
        
			echo sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) );
            echo sprintf( __( '%s</a></h1>', 'pokemon' ), $name );
			
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">

       <section class="section" id="pokemon-data">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <p><?php echo sprintf( __( '%s', 'pokemon' ), $description ); ?></p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h6><?php echo __( 'Primary Type', 'pokemon' ); ?></h6>
                                <p><?php echo sprintf( __( '%s', 'pokemon' ), $primary_type ); ?></p>
                            </div>
                            <div class="col-4">
                                <h6><?php echo __( 'Secondary Type', 'pokemon' ); ?></h6>
                                <p><?php echo sprintf( __( '%s', 'pokemon' ), $secondary_type ); ?></p>
                            </div>
                            <div class="col-4">
                                <h6><?php echo __( 'Weight', 'pokemon' ); ?></h6>
                                <p><?php echo sprintf( __( '%s', 'pokemon' ), $weight ); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h6><?php echo __( 'New Pokedex Number', 'pokemon' ); ?></h6>
                                <p><?php echo sprintf( __( '%s', 'pokemon' ), $new_pokedex_number ); ?></p>
                            </div>
                            <div class="col-4">
                                <button id='old-pokedex-number'><?php echo __( 'Old Pokedex Number', 'pokemon' ); ?></button>
                                <p class='display-old-pokedex-number' style='display:none'><?php echo sprintf( __( '%s', 'pokemon' ), $new_pokedex_number ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <?php 
                                if ( empty( $picture ) ) {
                                    echo get_the_post_thumbnail( $post->ID, 'large' );
                                } else {
                                    ?>
                                    <img src=<?php echo $picture; ?>>
                                <?php    
                                } ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
