<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>'" class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="<?php echo esc_attr__( 'Search…', 'zentro' ) ?>"
        aria-label="Search" value="<?php get_search_query() ?>" name="s" />
    <button class="btn btn-outline-success btn-search my-2 my-sm-0"
        type="submit"><?php echo esc_html__( 'Search', 'zentro' ) ?> </button>
</form>