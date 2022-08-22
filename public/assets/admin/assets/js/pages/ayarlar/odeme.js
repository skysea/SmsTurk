$(function (){

$("#odeme_yontemi").change(function (){

if(this.value == '0'){
    $("#odeme_ozellik_paytr").hide();
    $("#odeme_ozellik_shopier").hide();
}
  else if(this.value == 'shopier'){
      $("#odeme_ozellik_paytr").hide();
      $("#odeme_ozellik_shopier").show();
  }
  else  if(this.value == 'paytr'){
      $("#odeme_ozellik_shopier").hide();
      $("#odeme_ozellik_paytr").show();
  }

});



});
