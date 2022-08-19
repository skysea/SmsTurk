@extends('admin.layout.master')
@section('admin-js')

    <script>
@if(getAyarlar('site_name') == 'SmsTurk.net')
        var colorCode = "#fec0c2"
        $(".loaded").velocity({
            backgroundColor: colorCode,
            opacity: 1
        }, 1500);

        colorCode = "#ffe1e2"
        $(".loaded").velocity({
            backgroundColor: colorCode,
            opacity: 1
        }, 1500);
        @endif
var options = {
    chart: {
        type: 'donut',
        width: 380,
        height:315
    },
    colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
    dataLabels: {
        enabled: false
    },
    legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 0,
            vertical: 8
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                background: 'transparent',
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '18px',
                        fontFamily: 'Nunito, sans-serif',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: true,
                        fontSize: '18px',
                        fontFamily: 'Nunito, sans-serif',
                        color: '20',
                        offsetY: 16,
                        formatter: function (val) {
                            return val
                        }
                    },
                    total: {
                        show: true,
                        showAlways: true,
                        label: 'Total',
                        color: '#888ea8',
                        formatter: function (w) {
                            return w.globals.seriesTotals.reduce( function(a, b) {
                                return a + b
                            }, 0)
                        }
                    }
                }
            }
        }
    },
    stroke: {
        show: true,
        width: 25,
    },
    series: [101,147,50],
    labels: ['Whatsapp', 'Facebook', 'Instagram'],
    responsive: [{
        breakpoint: 1599,
        options: {
            chart: {
                width: '100px',
                height: '100px'
            },
            legend: {
                position: 'bottom'
            }
        },


    }]
}

var chart = new ApexCharts(document.querySelector("#chart-2"), options);
chart.render();
    </script>


@endsection
@section('admin-content')
    <div class="layout-px-spacing">
    <div class="row sales layout-top-spacing">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

            <div class="widget widget-account-invoice-one">

                <div class="widget-heading">
                    <h5 class="">Satış Raporları</h5>
                </div>

                <div class="widget-content">
                    <div class="invoice-box">

                        <div class="acc-total-info">
                            <h5>Mevcut Bakiye</h5>
                            <p class="acc-amount">$470</p>
                        </div>

                        <div class="inv-detail">
                            <div class="info-detail-1">
                                <p>Bugün</p>
                                <p>$ 199.0</p>
                            </div>
                            <div class="info-detail-2">
                                <p>Bu Hafta</p>
                                <p>$ 17.82</p>
                            </div>
                            <div class="info-detail-2">
                                <p>Bu Ay</p>
                                <p>$ 17.82</p>
                            </div>
                            <div class="info-detail-2">
                                <p>Toplam Satış</p>
                                <p>$ 17.82</p>
                            </div>
                            <div class="info-detail-2">
                                <p></p>
                                <p></p>
                            </div>
                            <div class="info-detail-2">


                            </div>
                            <div class="info-detail-2">
                              <br>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">Genel Raporlar</h5>
                </div>

                <div class="widget-content">
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Toplam Kullanıcı</h4>

                                </div>

                            </div>
                            <div class="t-rate rate-dec">
                                <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>

                    <div class="transactions-list loaded">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <i class="fa fa-comment"></i>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Aktif Destek Bileti</h4>

                                </div>
                            </div>
                            <div class="t-rate rate-inc">
                                <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>

                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>5sim.net Bakiye</h4>

                                </div>

                            </div>
                            <div class="t-rate rate-inc">
                                <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>

                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>sms-activate.ru Bakiye</h4>

                                </div>

                            </div>
                            <div class="t-rate rate-dec">
                                <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

            <div class="widget widget-chart-two">
                <div class="widget-heading">
                    <h5 class="">Sipariş</h5>
                </div>
                <div class="widget-content">
                    <div id="chart-2" class=""></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-two">
                <div class="widget-heading">
                    <h5 class="">Aktif Kullanıcılar : 0 Adet</h5>
                    <p class="meta-date-time">Sistemde aktif olan kullanıcıları bu tablodan görüntüleyebilirsiniz.</p>
                </div>

                <div class="widget-content">
                    -
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-three">

                <div class="widget-heading">
                    <h5 class="">Son İşlemler</h5>
                    <p class="meta-date-time">Sistem kullanıcılarının yaptığı son işlemleri buradaki tablodan görüntüleyebilirsiniz.</p>
                </div>

                <div class="widget-content">
                    -
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
