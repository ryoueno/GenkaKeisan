<script>
    $(function(){
        $(".item-cat dt").on("click", function() {
            $(this).next().slideToggle();
        });
    });

    var items = <?php echo json_encode($items, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
    console.log(items);

    function addItem(cat_id,id){
        $.ajax({
            type: "POST",
            url : "add_view.php",
            data: {id:id},
            success:function(){
                alert("食品ID："+id+" にポイントを追加したぜよ。");
            },
            error:function(){
                //通信失敗時の処理
                alert("missed");
            }
        });
    }
</script>
<style>
li{
    list-style: none;
}
.item-cat dd{
    display:none;
    overflow: hidden;
    margin:0;
}

.item-list .item-left{
    float:left;
    width:49%;
    text-align:left;
}

.item-list .item-right{
    float:right;
    width:49%;
    text-align:left;
}

.item-list dt{
    width: 100%;
    text-align: center;
    margin-bottom: 25px;
    height: 35px;
    font-size: 120%;
    line-height: 35px;
    font-weight: bold;
    color: #333;
    border: solid 1px #66FF88;
    background-color: #99FFCC;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    background-image: url(/img/btn-mark.png);
    background-repeat: no-repeat;
    background-size: 30px;
    background-position: 15px 10px;
}

.item-list span{
    text-align: center;
    display: block;
    width: 48%;
    margin: 5px 0px;
    border: solid 1px #0f0;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    color: #333;
}

.item-list span:hover{
    background-color:#66FF88;
    border: 1px solid #cc0;
    color:#000;
}

.item-list span.r0{
    float:left;
}

.item-list span.r1{
    float:right;
}

</style>
<div class="items">
    <ul class="item-list">
        <?php $row_num = floor(count($items)/2);?>
        <div class="item-left">
            <?php $count = 0;?>
            <?php foreach ($items as $key => $cat) :?>
                <li class="list">
                    <dl class="item-cat"> 
                        <dt><?= $cat['name']; ?></dt>
                        <dd>
                            <?php $cnt = 0;?>
                            <?php foreach ($cat['items'] as $id => $item) :?>
                                <span onclick="addItem(<?=$key;?>,<?=$id;?>)" class="r<?=$cnt%2;?>"><?= $item['name'];?></span>
                                <?php $cnt++; ?>
                            <?php endforeach;?>
                        </dd>
                    </dl>
                </li>
                <?php $count++;?>
                <?php if ($row_num <= $count)break;?>
            <?php endforeach;?>
        </div>

        <div class="item-right">
            <?php $count = 0;?>
            <?php foreach ($items as $key => $cat) :?>
                <?php $count++;?>
                <?php if ($row_num >= $count)continue;?>
                <li class="list">
                    <dl class="item-cat"> 
                        <dt><?= $cat['name']; ?></dt>
                        <dd>
                            <?php $cnt = 0;?>
                            <?php foreach ($cat['items'] as $id => $item) :?>
                                <span onclick="addItem(<?=$key;?>,<?=$id;?>)" class="r<?=$cnt%2;?>"><?= $item['name'];?></span>
                                <?php $cnt++; ?>
                            <?php endforeach;?>
                        </dd>
                    </dl>
                </li>
            <?php endforeach;?>
        </div>

    </ul>
</div>
