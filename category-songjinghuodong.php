<?php

get_header();?>

<div class="songjing">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                何为诵经
            </h1>
            <p class="intro">
                这个活动的特点是“固定”，固定在周日上午九点，固定诵经一卷。慢慢形成人的一种习惯，一种潜意识。让受众脑子里有一个固定的认识，就是每周日上午九点，龙泉寺一定在诵一卷经。做网络直播同样是这种理念，无论在天涯海角，不管是风吹雨打，只要是周日上午九点，打开一个网页就可以和大家一起诵经。就像在西方人的文化中，周日上午固定是教堂礼拜时间一样，每周日上午九点，大家都可以回归佛教信仰生活，回归传统的修行方式。
            </p>
        </div>
    </div>
    <section>
        <div class="container">
            <ul class="tab">
                <li class="current tab-d" data-name="tab1">
                    <a><span>全部诵经活动</span></a>
                </li>
                <li class="tab-d" data-name="tab2">
                    <a><span>如何参加诵经活动</span></a>
                </li>
                <li class="tab-d" data-name="tab3">
                    <a href="http://yorgo.91yousheng.com/?p=2666"><span>都有哪些仪规</span></a>
                </li>
                <li class="tab-d" data-name="tab4">
                    <a>
                        <span>下载所诵经文</span>
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
                    <p>下载YY直播软件,然后搜索房间号:5822447,进入房间参与活动</p>
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
                        <div style="text-align: center;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" width="1000" alt="">
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
                                    全程票价(元)：2.50【刷卡:刷卡封顶成人4角/学生2角】
                                </p>
                                <p>
                                    线路长度(公里)：26.074
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canjia">
                    <h3>寺内路线图</h3>
                    <div>
                        <div>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div  style="display: none;" class="tab3 tab-item">
                <div style="width: 1000px;margin: 0 auto;">
                    <video width="100%"  controls="controls" src="http://ina.tju.edu.cn/images/ina2.mp4"></video>
                </div>
                <div class="yigui">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/yigui1.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>香赞</h4>
                        <p>
                            dddddddddddddddddddddddddddd
                        </p>
                    </div>
                </div>
                <div class="yigui">
                    <div class="left">
                        <h4>香赞</h4>
                        <p>
                            dddddddddddddddddddddddddddd
                        </p>
                    </div>
                    <div class="right">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/yigui1.jpg" alt="">
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

<?php get_footer();?>

