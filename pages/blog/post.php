<?php



$postTitle = $_GET['id']; // Get the post title from the URL

$xml = simplexml_load_file('blog.xml');
$posts = $xml->xpath("//post[slug='$postTitle']");


if (!$posts) {
	die("Post not found");
}

$post = $posts[0];

$title = $post->title;
$description = $post->short;
$keywords = 'Metax, Blog, Insights';

include '../../header.php';
?>

<style>
	h2 {
		margin-bottom: 20px;
	}

	p {
		margin-bottom: 30px;
	}

	img {
		margin-bottom: 30px;
	}

	.inner_post__socials {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
		padding: 20px;
		background: var(--violet-light);
		border-radius: 32px;
		margin-top: 50px;
	}

	@media (max-width: 1419px) {
		.inner_post__socials__title {
			margin-bottom: 0;
		}
	}

	.inner_post__socials__title {
		font-weight: 600;
		font-size: 24px;
		line-height: 130%;
		color: #1F1E1F;
		text-align: center;
	}

	.inner_post__socials .share_links {
		display: flex;
		justify-content: space-between;
	}

	ul {
		padding: 0;
		margin: 0;
		list-style: none;
	}

	.inner_post__socials .share_links li {
		display: block;
		font-weight: 400;
		font-size: 20px;
		line-height: 160%;
		color: #8F27C7;
		cursor: pointer;
	}

	/* @media (max-width: 1419px) {
		.inner_post__navigation {
			margin-top: 80px;
			padding-right: var(--bs-gutter-x, .75rem);
			padding-left: var(--bs-gutter-x, .75rem);
		}
	}

	.inner_post__navigation {
		display: flex;
		justify-content: space-between;
		margin: 2rem 0;
	}

	.inner_post__navigation>* {
		display: inline-flex;
		align-items: center;
		flex-basis: 33.3333333333%;
		width: 33.3333333333%;
	}

	.inner_post__navigation .nav-all-posts {
		justify-content: center;
	}

	.inner_post__navigation>* {
		display: inline-flex;
		align-items: center;
		flex-basis: 33.3333333333%;
		width: 33.3333333333%;
	}

	.inner_post__navigation .nav-next {
		justify-content: flex-end;
	} */

	.cta_form {
		background: url(https://metaxpayments.com/assets/images/blog-bg.png) no-repeat center left;
		grid-column: span 3;
		width: 100%;
		margin: 50px auto 80px;
		border-radius: 32px;
	}

	.cta_form__content {
		padding: 50px;
	}

	.cta_form__title {
		max-width: 400px;
		margin-bottom: 10px;
		font-weight: 500;
		font-size: 56px;
		line-height: 68px;
		color: #1F1E1F;
	}

	.cta_form__desc {
		max-width: 450px;
		margin-bottom: 40px;
		padding: 0;
		font-weight: 400;
		font-size: 20px;
		line-height: 32px;
		color: #1F1E1F;
	}

	.cta_form__link {
		display: inline-block;
		padding: 15px 24px;
		background: var(--accent);
		border-radius: 8px;
		font-weight: 600;
		font-size: 24px;
		line-height: 29px;
		text-transform: capitalize;
		color: var(--white);
	}

	a {
		text-decoration: none;
		color: var(--accent);
		/* transition: var(--cartoon); */
		outline: none;
		cursor: pointer;
	}

	.list-group-item{
		background: none;
    border: none;
	
	}
</style>


<section class="container mt-5 mb-3" id="top-container">
	<div class="row">
		<div class="col-12">
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
							href="<?php echo $url ?>pages/blog/post.php?id=<?php echo $post->slug ?>/"><?php echo $post->title ?></a>
					</h2>

					<div class="last_post__excerpt">
						<p><?php echo $post->short ?></p>
					</div>

					<p class="last_post__author">
						<img alt='' src="<?php echo $url ?>assets/blog/images/author.png" class='avatar avatar-24 photo' style="width:40px;height:40px;"/><?php echo $post->author ?>
					</p>
				</div>
			</article>
		</div>
	</div>

	<div class="container">
		<div class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<span>
				<span>
					<span><a href="<?php echo $url?>">Home</a></span>
				</span>
			</span>
			<span class="kb_sep">»</span>
			<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="<?php echo $url?>pages/blog/" itemprop="item">
					<span itemprop="name">Blog</span>
				</a>
				<meta itemprop="position" content="1">
			</span>
			<span class="kb_sep">»</span>
			<!-- <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="https://transferra.uk/blog/insights/" itemprop="item">
					<span itemprop="name">Insights</span></a>
				<meta itemprop="position" content="2">
			</span> -->
			<!-- <span class="kb_sep">»</span> -->

			<span class="kb_title"><?php echo $post->title ?></span>

		</div>
	</div>

	<!-- <div class="row g-3">
		<div class="col-sm-12 col-md-3">
			<div style="background-color:white; border-radius:20px;justify-contents:center;">
				<h5 style="margin:20px 10px 20px 10px;padding:20px 10px 20px 10px;text-align:center;">Table of Contents
				</h5>
				<div>
				
				</div>
			</div>
		</div>
	</div> -->

	<div class="row p-5">
		<div class="col-12" style="object-fit:contain">
			<?php echo $post->content ?>
		</div>
		<div class="inner_post__socials">
			<h3 class="inner_post__socials__title">Share to social media</h3>

			<ul class="share_links">
				<li class="social-share twitter" style="margin-right:10px;"><a href="https://twitter.com/@MetaXPayments" target="__blank">Twitter</a></li>
				<li class="social-share linkedin" style="margin-right:10px;"><a href="https://www.linkedin.com/company/metaxpayments" target="__blank">LinkedIn</a></li>
				<li class="social-share facebook"><a href="https://facebook.com/MetaXPayments" target="__blank">Facebook</a></li>
			</ul>
		</div>

		<!-- <div class="inner_post__navigation">
			<div class="nav-previous">
				<a href="#" rel="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M25 27.9412L23.9474 29L15 20L23.9474 11L25 12.0588L17.1053 20L25 27.9412Z"
							fill="#1D1B1F"></path>
					</svg><span>Prev Post<span></span></span></a>
			</div>
			<div class="nav-all-posts"><a href="/blog/">View All</a></div>
			<div class="nav-next">
			</div>
		</div> -->

		<div class="cta_form">
			<div class="col-sm-12 col-md-6" style="margin:50px 0px 30px 50px;">
				<h3 class="cta_form__title">Online banking made easy</h3>
				<p class="cta_form__desc">Achieve your own goals, one-of-a-kind approach and specific needs. We know it.
				</p>

				<a style="background-color: #8F27C7" class="cta_form__link" href="<?php echo $open_account_url ?>" target="__blank">
					Open Account</a>

			</div>
		</div>


	</div>

	<!-- <div class="row p-5">
	<div class="row"style="background-color: #f9f0ff; padding:20px 10px 20px 10px;">
	<div class="col-sm-12 col-md-9">
			<h3 class="">Share to social media</h3>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<p>Twitter</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<p>Linkedin</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<p>Facebook</p>
				</div>
			</div>
		</div>
	</div>
	</div> -->



</section>


<?php
include '../../footer.php';
?>