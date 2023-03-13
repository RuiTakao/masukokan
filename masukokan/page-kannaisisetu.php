<?php
include('data/top.php');
get_header();
?>


<main class="p-kannaisisetu">
    <section class="p-kannaisisetu__fv">
        <p class="p-kannaisisetu__fv__title">館内案内</p>
        <div class="p-kannaisisetu__fv__image" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/fv.png);"></div>
    </section>
    <section class="p-kannaisisetu__intro" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/intro-bg.png);">
        <div class="p-kannaisisetu__intro__container">
            <p class="p-kannaisisetu__intro__title">里山の情緒でおもてなし。</p>
            <p class="p-kannaisisetu__intro__text">
                各施設とも、お客様のご要望にお応えすべく、担当スタッフがみなさまをお迎えいたします。<br>
                当館の願いは、お客様の夢を叶えること。施設のご利用にあたり、<br>
                「ごはんはテーブルじゃなくて座敷がいい」、<br>
                「車いすの場合はどうすればいいの？」などご要望があれば、<br>
                お気軽にお打ち合わせいただくか、スタッフまでお声がけください。<br>
            </p>
            <img class="p-kannaisisetu__intro__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/intro.png" alt="">
        </div>
    </section>
    <section class="p-kannaisisetu__onsen-slide">
        <div class="swiper mySwiper kannaisisetuSlideSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/kannai-slide1.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/kannai-slide2.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/kannai-slide3.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/kannai-slide4.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/kannai-slide5.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/kannai-slide6.png" />
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <section class="p-kannaisisetu__message" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/message-bg.png);">
        <div class="p-kannaisisetu__message__container">
            <p class="p-kannaisisetu__message__title">里山リゾートホテル「益子舘」へようこそ。</p>
            <p class="p-kannaisisetu__message__text">
                まるで実家に来たような懐かしい自然の情緒でお客様をおもてなし致します。<br>
                山の緑に囲まれたのどかな風景が皆様をお出迎え。ここが益子の旅の拠点です。宿の中も外も、あますところなく存分にお楽しみいただくご準備を。
            </p>
            <div class="p-kannaisisetu__message__content">
                <p class="p-kannaisisetu__message__content__title">館内施設についてのメッセージ</p>
                <p class="p-kannaisisetu__message__content__text">
                    当館は、バリアフリーが完全には整備されておりません。ロビーより２階までは階段でお上がりいただきます。２階〜３階客室にはエスカレーター（写真）でお進みいただきます。大浴場へも下り階段でお進みいただきます。<br>
                    また、館内のお部屋、お食事処（一部の宴会場を除く）を禁煙とさせていただいております。<br><br>
                    ご不便をおかけ致しますが、何卒、ご理解のほどお願い申し上げます。
                </p>
            </div>
        </div>
    </section>

    <div class="p-kannaisisetu__sisetu-introduction">

        <section class="p-kannaisisetu__enkaijou">
            <p class="p-kannaisisetu__enkaijou__title">宴会場</p>
            <p class="p-kannaisisetu__enkaijou__sub-title">仲間との語らいのひとときを</p>

            <div class="p-kannaisisetu__enkaijou__suehironoma">
                <img class="p-kannaisisetu__enkaijou__suehironoma__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/enkaijou1.png" alt="">
                <div class="p-kannaisisetu__enkaijou__suehironoma__content-area">
                    <p class="p-kannaisisetu__enkaijou__suehironoma__title">小宴会場「末広の間」</p>
                    <p class="p-kannaisisetu__enkaijou__suehironoma__sub-title">1部屋10名様まで/8室</p>
                    <p class="p-kannaisisetu__enkaijou__suehironoma__text">
                        畳の落ちついた雰囲気の中、仲間との語らいのひとときを。<br>
                        8つの小部屋に分かれた、1部屋10名様までの個室の宴会場です。<br>
                        お客さまのご希望にあわせて、お座敷でもテーブルセットでも、セッティングいたします。<br>
                        ひざに負担のかからない高めの座椅子もありますので、気軽にお声がけください。<br>
                        2部屋までを、続き部屋として利用していただくこともできます。
                    </p>
                </div>
            </div>

            <div class="p-kannaisisetu__enkaijou__heiannoma">
                <img class="p-kannaisisetu__enkaijou__heiannoma__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/enkaijou2.png" alt="">
                <div class="p-kannaisisetu__enkaijou__heiannoma__content-area">
                    <p class="p-kannaisisetu__enkaijou__heiannoma__title">大宴会場「平安の間」</p>
                    <p class="p-kannaisisetu__enkaijou__heiannoma__sub-title">1部屋100名まで/1室</p>
                    <p class="p-kannaisisetu__enkaijou__heiannoma__text">
                        畳敷きの広々としたお部屋は、お殿様が宴に興じる時代劇のよう。<br>
                        100名様が座れる、大きな宴会場です。<br>
                        こちらのお部屋も、お客さまのご希望にあわせて、お座敷とテーブルセット、高めの座椅子をご用意しています。<br>
                        また4つの小部屋に分ければ、20名様ずつでご利用いただける、小宴会場に変身させることもできます。
                    </p>
                </div>
            </div>

            <div class="p-kannaisisetu__enkaijou__masukoza">
                <img class="p-kannaisisetu__enkaijou__masukoza__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/enkaijou3.png" alt="">
                <div class="p-kannaisisetu__enkaijou__masukoza__content-area">
                    <p class="p-kannaisisetu__enkaijou__masukoza__title">大宴会場「益子座」</p>
                    <p class="p-kannaisisetu__enkaijou__masukoza__sub-title">1部屋100名まで/1室</p>
                    <p class="p-kannaisisetu__enkaijou__masukoza__text">
                        100名様が座れるうえ、大衆演芸も開催できる大きな宴会場。<br>
                        笑い声と歌声のたえない、楽しい夜を。<br>
                        本格的な音響照明セットを備え、レーザーディスクのカラオケセットも置いています。<br>
                        こちらのお部屋も、お客さまのご希望にあわせて、お座敷とテーブルセット、高めの座椅子をご用意しています。
                    </p>
                </div>
            </div>

        </section>

        <section class="p-kannaisisetu__convention-hall">
            <p class="p-kannaisisetu__convention-hall__title">コンベンションホール会議室</p>
            <p class="p-kannaisisetu__convention-hall__sub-title">多目的な用途でご利用できます</p>

            <div class="p-kannaisisetu__convention-hall__hikari">
                <img class="p-kannaisisetu__convention-hall__hikari__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/convention-hall1.png" alt="">
                <div class="p-kannaisisetu__convention-hall__hikari__content-area">
                    <p class="p-kannaisisetu__convention-hall__hikari__title">コンベンションホール「光」</p>
                    <p class="p-kannaisisetu__convention-hall__hikari__sub-title">1部屋10名様まで/8室</p>
                    <p class="p-kannaisisetu__convention-hall__hikari__text">
                        畳の落ちついた雰囲気の中、仲間との語らいのひとときを。<br>
                        8つの小部屋に分かれた、1部屋10名様までの個室の宴会場です。<br>
                        お客さまのご希望にあわせて、お座敷でもテーブルセットでも、セッティングいたします。<br>
                        ひざに負担のかからない高めの座椅子もありますので、気軽にお声がけください。<br>
                        2部屋までを、続き部屋として利用していただくこともできます。
                    </p>
                </div>
            </div>

            <div class="p-kannaisisetu__convention-hall__rinkarn-president">
                <img class="p-kannaisisetu__convention-hall__rinkarn-president__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/convention-hall2.png" alt="">
                <div class="p-kannaisisetu__convention-hall__rinkarn-president__content-area">
                    <p class="p-kannaisisetu__convention-hall__rinkarn-president__title">会議室「リンカーン」「プレジデント」</p>
                    <p class="p-kannaisisetu__convention-hall__rinkarn-president__sub-title">1部屋20〜40名様まで/2室</p>
                    <p class="p-kannaisisetu__convention-hall__rinkarn-president__text">
                        20名様から40名様まで収容できる多目的室。会議だけでなく、少人数のワークショップや講演なども開催可能なユーティリティスペースです。<br>
                        プロジェクターやスクリーン、ホワイトボードなどは貸し出しができます。宿泊なしの会議室のみでもお貸ししていますので、気軽にお声がけください。
                    </p>
                </div>
            </div>

        </section>

        <section class="p-kannaisisetu__nijikaidokoro">
            <p class="p-kannaisisetu__nijikaidokoro__title">二次会処</p>
            <p class="p-kannaisisetu__nijikaidokoro__sub-title">笑顔に満ちたひとときを</p>

            <div class="p-kannaisisetu__nijikaidokoro__hibiki">
                <img class="p-kannaisisetu__nijikaidokoro__hibiki__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/nijikaidokoro1.png" alt="">
                <div class="p-kannaisisetu__nijikaidokoro__hibiki__content-area">
                    <p class="p-kannaisisetu__nijikaidokoro__hibiki__title">
                        カラオケパーティールーム<br>
                        「響（ひびき）」
                    </p>
                    <p class="p-kannaisisetu__nijikaidokoro__hibiki__text">
                        宴会の二次会としてもお使いいただける、カラオケパーティールーム。<br>
                        森で仲間と歌うように、カラオケで歌声を響かせてください。芋焼酎「さつま司」「鉄幹」や麦焼酎「和ら麦」、米焼酎「益子の炎」などの地酒をはじめ、さまざまなお酒、ソフトドリンク、おつまみをご用意しています。
                    </p>
                </div>
            </div>

            <div class="p-kannaisisetu__nijikaidokoro__bishamon">
                <img class="p-kannaisisetu__nijikaidokoro__bishamon__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/nijikaidokoro2.png" alt="">
                <div class="p-kannaisisetu__nijikaidokoro__bishamon__content-area">
                    <p class="p-kannaisisetu__nijikaidokoro__bishamon__title">
                        カラオケスナック<br>
                        「美写文（びしゃもん）」
                    </p>
                    <p class="p-kannaisisetu__nijikaidokoro__bishamon__text">
                        宴会の二次会としてもお使いいただける、カラオケスナック。<br>
                        アットホームな雰囲気の中、幸せをもたらす毘沙門天が舞いおりてきたような、笑顔に満ちたひとときをお過ごしください。お酒やおつまみなどは、「響」とほぼ同じメニューをご用意しています。
                    </p>
                </div>
            </div>

        </section>

        <section class="p-kannaisisetu__other">
            <p class="p-kannaisisetu__other__title">その他の施設</p>
            <p class="p-kannaisisetu__other__sub-title">充実の施設</p>

            <div class="p-kannaisisetu__other__roby">
                <img class="p-kannaisisetu__other__roby__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/other1.png" alt="">
                <div class="p-kannaisisetu__other__roby__content-area">
                    <p class="p-kannaisisetu__other__roby__title">
                        ロビー
                    </p>
                    <p class="p-kannaisisetu__other__roby__text">
                        お客様をいちばんはじめにおもてなすロビーは、当館の顔。広めのロビーは団体様でもゆっくりお待ちいただけます。<br><br>
                        またラウンジでは、淹れたてのコーヒーやオリジナルの里山スイーツをお召し上がりいただけます。ゆっくり流れる里山でのひと時を寛いでお過ごしください。
                    </p>
                </div>
            </div>

            <div class="p-kannaisisetu__other__fuwari">
                <img class="p-kannaisisetu__other__fuwari__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/other2.png" alt="">
                <div class="p-kannaisisetu__other__fuwari__content-area">
                    <p class="p-kannaisisetu__other__fuwari__title">
                        森のエステ「Fuwari（フワリ）」
                    </p>
                    <p class="p-kannaisisetu__other__fuwari__text">
                        自然のうるおいで、身も心も癒される。<br>
                        からだも心もキレイになれる極上のエステで、至福のやすらぎを。<br>
                        最上級の癒しの空間で、いつもの自分に「ありがとう」って伝えてみませんか？
                    </p>
                    <a class="p-kannaisisetu__other__fuwari__button" href="#">詳細はこちら</a>
                </div>
            </div>

            <div class="p-kannaisisetu__other__waku">
                <img class="p-kannaisisetu__other__waku__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/other3.png" alt="">
                <div class="p-kannaisisetu__other__waku__content-area">
                    <p class="p-kannaisisetu__other__waku__title">
                        ギフトショップ「WAKU（ワク）」
                    </p>
                    <p class="p-kannaisisetu__other__waku__text">
                        ずらり、益子舘おすすめのおみやたち。ここは益子舘が選りすぐった食べものや雑貨などを買える場所。<br><br>
                        小さなお店ですので、ふらっと寄り道する気分でおいでください。女将の目利きでセレクトした厳選ご当地おみやがたくさん。益子舘オリジナル商品もありますよ。
                    </p>
                    <a class="p-kannaisisetu__other__waku__button" href="#">詳細はこちら</a>
                </div>
            </div>

            <div class="p-kannaisisetu__other__tinositasake">
                <img class="p-kannaisisetu__other__tinositasake__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/other4.png" alt="">
                <div class="p-kannaisisetu__other__tinositasake__content-area">
                    <p class="p-kannaisisetu__other__tinositasake__title">
                        池ノ下酒店
                    </p>
                    <p class="p-kannaisisetu__other__tinositasake__text">
                        益子町の酒蔵「外ノ池酒造」をはじめ、当館のお食事の際にご提供させていただいている栃木県を代表する酒蔵のお酒を販売しています。<br>
                        日光連山からの清水で育まれた米処とちぎのお米を使用した栃木の地酒を是非ご賞味ください。
                    </p>
                    <a class="p-kannaisisetu__other__tinositasake__button" href="#">詳細はこちら</a>
                </div>
            </div>

        </section>

    </div>

    <div class="p-kannaisisetu__rental-laundry-ice-machine-bg">
        <section class="p-kannaisisetu__rental">
            <p class="p-kannaisisetu__rental__title">無料貸し出し備品について</p>
            <p class="p-kannaisisetu__rental__sub-title">ご希望のお客様は、フロントまで<br>お申しつけください。</p>
            <div class="p-kannaisisetu__rental__list">
                <p class="p-kannaisisetu__rental__list-content">
                    卓球セット　/　車イス　/　加湿器　/　空気清浄機　/　アイロン・アイロン台　/　トランプ　/　蚊取り線香　/　シニアグラス　/体温計　/　和服ハンガー　/　アイスノン
                </p>
                <p class="p-kannaisisetu__rental__list-note">※台数に限りがございますので、ご用意出来ない場合もございます。</p>
            </div>
        </section>

        <section class="p-kannaisisetu__laundry-ice-machine">
            <p class="p-kannaisisetu__laundry-ice-machine__title">無料貸し出し備品について</p>
            <p class="p-kannaisisetu__laundry-ice-machine__sub-title">ご希望のお客様は、フロントまで<br>お申しつけください。</p>
            <div class="p-kannaisisetu__laundry-ice-machine__content">
                <img class="p-kannaisisetu__laundry-ice-machine__content-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/laundry-ice-machine.png" alt="">
                <div class="p-kannaisisetu__laundry-ice-machine__content-list">
                    <p class="p-kannaisisetu__laundry-ice-machine__content-list__laundry-title">有料コインランドリー2セット</p>
                    <p class="p-kannaisisetu__laundry-ice-machine__content-list__laundry-text">洗濯機　（2台　/　4.5キロ）　1回　200円<br>乾燥機　（2台　/　4.5キロ）　30分　100円<br>洗剤　1袋　50円</p>
                    <p class="p-kannaisisetu__laundry-ice-machine__content-list__ice-machine-title">有料のコイン製氷機</p>
                    <p class="p-kannaisisetu__laundry-ice-machine__content-list__ice-machine-text">製氷機　1台　200円（アイスペール1杯）<br>アイスペール・アイストング・マドラー常設</p>
                    <p class="p-kannaisisetu__laundry-ice-machine__content-list__note">※設置場所はホテル4階です。ご不明な点は、フロントまでお問い合わせください。</p>
                </div>
            </div>
        </section>

        <div class="p-kannaisisetu__rental-laundry-ice-machine-bg__m-left" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/m-left.png);"></div>
        <div class="p-kannaisisetu__rental-laundry-ice-machine-bg__m-right" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kannaisisetu/m-right.png);"></div>
    </div>

</main>

<?php get_footer(); ?>