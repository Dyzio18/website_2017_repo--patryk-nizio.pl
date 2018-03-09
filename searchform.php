<?php
/**
 * default search form
 */
?>
<form role="search" method="get" id="search-form" class="search__bar" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
        <i class="fas fa-search fa-lg"></i>
        <input type="search" class="search__input" placeholder="" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
    </div>
</form>