<div id="sidebar">
    <div class="koukoku">
        広告スペース
    </div>

    <div class="yokutukau">
        
        <h3>よく使われる食品</h3>

        <ul>
            <?php foreach ($pop as $lank => $item) :?>
                <li class="item-list">
                    <span onclick="addItem(<?=$item['category_id'];?>,<?=$item['id'];?>)" >
                        <?= $item['name']; ?>
                    </span>
                </li>
            <?php endforeach;?>
        </ul>    

    </div>
</div>
