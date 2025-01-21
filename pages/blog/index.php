<?php
$title = 'Blog';
$description = 'Metax Blog & Insights';
$keywords = 'Metax, Blog, Insights';
include '../../header.php';

$xml = simplexml_load_file('blog.xml');
?>
<style>
	a {
		text-decoration: none;
		color: var(--accent);
		transition: var(--cartoon);
		outline: none;
		cursor: pointer;
	}
</style>

<section class="container mt-5 mb-3" id="top-container">
	<div class="row">
		<div class="col-12">
			<div class="blog__hero">
				<div class="container">
					<h1 class="blog__title">Metax Blog & Insights</h1>

					<div class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
						<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							<span itemprop="item">
								<span itemprop="name"><a href="<?php echo $url ?>">Home</a></span>
							</span>
							<meta itemprop="position" content="1">
						</span>
						<span class="kb_sep">»</span>
						<span class="kb_title">Blog</span>
					</div>

					<!-- <ul class="blog__category_list">
						<li class="cat-item cat-item-21"><a href="<?php echo $url ?>pages/blog/terms">Terms</a>
						</li>
						<li class="cat-item cat-item-25"><a href="<?php echo $url ?>pages/blog/insights">Insights</a>
						</li>
						<li class="cat-item cat-item-24"><a href="<?php echo $url ?>pages/contact-us">Help Center</a>
						</li>
						<li class="cat-item cat-item-17"><a
								href="<?php echo $url ?>blog/announcements/">Announcements</a>
						</li>
					</ul> -->
				</div>
			</div>


			<div class="grid-block">
				<?php
				foreach ($xml->post as $post) {
					?>

					<?php
					if ($post->type == 'featured') {
						?>
						<article id="post-7269"
							class="grid-block__item last_post post-7269 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-help-center"
							style="background-image: url('<?php echo $url . $post->image ?>');">
							<div class="last_post__info">

								<p class="last_post__time_read"><?php echo $post->readtime ?></p>

								<!-- <div class="last_post__category_list">
									<a href="<?php echo $url ?>pages/blog/<?php echo $post->category_slug ?>"
										class="last_post__category"><?php echo $post->category ?></a>
								</div> -->
							</div>

							<div class="last_post__content">
								<h2 class="last_post__title">
									<a
										href="<?php echo $url ?>pages/blog/post.php?id=<?php echo $post->slug ?>"><?php echo $post->title ?></a>
								</h2>

								<div class="last_post__excerpt">
									<p><?php echo $post->short ?></p>
								</div>

								<p class="last_post__author">
									<img alt='' src="<?php echo $url ?>assets/blog/images/author.png"
										class='avatar avatar-24 photo' style="width:40px;height:40px;" /><?php echo $post->author ?>
								</p>
							</div>
						</article>
						<?php
					} elseif ($post->type == 'post') {
						?>

						<article id="post-7634"
							class="grid-block__item post-7634 post type-post status-publish format-standard has-post-thumbnail hentry category-announcements">
							<div class="post__thumbnail">
								<img width="453" height="250" src="<?php echo $url . $post->image ?>"
									class="attachment-thumbnail size-thumbnail wp-post-image">
								<!-- <div class="category__list">
									<a href="<?php echo $url ?>pages/blog/<?php echo $post->category_slug ?>"
										class="post__category"><?php echo $post->category ?></a>
								</div> -->
							</div>

							<div class="post__content">
								<div class="post__content__top">
									<div class="post__info">
										<span class="post__date"><?php echo $post->date ?></span>
										<span class="post__time_read"><?php echo $post->readtime ?></span>
									</div>

									<h2 class="post__title">
										<a class="post__permalink"
											href="<?php echo $url ?>pages/blog/post.php?id=<?php echo $post->slug ?>"><?php echo $post->title ?></a>
									</h2>

									<div class="post__excerpt">
										<p><?php echo $post->short ?></p>
									</div>
								</div>
								<div class="post__content__bottom">
									<p class="post__author">
										<img alt='' src="<?php echo $url ?>assets/blog/images/author.png"
											class='avatar avatar-24 photo' style="width:40px;height:40px;" /><?php echo $post->author ?>
									</p>
								</div>
							</div>

						</article>

						<?php
					}
				}
				?>


				<!-- <div class="cta_form">
		<div class="cta_form__content">
			<h3 class="cta_form__title">Online banking made easy</h3>
			<p class="cta_form__desc">Achieve your own goals, one-of-a-kind approach and specific needs. We know it.</p>

			<a style="background-color: #8F27C7" class="cta_form__link" href="#" target="">
				Open Account</a>

		</div>
	</div> -->

			</div>
		</div>
	</div>
</section>

<?php
include '../../footer.php';
?>