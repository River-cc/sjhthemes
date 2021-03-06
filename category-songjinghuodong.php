<?php

get_header();?>

    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=HYmuSKypsbsaUheHOfd4FicNMlHnHjRE"></script>
<style>
    .songjing .nav h1.title{
        font-size: 60px;
    }
</style>
<div class="songjing">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                如何诵经
            </h1>
            <p class="intro text-center">
                代佛说法，众生欢喜，天神护佑。诵经是因，成佛是果！
            </p>
        </div>
    </div>
    <section>
        <div class="container">
            <ul class="tab">
                <li class="current tab-d" data-name="tab1" style="cursor:pointer;">
                    <a><span>全部诵经活动</span></a>
                </li>
                <li class="tab-d" data-name="tab2" style="cursor:pointer;">
                    <a><span>如何参加诵经活动</span></a>
                </li>
                <li class="tab-d" data-name="tab3" style="cursor:pointer;">
                    <a><span>都有哪些仪规</span></a>
                </li>
                <li class="tab-d" data-name="tab4" style="cursor:pointer">
                    <a>
                        <span>诵经会往昔周报</span>
                    </a>
                </li>
            </ul>
            <div class="tab1 tab-item">
                <div class="currentActivity">
                    <ul class="activities">
            <?php
$postargs = array(
    'posts_per_page' => 2,
    'category_name' => 'songjinghuodong',
    'orderby' => 'date',
    'order' => 'desc',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
					  <li class="item">
					         <a href="<?php echo get_the_permalink(); ?>">
					            <img src="<?php echo get_the_post_thumbnail_url(null, array(300, 183)) ?>">
					          </a>
					            <h4><?php echo get_the_title() ?></h4>
					            <p>时间：<?php echo get_post_meta(get_the_id(), 'activitytime', true) ?></p>
					            <p>地点：<?php echo get_post_meta(get_the_id(), 'activitylocation', true) ?></p>
					            <p>YY直播：<?php echo get_post_meta(get_the_id(), 'yychannel', true) ?></p>
					   </li>
																																  <?php
endwhile;
wp_reset_postdata();
?>
                </ul>
            </div>

        </div>
<div style="display: none;" class="tab2 tab-item">
    <div class="canjia">
        <h3>如何参加活动</h3>
        <p>下载YY直播软件,然后搜索房间号:58220447,进入房间参与活动</p>
        <ul>
            <li>
                <div class="">
                    <a class="app-win app" target="_blank" href="http://yy.com/yy8/">
                    </a>
                    <a class="down" target="_blank" href="http://yy.com/yy8/">
                        window版下载
                    </a>
                </div>
            </li>
            <li>
                <div class="">
                    <a class="app-mac app" target="_blank" href="http://mac.yy.com">
                    </a>
                    <a class="down" target="_blank" href="http://mac.yy.com">
                        Mac版下载
                    </a>
                </div>
            </li>
            <li>
                <div class="">
                    <a class="app-phone app" target="_blank" href="http://3g.yy.com/v3/">
                    </a>
                    <a class="down" target="_blank" href="http://3g.yy.com/v3/">
                        手机版下载
                    </a>
                </div>
            </li>
            <li>
                <div class="">
                    <a class="app-hd app" target="_blank" href="http://pad.yy.com">
                    </a>
                    <a class="down" target="_blank" href="http://pad.yy.com">
                        HD版下载
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div class="canjia">
        <h3>前往龙泉寺</h3>
        <div>
            <div id="map" style="width:100%;height:400px;">
            </div>
            <div style="width: 1000px;margin: 0 auto;overflow: auto;">
                <div class="left">
                    <h5>乘车路线:</h5>
                    <p>
                        1、颐阳公路（颐和园沿京密引水渠西岸，经温泉，按路标行驶</p>
                    <p>
                        2、八达岭高速-北安河出口-北清路往西-京密引水渠往北按路标行驶
                    </p>
                    <p>
                        3、北五环－肖家河桥－经农大至永丰路—左拐北清路往西-京密引水渠往北按路标行驶
                    </p>
                </div>
                <div class="right">
                    <h5>乘车路线:</h5>
                    <p>
                        乘346路公交车至终点凤凰岭站下车即可，346公交车起迄站 (颐和园—凤凰岭)
                    </p>
                    <p>
                        起点站首末车时间：6：00-22：30，终点站首末车时间：5：20-21：30
                    </p>
                    <p>
                        线路长度(公里)：26.074
                    </p>
                </div>
            </div>
            <div style="display: none;" class="tab4 tab-item">
                <ul class="book">
                   <?php
wp_reset_postdata();
$postargs = array(
    'posts_per_page' => 10,
    'category_name' => 'download_lection',
    'orderby' => 'date',
    'paged' => get_query_var('paged'),
    'order' => 'DESC',
);
$query = new WP_Query($postargs);
$n = 0;
while ($query->have_posts()): $query->the_post();?>
				        <li>
				            <div class="cover">
				                <a href="<?php echo get_the_permalink(); ?>">
				                    <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200">
				                </a>
				                <a href="<?php echo get_post_meta(get_the_id(), '下载', true) ?>" class="downBtn">下载</a>
				            </div>
				            <div class="info">
				                <a href="<?php echo get_the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
				                <p>
				                    <span class="title">全名:</span>
				                    <span><?php echo get_post_meta(get_the_id(), '全名', true) ?></span>
				                </p>
				                <p>
				                    <span class="title">又名:</span>
				                    <span><?php echo get_post_meta(get_the_id(), '又名', true) ?></span>
				                </p>
				                <p>
				                    <span class="title">摘要:</span>
				                    <span style="display: inline-block;float: right;width: 660px;">
				<?php echo get_the_excerpt() ?>
				</span>
				                </p>
				            </div>
				        </li>
				        <?php
endwhile;
wp_reset_postdata();
?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div  style="display: none;" class="tab3 tab-item">
<!--    <div style="width: 1000px;margin: 0 auto;">-->
<!--        <video width="100%"  controls="controls" src="http://ina.tju.edu.cn/images/ina2.mp4"></video>-->
<!--    </div>-->
<!--    <div class="yigui">-->
<!--        <div class="left">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/yigui1.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="right">-->
<!--            <h4>香赞</h4>-->
<!--            <p>-->
<!--                dddddddddddddddddddddddddddd-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="yigui">-->
<!--        <div class="left">-->
<!--            <h4>香赞</h4>-->
<!--            <p>-->
<!--                dddddddddddddddddddddddddddd-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="right">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/yigui1.jpg" alt="">-->
<!--        </div>-->
<!--    </div>-->
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h1>楞严经诵经仪轨</h1>
            <p>作者： / 时间：2016-11-07</p>
            <div class="content-text">
                <p style="text-align: left;"><strong>炉香赞</strong></p>
                <p style="text-align: left;"><strong>炉香乍爇 法界蒙熏 诸佛海会悉遥闻</strong></p>
                <p style="text-align: left;"><strong>随处结祥云 诚意方殷 诸佛现全身</strong></p>
                <p style="text-align: left;"><strong>南无香云盖菩萨摩诃萨(三称) </strong></p>
                <p style="text-align: left;"><strong>南无本师释迦摩尼佛（三称）</strong></p>
                <p style="text-align: left;"><strong>无上甚深微妙法 百千万劫难遭遇</strong></p>
                <p style="text-align: left;"><strong>我今见闻得受持 愿解如来真实义</strong></p>
                <p style="text-align: left;"><strong>南无楞严会上佛菩萨（三称）</strong></p>
                <p><strong>观想文</strong></p>
                <p><strong>请观想：佛陀金色身八尺放金光，吾等心口有心炉点心香，心香飘渺，香云朵朵供在佛前。香云上有青黄赤白四色莲花，放青黄赤白四色光芒。莲花四边簇有梅花、兰花、桂花、牡丹、芍药，种种高贵典雅之花。上有烛台，一对对一排排，光明照耀。空中悬挂庄严之宫灯，亦是一对对一排排，光明照耀。上方天雨曼陀罗花，大地四方皆现真金之色，平坦广阔，金光闪耀。观想吾等头上有顶光，身披袈裟，圆顶方袍。前有师长、祖父母及古今高僧大德，带领吾等诵经；右边是父亲，左边是母亲，满面慈祥，白发苍苍，与吾等一同诵经；身后是六道一切有情众生，随从吾等诵经。吾等安坐此清净庄严之境，心生欢喜、庆幸、感恩，至诚皈依。对面上方虚空之中，本师释迦世尊及楞严会上诸佛菩萨，以大慈悲眼注视吾等，与面前之大佛顶首楞严经，同放甘露光明，从吾等顶门而入，涤除吾等无始以来所积一切罪垢。</strong></p>
                <p><strong>（正诵）</strong></p>
                <p><b>南无楞严会上佛菩萨（三称）</b></p>
                <p><strong>忏悔发愿（读）</strong></p>
                <p><strong>至心忏悔（某甲）与一切众生。从无始以来。迷失真心。流转生死。六</strong><strong>根罪障无量无边。圆妙无上佛乘。无以开解。一切所愿。不得现前。我</strong><strong>今持诵大佛顶首楞严经。以此善根。发露黑恶。过去现在未来。三业所</strong><strong>造。无边重罪。皆得消灭。身心清净。惑障蠲除。福智庄严。净因增长。</strong><strong>自他行愿。速得圆成。愿诸如来。常在说法。所有功德。起随喜心。回</strong><strong>向菩提。证常乐果。</strong></p>
                <p><strong>（现场回向）</strong></p>
                <p><strong>诵经功德殊胜行  无边胜福皆回向  普愿沉溺诸众生</strong></p>
                <p><strong>速往无量光佛刹  十方三世一切佛  一切菩萨摩诃萨</strong></p>
                <p><strong>摩诃般若波罗蜜</strong></p>
            </div>

        </div>
    </div>
<div style="display: none;" class="tab4 tab-item">
    <ul class="book">
        <?php
wp_reset_postdata();
$postargs = array(
    'posts_per_page' => 10,
    'category_name' => 'download_lection',
    'orderby' => 'date',
    'paged' => get_query_var('paged'),
    'order' => 'DESC',
);
$query = new WP_Query($postargs);
$n = 0;
while ($query->have_posts()): $query->the_post();?>
																        <li>
																            <div class="cover">
																                <a href="<?php echo get_the_permalink(); ?>">
																                    <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200">
																                </a>
																                <a href="<?php echo get_post_meta(get_the_id(), '下载', true) ?>" class="downBtn">下载</a>
																            </div>
																            <div class="info">
																                <a href="<?php echo get_the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
																                <p>
																                    <span class="title">全名:</span>
																                    <span><?php echo get_post_meta(get_the_id(), '全名', true) ?></span>
																                </p>
																                <p>
																                    <span class="title">又名:</span>
																                    <span><?php echo get_post_meta(get_the_id(), '又名', true) ?></span>
																                </p>
																                <p>
																                    <span class="title">摘要:</span>
																                    <span style="display: inline-block;float: right;width: 660px;">
																<?php echo get_the_excerpt() ?>
																</span>
																                </p>
																            </div>
																        </li>
																        <?php
endwhile;
wp_reset_postdata();
?>
    </ul>
</div>
        </div>
    </section>
</div>
    <script>


    $(window).load(function(){
        var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
        var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
        var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL});
        var map = new BMap.Map("map");
        var point = new BMap.Point(116.093962,40.109155);
        map.centerAndZoom(point, 14);
        var marker = new BMap.Marker(point);
        map.addOverlay(marker);
        marker.setAnimation(BMAP_ANIMATION_BOUNCE);
        map.panBy($('.container').width()/2,$('#map').height()/2);
        map.addControl(top_left_control);
        map.addControl(top_left_navigation);
        map.addControl(top_right_navigation);
    });

    </script>
<?php get_footer();?>

