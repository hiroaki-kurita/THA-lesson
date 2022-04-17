<!-- フロントエンド -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>【THA】仕事も健康もグレードアップ</title>
    <link rel="icon" href="img/fav_logo.ico">
     <!-- BootstrapのCSS読み込み -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- スタイルシート -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- PC対応（ヘッダー） -->
        <div class="block-header">
            <img src="img/logo.png" alt="THAロゴ">
            <ul class="header-list">
                <li class="lesson">
                    <a href="#lesson-detail">認定講座</a>
                </li>
                <li class="about">
                    <a href="#association-about">協会について</a>
                </li>
                <li class="overview">
                    <a href="#association-overview">協会概要</a>
                </li>
            </ul>
        </div>
        <!-- スマホ対応（ハンバーガーメニュー） -->
        <div class="header-sp">
            <img src="img/logo-sp.png" alt="スマホ用ロゴ">
            <button type="button" class="header-button">
                <div class="h-menu">
                    <input id="h-menu_checkbox" class="h-menuCheckbox" type="checkbox">
                    <label class="h-menu_icon" for="h-menu_checkbox"><span class="hamburger-icon"></span></label>
                    <label id="h-menu_black" class="h-menuCheckbox" for="h-menu_checkbox"></label>
                    <div id="h-menu_content">
                        <ul>
                            <li><a href="#lesson-detail">認定講座</a></li>
                            <li><a href="#association-about">協会について</a></li>
                            <li><a href="#association-overview">協会概要</a></li>
                        </ul>
                        <div class="h-menu_policy">
                            <p><a href="#">プライバシー</a><p>
                            <p><a href="#">特定商取引法に基づく表示</a></p>
                            <p>Copyright ©︎ トータルヘルスケア協会</p>
                        </div>
                    </div>
                </div>
            </button>
        </div>
        <div class="block-main">
            <div class="main-title">
                <h2>トータルヘルスケアで、仕事も、健康も、グレードアップ</h2>
                <h1>健康も、幸せも、私はここで手に入れた</h1>
            </div>
            <img src="img/top-sp.png" alt="スマホ用トップ画像">
            <div id="lesson-detail">
                <h3>認定講座について</h3>
                <h4>大切な自分と家族の為に、今、健康についてできること</h4>
                <div class="detail-content">
                    <div class="detail-image">
                        <img src="img/familycooking.png" alt="家族団欒の食卓(PC)">
                    </div>
                    <div class="detail-text">
                        <p>母として、女性として、いつだって気になってくるのは「健康」のこと。女性としては、体型も気になるという方
                        もいらっしゃるのではないでしょうか。<br>お子様には健やかに育って欲しいと願い、お子様の自立
                        後は自分と旦さまの健康が気になりだします。<br>これだけ生活に根付いた健康を、最も手軽に、日常的に取り
                        入れられるのが「食事」です。<br>トータルヘルスケア協会では、美と健康に繋がるおいしいレッスンを、<span>万全サポートで学ぶことができます。</span>
                        <br>家族全員の健康の為に、まずは一歩踏み出してみませんか？</p>
                    </div>
                    <img src="img/familycooking-sp.png" alt="家族団欒の食卓(スマホ)">
                </div>
            </div>
            <div class="customer-voice">
                <div class="voice-title">
                    <h4>受講された皆様から<br>たくさんのお声をいただいております！</h4>
                </div>
                <div class="voice-first">
                    <p>味噌汁の品目を増やすなど今の食生活に少し工夫するだけで改善することができ、育児中で時間のない中でも実践しやすかったのと、
                    <span>先生からアドバイスやフィードバックを頂くことで毎日続ける活力</span>になりました。</p>
                    <div class="first-name">
                        <p>N.K.様</p>
                    </div>
                </div>
                <div class="voice-second">
                    <p>先生から頂いたアドバイスを実践することで<span>食事の幅が広がりました。</span>何より先生に質問しやすい環境がとても助かりました。
                    私だけでなく、家族の食事の悩みにもアドバイスを下さり、子どもと一緒にご飯を作る機会が増えて家族で美味しく食べることができました。</p>
                    <div class="second-name">
                        <p>M.Y.様</p>
                    </div>
                </div>
                <div class="voice-third">
                    <p>生活習慣の改善は、正しさだけでなく、<span>いかに自分らしく豊かな生活を送れるかだと思う。</span>
                    10年後、20年後といった先の暮らしを描きながら、今一度振り返るよい機会になった。</p>
                    <div class="third-name">
                        <p>T.H.様</p>
                    </div>
                </div>
            </div>
            <div class="license-step">
                <h4>資格取得で描くステップアップ</h4>
                <div class="step-text">
                    <p>トータルヘルスケア協会では、下記のような資格取得が可能です。とにかく実践的にヘルシーなお料理を学びたい方か
                    ら、キャリアまでしっかり描けるものまで、各種取り揃えております。</p>
                </div>
                <img src="img/stepup.png" alt="ステップアップイメージ図">
                <img src="img/background-green.jpg" alt="緑背景">
            </div>
            <div class="basic-lesson">
                <div class="b-lesson-title">
                    <h3>基礎講座</h3>
                    <h4>あなたとご家族の『美と健康』が手に入ります。</h4>
                </div>
                <div class="b-lesson-detail">
                    <div class="b-lesson-image">
                        <img src="img/lesson-image.png" alt="レッスンのイメージ図">
                    </div>
                    <div class="b-lesson-text">
                        <p>日々頭を悩ますのが毎日のお献立。
                        忙しい中、時間をかけずに 家族も喜ぶおいしい料理が作れたら。
                        そんなあなたのお悩みが解消されます。
                        料理が苦手でも大丈夫。
                        料理のプロが、 時短でも美味しく簡単に作れる栄養満点の料理を 詳しく解説いたします。
                        体調に合わせた料理が作れるようになり、組み合わせるお献立のヒントまで 教えてくれるので、頭を悩ませるストレスから解放されます。</p>
                    </div>
                </div>
                <div class="basic-detail">
                    <div class="basic-title">
                        <img src="img/trial.png" alt="トライアル">
                        <h3>ベーシックコース</h3>
                    </div>
                    <div class="basic-content">
                        <div class="basic-image">
                            <img src="img/basic-image.jpg" alt="ベーシックコースのイメージ図">
                        </div>
                        <div class="basic-text">
                            <span class="under-line">コース説明</span>
                            <p>素材の選び方から切り方迄、料理の全ての工程が詳しく学べます。 
                            時短でも美味しく作れるコツや見栄えする盛り付け、アレンジ法など、
                            プロの料理講師ならではの 学び多いレッスンです。料理に自信が持てますよ。</p>
                            <span class="under-line">受講内容</span>
                            <p>1.オンラインレッスン 6回（アーカイブ付き）<br>
                            2.Line及びZOOMサポート（30分×6回）<br>
                             料理のお悩みや健康に関してのご相談など、個別にサポート致します。</p>
                        </div>
                    </div>
                </div>
                <div class="support-detail">
                    <h3>サポートコース</h3>
                    <div class="support-content">
                        <div class="support-image">
                            <img src="img/support-image.jpg" alt="サポートコースのイメージ図">
                        </div>
                        <div class="support-text">
                            <span class="under-line">コース説明</span>
                            <p>ベーシックコースに加え、嗜好やご希望に沿ったメニューをカスタマイズしてご提案します。
                            詳しく解説した料理の作り方動画でしっかり学んで確実に料理の腕もアップ。毎日の料理作りが楽しくなり、健康になります。</p>
                            <br>
                            <span class="under-line">受講内容</span>
                            <p>1.オンラインレッスン　6回<br>
                            2.Line及びZOOMサポート（30分×6回）<br>
                            3.<span class="color">あなたにカスタマイズしたオリジナルレシピと作り⽅動画（料理によってはレシピのみ）・24レシピ</span></p>
                        </div>
                    </div>
                </div>
                <div class="fullsupport-detail">
                    <div class="fullsupport-title">
                        <img src="img/popular.png" alt="ポピュラー">
                        <h3>フルサポートコース</h3>
                    </div>
                    <div class="fullsupport-content">
                        <div class="fullsupport-image">
                            <img src="img/fullsupport-image.jpg" alt="ベーシックコースのイメージ図">
                        </div>
                        <div class="fullsupport-text">
                            <span class="under-line">コース説明</span>
                            <br>
                            <p>バランスの取れた料理のレパートリーが増えるだけでなく、知識を得ることで健康を維持、コントロールできるようになります。
                            学びはあなたと家族のこれからの健康だけでなく、将来にも大きな幸せをもたらします。</p>
                            <br>
                            <span class="under-line">資格取得</span>
                            <br>
                            <p>トータルヘルスケアフードアドバイザー3級取得が可能です。</p>
                            <br>
                            <span class="under-line">受講内容</span>
                            <br>
                            <p>1.オンラインレッスン 6回</p>
                            <p>2.Line及びZOOMサポート（30分×6回）</p>
                            <p>3.<span class="color">あなたにカスタマイズしたオリジナルレシピと作り⽅動画</span></p>
                            <p><span class="color">（料理によってはレシピのみ）・24 レシピ</span></p>
                            <p>4.<span class="color">毎日の食事記録 アドバイス</span></p>
                            <p><span class="color">日々の食事をご報告頂き、それに対してのアドバイスや料理のご提案等のサポートを受ける事で、確実に目標に近づけます。</span></p>
                            <p>5.<span class="color">栄養についての講義（90分×6回）</span></p>
                            <div class="nutrition-lesson">
                                <p><span class="color" style="font-weight: normal;">① 身体のしくみ、免疫について</span></p>
                                <p><span class="color" style="font-weight: normal;">② 身体に必要な栄養について<span></p>
                                <p><span class="color" style="font-weight: normal;">③ 正しい食生活の為の基本的な知識</span></p>
                                <p><span class="color" style="font-weight: normal;">④ 病気にならない為の食習慣と生活習慣</span></p>
                                <p><span class="color"style="font-weight: normal;">⑤ 栄養についての知識 1</span></p>
                                <p><span class="color" style="font-weight: normal;">⑥ 栄養についての知識 2</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inquiry-button">
                    <img src="img/speech-bubble.png" alt="吹き出し">
                    <a href="#mail-form"><img src="img/inquiry-button.png" alt="お問い合わせボタン"></a>
                </div>
            </div>
            <div class="t-training-lesson">
                <div class="t-lesson-title">
                    <h3>育成講座</h3>
                    <h4>あなたとご家族だけでなく、仕事に繋げて、さらに輝く人生へ</h4>
                </div>
                <div class="t-lesson-detail">
                    <div class="t-lesson-image">
                        <img src="img/lesson-image2.jpg" alt="レッスンのイメージ図2">
                    </div>
                    <div class="t-lesson-text">
                        <p>さらに知識を深めることで、家族だけではなく仕事へも活かすことができます。基礎講座でつけた知識や食事レパートリーを
                        活用して、自分自身の人生をもっとハリのある豊かなものへ磨き上げていきましょう。</p>
                        <p><br></p>
                        <p>トータルヘルスケア協会では、そのための
                        サポート体制を万全に、日常だけではない深い学びをご提供致します。</p>
                    </div>
                </div>
                <div class="adviser2-detail">
                    <h3>トータルヘルスケアフードアドバイザー２級 講習</h3>
                    <div class="adviser2-content">
                        <div class="adviser2-image">
                            <img src="img/adviser2.jpg" alt="アドバイザー２級">
                        </div>
                        <div class="adviser2-text">
                        <span class="under-line">コース説明</span>
                            <p>知識を生かしながら実際にアドバイスできるスキルを身に付られます。資格試験合格後は
                            『トータルヘルスケアフードアドバイザー』として 食事指導やサポートが出来ます。
                            <p><br></p>
                            <span class="under-line">受講内容</span>
                            <p>1.個別サポート実習</p>
                            <div class="adviser2-memo">
                                <p>講師のアドバイスを受けながら、モニター様へのサポートを実際に行います。</p>
                            </div>
                            <p>2.臨床栄養学についての講義（90分×3回）</p>
                            <p>3.康に欠かせない、食以外の分野における専門家による講義（90分×3回）</p>
                            <p>4.専門家によるビジネスセミナー（90分1回）</p>
                            <p>5.1,000以上あるレシピ・及び作り方動画を自由に閲覧可能。</p>
                            <div class="adviser2-memo">
                                <p>（自身の家庭での食事、またサポート目的での使用に限ります。）</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="adviser1-detail">
                    <h3>その後、1級（講師）、シニア（認定講師）へ ステップアップ</h3>
                    <div class="adviser1-content">
                        <div class="adviser1-image">
                            <img src="img/adviser1.jpg" alt="アドバイザー１級">
                        </div>
                        <div class="adviser1-text">
                            <p>トータルヘルスケアフードアドバイザー2級取得後は、さらに順を追って、トータルヘルスケアフードアドバイザー1級、
                            シニアトータルヘルスケアフードアドバイザーへとステップアップすることができます。</p>
                            <p><br></p>
                            <p>これにより様々な物事に生かすことができ、社会的にもより充実した毎日を送ることが可能になります。</p>
                        </div>
                    </div>
                    <a href="#mail-form"><img src="img/inquiry-button.png" alt="お問い合わせボタン"></a>
                </div>
            </div>
            <div class="price">
                <h3>料金表</h3>
                <img src="img/price.png" alt="コース料金表">
                <div class="inquiry-button">
                    <img src="img/speech-bubble.png" alt="吹き出し">
                    <a href="#mail-form"><img src="img/inquiry-button.png" alt="お問い合わせボタン"></a>
                </div>
            </div>
            <div id="association-about">
                <h3>当協会について</h3>
                <div class="youtube">
                    <iframe width="700" height="394" src="https://www.youtube.com/embed/miHgdyyHj1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div id="association-overview">
                <h3>協会概要</h3>
                <h4> 協会理念 </h4>
                <p>「食べたものが身体を作ります。料理の組み合わせによって健康に導く事もできます。
                美味しく健康な料理を 作り方までご提案し、健康な生活習慣へ導くサポートをする事で、病気の不安をなくし、幸せな人生を手に入れて頂く。<br>
                そんな方が増え、またそれを仕事にし、活躍する方が増える事で 、医療崩壊の阻止につながり、身体的にも精神的にも幸せな方が増えて 精神性
                の高い社会づくりに貢献する事が 協会の理念です。</p>
                <img src="img/association.png" alt="協会概要">
            </div>
            <div class="greeting">
                <h4> 代表挨拶 </h4>
                <div class="greeting-content">
                    <img src="img/toshiko2-sp.png" alt="栗田登志子の写真（スマホ用）">
                    <div class="greeting-text">
                        <p>『あなたの意識ひとつで、理想の未来は作れます』
                        日々の食事が身体を作ります。<br>
                        病気になってから 対処するのではなく、病気にならない身体づくりを目指すのが、本来の食事の目的ではないでしょうか。</p>
                        <p><br></p>
                        <p>料理が苦手、何をどう食べれば良いのかわからない…。
                        そうおっしゃる方は、ただ その方法をご存じないだけ。</p>
                        <p><br></p>
                        <p>知っているだけで美味しく作れる。美味しく食べることで、身体も心も満たされる。<br>
                        それが結果、理想のボディになり、健康へとつながります。<br>
                        決して難しい事ではありません。<br>
                        その方法をお伝えし、またお一人ゝに寄り添いながらサポートする事で健康な食習慣、生活習慣に導き、理想の未来を手に入れて頂きます。</p>
                        <p><br></p>
                        <p>また、それを仕事としてご活躍頂く事で、 病気に悩む人を一人でも減らしたい、というのがトータルヘルスケア協会の願いです。</p>
                        <img src="img/toshiko.png" alt="栗田登志子のサイン">
                    </div>
                    <div class="greeting-image">
                        <img src="img/toshiko2.png" alt="栗田登志子の写真">
                    </div>
                </div>
            </div>
            <div id="mail-form">
                <div class="form-title">
                    <h3>お問合わせ</h3>
                    <p>講座お申し込みをご希望の方は、以下のお申込フォームに必要事項をご入力下さい。</p>
                    <p>3営業日以内にassociation@totalhealthcare.ne.jpよりご連絡させて頂きます。</p> 
                    <p><br></p>
                    <p>内容に間違いがなければ次の確認画面で【送信】ボタンを押してください。</p>
                </div>
                <div class="form-text">
                    <form action="confirm.php" method="post">
                        <div class="name">
                            <label>ご氏名<span>※必須</span></label>
                            <input type="text" name="name" value="" required>
                        </div>
                        <div class="phone">
                            <label>お電話番号<span>※必須</span></label>
                            <input type="text" name="phone" value="" required>
                        </div>
                        <div class="email">
                            <label>メールアドレス<span>※必須</span></label>
                            <input type="text" name="email" value="" required>
                        </div>
                        <div class="sex">
                            <label>性別</label>
                            <div class="select">
                                <input type="radio" name="sex" value="女性" style="transform:scale(2.0)" checked>女性
                                <input type="radio" name="sex" value="男性" style="transform:scale(2.0)">男性
                                <input type="radio" name="sex" value="その他" style="transform:scale(2.0)">その他
                            </div>
                        </div>
                        <div class="age">
                            <label>ご年齢</label>
                            <div class="select">
                                <input type="radio" name="age" value="10代" style="transform:scale(2.0)" checked>10代
                                <input type="radio" name="age" value="20代" style="transform:scale(2.0)">20代
                                <input type="radio" name="age" value="30代" style="transform:scale(2.0)">30代
                                <input type="radio" name="age" value="40代" style="transform:scale(2.0)">40代
                                <input type="radio" name="age" value="50代" style="transform:scale(2.0)">50代
                                <input type="radio" name="age" value="60代以上" style="transform:scale(2.0)">60代以上
                            </div>
                        </div>
                        <div class="address">
                            <label>お住まいの都道府県</label>
                            <select name="address">
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>
                        </div>
                        <div class="reserve">
                            <div class="reserve-title">
                                <label>ご予約希望日</label>
                            </div>
                            <div class="reserve-list">
                                <div class="reserve-1">
                                    <label>第１希望<span>※必須</span></label>
                                    <input type="datetime-local" name="reserve1" value="" required>
                                </div>
                                <div class="reserve-2">
                                    <label>第２希望<span>※必須</span></label>
                                    <input type="datetime-local" name="reserve2" value="" required>
                                </div>
                                <div class="reserve-3">
                                    <label>第３希望<span>※必須</span></label>
                                    <input type="datetime-local" name="reserve3" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="memo">
                            <label>ご質問がございましたら、ご自由にご記載ください。</label>
                            <textarea name="memo" cols="50" rows="10" wrap="soft"></textarea>
                        </div>
                        <div class="mail-policy">
                            <p>Docomo・au・softbankのキャリアメールやicloud.comのメールアドレスは、こちらからのメールが届きにくい場合があります。
                            yahoo.co.jp（yahooメール）、gmail.com（Gmail）でのご登録を推奨しています。ご登録いただいたメールアドレスは弊社プライバ
                            シーポリシーに基づき厳重に管理します。また、ご登録いただいたメールアドレスに無料のメールマガジンをお送りしています。登録
                            解除をご希望の際にはメール内の解除リンクから簡単に登録解除できます。また、メールマガジンの中で弊社が提供している有料サー
                            ビスをご案内することがございますが、無料のメールマガジンから自動的に有料サービスに登録されるようなことは一切ありませんの
                            で、ご安心ください。</p>
                        </div>
                        <button type="submit">内 容 確 認</button>
                    </form>
                </div>
            </div>
            <div class="privacy-policy">
                <a href="#">プライバシー</a>
                <a href="#">特定商取引法に基づく表示</a>
            </div>
        </div>
        <!-- PC用フッター -->
        <div class="block-footer">
            <p>Copyright ©︎ トータルヘルスケア協会</p>
        </div>
        <!-- スマホ用フッター -->
        <div class="block-footer-sp">
            <a href="#mail-form">
                <h4>フルサポートへお申し込みで特典付</h4>
                <h2>いますぐお問い合せ</h2>
            </a>
        </div>
    </div>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>
</html>