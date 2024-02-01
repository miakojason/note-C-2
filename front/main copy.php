<style>
    /* 使用flex屬性來讓容器中的box元件併成一個橫列 */
    .tags {
        display: flex;
        margin-left: 1px;
    }

    /**
 * 設定每個標籤的外型和排列
 * 利用margin:-1px讓標籤和檢籤的邊線合成一條
 ***/
    .tag {
        width: 100px;
        padding: 5px 10px;
        border: 1px solid black;
        margin-left: -1px;
        border-radius: 5px 5px 0 0;
        text-align: center;
        background-color: #ccc;
        cursor: pointer;
    }

    /**
 * 設定文章區塊的外型
 ***/
    article section {
        border: 1px solid black;
        border-radius: 0 5px 5px 5px;
        min-height: 480px;
        margin-top: -1px;
        display: none;
        padding: 15px;
    }

    /** 
 * 設定啟用中的標籤的css樣式
 ***/
    .active {
        border-bottom: 1px solid white;
        background-color: white;
    }
</style>
<div class="tags">
    <!--每個頁籤都會加上secXX的id編號-->
    <div id="sec01" class='tag active'>健康新知</div>
    <div id="sec02" class='tag'>菸害防治</div>
    <div id="sec03" class='tag'>癌症防治</div>
    <div id="sec04" class='tag'>慢性病防治</div>
</div>

<article>
    <!--每篇文章都會加上sectionXX的id編號-->
    <section id="section01" style="display:block">
        <h2>健康新知</h2>
        <!--加上標籤pre可以讓文章內容維持原本格式-->
        <pre>
缺乏運動已成為影響全球死亡率的第四大危險因子-國人無規律運動之比率高達72.2%
.......
</pre>
    </section>
    <section id="section02">
        <h2>菸害防治</h2>
        <pre>
菸害防治法規
..........
</pre>
    </section>
    <section id="section03">
        <h2>癌症防治</h2>
        <pre>
降低罹癌風險 建構健康生活型態
........
</pre>
    </section>
    <section id="section04">
        <h2>慢性病防治</h2>
        <pre>
長期憋尿 泌尿系統問題多 
...........
</pre>
    </section>
</article>
<script>
    //建立頁籤的點擊事件
    $(".tag").on('click', function() {

        //先移除全部頁籤的active class
        $(".tag").removeClass('active')

        //在點擊當下的頁籤加上active
        $(this).addClass('active')

        //透過字串取代的方式取得對應的section id
        let id = $(this).attr('id').replace("sec", 'section');

        //先隱藏全部的文章
        $("section").hide();

        //再顯示對應的文章
        $("#" + id).show();
    })
</script>