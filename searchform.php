<?php
/**
 * Template for displaying search forms
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" id="<?php echo $unique_id; ?>" class="search__field" placeholder="<?php echo esc_attr_x( 'Szukaj... ', 'placeholder', 'patryk-nizio.pl' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <div class="search__field--progress"> </div>
    <!--<button type="submit" class="search__submit">
        <span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'patryk-nizio.pl' ); ?></span>
    </button>-->
    <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-256.png" class="search__icon">
</form>
