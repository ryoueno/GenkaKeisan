<div id="mainbody">
    <div class="main-top">
        <h1 class="title" >簡単!　食品原価計算機</h1>
        <p class="explain">
            皆さん、普段買っている食品がありますよね？
            その食品の原価って気になりませんか？このサイトではそういう食品の原価をひと目でわかるサイトです。買った商品の数や値段を入力してください！
            <br>※このサイトの情報はあくまで目安程度なので地域や季節によっても価格は変動します。<br>また、全てが正しいとは限らないのでご注意ください。
        </p>
        <div class="main-content">
            <h3>食品原価計算</h3>
            <table id="main-table">
                <tr>
                    <th>品目</th>
                    <th>数</th>
                    <th>購入額</th>
                    <th>原価</th>
                    <th>差額</th>
                </tr>
            </table>

            <?php require_once('items.php');?>

        </div>
    </div>
</div>