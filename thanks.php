<!DOCTYPE HTML>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N9CDWK5');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <title>完了画面</title>

    <style type="text/css">
        /* レスポンシブ表示非表示切り替え */
        @media (max-width: 768px) {
            .pc {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .sp {
                display: none;
            }
        }

        /* bodyCSS */
        .text {
            text-align: center;
            padding-top: 75px;
            margin: 20% auto 20%;
        }

        @media (max-width: 980px) {
            .text {
                padding-top: 59px;
                margin: 50% auto 90%;
            }
        }

        /* ヘッダーCSS */
        body {
            margin: 0;
            position: relative;
        }

        header {
            background: rgb(0, 0, 0);
            background: linear-gradient(90deg, rgb(0, 0, 0) 31%, rgb(5, 127, 174) 100%);
            height: 75px;
            position: fixed;
            top: 0;
            width: 100%;
            box-shadow: 0 3px 14px rgba(255, 255, 255, 0.4);
        }

        @media (max-width: 768px) {
            header {
                height: 59px;
            }
        }

        header .header_inner {
            max-width: 980px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
        }

        @media (max-width: 980px) {
            header .header_inner {
                padding-right: 20px;
                padding-left: 20px;
            }
        }

        header .header_inner .logo_pc {
            height: 75px;
        }

        header .header_inner .logo_sp {
            height: 59px;
        }

        header .header_inner .logo_pc:hover,
        header .header_inner .logo_sp:hover {
            opacity: 0.5;
        }


        /* フッター */
        footer {
            background-color: #105C8D;
            height: 75px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        footer .copyright {
            color: #fff;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9CDWK5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ヘッダー -->
    <header>
        <div class="header_inner">
            <a class="sp" href="#">
                <img class="logo_sp" src="img/logo_sp.png" alt="">
            </a>
            <a class="pc" href="#">
                <img class="logo_pc" src="img/logo_pc.png" alt="">
            </a>
        </div>
    </header>

    <div class="text">
        <p>送信ありがとうございました。<br />
            送信は正常に完了しました。<br /><br /></p>
        <a href="https://zerokarainc.com/">トップページへ戻る&raquo;</a>
        <?php copyright(); ?>
    </div>

    <!-- フッター -->
    <footer>
        <p class="notosans copyright">© ZEROKARA CO.,LTD. All rights reserved.</p>
    </footer>


    <!--  CV率を計測する場合ここにAnalyticsコードを貼り付け -->
</body>

</html>
<?php
function copyright()
{
    echo '<a style="display:block;text-align:center;margin:15px 0;font-size:11px;color:#aaa;text-decoration:none" href="https://zerokarainc.com/" target="_blank">- 株式会社ゼロカラ -</a>';
}
?>