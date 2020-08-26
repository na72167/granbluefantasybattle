<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./css/reset.css"> <!-- 順番を間違えないこと -->
    <link type="text/css" rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
    ヘッダー
    </header>
    <main>
        <article class="main-screen">
            <!-- 敵側画面 -->
            <div class="enemy-wrap">
                <label class="#">
                    <!-- <img src="img/enemy_1.png"> -->
                </label>
            </div>
            <!-- 味方側画面 -->
            <div class="ally-wrap">
                <label class="ally-panel">
                    <img src="img/motion_1.png">
                </label>
                <label class="ally-panel">
                    <img src="img/motion_2.png">
                </label>
                <label class="ally-panel">
                    <img src="img/motion_3.png">
                </label>
                <label class="ally-panel">
                    <img src="img/motion_4.png">
                </label>
            </div>
        </article>
        <!-- 操作画面 -->
        <div class="operation">
            <!-- キャラクター画面 -->
            <div class="figure-wrap">
                <label class="figure-panel">
                    <img src="img/figure_1.jpg">
                </label>
                <label class="figure-panel">
                    <img src="img/figure_2.jpg">
                </label>
                <label class="figure-panel">
                    <img src="img/figure_3.jpg">
                </label>
                <label class="figure-panel">
                    <img src="img/figure_4.jpg">
                </label>
                <!-- 召喚画面 -->
                <span class="summon-bar">
                    <label class="summon-panel summon-1">
                        <img src="img/summon_2.jpg">
                    </label>
                    <label class="summon-panel summon-2">
                        <img src="img/summon_empty.jpg">
                    </label>
                    <label class="summon-panel summon-3">
                        <img src="img/summon_empty.jpg">
                    </label>
                    <label class="summon-panel summon-4">
                        <img src="img/summon_empty.jpg">
                    </label>
                    <label class="summon-panel summon-5">
                        <img src="img/summon_empty.jpg">
                    </label>
                    <label class="summon-panel summon-6">
                        <img src="img/summon_1.jpg">
                    </label>
                </span>
            </div>
        </div>
        <!-- 貢献度画面 -->
        <aside class="contribution">
            貢献度
        </aside>
    </main>
    <footer>
    フッター
    </footer>
</body>
</html>