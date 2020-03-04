<?php $kyma_theme_options = kyma_theme_options();
$col = 12 / (int)$kyma_theme_options['footer_layout']; ?>
<!-- footer -->
<footer id="footer">
    <div class="container row_spacer clearfix">
        <div class="rows_container clearfix">
            <?php if (is_active_sidebar('footer-widget')) {
                dynamic_sidebar('footer-widget');
            } else {
                $args = array(
                    'before_widget' => '<div class="footer-widget-col col-md-' . $col . '"><div class="footer_row">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h6 class="footer_title">',
                    'after_title' => '</h6>',
                );
				the_widget('WP_Widget_Text', array('title'=>'Contact Info','text'=>'<div class="text-white">Address</div><p>東京オフィス: 〒103-0027<br>
                東京都中央区日本橋3-2-14日本橋K・Nビル4</p><p>大阪オフィス: 〒541-0044<br>
                大阪府大阪市中央区伏見町3-1-1-2206</p><div class="text-white">Hours</div><p>Monday—Friday: 9:00AM–6:00PM<br>
</p>'), $args);
				the_widget('kyma_footer_recent_posts', null, $args);
                the_widget('WP_Widget_Archives', null, $args);
                the_widget('WP_Widget_Meta', null, $args);
                
                
            } ?>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container clearfix">
            <div class="col-md-6">
                <span
                    class="footer_copy_text"><?php echo esc_attr($kyma_theme_options['footer_copyright'] . ' ' . $kyma_theme_options['developed_by_text']); ?>
                    <a href="<?php echo esc_url($kyma_theme_options['developed_by_link']); ?>"><?php echo esc_attr($kyma_theme_options['developed_by_link_text']); ?></a></span>
            </div>
            <div class="col-md-6 clearfix">
                <?php wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'container' => false,
                        'depth'          => 1,
                        'menu_class' => 'clearfix footer_menu',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->
<?php wp_footer(); ?>
</body>
</html>