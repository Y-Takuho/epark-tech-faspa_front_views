{{-- <img>に class="has_emergency_txt" がある場合表示する --}}
<div class="l_wrapper footer_ad clearfix">
  {{-- <p><a><img class="has_footer_ad" src="{{ asset('/v2/shop/images/ad_sample.png?ver={{ config('const.cache_clear_ver') }}" alt=""></a></p> --}}
</div>

<div class="pc">
  <div id="footer_sitemap" class="l_wrapper clearfix">
    <div id="footer_logos" class="footer_sitemap_box">
      <p>
        <a href="/">
          <img loading="lazy" src="{{ asset('/v2/shop/images/logo.png') }}?ver={{ config('const.cache_clear_ver') }}"
               alt="EPARK 人気施設の予約・順番受付サイト">
        </a>
      </p>
      <ul id="footer_sns_list">
        <li>
          <a href="https://www.facebook.com/epark.portal/" target="_blank">
            <img loading="lazy"
                 src="{{ asset('/v2/shop/images/icon_foote_facebook.png') }}?ver={{ config('const.cache_clear_ver') }}"
                 alt="facebook">
          </a>
        </li>
        <li>
          <a href="https://x.com/epark_jp" target="_blank">
            <img loading="lazy"
                 src="{{ asset('/v2/sfc/images/social/logo-black.png') }}?ver={{ config('const.cache_clear_ver') }}"
                 alt="twitter">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/epark_official/" target="_blank">
            <img loading="lazy"
                 src="{{ asset('/v2/shop/images/icon_footer_instagram.png') }}?ver={{ config('const.cache_clear_ver') }}"
                 alt="Instagram">
          </a>
        </li>
      </ul>
    </div>
    <div id="footer_sitemap_genre" class="footer_sitemap_box clearfix">
      <ul>
        <li><a href="{{ route('gourmet') . '/' }}">飲食店</a></li>
        <li><a href="{{ route('dentistry') . '/' }}">歯医者</a></li>
        <li><a href="{{ route('medical') . '/' }}">クリニック・病院</a></li>
        <li><a href="{{ route('pharmacy') . '/' }}">薬局</a></li>
        <li><a href="https://www.docknet.jp/?SITE_CODE=faspa&utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu" target="_blank">人間ドック</a></li>
        <li><a href="https://otakara-shaken.com/" target="_blank">車検</a></li>
      </ul>
      <ul>
        <li><a href="{{ route('relaxation') . '/' }}">リラク・エステ</a></li>
        <li><a href="{{ route('sekkotsu') . '/' }}">接骨・鍼灸</a></li>
        <li><a href="{{ route('odekake') . '/' }}">おでかけスポット</a></li>
        <li><a href="{{ route('pet') . '/' }}">動物病院・トリミングサロン</a></li>
        <li><a href="{{ route('beauty') . '/' }}">ヘアサロン</a></li>
        <li><a href="https://rescue.epark.jp/?SITE_CODE=faspa&utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu" target="_blank">くらしのレスキュー</a></li>
        <li><a href="https://carwash.epark.jp/" target="_blank">洗車</a></li>
      </ul>
    </div>
    <div id="footer_sitemap_contents" class="footer_sitemap_box clearfix">
      <ul>
        <li>
          <a href="https://faq.epark.jp/epark/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">よくあるご質問</a>
        </li>
        <li>
          <a href="/news/">お知らせ</a>
        </li>
        <li>
          <a href="https://faq.epark.jp/epark/form/ask?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">お問い合わせ</a>
        </li>
        <li>
          <a href="https://premiumclub.epark.jp/mypage/?utm_source=epark.jp&utm_medium=banner&utm_campaign=premiumclub&utm_term=2025&utm_content=mypagefootter​">EPARK Premium Club会員</a>
        </li>
        <li>
          <a href="https://epark.co.jp/service/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">掲載をご希望の店舗様へ</a>
        </li>
        <li>
          <a href="/docs/specified_commercial_transaction_law/" target="_blank">特定商取引に関する表記</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="https://www.epark.jp/terms/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">会員規約</a>
        </li>
        <li>
          <a href="https://www.epark.jp/use_terms/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">利用規約</a>
        </li>
        <li>
          <a href="/use_terms/review/" target="_blank">口コミ利用規約</a>
        </li>
        <li>
          <a href="https://epark.co.jp/privacy/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">プライバシーポリシー</a>
        </li>
        <li>
          <a href="/sitepolicy/" target="_blank">サイトポリシー</a>
        </li>
        <li>
          <a href="https://epark.co.jp/corporate/outline/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
             target="_blank">運営会社</a>
        </li>
      </ul>
      <ul>
        <li>
        <a href="https://ads.epark.jp/">EPARKに広告を掲載しませんか？</a>
        </li>
        <li class="static-modal">
          <button @click="isVisibleStaticModal = true" class="static-modal-button">当サイトにおける「マッサージ」「肩こり」等の表記について
          </button>
          <static-modal v-if="isVisibleStaticModal" @close="isVisibleStaticModal = false">
            <p slot="header">当サイトにおける「マッサージ」「肩こり」等の表記について</p>
            <div slot="body">
              当サイト内で使用している「マッサージ」という言葉は、もみほぐし・整体・鍼灸・リンパ・アロマ・足ツボなど、広く一般に行われている、主にリラクゼーションを目的とした施術全般を指しています。<br><br>
              あん摩マッサージ指圧師をはじめとする、国家資格を有する施術者が在籍する店舗においては、その旨を記載させていただいております。<br><br>
              また、体の悩みを示す「肩こり」「腰痛」「頭痛」といった言葉は、分かりやすさを考慮して一般に浸透している表現を採用したものであり、特定の症状やその改善を意味するものではありません。<br><br>
              個々のサロンページを含め、文言の使用には細心の注意を払っておりますが、お気づきの点がございましたらご一報くださいますようお願い申し上げます。<br><br>
              皆様には、日々の健康維持の一助として当サイトをご活用いただければ幸いでございます。
            </div>
          </static-modal>
        </li>
      </ul>
    </div>
  </div>
  <div id="footer_group">
    <div id="epark-global-footer-box"></div>
    <script type="text/javascript">
      $(function () {
        get_epark_portal_global_footer_html('faspa');
      });
    </script>
  </div>
  <div class="copy">
    <p>&copy; 2001-{{ date('Y') }} EPARK, inc.</p>
  </div>
</div>

{{-- SPフッター --}}
<div class="sp">
  <div id="epark_common">
    <div id="epark_common_footer">
      <div class="epark_common_footer_pagetop box_lightgray">
        <a href="#totop">ページトップへ</a>
      </div>

      {{-- 改変禁止 --}}
      <iframe src="https://parts.epark.jp/epark-common/sns_apri/index.html" class="epark_common_footer_apri"></iframe>
      {{--/改変禁止 --}}

      <div class="epark_common_footer_eparklink">
        <ul>
          <li>
            <a href="https://epark.co.jp/corporate/outline/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">運営会社</a>
          </li>
          <li>
            <a href="https://www.epark.jp/use_terms/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">サービス利用規約</a>
          </li>
          <li>
            <a href="/use_terms/review/" target="_blank">口コミ利用規約</a>
          </li>
          <li>
            <a href="https://www.epark.jp/terms/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">EPARK会員規約</a>
          </li>
          <li>
            <a href="https://epark.co.jp/privacy/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">個人情報保護方針</a>
          </li>
          <li>
            <a href="https://premiumclub.epark.jp/mypage/?utm_source=epark.jp&utm_medium=banner&utm_campaign=premiumclub&utm_term=2025&utm_content=mypagefootter">EPARK Premium Club会員</a>
          </li>
          <li>
            <a href="https://faq.epark.jp/epark/form/ask?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">お問い合わせ</a>
          </li>
          <li>
            <a href="https://faq.epark.jp/epark/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">よくあるご質問</a>
          </li>
          <li>
            <a href="/news/" target="_blank">お知らせ</a>
          </li>
          <li>
            <a href="/sitepolicy/" target="_blank">サイトポリシー</a>
          </li>
          <li>
            <a href="/sp/about/">EPARKとは？</a>
          </li>
          <li>
            <a href="https://www.epark.jp/grouplist/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">EPARKグループサイト一覧</a>
          </li>
          <li>
            <a href="https://epark.co.jp/service/?utm_source=epark.jp&utm_medium=referral&utm_campaign=footermenu"
               target="_blank">掲載について</a>
          </li>
          <li>
            <a href="/docs/specified_commercial_transaction_law/" target="_blank">特定商取引法における記載事項</a>
          </li>
          <li class="full">
            <a href="https://ads.epark.jp/" target="_blank">EPARKに広告を掲載しませんか？​</a>
          </li>
          <li class="static-modal full">
            <button @click="isVisibleStaticModal = true" class="static-modal-button">当サイトにおける「マッサージ」「肩こり」等の表記について
            </button>
            <static-modal v-if="isVisibleStaticModal" @close="isVisibleStaticModal = false">
              <div slot="header">当サイトにおける「マッサージ」「肩こり」等の表記について</div>
              <div slot="body">
                当サイト内で使用している「マッサージ」という言葉は、もみほぐし・整体・鍼灸・リンパ・アロマ・足ツボなど、広く一般に行われている、主にリラクゼーションを目的とした施術全般を指しています。<br><br>
                あん摩マッサージ指圧師をはじめとする、国家資格を有する施術者が在籍する店舗においては、その旨を記載させていただいております。<br><br>
                また、体の悩みを示す「肩こり」「腰痛」「頭痛」といった言葉は、分かりやすさを考慮して一般に浸透している表現を採用したものであり、特定の症状やその改善を意味するものではありません。<br><br>
                個々のサロンページを含め、文言の使用には細心の注意を払っておりますが、お気づきの点がございましたらご一報くださいますようお願い申し上げます。<br><br>
                皆様には、日々の健康維持の一助として当サイトをご活用いただければ幸いでございます。
              </div>
            </static-modal>
          </li>
        </ul>
      </div>
      <footer>
        <p>&quot;一回のお客様を、一生のお客様に。&quot;<br>&copy; 2001
          <script type="text/javascript">
            <!--
            TYnow = new Date();
            document.write('- ' + TYnow.getFullYear());
            // -->
          </script>
          EPARK, Inc.
        </p>
      </footer>
    </div>
  </div>
</div>
{{-- /SPフッター --}}