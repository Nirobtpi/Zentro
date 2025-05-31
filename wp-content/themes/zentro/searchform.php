<form role="search" id="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>'" class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="<?php echo esc_attr__( get_theme_mod('placeholder-text-setting')); ?>"
        aria-label="Search" value="<?php echo esc_attr( get_search_query()); ?>" name="s" />
    <button class="btn btn-outline-success btn-search my-2 my-sm-0"
        type="submit"><span class="btn-text"><?php echo esc_html( get_theme_mod('search-btn-text-setting','Search')); ?> </span></button>
</form>