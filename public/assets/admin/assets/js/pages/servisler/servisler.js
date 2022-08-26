$("#kategori_id").select2({

   placeholder:"-Kategori Seçiniz-",
    language:"tr",
    ajax:{
       url:"/admin/servisler/getSelectKategoriler",
        dataType:'json',
        delay:0,
        processResults: function (data, params) {
            var results = [];
            $.each(data, function(index, item){
                results.push({
                    id: item.id,
                    text: item.kategori_adi,
                    image:item.kategori_icon
                });
            });
            return {
                results: results
            };
        },
        cache: false
    }

});
