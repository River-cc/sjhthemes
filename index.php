<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<?php
$postargs = array(
    'posts_per_page' => 5,
    'category_name' => '首页轮播图',
    'orderby' => 'date',
    'order' => 'DESC',
);
$query1 = new WP_Query($postargs);
$n = 0;
while ($query1->have_posts()): $query1->the_post();
    ?>
								<img src="<?php echo get_the_post_thumbnail_url(null, array(160, 100)) ?>" data-target="#myCarousel" data-slide-to="<?php echo $n ?>"
								<?php if ($n == 0) {
        echo " class=\"active\"";
    }
    ?>>
							<?php
    $n++;
endwhile;
wp_reset_postdata();
?>
			</ol>
			<!-- main slider carousel items -->
			<div class="carousel-inner">
<?php
$query1 = new WP_Query($postargs);
$n = 0;

while ($query1->have_posts()): $query1->the_post();
    ?>
						<div class="<?php if ($n == 0) {
        echo "active ";
    }
    ?>item" data-slide-number="<?php echo $n ?>">
					<img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-responsive">
					<div class="carousel-caption">
					<h1><?php echo get_the_title() ?></h1>
					<hr>
					<p><?php echo get_the_excerpt() ?></p>
					</div>
					</div>
					<?php
    $n++;
endwhile;
wp_reset_postdata();
?>
			</div>
		</div>
		<div class="container content-block">
<<<<<<< Updated upstream
<a href="/?p=2151">
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index_peitu1.jpg" class="img-responsive">
				<p class="text-center peitu-title">- 缘启 -</p>
				<p class="peitu-desc">诵经会网站起源于“周日诵经会”项目，该项目在2015年初开始做的时候，是作为龙泉寺信息中心的内部学修</p>
			</div></a>
<a href="/?p=2154">
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index_peitu2.jpg" class="img-responsive">
				<p class="text-center peitu-title">- 理念 -</p>
				<p class="peitu-desc">龙泉寺一直有诵经的传统，师父起初建寺的时候就提倡大家“读诵大乘经典”，法会的时候经常诵经，也是龙泉寺的一个特色</p>
			</div></a>
<a href="/?p=2156">
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index_peitu3.jpg" class="img-responsive">
				<p class="text-center peitu-title">- 服务 -</p>
				<p class="peitu-desc">诵经会网站提供经文中的疑难字、词，电子版经文供大家预习，并提供完整的诵经仪轨、高品质诵经音视频</p>
			</div></a>
<a href="/?p=2160">
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index_peitu4.jpg" class="img-responsive">
				<p class="text-center peitu-title">- 展望 -</p>
				<p class="peitu-desc">2016年我们发愿共同转读《大佛顶首楞严经》，回向一切有情众生，皆有因缘听经闻法</p>
			</div></a>
=======

<?php
$postargs = array(
    'posts_per_page' => 4,
    'category_name' => '缘理服展',
    'orderby' => 'date',
    'order' => 'DESC',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>

					<a href="<?php echo get_the_permalink(); ?>">
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/index_peitu1.jpg" class="img-responsive">
							<p class="text-center peitu-title">- <?php echo get_the_title() ?> -</p>
							<p class="peitu-desc"><?php echo get_the_excerpt() ?></p>
						</div>
					</a>

			<?php
endwhile;
wp_reset_postdata();
?>

>>>>>>> Stashed changes
		</div>
		<div class="container-fluid content-block content-gray">
		<div class="container">
			<div class="col-md-5">
				<h2>何为诵经</h2>
				<p class="desctext">这个活动的特点是“固定”，固定在周日上午九点，固定诵经一卷。慢慢形成人的一种习惯，一种潜意识。让受众脑子里有一个固定的认识，就是每周日上午九点，龙泉寺一定在诵一卷经。做网络直播同样是这种理念，无论在天涯海角，不管是风吹雨打，只要是周日上午九点，打开一个网页就可以和大家一起诵经。就像在西方人的文化中，周日上午固定是教堂礼拜时间一样，每周日上午九点，大家都可以回归佛教信仰生活，回归传统的修行方式。</p>
				<a href="/?cat=54" class="button">进一步了解 ></a>
			</div>
			<div class="col-md-7">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/activity1.jpg">
					<h3>周日诵经会《楞严经》第三卷</h3>
					<p>时间：2016年7月24日 周日 9:00-10:40</p>
					<p>地点：见行堂</p>
					<p>YY直播：1234567</p>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/themes/twentysixteen/img/activity2.jpg">
					<h3>周日诵经会《楞严经》第四卷</h3>
					<p>时间：2016年7月24日 周日 9:00-10:40</p>
					<p>地点：见行堂</p>
					<p>YY直播：1234567</p>
				</div>
			</div>
		</div>
		</div>
		<div class="container content-block">
			<div class="col-md-5">
				<h2>感受活动现场</h2>
				<p class="desctext">这个活动的特点是“固定”，固定在周日上午九点，固定诵经一卷。慢慢形成人的一种习惯，一种潜意识。让受众脑子里有一个固定的认识，就是每周日上午九点，龙泉寺一定在诵一卷经。做网络直播同样是这种理念，无论在天涯海角，不管是风吹雨打，只要是周日上午九点，打开一个网页就可以和大家一起诵经。就像在西方人的文化中，周日上午固定是教堂礼拜时间一样，每周日上午九点，大家都可以回归佛教信仰生活，回归传统的修行方式。</p>
				<a href="#" class="button">进一步了解 ></a>
			</div>
			<div class="col-md-7">
				<div class="col-md-6">
					<img src="/wp-content/themes/twentysixteen/img/activity1.jpg">
					<h3>龙泉寺恢复为宗教活动场1</h3>
					<p>羽高 2016-6-26</p>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/themes/twentysixteen/img/activity1.jpg">
					<h3>龙泉寺恢复为宗教活动场2</h3>
					<p>羽高 2016-6-26</p>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/themes/twentysixteen/img/activity1.jpg">
					<h3>龙泉寺恢复为宗教活动场1</h3>
					<p>羽高 2016-6-26</p>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/themes/twentysixteen/img/activity1.jpg">
					<h3>龙泉寺恢复为宗教活动场2</h3>
					<p>羽高 2016-6-26</p>
				</div>
			</div>
			<div class="col-md-12">
				<hr>
			</div>
			<div class="col-md-5">
				<h2>诵经心得分享</h2>
				<p class="desctext">这个活动的特点是“固定”，固定在周日上午九点，固定诵经一卷。慢慢形成人的一种习惯，一种潜意识。让受众脑子里有一个固定的认识，就是每周日上午九点，龙泉寺一定在诵一卷经。做网络直播同样是这种理念，无论在天涯海角，不管是风吹雨打，只要是周日上午九点，打开一个网页就可以和大家一起诵经。就像在西方人的文化中，周日上午固定是教堂礼拜时间一样，每周日上午九点，大家都可以回归佛教信仰生活，回归传统的修行方式。</p>
				<a href="?cat=50" class="button">进一步了解 ></a>
			</div>
			<div class="col-md-7">
<?php
$postargs = array(
    'posts_per_page' => 4,
    'category_name' => 'songjingxinde',
    'meta_query' => array(array('key' => '_thumbnail_id')),
    'orderby' => 'date',
    'order' => 'DESC',
);
$query2 = new WP_Query($postargs);
$n = 0;
while ($query2->have_posts()): $query2->the_post();

    ?>
																								<div class="col-md-6">
																									<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(null, array(300, 183)) ?>" width="300" height="183"></a>
																									<h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
																									<p><?php echo get_post_meta(get_the_id(), 'author', true) ?> <?php the_time('Y-m-d')?></p>
																								</div>
																				<?php
endwhile;
wp_reset_postdata();
?>
			</div>
		</div>
		<div class="container-fluid content-block content-gray">
                        <div class="container content-block">
                                <div class="col-md-5">
                                        <h2>诵经所需的录音</h2>
                                        <p class="desctext">这个活动的特点是“固定”，固定在周日上午九点，固定诵经一卷。慢慢形成人的一种习惯，一种潜意识。让受众
脑子里有一个固定的认识，就是每周日上午九点，龙泉寺一定在诵一卷经。做网络直播同样是这种理念，无论在天涯海角，不管是风吹雨打，只要是周日上午九点，打开一个网页就
可以和大家一起诵经。就像在西方人的文化中，周日上午固定是教堂礼拜时间一样，每周日上午九点，大家都可以回归佛教信仰生活，回归传统的修行方式。</p>
                                        <a href="/category/default/dianzijingwen/" class="button">进一步了解 ></a>
                                </div>
                                <div class="col-md-7">
                                        <div class="booklist">
<?php
$postargs = array(
    'posts_per_page' => 8,
    'category_name' => 'dianzijingwen',
    'orderby' => 'date',
    'order' => 'DESC',
);
$query3 = new WP_Query($postargs);
$n = 0;
while ($query3->have_posts()): $query3->the_post();

    ?>

																			    <a href="<?php echo get_the_permalink(); ?>">
																			    	<div class="booktitle"><?php echo get_the_title(); ?></div>
																			    <img src="/wp-content/themes/twentysixteen/img/book.jpg"></a>
																				<?php
endwhile;
wp_reset_postdata();
?>

                                        </div>
                                </div>
                        </div>
                </div>
<?php get_footer();?>
