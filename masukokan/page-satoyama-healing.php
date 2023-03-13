<?php
include('data/top.php');
get_header();
?>


<main class="p-satoyama-healing">
    <section class="p-satoyama-healing__fv">
        <p class="p-satoyama-healing__fv__title">里山の癒し</p>
        <div class="p-satoyama-healing__fv__image" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/fv.png);"></div>
    </section>
    <section class="p-satoyama-healing__intro" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/intro-bg.png);">
        <div class="p-satoyama-healing__intro__container">
            <p class="p-satoyama-healing__intro__title">ゆったり、ほっこり、開放感</p>
            <p class="p-satoyama-healing__intro__text">
                自然のぬくもりを感じながら浸かるお風呂は格別です。<br>
                長旅のあとや、里山でたっぷり遊んだあとは、加水なしの温泉でゆっくりくつろいでください。<br>
                ナトリウムやカルシウムをたっぷり含んだ、お肌にやさしい美肌の湯。<br>
                里山の自然を楽しめる露天風呂も併せてお楽しみください。
            </p>
            <img class="p-satoyama-healing__intro__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/intro.png" alt="">
        </div>
    </section>
    <section class="p-satoyama-healing__onsen-slide">
        <div class="swiper mySwiper satoyamaHealingOnsenSlideSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/onsen-slide1.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/onsen-slide2.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/onsen-slide3.png" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/onsen-slide4.png" />
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <section class="p-satoyama-healing__big-bath">
        <div class="p-satoyama-healing__big-bath__container">

            <p class="p-satoyama-healing__big-bath__title">大浴場内湯</p>
            <p class="p-satoyama-healing__big-bath__sub-title">旅の疲れを癒す温泉</p>
            <p class="p-satoyama-healing__big-bath__text">
                浴場には、地元の名陶・大塚昌三氏の手による片口型の大きな浴槽や、横山由夫氏の茶釜型のオブジェなど、益子焼の手わざが散りばめられています。<br>
                のんびりしながら、ふと見つけてみてはいかがでしょう。<br>
                また、男女とも浴場内にベビーベッドがあります。<br>
                心おきなく、一日の疲れをすっきりと洗い流してください。
            </p>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 satoyamaHealingBigBathSwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath1.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath4.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath5.png" />
                    </div>
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper satoyamaHealingBigBathSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath1.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath4.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/big-bath5.png" />
                    </div>
                </div>
            </div>

        </div>

        <div class="p-satoyama-healing__big-bath__bg__m-left" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/m-left1.png);"></div>
    </section>

    <section class="p-satoyama-healing__open-air-bath">
        <div class="p-satoyama-healing__open-air-bath__container">
            <p class="p-satoyama-healing__open-air-bath__title">露天風呂</p>
            <p class="p-satoyama-healing__open-air-bath__sub-title">里山がくれた至福の温泉</p>
            <p class="p-satoyama-healing__open-air-bath__text">
                外には男女ともに露天風呂を設置。<br>
                迫力のある大きな石の壁が広がり、空と石壁とのコントラストは圧巻。里山の風のにおいを感じながら、里山がくれた至福の温泉でほっこりとした時間をお楽しみ<br>
                いただけます。<br>
                旅の疲れがじんわりと体から消えていくのを実感してください。
            </p>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 satoyamaHealingOpenAirBathSwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath1.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath4.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath5.png" />
                    </div>
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper satoyamaHealingOpenAirBathSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath1.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath4.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/open-air-bath5.png" />
                    </div>
                </div>
            </div>

            <div class="p-satoyama-healing__fujiwara">
                <p class="p-satoyama-healing__fujiwara__title1">藤原郁三先生の邪鬼</p>
                <div class="p-satoyama-healing__fujiwara__describe1">
                    <p class="p-satoyama-healing__fujiwara__describe1__text">
                        藤原先生は、いつも蹴飛ばされ踏み潰され、いじめられていた邪鬼を陶彫作品として表舞台に出された方です。<br><br>
                        「鬼はそと福はうち」という言葉にもある通り、確かに鬼は怖いとか悪者というイメージがあります。しかし良く考えてみれば、<br>
                        私たち人間の誰の心の中にも鬼はいるのではないでしょうか。<br>
                        そして人生の中において、時に鬼の役割を果たさなくてはならない場面があって、その人のために、あえて嫌われ者の鬼の役になるのです。でも実はその行為は愛情表現なのです。悪の道から善の道へと導く。幸せになる為に進むべき方向を示す溢れる愛そのものです。鬼は誰の心の中にもいる。そして心を砕き叱咤激励をし、実は心の中では泣いていたりするのかもしれません。すごいエネルギーですね。<br><br>
                        私たちの人生は、喜怒哀楽。露天風呂の邪鬼を見たら、自分の心と向き合ってみて下さい。鬼がどんな風にみえますか？何とも愛らしく見えたり。深みを帯びた顔に見えたり。あの怖かった人に似ているな。色々なことを感じとって頂けるのではないでしょうか。
                    </p>
                    <img class="p-satoyama-healing__fujiwara__describe1__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/fujiwara1.png" alt="">
                </div>
                <div class="p-satoyama-healing__fujiwara__describe2">
                    <p class="p-satoyama-healing__fujiwara__describe2__text">
                        日々、怒っていたこと・イライラしていた・疲れていたことを思い出しつつ、この湯に浸かったならば、全てを笑いに変えて、<br>
                        日々のストレスも嫌なことも全てを流して下さい。藤原郁三先生によって表舞台に出現した邪鬼が皆様に幸せを運んでくれます。<br>
                        心身ともにリセットの場になればと思います。<br><br>
                        ハンドパワーというものがあります。作り手の藤原郁三先生の深みのある魂や、内面世界が先生の手からこの邪鬼に注がれています。そのパワーを感じてみてください。<br>
                    </p>
                    <img class="p-satoyama-healing__fujiwara__describe2__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/fujiwara2.png" alt="">
                </div>
                <p class="p-satoyama-healing__fujiwara__title2">藤原郁三先生の益子焼の寝湯枕</p>
                <div class="p-satoyama-healing__fujiwara__describe3">
                    <p class="p-satoyama-healing__fujiwara__describe3__text">
                        益子焼の伝統的な釉薬『柿釉』にて焼いていただきました。 藤原先生も枕を創るのは初の試みだったそうです。頭の形にえぐりを付けています。<br>
                        心地よく寝湯をお楽しみ頂けましたら嬉しく思います。
                    </p>
                    <img class="p-satoyama-healing__fujiwara__describe3__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/fujiwara3.png" alt="">
                </div>
            </div>
        </div>

        <div class="p-satoyama-healing__open-air-bath__bg__m-right" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/m-right1.png);"></div>
    </section>

    <section class="p-satoyama-healing__dressing-room">
        <div class="p-satoyama-healing__dressing-room__container">

            <p class="p-satoyama-healing__dressing-room__title">脱衣所等</p>
            <p class="p-satoyama-healing__dressing-room__sub-title">広々とした脱衣所</p>
            <p class="p-satoyama-healing__dressing-room__text">
                広い脱衣所には、多くのアメニティグッズをそろえました。<br>
                シャンプーとコンディショナーがいくつかの種類から選べるほか、体やお肌をきれいに保つ品々をお使いいただけます。<br>
                化粧台が個室のように区切られていますので、他のお客様を気にせずにお仕度してください。
            </p>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 satoyamaHealingDressingRoomSwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room1.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room4.png" />
                    </div>

                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper satoyamaHealingDressingRoomSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room1.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/dressing-room4.png" />
                    </div>

                </div>
            </div>

        </div>

        <div class="p-satoyama-healing__dressing-room__bg__m-left" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/m-left2.png);"></div>
        <div class="p-satoyama-healing__dressing-room__bg__m-right" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/m-right2.png);"></div>
    </section>

    <section class="p-satoyama-healing__pink-ribon">
        <div class="p-satoyama-healing__pink-ribon__container">
            <p class="p-satoyama-healing__pink-ribon__title">益子舘はピンクリボン運動に賛同しています。</p>
            <div class="p-satoyama-healing__pink-ribon__about">
                <p class="p-satoyama-healing__pink-ribon__about__text">
                    私たち日本人にとって、温泉は心身ともに癒しの場です。乳がん患者さんとご家族は「病気になる前と同じように子供、家族、友達...と温泉に入りたい！」と希望しています。しかし、県条例により浴槽内への手ぬぐい類（タオル・スポンジ等）の持ち込みや、浴槽内を著しく不潔にする行為は禁止されているため、浴槽内においてタオル等で手術の傷跡を隠すことが出来ません。<br><br>
                    そのため、患者さんは一般の入浴者のいる大浴場には入りづらいと感じています。大きな手術跡があるため、また乳房を全切除したために周りの視線が気になって温泉に行きづらい。温泉に行っても人が少ない時間または夜中にこっそり入浴する必要があり、自由貸切・24時間入浴可能等条件の限られた温泉地や温泉旅館を選ばなくてはならない、などがストレスとなり、温泉に行きたいけれど行けない理由となっています。<br><br>
                    益子舘は、乳がん患者さんが入浴着を着用して大浴場を利用することができる温泉施設です。
                </p>
                <img class="p-satoyama-healing__pink-ribon__about__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/pink-ribon1.png" alt="">
            </div>
            <div class="p-satoyama-healing__pink-ribon__about-content">
                <p class="p-satoyama-healing__pink-ribon__about-content__title">
                    ホテルサンシャイン益子舘は、大浴場での入浴着着用を推進し、歓迎する（WELCOME！）<br>
                    「J.POSH温泉パートナー」に参加しています。<br>
                    私たちは乳がん患者さんやそのご家族が安心して大浴場で入浴できる環境作りに取り組みます。
                </p>
                <div class="p-satoyama-healing__pink-ribon__about-content__first">
                    <div class="p-satoyama-healing__pink-ribon__about-content__first__text-area">
                        <p class="p-satoyama-healing__pink-ribon__about-content__first__title">1.入浴着について</p>
                        <p class="p-satoyama-healing__pink-ribon__about-content__first__text">
                            入浴着は、乳がん、腫瘍、皮膚移植等の皮膚に重大な傷等の残る手術を受けた方々が同浴者の目を気にすることなく入浴が楽しめるように、傷跡をカバーするために開発・ 製造された専用の入浴着です。
                        </p>
                    </div>
                    <div class="p-satoyama-healing__pink-ribon__about-content__first__img-area">
                        <img class="p-satoyama-healing__pink-ribon__about-content__first__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/satoyama-healing/pink-ribon2.png" alt="">
                    </div>
                </div>
                <div class="p-satoyama-healing__pink-ribon__about-content__second">
                    <div class="p-satoyama-healing__pink-ribon__about-content__second__text-area">
                        <p class="p-satoyama-healing__pink-ribon__about-content__second__title">2.ピンクリボン運動について</p>
                        <p class="p-satoyama-healing__pink-ribon__about-content__second__text">
                            ピンクリボン運動は、アメリカの乳がんで亡くなられた患者さんの家族が「このような悲劇が繰り返されないように」との願いを込めて作ったリボンからスタートした乳がんの啓発運動です。<br><br>
                            乳がん患者が増えつつあった1980年代のアメリカで始まり、行政、市民団体、企業などが乳がんの早期発見を啓発するためのイベントを展開したり、ピンクリボンをあしらった商品を頒布しその売り上げの一部を財団や研究団体に寄付するなど、積極的に取り組み、市民や政府の意識をかえました。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>