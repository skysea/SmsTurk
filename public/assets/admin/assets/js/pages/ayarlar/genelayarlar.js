$(function (){
    let myToasteur = new Toasteur("top-center");

    //home logo upload
    $("#form_home_logo").find("input[name='home_logo']").on('change',function (e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var home_logo = document.getElementById('home_logo').files[0];
        var form_data = new FormData();
        form_data.append("file",home_logo);
        $('#div_home_logo').waitMe({effect:'ios'});
        $.ajax({
            processData: false,
            contentType: false,
            type:'POST',
            url:"/admin/genel-ayarlar/homelogoyukle",
            data:form_data,
            success:function (data){
                if(data.success){
                    myToasteur.success(data.success, 'Başarılı', () => {})
                }
                if(data.error){
                    myToasteur.error(data.error, 'Hata', () => {})
                }
                $("#div_home_logo").waitMe("hide");
            }

        });
    });
    //panel logo upload
    $("#form_panel_logo").find("input[name='panel_logo']").on('change',function (e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var panel_logo = document.getElementById('panel_logo').files[0];
        var form_data = new FormData();
        form_data.append("file",panel_logo);
        $('#div_panel_logo').waitMe({effect:'ios'});
        $.ajax({
            processData: false,
            contentType: false,
            type:'POST',
            url:"/admin/genel-ayarlar/panellogoyukle",
            data:form_data,
            success:function (data){
                if(data.success){
                    myToasteur.success(data.success, 'Başarılı', () => {})
                }
                if(data.error){
                    myToasteur.error(data.error, 'Hata', () => {})
                }
                $("#div_panel_logo").waitMe("hide");
            }

        });
    });

    //Admin panel logo upload
    $("#form_admin_panel_logo").find("input[name='admin_panel_logo']").on('change',function (e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var admin_panel_logo = document.getElementById('admin_panel_logo').files[0];
        var form_data = new FormData();
        form_data.append("file",admin_panel_logo);
        $('#div_admin_panel_logo').waitMe({effect:'ios'});
        $.ajax({
            processData: false,
            contentType: false,
            type:'POST',
            url:"/admin/genel-ayarlar/adminpanellogoyukle",
            data:form_data,
            success:function (data){
                if(data.success){
                    myToasteur.success(data.success, 'Başarılı', () => {})
                }
                if(data.error){
                    myToasteur.error(data.error, 'Hata', () => {})
                }
                $("#div_admin_panel_logo").waitMe("hide");
            }

        });
    });


    //Favicon
    $("#form_favicon").find("input[name='favicon']").on('change',function (e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var favicon = document.getElementById('favicon').files[0];
        var form_data = new FormData();
        form_data.append("file",favicon);
        $('#div_favicon').waitMe({effect:'ios'});
        $.ajax({
            processData: false,
            contentType: false,
            type:'POST',
            url:"/admin/genel-ayarlar/faviconyukle",
            data:form_data,
            success:function (data){
                if(data.success){
                    myToasteur.success(data.success, 'Başarılı', () => {})
                }
                if(data.error){
                    myToasteur.error(data.error, 'Hata', () => {})
                }
                $("#div_favicon").waitMe("hide");
            }

        });
    });





});
