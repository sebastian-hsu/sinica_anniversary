<?php
/**
 * The main template file.
 *
 * @package WordPress
 */

get_header();

//Include post featured slider
$tg_blog_slider_layout = kirki_get_option('tg_blog_slider_layout');

if(THEMEDEMO && isset($_GET['slider']))
{
	$tg_blog_slider_layout = $_GET['slider'];
}

if(!empty($tg_blog_slider_layout))
{
	get_template_part("/templates/template-".$tg_blog_slider_layout);
}
?>

<div class="page_content_wrapper">
    
    <div class="inner">

    	<!-- Begin main content -->
    	<div class="inner_wrapper">

    		<div class="sidebar_content">
					
<?php
if (have_posts()) : while (have_posts()) : the_post();
	$image_thumb = '';
								
	if(has_post_thumbnail(get_the_ID(), 'large'))
	{
	    $image_id = get_post_thumbnail_id(get_the_ID());
	    $image_thumb = wp_get_attachment_image_src($image_id, 'large', true);
	}
?>

<!-- Begin each blog post -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post_wrapper">
	    
	    <div class="post_content_wrapper">
	    
	    	<?php
		    	//Check post format
		    	$post_format = get_post_format(get_the_ID());
				
				switch($post_format)
				{
					case 'quote':
			?>
					<div class="post_quote_wrapper">
						<div class="post_quote_title">
						    <?php the_content(); ?>
						</div>
						<div class="post_detail">
					        <?php the_title(); ?>
						</div>
					</div>
			<?php
					break;
					
					case 'link':
			?>
					
					<div class="post_quote_title">
					    <?php the_content(); ?>
					    <div class="post_detail">
				    		<span class="post_info_date">
					    		<?php echo date_i18n(THEMEDATEFORMAT, get_the_time('U')); ?>
				    		</span>
							<span class="post_info_comment">
				    	    	<a href="<?php comments_link(); ?>"><?php comments_number(esc_html__('No Comment', 'photography-translation'), esc_html__('1 Comment', 'photography-translation'), esc_html__('% Comments', 'photography-translation')); ?></a>
				        	</span>
						</div>
					</div>
			<?php
					break;
					
					default:
		    ?>
		    
			    <div class="post_header">
			    	<div class="post_header_title">
			    		<div class="post_info_cat">
						    <?php
						    	//Get Post's Categories
						    	$post_categories = wp_get_post_categories($post->ID);
						    	
						    	$count_categories = count($post_categories);
								$i = 0;
						    	
						    	if(!empty($post_categories))
						    	{
						        	foreach($post_categories as $key => $c)
						        	{
						        		$cat = get_category( $c );
						    ?>
						        	<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
						    <?php
						    			if(++$i != $count_categories) 
						    			{
						    				echo '&nbsp;/&nbsp;';
						    			}
						        	}
						        }
						    ?>
				    	</div>
				    	<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
				    	<hr class="title_break"/>
				    	<div class="post_detail">
				    		<span class="post_info_date">
					    		<?php echo date_i18n(THEMEDATEFORMAT, get_the_time('U')); ?>
				    		</span>
						</div>
			    	</div>
			    </div>
		    <?php
		    		break;
		    	}
			?>
	    
	    	<?php
			    //Get post featured content
			    $post_ft_type = get_post_meta(get_the_ID(), 'post_ft_type', true);
			    
			    switch($post_ft_type)
			    {
			    	case 'Image':
			    	default:
			        	if(!empty($image_thumb))
			        	{
			        		$small_image_url = wp_get_attachment_image_src($image_id, 'photography-blog', true);
			?>
			
			    	    <div class="post_img static">
			    	    	<a href="<?php the_permalink(); ?>">
			    	    		<?php the_post_thumbnail('photography-blog'); ?>
				            </a>
			    	    </div>
			
			<?php
			    		}
			    	break;
			    	
			    	case 'Vimeo Video':
			    		$post_ft_vimeo = get_post_meta(get_the_ID(), 'post_ft_vimeo', true);
			?>
			    		<?php echo do_shortcode('[tg_vimeo video_id="'.$post_ft_vimeo.'" width="670" height="377"]'); ?>
			    		<br/>
			<?php
			    	break;
			    	
			    	case 'Youtube Video':
			    		$post_ft_youtube = get_post_meta(get_the_ID(), 'post_ft_youtube', true);
			?>
			    		<?php echo do_shortcode('[tg_youtube video_id="'.$post_ft_youtube.'" width="670" height="377"]'); ?>
			    		<br/>
			<?php
			    	break;
			    	
			    	case 'Gallery':
			    		$post_ft_gallery = get_post_meta(get_the_ID(), 'post_ft_gallery', true);
			?>
			    		<?php echo do_shortcode('[tg_gallery_slider gallery_id="'.$post_ft_gallery.'" width="670" height="270"]'); ?>
			    		<br/>
			<?php
			    	break;
			    	
			    } //End switch
			?>
					
			    <br class="clear"/>
			    
			    <?php
			    	$tg_blog_display_full = kirki_get_option('tg_blog_display_full');
			    	
			    	if(!empty($tg_blog_display_full))
			    	{
			    		the_content();
			    	}
			    	else
			    	{
			    		the_excerpt();
			    	}
			    ?>
			    <div class="post_button_wrapper">
			    	<a class="readmore" href="<?php the_permalink(); ?>"><?php echo esc_html_e('Continue Reading', 'photography-translation' ); ?></a>
			    </div>
			
	    </div>
	    
	</div>

</div>
<br class="clear"/>
<!-- End each blog post -->

<?php endwhile; endif; ?>

	    	<?php
	    	if($wp_query->max_num_pages > 1)
			{
				if (function_exists("photography_pagination")) 
				{
				    photography_pagination($wp_query->max_num_pages);
				}
				else
				{
				?>
				    <div class="pagination"><p><?php posts_nav_link(' '); ?></p></div>
				<?php
				}
			?>
			<div class="pagination_detail">
		     	<?php
		     		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		     	?>
		     	<?php esc_html_e('Page', 'photography-translation' ); ?> <?php echo esc_html($paged); ?> <?php esc_html_e('of', 'photography-translation' ); ?> <?php echo esc_html($wp_query->max_num_pages); ?>
		     </div>
		     <?php
		     }
		     ?>
    		
			</div>
    	
    		<div class="sidebar_wrapper">
    		
    			<div class="sidebar_top"></div>
    		
    			<div class="sidebar">
    			
    				<div class="content">

    					<?php 
						if (is_active_sidebar('page-sidebar')) { ?>
		    	    		<ul class="sidebar_widget">
		    	    		<?php dynamic_sidebar('page-sidebar'); ?>
		    	    		</ul>
		    	    	<?php } ?>
    				
    				</div>
    		
    			</div>
    			<br class="clear"/>
    	
    			<div class="sidebar_bottom"></div>
    		</div>
    		<br class="clear"/>
    	</div>
    <!-- End main content -->

</div>
</div>
<?php get_footer(); ?>