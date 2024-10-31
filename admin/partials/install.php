<?php

/**
* Provide a admin area view for the plugin
*
* This file is used to markup the admin-facing aspects of the plugin.
*
* @link       https://www.planfy.com
* @since      1.0.0
*
* @package    Planfy
* @subpackage Planfy/admin/partials
*/
?>

<link rel="stylesheet" href="https://www.planfy.com/assets/css/front-style.css" />

<div class="wrap about-wrap">
	<h1>Online Bookings <small style="font-size:18px;font-weight:100;">by Planfy</small></h1>

	<p class="paragraphText">Thank you for installing Planfy plugin. </p>

	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="#" class="nav-tab nav-tab-active">Installation</a>
	</h2>

    <h3>1. Login or create a new Planfy business account.</h3>

    <p class="paragraphText">You can <a href="https://www.planfy.com">login here</a>. If you don't already have an account, get started free by <a href="https://www.planfy.com">creating a new Planfy business account.</a></p>

    <h3>2. Add Planfy booking widget to your website</h3>

    <p class="paragraphText">Please go to the <a href="https://www.planfy.com/portal/integration/widget/popup">widget editor page</a>, copy your popup widget code, paste it below and save.</p>

    <form action="/wp-admin/admin-post.php" method="post" id="planfy_install_form">
		<input type="hidden" name="action" value="planfy_install" />

        <br />

        <div>
            <textarea id="planfy_code" name="planfy_code" rows="15" style="width:100%" class="regular-text code" placeholder="Paste widget code"><?= htmlspecialchars(stripslashes(get_option('planfy_code'))); ?></textarea>
        </div>

        <br />

        <input type="submit" value="Save" class="button button-primary" />
	</form>

    <h3>3. Test your website</h3>

    <p class="paragraphText">When the above steps are done, Planfy booking widget will appear <a href="<?=home_url();?>">on your website</a> and allow you to start accepting bookings.</p>
</div>
