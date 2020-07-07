<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package asu-web-standards-2020
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<footer role="contentinfo">
	<div class="wrapper" id="wrapper-endorsed-footer">
		<div class="container" id="endorsed-footer">
			<div class="row">

				<div class="col-md" id="endorsed-logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/asu_university_vert_maroongold.png" alt="ASU University Technology Office Arizona State University." />
				</div>

				<div class="col-md" id="social-media">
					<nav class="nav" aria-label="Social Media">
						<a class="nav-link" href="#"><span title="Facebook Social Media Icon" class="fab fa-facebook-square"></span></a>
						<a class="nav-link" href="#"><span title="Twitter Social Media Icon" class="fab fa-twitter-square"></span></a>
						<a class="nav-link" href="#"><span title="LinkedIn Social Media Icon" class="fab fa-linkedin"></span></a>
						<a class="nav-link" href="#"><span title="Instagram Social Media Icon" class="fab fa-instagram-square"></span></a>
						<a class="nav-link" href="#"><span title="YouTube Social Media Icon" class="fab fa-youtube-square"></span></a>
					</nav>
				</div> <!-- social-media -->

			</div> <!-- row -->
		</div> <!-- endorsed-footer -->
	</div> <!-- wrapper-endorsed-footer -->

	<div class="wrapper" id="wrapper-footer-columns">
		<nav aria-label="Footer">
			<div class="container" id="footer-columns">
				<div class="row">

					<div class="col-xl" id="info-column">
						<h5>Complete Name of College, School or Unit Title Should Go Here</h5>
						<p class="contact-link"><a href="#">Contact Us</a></p>
						<p class="contribute-button"><a href="#" class="btn btn-gold">Contribute</a></p>
					</div>

					<div class="col-xl flex-footer">
						<div class="card card-foldable desktop-disable-xl">
							<div class="card-header">
								<h5>
									<a id="footlink-header-two" class="collapsed" data-toggle="collapse" href="#footlink-two" role="button" aria-expanded="false" aria-controls="footlink-two">Second Column
										<span class="fas fa-chevron-up"></span>
									</a>
								</h5>
							</div>
							<div id="footlink-two" class="collapse card-body" aria-labelledby="footlink-header-two">
								<a class="nav-link" href="#" title="link">Biological and Health Systems Computing</a>
								<a class="nav-link" href="#" title="link">Informatics and Decision Systems Electrical</a>
								<a class="nav-link" href="#" title="link">Computer and Energy Matter</a>
								<a class="nav-link" href="#" title="link">Transport and Energy Sustainability and the Built Environment</a>
								<a class="nav-link" href="#" title="link">The Polytechnic School</a>
							</div>
						</div>
					</div>

					<div class="col-xl flex-footer">
						<div class="card card-foldable desktop-disable-xl">
							<div class="card-header">
								<h5>
									<a id="footlink-header-three" class="collapsed" data-toggle="collapse" href="#footlink-three" role="button" aria-expanded="false" aria-controls="footlink-three">Student Information
										<span class="fas fa-chevron-up"></span>
									</a>
								</h5>
							</div>
							<div id="footlink-three" class="collapse card-body" aria-labelledby="footlink-header-three">
								<a class="nav-link" href="#" title="link">Student Organization</a>
								<a class="nav-link" href="#" title="link">Inner Circle Newsletter</a>
								<a class="nav-link" href="#" title="link">For Your Parents</a>
								<a class="nav-link" href="#" title="link">Visit Campus</a>
								<a class="nav-link" href="#" title="link">K-12 Outreach</a>
								<a class="nav-link" href="#" title="link">Hire Our Graduates</a>
								<a class="nav-link" href="#" title="link">Hire an Intern</a>
							</div>
						</div>
					</div>

					<div class="col-xl flex-footer">
						<div class="card card-foldable desktop-disable-xl">
							<div class="card-header">
								<h5>
									<a id="footlink-header-four" class="collapsed" data-toggle="collapse" href="#footlink-four" role="button" aria-expanded="false" aria-controls="footlink-four">Column Number Four
										<span class="fas fa-chevron-up"></span>
									</a>
								</h5>
							</div>
							<div id="footlink-four" class="collapse card-body" aria-labelledby="footlink-header-four">
								<a class="nav-link" href="#" title="link">Student Organization</a>
								<a class="nav-link" href="#" title="link">Inner Circle Newsletter</a>
								<a class="nav-link" href="#" title="link">For Your Parents</a>
								<a class="nav-link" href="#" title="link">Visit Campus</a>
								<a class="nav-link" href="#" title="link">K-12 Outreach</a>
								<a class="nav-link" href="#" title="link">Hire Our Graduates</a>
								<a class="nav-link" href="#" title="link">Hire an Intern</a>
							</div>
						</div>
					</div>

					<div class="col-xl flex-footer">
						<div class="card card-foldable desktop-disable-xl">
							<div class="card-header">
								<h5>
									<a id="footlink-header-five" class="collapsed" data-toggle="collapse" href="#footlink-five" role="button" aria-expanded="false" aria-controls="footlink-five">Mambo Number Five
										<span class="fas fa-chevron-up"></span>
									</a>
								</h5>
							</div>
							<div id="footlink-five" class="collapse card-body" aria-labelledby="footlink-header-five">
								<a class="nav-link" href="#" title="link">Student Organization</a>
								<a class="nav-link" href="#" title="link">Inner Circle Newsletter</a>
								<a class="nav-link" href="#" title="link">For Your Parents</a>
								<a class="nav-link" href="#" title="link">Visit Campus</a>
								<a class="nav-link" href="#" title="link">K-12 Outreach</a>
								<a class="nav-link" href="#" title="link">Hire Our Graduates</a>
								<a class="nav-link" href="#" title="link">Hire an Intern</a>
							</div>
						</div>
					</div>

					<div class="col-xl flex-footer">
						<div class="card card-foldable desktop-disable-xl">
							<div class="card-header">
								<h5>
									<a id="footlink-header-six" class="collapsed" data-toggle="collapse" href="#footlink-six" role="button" aria-expanded="false" aria-controls="footlink-six">The Zen Master and the Hot Dog Vendor
										<span class="fas fa-chevron-up"></span>
									</a>
								</h5>
							</div>
							<div id="footlink-six" class="collapse card-body" aria-labelledby="footlink-header-six">
								<a class="nav-link" href="#" title="link">A Zen master</a>
								<a class="nav-link" href="#" title="link">Visiting New York City</a>
								<a class="nav-link" href="#" title="link">Walks up to</a>
								<a class="nav-link" href="#" title="link">A hot dog vendor and says</a>
								<a class="nav-link" href="#" title="link">Make me one with everything</a>
							</div>
						</div>
					</div>

				</div> <!-- row -->
			</div> <!-- footer-columns -->
		</nav>
	</div> <!-- wrapper-footer-columns -->

	<div class="wrapper" id="wrapper-footer-innovation">
		<div class="container" id="footer-innovation">
			<div class="row">
				<div class="col">
					<div class="d-flex footer-innovation-links">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/innovation-lockup/on-gold/200420-GlobalFooter-No1InnovationLockup.png" alt="Number one in the U.S. for innovation. #1 ASU, #2 Stanford, #3 MIT. - U.S. News and World Report, 5 years, 2016-2020">
						<nav class="nav" aria-label="University Services">
							<a class="nav-link" href="https://www.asu.edu/map/">Maps and Locations</a>
							<a class="nav-link" href="https://www.asu.edu/asujobs">Jobs</a>
							<a class="nav-link" href="https://isearch.asu.edu/">Directory</a>
							<a class="nav-link" href="https://www.asu.edu/contactasu/">Contact ASU</a>
							<a class="nav-link" href="https://my.asu.edu/">My ASU</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- wrapper-footer-innovation -->

	<div class="wrapper" id="wrapper-footer-colophon">
		<div class="container" id="footer-colophon">
			<div class="row">
				<div class="col">
					<nav class="nav colophon" aria-label="University Legal and Compliance">
						<a class="nav-link" href="https://www.asu.edu/copyright/">Copyright and Trademark</a>
						<a class="nav-link" href="https://www.asu.edu/accessibility/">Accessibility</a>
						<a class="nav-link" href="https://www.asu.edu/privacy/">Privacy</a>
						<a class="nav-link" href="https://www.asu.edu/tou/">Terms of Use</a>
						<a class="nav-link" href="https://www.asu.edu/emergency/">Emergency</a>
					</nav>
				</div>
			</div>
		</div>
	</div> <!-- wrapper-footer-colophon -->
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
