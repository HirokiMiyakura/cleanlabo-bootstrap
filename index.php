<?php get_header(); ?>
<main>
<section class="mv py-3">
  <div class="container four-service">
    <div class="row">
      <div class="col fw-bold text-center bg-main rounded shadow py-1 px-2 m-1">不用品</div>
      <div class="col fw-bold text-center bg-orange rounded shadow py-1 px-2 m-1">生前整理</div>
      <div class="col fw-bold text-center bg-sub rounded shadow py-1 px-2 m-1">遺品整理</div>
      <div class="col fw-bold text-center bg-yellow rounded shadow py-1 px-2 m-1">ゴミ屋敷</div>
    </div>
  </div>
  <div class="container p-0">
    <p class="mt-2"><img width="300" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt=""></p>
  </div>
</section>
<section>
  <div class="container">
    <p class="sub-title bg-orange text-center mb-4">本日の回収依頼情報</p>
    <?php echo do_shortcode('[t4b-ticker]'); ?>
  </div>
</section>
<!-- #FREE -->
<section id="FREE" class="bg-blue">
  <div class="container text-center">
    <p class="sub-title bg-orange text-center mb-4">3つのFREE</p>
    <h2 class="title text-center text-white mb-4 px-0">追加料金はかかりません</h2>
    <div class="row">
      <div class="col bg-white free-box align-items-center d-flex ms-2 me-1 px-1">
        <p class="free-box__item flex-fill mb-0">出張費</p>
        <p class="free-box__price ex-bold mb-0"><span class="small">¥</span>0</p>
      </div>
      <div class="col bg-white free-box align-items-center d-flex me-1 px-1">
        <p class="free-box__item flex-fill mb-0">見積もり</p>
        <p class="free-box__price ex-bold mb-0"><span class="small">¥</span>0</p>
      </div>
      <div class="col bg-white free-box align-items-center d-flex me-2 px-1">
        <p class="free-box__item flex-fill mb-0">基本料金</p>
        <p class="free-box__price ex-bold mb-0"><span class="small">¥</span>0</p>
      </div>
    </div>
    <p class="text-white mt-4 mb-0">他社より<span class="ex-bold big color-orange">1円でも高い場合</span><br>はご相談ください！</p>
  </div>
</section>
<!-- cv -->
<?php echo get_template_part('template/cv'); ?>
<!-- /cv -->
<section>
  <div class="container">
    <h2 class="title text-center mb-4 px-0">不用品<span class="small">や</span>遺品<span class="small">に困ったら</span><br><span class="color-main">クリーンラボ</span><span class="small">にお任せください</span></h2>
    <!-- <p class="rounded">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt="">
    </p> -->
    <p class="lh-lg">お1人では処分ができなくて困っている不用品はございませんか？クリーンラボは24時間無休でそんなあなたのお悩みを解決いたします！電話やメールで見積もりを聞いた時は安かったのに、<span class="fw-bold marker">お電話での見積もり相談の時だけ低い値段を提示するといった悪質な勧誘ももちろんいたしません！</span>どこよりも安く誠実に回収いたします！</p>
  </div>
</section>
<!-- #BEFOREAFTER -->
<section id="BEFOREAFTER" class="bg-sub">
  <div class="container">
    <p class="sub-title bg-orange text-center mb-4">仕事の一部をご覧ください！</p>
    <h2 class="title text-white text-center mb-4">ビフォー<span class="small"> & </span>アフター</h2>
    <div class="ba-box bg-white p-3 border rounded mb-4">
      <p class="fs-6 text-center mb-4">東京都 かおり様</p>
      <div class="ba-box__inner position-relative d-flex align-items-center gap-2">
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">Before</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before1.jpg" alt="">
        </div>
        <p class="position-absolute ba-box__yajirushi">➡︎</p>
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">After</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after1.jpg" alt="">
        </div>
      </div>
      <p class="text-center fw-bold mt-4 mb-0">LLパックご利用のお客様</p>
    </div>
    <div class="ba-box bg-white p-3 border rounded mb-4">
      <p class="fs-6 text-center mb-4">千葉県 遠藤様</p>
      <div class="ba-box__inner position-relative d-flex align-items-center gap-2">
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">Before</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before2.jpg" alt="">
        </div>
        <p class="position-absolute ba-box__yajirushi">➡︎</p>
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">After</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after2.jpg" alt="">
        </div>
      </div>
      <p class="text-center fw-bold mt-4 mb-0">遺品整理ご利用のお客様</p>
    </div>
    <div class="ba-box bg-white p-3 border rounded mb-4">
      <p class="fs-6 text-center mb-4">東京都 三井様</p>
      <div class="ba-box__inner position-relative d-flex align-items-center gap-2">
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">Before</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before3.jpg" alt="">
        </div>
        <p class="position-absolute ba-box__yajirushi">➡︎</p>
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">After</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after3.jpg" alt="">
        </div>
      </div>
      <p class="text-center fw-bold mt-4 mb-0">施設入所の生前整理ご利用のお客様</p>
    </div>
    <div class="ba-box bg-white p-3 border rounded mb-4">
      <p class="fs-6 text-center mb-4">埼玉県 宮本様</p>
      <div class="ba-box__inner position-relative d-flex align-items-center gap-2">
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">Before</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before4.jpg" alt="">
        </div>
        <p class="position-absolute ba-box__yajirushi">➡︎</p>
        <div class="position-relative">
          <span class="position-absolute text-white ba-box__mark">After</span>
          <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after4.jpg" alt="">
        </div>
      </div>
      <p class="text-center fw-bold mt-4 mb-0">ゴミ屋敷プランご利用のお客様</p>
    </div>
  </div>
</section>
<!-- #SERVICE -->
<section id="SERVICE">
  <div class="container">
    <p class="sub-title text-center mb-4">お客様満足度99%</p>
    <h2 class="title text-center mb-4 px-0"><span class="big">クリーンラボ</span><br>のサービス</h2>
    <div class="d-flex flex-wrap gap-2">
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">不用品・粗大ゴミ回収</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/1.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">ご家庭にある、いらなくなった粗大ゴミや小物など様々な不用品を回収いたします。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">遺品整理</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/2.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">お亡くなりになられた方の衣類や貴重品、家電製品などを整理いたします。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">ゴミ屋敷清掃</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/3.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">手がつけられなくなってしまったゴミ屋敷を清掃いたします。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">生前整理・断捨離</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/4.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">大型家具、大量の衣類、成人してしまった子供お品物等の処分に、当社スタッフが、片付けのお手伝いをさせて頂きます。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">ハウスクリーニング</h4>
        <p class="p-2 mb-0 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/5.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">ご自宅やオフィスを清掃のプロが専門の機材で清掃いたします。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">残地物撤去</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/6.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">ご自宅やオフィスに残された残置物（粗大ゴミや家電等）を撤去いたします。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">不動産売却相談</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/7.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">不動産事業部で売却、購入相談いたします。</p>
      </div>
      <div class="service-box p-0 m-0">
        <h4 class="service-box__title fw-bold text-white text-center py-2 mb-0">リフォーム工事</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/8.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">弊社リフォーム事業部で荷物の整理後リフォーム工事をお手伝いします。</p>
      </div>
    </div>
  </div>
</section>
<!-- cv -->
<?php echo get_template_part('template/cv'); ?>
<!-- /cv -->
<!-- #PRICE -->
<section id="PRICE">
  <div class="container">
    <p class="sub-title text-center mb-4">絶対おすすめ</p>
    <h2 class="title text-center mb-4 px-0">安心<span class="small">で</span>お得<span class="small">な</span>定額パック</h2>
    <p class="lh-lg">クリーンラボでは、搬出作業費、階段料金（3階迄）、スタッフ追加（2名迄）、車両費、出張費、梱包作業が<span class="marker">全て込みの料金</span>となっております。<br>
お見積もり<span class="marker">追加料金も一切御座いません</span>。お客様の状況にあった最適なプランをご提案させて頂きます。</p>
      <!-- <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack_komikomi_sp.png" alt=""></p> -->
      <div class="pack-box mb-4">
        <h4 class="pack-box__title bg-sub text-white py-3 px-2">ちょっとしたゴミの片付けに！</h4>
        <div class="pack-box__inner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="pack-box__inner__title text-white d-inline bg-sub py-1 px-4 mt-2">少量パック</h5>
            <p class="fs-1 ex-bold mt-2 mb-0">5,500<span class="smallest fw-normal">（税込）~</span></p>
          </div>
          <div class="">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack/11.png" alt=""></p>
          </div>
        </div>
      </div>
      <div class="pack-box mb-4">
        <h4 class="pack-box__title bg-orange text-white py-3 px-2">ちょっとした家掃除に！</h4>
        <div class="pack-box__inner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="pack-box__inner__title text-white d-inline bg-orange py-1 px-4 mt-2">SSパック</h5>
            <p class="fs-1 ex-bold mt-2 mb-0">13,000<span class="smallest fw-normal">（税込）~</span></p>
          </div>
          <div class="">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack/1.png" alt=""></p>
          </div>
        </div>
      </div>
      <div class="pack-box mb-4">
        <h4 class="pack-box__title bg-main text-white py-3 px-2">1R・1K程度のお部屋の片付けに！</h4>
        <div class="pack-box__inner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="pack-box__inner__title text-white d-inline bg-main py-1 px-4 mt-2">Sパック</h5>
            <p class="fs-1 ex-bold mt-2 mb-0">19,800<span class="smallest fw-normal">（税込）~</span></p>
          </div>
          <div class="">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack/1.png" alt=""></p>
          </div>
        </div>
      </div>
      <div class="pack-box mb-4">
        <h4 class="pack-box__title bg-sub text-white py-3 px-2">1DK・1LDK程度のお部屋のお片付けに！</h4>
        <div class="pack-box__inner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="pack-box__inner__title text-white d-inline bg-sub py-1 px-4 mt-2">Mパック</h5>
            <p class="fs-1 ex-bold mt-2 mb-0">33,000<span class="smallest fw-normal">（税込）~</span></p>
          </div>
          <div class="">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack/2.png" alt=""></p>
          </div>
        </div>
      </div>
      <div class="pack-box mb-4">
        <h4 class="pack-box__title bg-orange text-white py-3 px-2">2K・2KD程度のお部屋のお片付けに</h4>
        <div class="pack-box__inner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="pack-box__inner__title text-white d-inline bg-orange py-1 px-4 mt-2">Lパック</h5>
            <p class="fs-1 ex-bold mt-2 mb-0">55,000<span class="smallest fw-normal">（税込）~</span></p>
          </div>
          <div class="">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack/3.png" alt=""></p>
          </div>
        </div>
      </div>
      <div class="pack-box mb-4">
        <h4 class="pack-box__title bg-main text-white py-3 px-2">一軒家、遺品整理、ゴミ屋敷、断捨離に</h4>
        <div class="pack-box__inner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="pack-box__inner__title text-white d-inline bg-main py-1 px-4 mt-2">LLパック</h5>
            <p class="fs-1 ex-bold mt-2 mb-0">お見積・要相談</p>
          </div>
          <div class="">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack/4.png" alt=""></p>
          </div>
        </div>
      </div>
      <p class="lh-lg">遺品整理プラン・生前整理プラン・ゴミ屋敷プランに関しましては、ご訪問見積もりさせて頂きます。</p>
    </div>
  </div>
  <!-- <div class="container">
    <h3 class="fw-bold mb-4">主な不用品回収品目</h3>
    <p class="mb-2"><span class="fw-bold">家具類</span><span class="small">（カラーボックス・ソファ・ダイニング・チェスト・テレビ台・ドレッサー・ベット・食棚等）</span></p>
    <p class="mb-2"><span class="fw-bold">家電類</span><span class="small">（カメラ・こたつ・ストーブ・パソコン・プリンター・ラジカセ・炊飯器・扇風機・掃除機・電話機・エアコン・テレビ・洗濯機・冷蔵庫）</span></p>
    <p class="mb-2"><span class="fw-bold">日用品類</span><span class="small">（お風呂用品・カーペット・ガスコンロ・ギター・ゴルフ・スキー板・スノボ板・トイレ用品・ブラインド・ホワイトボード・額縁・植木鉢・食器用品・水槽・置物・調理器具・布団）</span></p>
    <p class="mb-2"><span class="fw-bold">その他</span><span class="small">（ピアノ・金庫・雑誌・新聞・漫画）</span></p>
    <p class="lh-lg">上記に記載されてる物以外でも回収可能なのでご相談下さい。</p>
  </div> -->
</section>
<section class="bg-black">
  <div class="container">
    <h2 class="ex-bold alert-title text-center text-white mb-4">💀 <span class="color-red marker px-3 me-2">悪徳業者</span><span class="small">に</span>ご用心 💀</h2>
    <p class="lh-lg text-white">見積もり無料と言っておきながらキャンセルすると料金を請求したり、無料回収と言っておきながらトラックに積み終わった段階で高額料金を請求して来る悪徳業者が増えています。<br>
弊社の場合は最初にご説明した料金以上にかかることはありません!!!<br>
定額パックなら全ての金額もコミコミです!</p>
  </div>
</section>
<!-- cv -->
<?php echo get_template_part('template/cv'); ?>
<!-- /cv -->
<!-- #REASON -->
<section id="REASON">
  <div class="container">
    <h2 class="sub-title text-center mb-4">クリーンラボが選ばれる</h2>
    <h3 class="title text-center mb-4 px-0"><span class="big">8つ</span>の理由</h3>
    <div class="d-flex flex-wrap gap-2">
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">即日対応可能</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/1.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">迅速に駆けつけます！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">お見積もり無料</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/2.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">お電話一本ですぐ対応します！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">明瞭な会計</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/3.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">定額パックなら全てコミコミ！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">夜遅くでも対応可能</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/4.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">平日のお仕事後にも伺えます！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">地域最安値</h4>
        <p class="p-2 mb-0 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/5.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">他社よりも1円でも高い場合はご相談ください！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">ゴミの分別必要なし</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/6.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">お客様はただ立ち会うだけです！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">女性も安心</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/7.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">個人事務所ではなく株式会社のため、女性にも安心してご利用いただけます！清潔感のあるスタッフが訪問します！</p>
      </div>
      <div class="reason-box p-0 m-0">
        <h4 class="reason-box__title fw-bold text-white text-center py-2 mb-0">秘密は厳守</h4>
        <p class="p-2 mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason/8.jpg" alt=""></p>
        <p class="service-box__text p-2 mb-0">会社の重要資料等や個人情報等が記載された書類でも安心してお任せください！</p>
      </div>
    </div>
  </div>
</section>
<!-- cv -->
<?php echo get_template_part('template/cv'); ?>
<!-- /cv -->
<!-- #VOICE -->
<section id="VOICE" class="bg-sub">
  <div class="container">
    <p class="sub-title bg-orange text-center mb-4">喜びの声が続々と</p>
    <h2 class="title text-center mb-4 px-0">お客様の声</h2>
    <div class="voice-box p-3 pb-5 mb-4">
      <p class="lh-lg">物を捨てるのにそこまでお金はかけられないと思い色々なサイトを比較したところ クリーンラボさんを見つけました。『業界最安値』を謳っているだけあって確かに他の業者さんに比べても安かったです。定額制なので追加費用の請求の不安がないというのも決めての一つでした。なによりも低価格にも関わらず実際の作業はとても丁寧だったことに驚きです。またクリーンラボさんにお願いしたいと思っています。</p>
      <p class="name rounded fw-bold mb-0">東京都あきる野市 K・Yさん</p>
    </div>
    <div class="voice-box p-3 pb-5 mb-4">
      <p class="lh-lg">『ゴミの分別は事前にしておいてください。』という業者さんが多い中、クリーンラボさんに関しては一切その必要がありませんでした。見積もりをしてもらい、作業日時を決定したら、あとはスタッフさんに全ておまかせという流れでした。急遽転勤が決まり時間もない状況だったので、事前に何かこちらで準備をする必要がないのは非常に助かりました。実際の作業もスムーズにして頂けたので文句なしでした！</p>
      <p class="name rounded fw-bold mb-0">神奈川県横浜市 M・Iさん</p>
    </div>
    <div class="voice-box p-3 pb-5 mb-4">
      <p class="lh-lg">最初にお見積もりのお電話した際、非常に誠実なスタッフさんだなとの印象を受けました。というのも私自身はLパックで依頼したのですが、スタッフさんが「その量でしたらMパックでいけますよ！」と提案してくれたのです。安いプランを提案してくれる業者さんはなかなかいないのではないでしょうか？とても好感をもてたのでクリーンラボさんにお願いすることにしました。作業スタッフさんもハキハキしておりとても気持ちよく対応してくれました。</p>
      <p class="name rounded fw-bold mb-0">埼玉県川越市 H・Mさん</p>
    </div>
    <div class="voice-box p-3 pb-5">
      <p class="lh-lg">私は保障内容の観点で業者を探していました。費用で比較する人は多いと思いますが、本当に重要なのは何かあった時の保障内容だと私は考えています。その点クリーンラボさんは大手損害保険会社の東京海上日動火災保険に加入しており、最大保障額も1億円という点が非常に魅力的でした。実際には何も問題は起きませんでしたが、『何か あっても大丈夫』という安心感は何事にも変えられません。</p>
      <p class="name rounded fw-bold mb-0">東京都世田谷区 T・Aさん</p>
    </div>
  </div>
</section>
<!-- area -->
<?php echo get_template_part('template/area'); ?>
<!-- /area -->
<!-- cv -->
<?php echo get_template_part('template/cv'); ?>
<!-- /cv -->
<!-- #FAQ -->
<section id="FAQ" class="bg-skyblue">
  <div class="container">
    <p class="sub-title bg-orange text-center mb-4">よくあるご質問</p>
    <h3 class="title text-center mb-4 px-0">FAQ</h3>
    <div class="faq-box mb-4">
      <p class="question lh-lg mb-2"><span class="fw-bold">Q</span>回収できないものってありますか？</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>基本的に回収できないものはございません。ご相談ください。</p>
    </div>
    <div class="faq-box mb-4">
      <p class="question lh-lg mb-2"><span class="fw-bold">Q</span>リューベー計算と言われました、どういうことですか</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>1立米(1りゅーべ)1立方メートルの略で1メートルの立方体(1ｍ x 1ｍ x 1ｍ)の大きさです。 クリーンラボではお荷物を立米単位で計算し、回収料金をお伝えしております。</p>
    </div>
    <div class="faq-box mb-4">
      <p class="question"lh-lg ><span class="fw-bold">Q</span>支払い方法について教えてください</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>現金、事前振込、各種クレジットカードがご利用いただけます。 Webサイト上の掲載料金は現金価格となります。</p>
    </div>
    <div class="faq-box mb-4">
      <p class="question lh-lg mb-2"><span class="fw-bold">Q</span>他のサイトでも見たのですが、オプション料金ってなんですか？</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>パック料金は2階までの階段の作業日が含まれております。3階からの階段での作業ですと階段料金がかかりますので、 事前に3階以下まで降ろして頂ければ費用はかかりません。 また、狭くて大型車が駐車できない場合、少し離れた場所に駐車する必要があります。 お住いの場所から、駐車場まで持ち運ぶ距離がある場合に掛かる料金となります。 お問い合わせいただいた際に、お客様のお住いの状況を確認させていただきます。</p>
    </div>
    <div class="faq-box mb-4">
      <p class="question lh-lg mb-2"><span class="fw-bold">Q</span>間違って必要な物まで処分してしまった場合はどうなりますか？</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>大変申し訳ございませんが、一度回収してしまった物はお返しすることができかねてしまいます。 そのようなことが起きないよう、回収作業をする際にお荷物の確認をさせていただきます。</p>
    </div>
    <div class="faq-box mb-4">
      <p class="question lh-lg mb-2"><span class="fw-bold">Q</span>深夜・早朝に回収をお願いしたい</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>
深夜・早朝の回収も可能です。 ご予約は2時間枠でお取りしておりまして、前の作業状況や交通状況によってある程度前後してしまいます。 予めご了承ください。 作業スタッフより、到着30分前にご連絡させていただきます。予定時刻より到着が遅れる場合は、ご連絡を入れさせていただきます。</p>
    </div>
    <div class="faq-box mb-4">
      <p class="question lh-lg mb-2"><span class="fw-bold">Q</span>予約をキャンセルしたいのですが</p>
      <p class="answer lh-lg mb-0"><span class="fw-bold">A</span>回答
ご予約のキャンセルは可能です。 当日キャンセルの場合は、キャンセル料金が掛かる場合がございますので、なるべくお早めにご連絡ください。</p>
      <p><span class="color-red small">※悪質な場合は、当日キャンセル料金15,000をご請求させていただきます。</span></p>
    </div>
  </div>
</section>
<!-- cv -->
<?php echo get_template_part('template/cv'); ?>
<!--/ cv -->
<!-- #STEP -->
<section id="STEP">
  <div class="container">
    <h2 class="title text-center mb-4 px-0">不用品回収のSTEP</h2>
    <div class="step-box d-flex align-items-center">
      <div class="step-box__inner text-center">
        <p class="number fw-bold rounded mb-2 py-1">STEP1</p>
        <p class="komoku fw-bold">お問い合わせ</p>
        <p class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/step1.png" alt=""></p>
      </div>
      <div class="step-box__inner">
        <p class="lh-lg mb-0">お電話またはお問い合わせフォームからお問い合わせください。</p>
      </div>
    </div>
    <p class="text-center fs-1 pt-2 mb-2">⬇︎</p>
    <div class="step-box d-flex align-items-center">
      <div class="step-box__inner text-center">
        <p class="number fw-bold rounded mb-2 py-1">STEP2</p>
        <p class="komoku fw-bold">お電話見積もり</p>
        <p class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/step2.png" alt=""></p>
      </div>
      <div class="step-box__inner">
        <p class="lh-lg mb-0">ヒアリング内容をもとに最適なプラン・金額をご提案いたします。もちろん無料です。</p>
      </div>
    </div>
    <p class="text-center fs-1 pt-2 mb-2">⬇︎</p>
    <div class="step-box d-flex align-items-center">
      <div class="step-box__inner text-center">
        <p class="number fw-bold rounded mb-2 py-1">STEP3</p>
        <p class="komoku fw-bold">作業日の決定</p>
        <p class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/step3.png" alt=""></p>
      </div>
      <div class="step-box__inner">
        <p class="lh-lg mb-0">ご提示の内容でよろしければ作業日を決定させていただきます。</p>
      </div>
    </div>
    <p class="text-center fs-1 pt-2 mb-2">⬇︎</p>
    <div class="step-box d-flex align-items-center">
      <div class="step-box__inner text-center">
        <p class="number fw-bold rounded mb-2 py-1">STEP4</p>
        <p class="komoku fw-bold">作業開始</p>
        <p class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/step4.png" alt=""></p>
      </div>
      <div class="step-box__inner">
        <p class="lh-lg mb-0">ご指定の日時に専門のスタッフが伺います。安心・安全を徹底し、丁寧に作業をさせていただきます。</p>
      </div>
    </div>
    <p class="text-center fs-1 pt-2 mb-2">⬇︎</p>
    <div class="step-box d-flex align-items-center">
      <div class="step-box__inner text-center">
        <p class="number fw-bold rounded mb-2 py-1">STEP5</p>
        <p class="komoku fw-bold">お支払い</p>
        <p class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/step5.png" alt=""></p>
      </div>
      <div class="step-box__inner">
        <p class=lh-lg mb-0">作業内容に問題がないかチェックしていただき問題がなければ作業終了・お支払いとなります。現金、クレジットカードによるお支払いが可能です。</p>
      </div>
    </div>
  </div>
</section>
<!-- #CONTACT -->
<section id="CONTACT" class="bg-sub">
  <div class="container">
    <p class="sub-title bg-orange text-center mb-4">お気軽にご連絡ください！</p>
    <h2 class="title text-center mb-4 px-0">お問い合わせフォーム</h2>
    <div class="form-box bg-white py-3 px-4">
      <?php echo do_shortcode('[contact-form-7 id="a366650" title="コンタクトフォーム"]'); ?>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <h2 class="title text-center mb-4 px-0">会社情報</h2>
    <table class="my-table">
      <tr>
        <td class="fw-bold">屋号</td>
        <td>Clean Labo</td>
      </tr>
      <tr>
        <td class="fw-bold">運営元</td>
        <td>株式会社TOPHILL</td>
      </tr>
      <tr>
        <td class="fw-bold">東京本店</td>
        <td>東京都渋谷区代々木5-67-8</td>
      </tr>
      <tr>
        <td class="fw-bold">営業部</td>
        <td>
          <ul class="list-unstyled">
            <li>埼玉営業所: 埼玉県新座市</li>
            <li>神奈川営業所: 神奈川県横浜市</li>
            <li>千葉営業所: 千葉県千葉市</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td class="fw-bold">古物許可</td>
        <td>東京公安委員会第303331806522号</td>
      </tr>
      <tr>
        <td class="fw-bold">一般社団法人 遺品整理士認定協会</td>
        <td>遺品整理士<br>第IS21794号</td>
      </tr>
      <tr>
        <td class="fw-bold">一般社団法人 事件現場特殊清掃センター</td>
        <td>事件現場特殊清掃士<br>第CSC02349号</td>
      </tr>
    </table>
  </div>
</section>
</main>
<?php get_footer(); ?>
