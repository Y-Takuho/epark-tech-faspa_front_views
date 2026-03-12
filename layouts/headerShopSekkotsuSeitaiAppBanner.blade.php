{{-- 下記、テスト用に追加したコメントなので、アプリバナー追加時に不要であれば削除をお願いします。 --}}
<!-- 店舗詳細アプリバナー -->
<!-- headerShopSekkotsuSeitaiAppBanner -->
<div class="epark-header-app-banner">
  <a class="epark-header-app-banner__link" href="https://eparkapp.onelink.me/yuvN?pid=Fas_Detail_Mani​" target="_blank">
    <span class="epark-header-app-banner__close"></span>
    <img class="epark-header-app-banner__image" src="{{ asset('/v2/sfc/images/common/banner_app_dl/banner_detail_sekkotu.png') }}?ver={{ config('const.cache_clear_ver') }}" alt="">
  </a>
</div>
<link rel="stylesheet" type="text/css" href="{{ asset('/v2/css/sfc/common/header_app_banner.css') }}?ver={{ config('const.cache_clear_ver') }}">
<script>
  if (sessionStorage.getItem('isDispBanner') === '0') {
    $('.epark-header-app-banner').remove();
  }

  $(document).on('click', '.epark-header-app-banner__close', function (e) {
    e.preventDefault();
    $('.epark-header-app-banner').remove();
    sessionStorage.setItem('isDispBanner', '0');
  });
</script>