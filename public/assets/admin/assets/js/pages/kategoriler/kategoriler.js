var table;
let myToasteur = new Toasteur("top-center");
table = $("#table").DataTable({
    'processing':true,
    'serverSide':true,
    'ajax': '/admin/kategoriler/getTable',
    columns:[
        {data:'id',name:'checkbox',orderable: false, searchable: false,width:'2%'},
        {data:'id',name:'id',visible:false},
        {data: 'kategori_adi', name: 'kategori_adi',width:'49%'},
        {data: 'kategori_icon', name: 'kategori_icon',width:'20%',
            render:function (data,type,row){
                return  '<img height="24" src="/assets/images/kategori_icon/'+row.kategori_icon+'" />   ';
            }},
        {data:'action',name:'action',orderable: false,width:'20%'},
    ],
    'columnDefs': [
        {

            'targets': 0,
            'checkboxes': {
                'selectRow': false
            }
        }
    ],
    'order': [[1, 'desc']],
    "language": {
        "url":"/assets/admin/plugins/table/datatable/dataTableTR.json"
    },
});

$(".secilisil").click('click',function (e){

  if(table.column(0).checkboxes.selected().length > 0){
      $.confirm({
          icon: 'dripicons-warning',
          typeAnimated : false,
          animateFromElement : false,
          animation:'top',
          closeAnimation:'scale',
          closeIcon: true,
          title: 'Onay!',
          content: 'Silmek istediğinize emin misiniz?',
          buttons:{
              Evet:  {
                  btnClass: 'btn-success',
                  action : function () {

                      var rows_selected = table.column(0).checkboxes.selected();
                      var selected_item =[];

                      $.each(rows_selected, function(index, rowId){
                          selected_item.push(rowId);
                      });


                      if(selected_item.length > 0){
                          $.ajaxSetup({
                              headers: {
                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                          });
                          $.ajax({

                              url : "/admin/kategoriler/secililersil",
                              data : {'data':selected_item},
                              type : 'post',
                              dataType : 'json',
                              success : function(data){

                                  if(data["result"] === "ok"){

                                      myToasteur.success(data['mesaj'], 'Başarılı', () => {})
                                      table.ajax.reload();
                                      table.columns().checkboxes.deselectAll(true);
                                  }
                                  if(data["result"] === "error"){

                                      myToasteur.success(data['mesaj'], 'Hata', () => {})

                                  }

                              }
                          });
                      }
                  }
              },
              Hayır: function () {

              },
          }

      });
  }



});

function singleSil(id){
    $.confirm({
        icon: 'dripicons-warning',
        typeAnimated : false,
        animateFromElement : false,
        animation:'top',
        closeAnimation:'scale',
        closeIcon: true,
        title: 'Onay!',
        content: 'Silmek istediğinize emin misiniz?',
        buttons: {
            Evet:  {
                btnClass: 'btn-success',
                action : function () {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({

                        url: "/admin/kategoriler/single-sil",
                        data: {'id': id},
                        type: 'post',
                        dataType: 'json',
                        success: function (data) {


                            if (data["result"] === "ok") {

                                myToasteur.success(data['mesaj'], 'Başarılı', () => {})
                                table.ajax.reload();
                            }
                            if (data["result"] === "error") {
                                myToasteur.success(data['mesaj'], 'Hata', () => {})


                            }

                        }
                    });
                }
            },
            Hayır: function () {

            },

        }
    });

}

$("#modalKategoriDuzenle").on('show.bs.modal',function (event){

    var id = $(event.relatedTarget).data('id');
    var kategori_adi = $(event.relatedTarget).data('kategori_adi');
    var kategori_icon = $(event.relatedTarget).data('kategori_icon');

    $("#modal_kategori_duzenle_form").find('input[name=kategori_adi]').val(kategori_adi);



});
