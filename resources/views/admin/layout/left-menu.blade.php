<nav id="sidebar" class="nav-sidebar">
    <ul class="list-unstyled components" id="accordion">
        <div class="user-profile">
            <div class="dropdown user-pro-body">

                <div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false">
                        <span class="font-weight-semibold">{{auth()->user()->adsoyad}}</span>  </a>
                    <br><span class="text-gray">Yönetici</span><br>
                    <a href="#" class="btn btn-sm btn-primary">Müşteri Paneli</a>
                </div>
            </div>
        </div>



        <li>
            <a href="maps.html" class=" wave-effect"><i class="fa fa-home mr-2"></i> Ana Sayfa</a>
        </li>
        <li>
            <a href="maps.html" class=" wave-effect"><i class="fa fa-cart-plus mr-2"></i> Siparişler</a>
        </li>
        <li class="">
            <a href="#servislerSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="fa fa-cube mr-2"></i> Servisler
            </a>
            <ul class="collapse list-unstyled" id="servislerSubmenu" data-parent="#accordion">
                <li><a href="index-1.html">Servisler</a></li>
                <li><a href="index2.html">Servis Ekle</a></li>
                <li><a href="index3.html">Toplu Servis Ekle</a></li>
                <li><a href="index4.html">Kategoriler</a></li>
                <li><a href="index5.html">Kategori Ekle</a></li>
                <li><a href="index5.html">Toplu Fiyat Güncelle</a></li>
            </ul>
        </li>

        <li class="">
            <a href="#finansSunmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="fa fa-credit-card mr-2"></i> Finans
            </a>
            <ul class="collapse list-unstyled" id="finansSunmenu" data-parent="#accordion">
                <li><a href="index-1.html">Ödeme Bildirimleri</a></li>
                <li><a href="index2.html">Banka Hesapları</a></li>
                <li><a href="index3.html">Banka Hesabı Ekle</a></li>
                <li><a href="index4.html">Kuponlar</a></li>
                <li><a href="index5.html">Kupon Oluştur</a></li>

            </ul>
        </li>

        <li class="">
            <a href="#sayfalarSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="fa fa-file mr-2"></i> Sayfalar
            </a>
            <ul class="collapse list-unstyled" id="sayfalarSubmenu" data-parent="#accordion">
                <li><a href="index-1.html">Blog Yazıları</a></li>
                <li><a href="index2.html">Blog Yazısı Ekle</a></li>
                <li><a href="index3.html">Kullanım Şartları</a></li>


            </ul>
        </li>

        <li>
            <a href="maps.html" class=" wave-effect"><i class="fa fa-puzzle-piece mr-2"></i> Eklentiler</a>
        </li>
        <li>
            <a href="maps.html" class=" wave-effect"><i class="fa fa-support mr-2"></i> Destek Talepleri</a>
        </li>

        <li>
            <a href="maps.html" class=" wave-effect"><i class="fa fa-cog mr-2"></i> Ayarlar</a>
        </li>

    </ul>
</nav>
