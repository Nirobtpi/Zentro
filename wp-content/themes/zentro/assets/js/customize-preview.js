(function($){

    wp.customize('add-image-setting', function(value) {
        value.bind(function(to) {
            $('.banner-image img').attr('src', to);
        });
    });
    wp.customize('header-logo-setting', function(value) {
        value.bind(function(to) {
            $('#logo img').setAttribute('src', to);
        });
    });
    wp.customize('placeholder-text-setting', function(value) {
        value.bind(function(newval) {
            $('input[type="search"]').attr('placeholder', newval);
        });
    });
    console.log('Nirob')

})(jQuery);