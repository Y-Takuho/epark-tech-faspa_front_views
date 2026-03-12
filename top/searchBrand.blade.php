<section>
  <div id="search_brand" class="content_box">
    <div class="content_box__title">
    {{--
  --}}<h2 class="content_box__title--text header_font_size_l font_bold canvas-area text-center title--text-h2">ブランド・チェーンから探す</h2>
    </div>
    <div id="brand_group">
      <div id="brand_tab" class="brand_tab" class="clearfix">
        <label class="brand_tab_item" for="brand_pickup_open">おすすめ</label>
        <label class="brand_tab_item" for="brand_grm_open">飲食店</label>
        <label class="brand_tab_item" for="brand_rrk_open">リラク・エステ</label>
        <label class="brand_tab_item" for="brand_ksr_open">薬局</label>
        <label class="brand_tab_item" for="brand_mall_open">商業施設</label>
      </div>
      <div id="brand_list_display">
        <!-- ピックアップ -->
        <input type="checkbox" id="brand_pickup_open" class="brand_open">
        <div class="brand_box">
          <ul class="clearfix">
            <li class="brand_pickup_box" alt="くら寿司">
              <a href="/brandlist/brand_11" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_11_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="くら寿司">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_gourmet">飲食店</p>
                    <p class="brand_label label_take-out">テイクアウト</p>
                </div>
                  <h3 class="brand_title">くら寿司</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="焼肉きんぐ">
              <a href="https://justpass.epark.jp/brand/detail/yakiniku-king" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/shop/images/brand/brandlist_260_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="焼肉きんぐ">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_gourmet">飲食店</p>
                  </div>
                  <h3 class="brand_title">焼肉きんぐ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ワンカルビ">
              <a href="/brandlist/brand_330" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_330_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="ワンカルビ">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_gourmet">飲食店</p>
                  </div>
                  <h3 class="brand_title">ワンカルビ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="七輪炭火焼肉 味ん味ん">
              <a href="/brandlist/brand_22" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_22_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="七輪炭火焼肉 味ん味ん">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_gourmet">飲食店</p>
                  </div>
                  <h3 class="brand_title">七輪炭火焼肉 味ん味ん</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="がってん寿司">
              <a href="/brandlist/brand_2" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_2_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="がってん寿司">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_gourmet">飲食店</p>
                  </div>
                  <h3 class="brand_title">がってん寿司</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="肉匠坂井">
              <a href="/brandlist/brand_334" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_334_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="肉匠坂井">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_gourmet">飲食店</p>
                  </div>
                  <h3 class="brand_title">肉匠坂井</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ウエルシア">
              <a href="https://www.kusurinomadoguchi.com/brand/kmbp0009?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=kmbp0009&k_ref=075" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/04_welcia.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="ウエルシア">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_pharmacy">薬局</p>
                  </div>
                  <h3 class="brand_title">ウエルシア</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="EPARKリラク&エステ ブランド特集">
              <a href="https://mitsuraku.jp/lpe/mcoop_ep19_featured_brand/?media=faspa&utm_source=epark.jp&utm_medium=referral&utm_campaign=featured_brand&utm_term=202105&utm_content=banner_faspa" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/banner_mcoop_ep19_featured_brand.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="EPARKリラク&エステ ブランド特集">
                </div>
                <div class="brand_data">
                  <div class="brand_label_box">
                    <p class="brand_label label_relaxation-esthe">リラク・エステ</p>
                  </div>
                  <h3 class="brand_title">EPARKリラク&エステ ブランド特集</h3>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <!-- /ピックアップ -->
        <!-- 飲食店 -->
        <input type="checkbox" id="brand_grm_open" class="brand_open">
        <div class="brand_box">
          <ul class="clearfix">
            <li class="brand_pickup_box" alt="くら寿司">
              <a href="/brandlist/brand_11" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_11_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="くら寿司">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">くら寿司</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="焼肉きんぐ">
              <a href="https://justpass.epark.jp/brand/detail/yakiniku-king" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_260_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="焼肉きんぐ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">焼肉きんぐ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ワンカルビ">
              <a href="/brandlist/brand_330" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_330_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="ワンカルビ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ワンカルビ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="じゅうじゅうカルビ">
              <a href="/brandlist/brand_23" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_jyujyukarubi.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="じゅうじゅうカルビ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">じゅうじゅうカルビ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="がってん寿司">
              <a href="/brandlist/brand_2" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_2_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="がってん寿司">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">がってん寿司</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="肉匠坂井">
              <a href="/brandlist/brand_334" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_334_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="肉匠坂井">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">肉匠坂井</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="和食麺処サガミ">
              <a href="/brandlist/brand_374" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_sagami.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="和食麺処サガミ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">和食麺処サガミ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="七輪炭火焼肉 味ん味ん">
              <a href="/brandlist/brand_22" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_22_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="七輪炭火焼肉 味ん味ん">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">七輪炭火焼肉 味ん味ん</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="鎌倉パスタ">
              <a href="/brandlist/brand_163" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_kamakura.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="鎌倉パスタ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">鎌倉パスタ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="金沢まいもん寿司">
              <a href="https://justpass.epark.jp/brand/detail/maimon" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_maimon_sushi.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="金沢まいもん寿司">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">金沢まいもん寿司</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="回転寿司みさき(海鮮三崎港)">
              <a href="/brandlist/brand_273" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_273_1.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="回転寿司みさき(海鮮三崎港)">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">回転寿司みさき(海鮮三崎港)</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="魚魚丸">
              <a href="/brandlist/brand_168" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/brandlist_168_1.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="魚魚丸">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">魚魚丸</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="カルビ大将">
              <a href="/brandlist/brand_351" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_karubi_taisho.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="カルビ大将">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">カルビ大将</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="やまなか家">
              <a href="/brandlist/brand_20" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_yamanakaya.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="やまなか家">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">やまなか家</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ハングリータイガー">
              <a href="/brandlist/brand_26" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_hungrytiger.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="ハングリータイガー">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ハングリータイガー</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="神戸クックワールドビュッフェ">
              <a href="/brandlist/brand_289" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_kobecook_wb.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="神戸クックワールドビュッフェ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">神戸クックワールドビュッフェ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="串家物語">
              <a href="/brandlist/brand_79" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_kushiya.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="串家物語">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">串家物語</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="魚屋路">
              <a href="https://justpass.epark.jp/brand/detail/totoyamichi" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/grm/grm_totoyamichi.png') . '?ver=' . config('const.cache_clear_ver') }}" alt="魚屋路">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">魚屋路</h3>
                </div>
              </a>
            </li>
          </ul>
          <a href="/brandlist/gourmet" class="btn_s btn_to_brand_list centering font_bold">すべてのブランド・チェーン(飲食店)を見る</a>
        </div>
        <!-- /飲食店 -->
        <!-- リラク -->
        <input type="checkbox" id="brand_rrk_open" class="brand_open">
        <div class="brand_box">
          <ul>
            <li class="brand_pickup_box" alt="てもみん">
              <a href="/relaxation-esthe/list/?keyword=%E3%81%A6%E3%82%82%E3%81%BF%E3%82%93" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_temomin.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="てもみん">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">てもみん</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="カラダファクトリー">
              <a href="/relaxation-esthe/list/?keyword=%E3%82%AB%E3%83%A9%E3%83%80%E3%83%95%E3%82%A1%E3%82%AF%E3%83%88%E3%83%AA%E3%83%BC" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_karadafactory.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="カラダファクトリー">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">カラダファクトリー</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="りらくる">
              <a href="/relaxation-esthe/list/?keyword=%E3%82%8A%E3%82%89%E3%81%8F%E3%82%8B" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_riracle.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="りらくる">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">りらくる</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="Re.Ra.Ku">
              <a href="/relaxation-esthe/list/?keyword=re%20ra%20ku" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_reraku.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="Re.Ra.Ku">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">Re.Ra.Ku</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ほぐしやさん">
              <a href="/relaxation-esthe/list/?keyword=%E3%81%BB%E3%81%90%E3%81%97%E3%82%84%E3%81%95%E3%82%93" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_hogushiyasan.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="ほぐしやさん">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ほぐしやさん</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="Goo-it(グイット)">
              <a href="/relaxation-esthe/list/?keyword=Goo-it" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_gooit.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="Goo-it(グイット)">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">Goo-it(グイット)</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="あしカラダ">
              <a href="/relaxation-esthe/list/?keyword=%E3%81%82%E3%81%97%E3%82%AB%E3%83%A9%E3%83%80" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_ashikarada.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="あしカラダ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">あしカラダ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="カラダリズム">
              <a href="/relaxation-esthe/list/?keyword=%E3%82%AB%E3%83%A9%E3%83%80%E3%83%AA%E3%82%BA%E3%83%A0" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="{{ asset('/v2/sfc/images/brand/rrk/rrk_karadarizum.jpg') . '?ver=' . config('const.cache_clear_ver') }}" alt="カラダリズム">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">カラダリズム</h3>
                </div>
              </a>
            </li>
          </ul>
          <a href="https://mitsuraku.jp/lpe/mcoop_ep19_featured_brand/?media=faspa" class="btn_s btn_to_brand_list centering font_bold" target="_blank">すべてのブランド・チェーン(リラク・エステ)を見る</a>
        </div>
        <!-- 薬局 -->
        <!-- 薬局 -->
        <input type="checkbox" id="brand_ksr_open" class="brand_open">
        <div class="brand_box">
          <ul class="clearfix">
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%B9%E3%82%AE%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/01_sugi_yakkyoku.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="スギ薬局" ></div>
                <div class="brand_data"><h3 class="brand_title">スギ薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%83%84%E3%83%AB%E3%83%8F%E3%83%89%E3%83%A9%E3%83%83%E3%82%B0" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/02_tsuruha_drug.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="ツルハドラッグ"></div>
                <div class="brand_data"><h3 class="brand_title">ツルハドラッグ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="https://epark.jp/pharmacy/list/?keyword=%E3%82%A4%E3%82%AA%E3%83%B3%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/kmbp1128_イオン薬局_320×180.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="ハックドラッグ"></div>
                <div class="brand_data"><h3 class="brand_title">イオン薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%A6%E3%82%A8%E3%83%AB%E3%82%B7%E3%82%A2" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/04_welcia.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="ウエルシア"></div>
                <div class="brand_data"><h3 class="brand_title">ウエルシア</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%B3%E3%82%B3%E3%82%AB%E3%83%A9%E3%83%95%E3%82%A1%E3%82%A4%E3%83%B3" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_cocokarafine.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="ココカラファイン"></div>
                <div class="brand_data"><h3 class="brand_title">ココカラファイン</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E5%AF%8C%E5%A3%AB%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_seims.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="富士薬局グループ"></div>
                <div class="brand_data"><h3 class="brand_title">富士薬局グループ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%81%8F%E3%81%99%E3%82%8A%E3%81%AE%E7%A6%8F%E5%A4%AA%E9%83%8E" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/03_kusurino_fukutaro.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="くすりの福太郎"></div>
                <div class="brand_data"><h3 class="brand_title">くすりの福太郎</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%B3%E3%82%AF%E3%83%9F%E3%83%B3%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_kokumin.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="コクミン"></div>
                <div class="brand_data"><h3 class="brand_title">コクミン</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%B5%E3%83%84%E3%83%89%E3%83%A9%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_satudora.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="サツドラ薬局"></div>
                <div class="brand_data"><h3 class="brand_title">サツドラ薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E6%9D%8F%E6%9E%97%E5%A0%82%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/06_kyorindo.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="杏林堂薬局"></div>
                <div class="brand_data"><h3 class="brand_title">杏林堂薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E5%A4%A7%E8%B3%80%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/08_oga_yakkyoku.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="大賀薬局"></div>
                <div class="brand_data"><h3 class="brand_title">大賀薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E9%98%AA%E7%A5%9E%E8%AA%BF%E5%89%A4%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_hanshintyozai.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="阪神調剤グループ"></div>
                <div class="brand_data"><h3 class="brand_title">阪神調剤グループ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%81%9D%E3%81%86%E3%81%94%E3%81%86%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/10_sogo_yakkyoku.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="そうごう薬局"></div>
                <div class="brand_data"><h3 class="brand_title">そうごう薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E5%8D%97%E5%B1%B1%E5%A0%82%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_nanzando.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="南山堂"></div>
                <div class="brand_data"><h3 class="brand_title">南山堂</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%83%80%E3%82%A4%E3%82%A8%E3%83%BC" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_daiei.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="ダイエー薬局"></div>
                <div class="brand_data"><h3 class="brand_title">ダイエー薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%83%AC%E3%83%87%E3%82%A4%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/11_lady_yakkyoku.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="レデイ薬局"></div>
                <div class="brand_data"><h3 class="brand_title">レデイ薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%A6%E3%82%A7%E3%83%AB%E3%83%91%E3%83%BC%E3%82%AF%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/12_welpark.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="ウェルパーク薬局"></div>
                <div class="brand_data"><h3 class="brand_title">ウェルパーク薬局</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%A8%E3%82%B9%E3%83%9E%E3%82%A4%E3%83%AB%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/ksr/ksr_ssmile.jpg?ver={{\Config::get('const.cache_clear_ver')}}" alt="エスマイル"></div>
                <div class="brand_data"><h3 class="brand_title">エスマイル</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=V%E3%83%BBdrug" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/16_Vdrug.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="中部薬品 /Ｖ・drug"></div>
                <div class="brand_data"><h3 class="brand_title">中部薬品 /Ｖ・drug</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box">
              <a href="/pharmacy/list/?keyword=%E3%82%B5%E3%83%B3%E8%96%AC%E5%B1%80" class="base_white">
                <div class="brand_photo"><img loading="lazy" src="/v2/sfc/images/brand/15_sun_yakkyoku.png?ver={{\Config::get('const.cache_clear_ver')}}" alt="サン薬局"></div>
                <div class="brand_data"><h3 class="brand_title">サン薬局</h3>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <!-- /薬局 -->
        <!-- 商業施設 -->
        <input type="checkbox" id="brand_mall_open" class="brand_open">
        <div class="brand_box">
          <ul class="clearfix">
            <li class="brand_pickup_box" alt="ららぽーとEXPOCITY">
              <a href="https://mall.epark.jp/facility/lalaport-expocity/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-expocity" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_expocity.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーとEXPOCITY">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーとEXPOCITY</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと海老名">
              <a href="https://mall.epark.jp/facility/lalaport-ebina/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-ebina" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_ebina.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーと海老名">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと海老名</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと湘南平塚">
              <a href="https://mall.epark.jp/facility/lalaport-hiratsuka/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-hiratsuka" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_hiratsuka.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーと湘南平塚">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと湘南平塚</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと富士見">
              <a href="https://mall.epark.jp/facility/lalaport-fujimi/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-fujimi" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_fujimi.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーと富士見">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと富士見</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと名古屋みなとアクルス">
              <a href="https://mall.epark.jp/facility/lalaport-minatoaquls/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-minatoaquls" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_minatoaquls.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーと名古屋みなとアクルス">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと名古屋みなとアクルス</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと立川立飛">
              <a href="https://mall.epark.jp/facility/lalaport-tachikawa/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-tachikawa" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_tachikawa.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーと立川立飛">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと立川立飛</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと豊洲">
              <a href="https://mall.epark.jp/facility/lalaport-toyosu/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-toyosu" class="base_white">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_toyosu.png?ver={{config('const.cache_clear_ver')}}" alt="ららぽーと豊洲">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと豊洲</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="横浜ワールドポーターズ">
              <a href="https://mall.epark.jp/facility/yokohama-worldporters/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=yokohama-worldporters" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_lalaport_yokohama.png?ver={{config('const.cache_clear_ver')}}" alt="横浜ワールドポーターズ">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">横浜ワールドポーターズ</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="プライムツリー赤池">
              <a href="https://mall.epark.jp/facility/prime-tree-akaike/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=prime-tree-akaike" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="/v2/sfc/images/brand/mall/mall_primetree.png?ver={{config('const.cache_clear_ver')}}" alt="プライムツリー赤池">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">プライムツリー赤池</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="テラスモール松戸">
              <a href="https://mall.epark.jp/facility/terracemall-matsudo/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=terracemall-matsudo" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="{{asset('/v2/sfc/images/brand/mall/mall_matsudo.png') . '?ver=' . config('const.cache_clear_ver')}}" alt="テラスモール松戸">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">テラスモール松戸</h3>
                </div>
              </a>
            </li>
            <li class="brand_pickup_box" alt="ららぽーと沼津">
              <a href="https://mall.epark.jp/facility/lalaport-numazu/?utm_source=epark.jp&utm_medium=referral&utm_campaign=topbrandlist&utm_content=lalaport-numazu" class="base_white" target="_blank">
                <div class="brand_photo">
                  <img loading="lazy" src="{{asset('/v2/sfc/images/brand/mall/mall_numazu.png') . '?ver=' . config('const.cache_clear_ver')}}" alt="ららぽーと沼津">
                </div>
                <div class="brand_data">
                  <h3 class="brand_title">ららぽーと沼津</h3>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <!-- /商業施設 -->
      </div>
    </div>
  </div>
</section>
