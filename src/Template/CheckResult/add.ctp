<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- CheckResult.add -->
<div id="body" class="container-fluid">

    <!-- ページタイトル -->
    <div class="page-header">
        <h2>ビジネス基礎チェック 新規登録</h2>
    </div>

    <div class="row-fluid">
        <!-- 中分類 -->
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#checkBaseInfo" class="list-group-item linkInThePage">実施者/実施日</a></li>
                <li><a href="#group1" class="list-group-item linkInThePage">基本</a></li>
                <li><a href="#group2" class="list-group-item linkInThePage">指示/報連相</a></li>
                <li><a href="#group3" class="list-group-item linkInThePage">コミュニケーション</a></li>
                <li><a href="#group4" class="list-group-item linkInThePage">業務態度</a></li>
                <li><a href="#group5" class="list-group-item linkInThePage">その他</a></li>
            </ul>
        </div>

        <!-- チェックリスト -->
        <div class="col-md-9">
            <form id="form_edit" class="form-inline">
                <!-- 実施者/実施日 -->
                <div class="panel panel-primary">
                    <div class="panel-heading" id="checkBaseInfo">実施者/実施日</div>
                    <div class="panel-body">
                        <div class="input-group col-md-3">
                            <span class="input-group-addon">実施者</span>
                            <select class="form-control" id="inputSelect">
                                <option>鈴木 徹</option>
                                <option>古屋 景子</option>
                                <option>長沼 佑</option>
                            </select>
                        </div>
                        <div class="input-group col-md-3">
                            <span class="input-group-addon">実施日</span>
                            <input type="date" name="checkDate" class="form-control" >
                        </div>
                    </div>
                </div>

                <!-- group1 -->
                <div class="panel panel-primary">
                    <div class="panel-heading" id="group1">基本</div>
                    <div class="panel-body">
                        <dl>
                            <dt>会社と部の５つのコンテンツを言える</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_1" id="optionsRadios1_1_1" value="0"><label for="optionsRadios1_1_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_1" id="optionsRadios1_1_2" value="1" ><label for="optionsRadios1_1_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_1" id="optionsRadios1_1_3" value="2" ><label for="optionsRadios1_1_3">×</label></span>
                            </dd>
                            <dt>行動4原則（最重点項目）全ての実践ができている 1．大きな声で</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_2" id="optionsRadios1_2_1" value="0" ><label for="optionsRadios1_2_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_2" id="optionsRadios1_2_2" value="1"><label for="optionsRadios1_2_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_2" id="optionsRadios1_2_3" value="2" ><label for="optionsRadios1_2_3">×</label></span>
                            </dd>
                            <dt>行動4原則（最重点項目）全ての実践ができている 2．きびきび行動</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_3" id="optionsRadios1_3_1" value="0" ><label for="optionsRadios1_3_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_3" id="optionsRadios1_3_2" value="1" ><label for="optionsRadios1_3_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_3" id="optionsRadios1_3_3" value="2"><label for="optionsRadios1_3_3">×</label></span>
                            </dd>
                            <dt>行動4原則（最重点項目）全ての実践ができている 3．自分から挨拶</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_4" id="optionsRadios1_4_1" value="0"><label for="optionsRadios1_4_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_4" id="optionsRadios1_4_2" value="1" ><label for="optionsRadios1_4_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_4" id="optionsRadios1_4_3" value="2" ><label for="optionsRadios1_4_3">×</label></span>
                            </dd>
                            <dt>行動4原則（最重点項目）全ての実践ができている 4．明るい笑顔</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_5" id="optionsRadios1_5_1" value="0" ><label for="optionsRadios1_5_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_5" id="optionsRadios1_5_2" value="1"><label for="optionsRadios1_5_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios1_5" id="optionsRadios1_5_3" value="2" ><label for="optionsRadios1_5_3">×</label></span>
                            </dd>
                        </dl>
                    </div>
                </div>

                <!-- group2 -->
                <div class="panel panel-primary">
                    <div class="panel-heading" id="group2">指示/報連相</div>
                    <div class="panel-body">
                        <dl>
                            <dt>指示された作業を行うことができない、または間に合わない場合、速やかに指示者に相談する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_1" id="optionsRadios2_1_1" value="0"><label for="optionsRadios2_1_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_1" id="optionsRadios2_1_2" value="1" ><label for="optionsRadios2_1_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_1" id="optionsRadios2_1_3" value="2" ><label for="optionsRadios2_1_3">×</label></span>
                            </dd>
                            <dt>指示の内容など、大事な情報はメモをとり、自分の言葉で確認する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_2" id="optionsRadios2_2_1" value="0" ><label for="optionsRadios2_2_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_2" id="optionsRadios2_2_2" value="1"><label for="optionsRadios2_2_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_2" id="optionsRadios2_2_3" value="2" ><label for="optionsRadios2_2_3">×</label></span>
                            </dd>
                            <dt>指示の相談先、報告先、期限、優先順位は自分では判断せず確認する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_3" id="optionsRadios2_3_1" value="0" ><label for="optionsRadios2_3_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_3" id="optionsRadios2_3_2" value="1" ><label for="optionsRadios2_3_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_3" id="optionsRadios2_3_3" value="2"><label for="optionsRadios2_3_3">×</label></span>
                            </dd>
                            <dt>報告は5W2Hを網羅するよう行い、結論→経緯→意見の順で報告する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_4" id="optionsRadios2_4_1" value="0"><label for="optionsRadios2_4_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_4" id="optionsRadios2_4_2" value="1" ><label for="optionsRadios2_4_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_4" id="optionsRadios2_4_3" value="2" ><label for="optionsRadios2_4_3">×</label></span>
                            </dd>
                            <dt>文書にて報告する場合、誰にでも見せられる文章で記述し、誤字・脱字などの誤りがないように見直しを行う</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_5" id="optionsRadios2_5_1" value="0"><label for="optionsRadios2_5_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_5" id="optionsRadios2_5_2" value="1" ><label for="optionsRadios2_5_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_5" id="optionsRadios2_5_3" value="2" ><label for="optionsRadios2_5_3">×</label></span>
                            </dd>
                            <dt>少なくとも1回/日は状況の報告を行う</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_6" id="optionsRadios2_6_1" value="0" ><label for="optionsRadios2_6_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_6" id="optionsRadios2_6_2" value="1"><label for="optionsRadios2_6_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_6" id="optionsRadios2_6_3" value="2" ><label for="optionsRadios2_6_3">×</label></span>
                            </dd>
                            <dt>指示された作業が完了次第、期限前でも報告を行い、報告完了を以って作業完了と考える</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_7" id="optionsRadios2_7_1" value="0"><label for="optionsRadios2_7_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_7" id="optionsRadios2_7_2" value="1" ><label for="optionsRadios2_7_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_7" id="optionsRadios2_7_3" value="2" ><label for="optionsRadios2_7_3">×</label></span>
                            </dd>
                            <dt>問題に気づいたら、大小、誰が発生させたかに関わらず、速やかに報告する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_8" id="optionsRadios2_8_1" value="0" ><label for="optionsRadios2_8_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_8" id="optionsRadios2_8_2" value="1"><label for="optionsRadios2_8_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_8" id="optionsRadios2_8_3" value="2" ><label for="optionsRadios2_8_3">×</label></span>
                            </dd>
                            <dt>遅刻・早退・欠席する場合は、事前に連絡をする。計画外の場合も、分かり次第、速やかに連絡する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_9" id="optionsRadios2_9_1" value="0"><label for="optionsRadios2_9_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_9" id="optionsRadios2_9_2" value="1" ><label for="optionsRadios2_9_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_9" id="optionsRadios2_9_3" value="2" ><label for="optionsRadios2_9_3">×</label></span>
                            </dd>
                            <dt>不安要素があるなど、問題が発生しそうな場合、早めに相談する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_10" id="optionsRadios2_10_1" value="0" ><label for="optionsRadios2_10_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_10" id="optionsRadios2_10_2" value="1" ><label for="optionsRadios2_10_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_10" id="optionsRadios2_10_3" value="2"><label for="optionsRadios2_10_3">×</label></span>
                            </dd>
                            <dt>15分以上考えても分からない場合や、作業を進める手が止まってしまっている場合、相談する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_11" id="optionsRadios2_11_1" value="0"><label for="optionsRadios2_11_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_11" id="optionsRadios2_11_2" value="1" ><label for="optionsRadios2_11_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios2_11" id="optionsRadios2_11_3" value="2" ><label for="optionsRadios2_11_3">×</label></span>
                            </dd>
                        </dl>
                    </div>
                </div>

                <!-- group3 -->
                <div class="panel panel-primary">
                    <div class="panel-heading" id="group3">コミュニケーション</div>
                    <div class="panel-body">
                        <dl>
                            <dt>口癖、流行語、下品な表現はやめ、正しい言葉遣い(敬語、謙譲語、丁寧語を適切に使い分けるなど)で話す</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_1" id="optionsRadios3_1_1" value="0"><label for="optionsRadios3_1_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_1" id="optionsRadios3_1_2" value="1" ><label for="optionsRadios3_1_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_1" id="optionsRadios3_1_3" value="2" ><label for="optionsRadios3_1_3">×</label></span>
                            </dd>
                            <dt>お客様と会話するときは、自社の上司・先輩の名前は呼び捨てる</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_2" id="optionsRadios3_2_1" value="0" ><label for="optionsRadios3_2_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_2" id="optionsRadios3_2_2" value="1"><label for="optionsRadios3_2_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_2" id="optionsRadios3_2_3" value="2" ><label for="optionsRadios3_2_3">×</label></span>
                            </dd>
                            <dt>課長以上の役職者は適切な敬称をつけて呼ぶ</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_3" id="optionsRadios3_3_1" value="0" ><label for="optionsRadios3_3_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_3" id="optionsRadios3_3_2" value="1" ><label for="optionsRadios3_3_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_3" id="optionsRadios3_3_3" value="2"><label for="optionsRadios3_3_3">×</label></span>
                            </dd>
                            <dt>メールの宛先・内容・添付漏れなどがないよう、見直しを実施する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_4" id="optionsRadios3_4_1" value="0" ><label for="optionsRadios3_4_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_4" id="optionsRadios3_4_2" value="1"><label for="optionsRadios3_4_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_4" id="optionsRadios3_4_3" value="2" ><label for="optionsRadios3_4_3">×</label></span>
                            </dd>
                            <dt>お客様や上司・先輩からのメールには、期日を待たず、可能な限り早く返信する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_5" id="optionsRadios3_5_1" value="0"><label for="optionsRadios3_5_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_5" id="optionsRadios3_5_2" value="1" ><label for="optionsRadios3_5_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_5" id="optionsRadios3_5_3" value="2" ><label for="optionsRadios3_5_3">×</label></span>
                            </dd>
                            <dt>名刺交換ができる(訪問した側が先に渡す。役職が上の人が先に訪問する。)</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_6" id="optionsRadios3_6_1" value="0" ><label for="optionsRadios3_6_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_6" id="optionsRadios3_6_2" value="1" ><label for="optionsRadios3_6_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_6" id="optionsRadios3_6_3" value="2"><label for="optionsRadios3_6_3">×</label></span>
                            </dd>
                            <dt>周りと協力して業務を行える</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_7" id="optionsRadios3_7_1" value="0" ><label for="optionsRadios3_7_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_7" id="optionsRadios3_7_2" value="1"><label for="optionsRadios3_7_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_7" id="optionsRadios3_7_3" value="2" ><label for="optionsRadios3_7_3">×</label></span>
                            </dd>
                            <dt>会議・ミーティング時、どんどん発言が出来る</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_8" id="optionsRadios3_8_1" value="0"><label for="optionsRadios3_8_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_8" id="optionsRadios3_8_2" value="1" ><label for="optionsRadios3_8_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios3_8" id="optionsRadios3_8_3" value="2" ><label for="optionsRadios3_8_3">×</label></span>
                            </dd>
                        </dl>
                    </div>
                </div>

                <!-- group4 -->
                <div class="panel panel-primary">
                    <div class="panel-heading" id="group4">業務態度</div>
                    <div class="panel-body">
                        <dl>
                            <dt>プロという自覚をもち、知識、経験を自ら大きくふくらませていく</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_1" id="optionsRadios4_1_1" value="0"><label for="optionsRadios4_1_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_1" id="optionsRadios4_1_2" value="1" ><label for="optionsRadios4_1_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_1" id="optionsRadios4_1_3" value="2" ><label for="optionsRadios4_1_3">×</label></span>
                            </dd>
                            <dt>同じ指摘を何度も受けないように、改善策を検討し、実施する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_2" id="optionsRadios4_2_1" value="0" ><label for="optionsRadios4_2_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_2" id="optionsRadios4_2_2" value="1"><label for="optionsRadios4_2_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_2" id="optionsRadios4_2_3" value="2" ><label for="optionsRadios4_2_3">×</label></span>
                            </dd>
                            <dt>雑用は全てに通じる基礎、進んで取り組む</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_3" id="optionsRadios4_3_1" value="0" ><label for="optionsRadios4_3_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_3" id="optionsRadios4_3_2" value="1" ><label for="optionsRadios4_3_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_3" id="optionsRadios4_3_3" value="2"><label for="optionsRadios4_3_3">×</label></span>
                            </dd>
                            <dt>どんな仕事でも積極的にチャレンジして、前向きに取り組んでいる</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_4" id="optionsRadios4_4_1" value="0" ><label for="optionsRadios4_4_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_4" id="optionsRadios4_4_2" value="1"><label for="optionsRadios4_4_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios4_4" id="optionsRadios4_4_3" value="2" ><label for="optionsRadios4_4_3">×</label></span>
                            </dd>
                        </dl>
                    </div>
                </div>

                <!-- group5 -->
                <div class="panel panel-primary">
                    <div class="panel-heading" id="group5">その他</div>
                    <div class="panel-body">
                        <dl>
                            <dt>資格への挑戦―講習で取得出来るものより挑戦する</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_1" id="optionsRadios5_1_1" value="0"><label for="optionsRadios5_1_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_1" id="optionsRadios5_1_2" value="1" ><label for="optionsRadios5_1_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_1" id="optionsRadios5_1_3" value="2" ><label for="optionsRadios5_1_3">×</label></span>
                            </dd>
                            <dt>健康管理に気を付け、規則正しい生活で無遅刻、無欠席</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_2" id="optionsRadios5_2_1" value="0" ><label for="optionsRadios5_2_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_2" id="optionsRadios5_2_2" value="1"><label for="optionsRadios5_2_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_2" id="optionsRadios5_2_3" value="2" ><label for="optionsRadios5_2_3">×</label></span>
                            </dd>
                            <dt>月１回以上対面でコーチング・BB面談を受けている</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_3" id="optionsRadios5_3_1" value="0" ><label for="optionsRadios5_3_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_3" id="optionsRadios5_3_2" value="1" ><label for="optionsRadios5_3_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_3" id="optionsRadios5_3_3" value="2"><label for="optionsRadios5_3_3">×</label></span>
                            </dd>
                            <dt>毎月、1冊は専門誌を読む（自己投資として）　※人材育成の専門誌でも可</dt>
                            <dd>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_4" id="optionsRadios5_4_1" value="0"><label for="optionsRadios5_4_1">○</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_4" id="optionsRadios5_4_2" value="1" ><label for="optionsRadios5_4_2">△</label></span>
                                <span class="hidden-radio"><input type="radio" name="optionsRadios5_4" id="optionsRadios5_4_3" value="2" ><label for="optionsRadios5_4_3">×</label></span>
                            </dd>
                        </dl>
                    </div>
                </div>

                <!-- ボタン -->
                <div class="pull-left">
                    <button type="submit" class="btn btn-primary btn-lg" formaction="./02_detail.html" >戻る</button>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-lg" formaction="./01_list.html" >完了</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<div id="footer">
</div>














<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Check Result'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="checkResult form large-9 medium-8 columns content">
    <?= $this->Form->create($checkResult) ?>
    <fieldset>
        <legend><?= __('Add Check Result') ?></legend>
        <?php
            echo $this->Form->control('check_count');
            echo $this->Form->control('check_user');
            echo $this->Form->control('check_date');
            echo $this->Form->control('check_item');
            echo $this->Form->control('check_result');
            echo $this->Form->control('created_user');
            echo $this->Form->control('modified_user');
            echo $this->Form->control('delete_flag');
            echo $this->Form->control('delete_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
