<?php
if (!defined('ABSPATH')) {
	require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
}
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-test
 */


$button_text = $attributes['button-text'] ?? '';
$button_link = $attributes['button-link'] ?? '';
?>

<footer id="colophon" class="site-footer">
	<!-- Тут можна додати ваш кастомний контент футера -->
	<div class="footer-content">
		<div class="footer-content-inner">
			<ul>
				<li>
					<div>
						<img alt="">
						<h3>Черкаський театр Шевченка</h3>
					</div>
				</li>
				<li>
					<ul>
						<li>
							<a href="#">
								<img alt="ins">
							</a>
						</li>
						<li>
							<a href="#">
								<img alt="tiktok" >
							</a>
						</li><li>
							<a href="#">
								<img alt="facebook" >
							</a>
						</li>
					</ul>
					<h4>Ми в соцмережах!</h4>
				</li>

				<li><!-- visible only on desktop -->
					<a href="<?php echo esc_url(home_url('/about')); ?>">Про театр</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Історія</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">План али</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Документи</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Наші партнери</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Афіша</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Постери</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Список</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Репертуар</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Персоналії</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Новини</a>
					<a href="<?php echo esc_url(home_url('/history')); ?>">Контакти</a>
				</li>
				<li>
					<div>
						<img alt="clock">
						<p>Графік роботи каси:</p>
					</div>
					<ul>
						<li>
							<p>ПН</p>
							<p>9:00 - 18:00</p>
						</li>
						<li>
							<p>ВТ</p>
							<p>9:00 - 18:00</p>
						</li>
						<li>
							<p>СР-ПТ</p>
							<p>9:00 - 18:00</p>
						</li>
						<li>
							<p>СБ-НД</p>
							<p>10:00 - 16:00</p>
						</li>
						<li>
							<p>Обід</p>
							<p>13:00 - 14:00</p>
						</li>
					</ul>
					<div>
						<img alt="clock">
						<p>Початок вечірніх вистав:</p>
					</div>
					<ul>
						<li>
							<p>ПН-ПТ</p>
							<p>18:00</p>
						</li>
						<lp
							<p>СБ-НД</p>
							<p>17.00</p>
						</li>
						<li>
							<p>Початок дитячих вистав:</p>
							<p>Сб</p>
							<p>12.00</p>
						</li>
						
					</ul>
					<div>
						<img alt="wallet">
						<p>Ціна квитків від 70грн.</p>
					</div>
				</li>
				
				<li>
					<ul>
						<li>
							<img alt="">
							<p>м. Черкаси , бул. Шевченка, 234</p>
						</li>
						<li>
							<img alt="">
							<p>Директор, секретар: +38 (0472) 36-07-21</p>
						</li>
						<li>
							<img alt="">
							<p>Каса: +38 (0472) 36-07-21</p>
						</li>
						<li>
							<img alt="">
							<p>Адміністратор: +38 (0472) 36-07-18</p>
						</li>
						<li>
							<img alt="">
							<p>theatre.cherkasy@gmail.com</p>
						</li>
						<li>
							<img alt="">
							<p>Реквізити театру</p>
						</li>
					</ul>
				</li>
				<li>
					<div>
						<p>В.О. ДИРЕКТОРА-</p>
						<p>РУСЛАН ПАСКАЛОВ</p>
					</div>
					<div>
						<p>ГОЛОВНИЙ РЕЖИСЕР ТЕАТРУ:</p>
						<p>СТАНІСЛАВ САДАКЛІЄВ</p>
					</div>
				</li>
				<li>
					<div class="footer-buttons">
						<a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer-button">
							<?php esc_html_e('Купити квиток', 'text-domain'); ?>
						</a>
						<a href="<?php echo esc_url(home_url('/about')); ?>" class="footer-button">
							<?php esc_html_e('Допомога театру', 'text-domain'); ?>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>