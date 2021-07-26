var retroAdm = {
    init: function($){
        this.setPicker($);
    },
    setPicker: function($){
        $('.select-img').click(function(e) {
            var that = this;
            e.preventDefault();
            var image = wp.media({
                title: 'Selecionar imagem do depoimento',
                multiple: false
            }).open()
                .on('select', function(e){
                    var uploaded_image = image.state().get('selection').first();
                    var image_url = uploaded_image.toJSON().url;
                    $(that).parent().find('.image-target').val(image_url);
                });
        });
    }
};

window.onload = function(){
    retroAdm.init(jQuery);
}
