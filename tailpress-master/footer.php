
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	<section style="background-color:#0C8097;" class="bg-no-repeat bg-cover bg-center">
		<div class="container mx-auto max-w-screen-xl items-center py-10 flex flex-row w-full justify-between py-6">
			<?php if( get_theme_mod('footer_logo_link') ): ?>
				<div>
					<img src="<?php echo get_theme_mod('footer_logo_link') ?>" />
				</div>
			<?php endif; ?>
			<?php if( get_theme_mod('footer_info') ): ?>
                <div>
					<p class="text-white"><?php echo get_theme_mod('footer_info') ?></p>
				</div>
            <?php endif; ?>	
		</div>
	</section>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
