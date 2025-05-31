(function($){

    wp.customize('add-image-setting', function(value) {
        value.bind(function(to) {
            $('.banner-image img').attr('src', to);
        });
    });

})(jQuery);