<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Columns one
 *
 * @package    theme_adaptable
 * @copyright  2015-2016 Jeremy Hopkins (Coventry University)
 * @copyright  2015-2016 Fernando Acedo (3-bits.com)
 * @copyright  2019 G J Barnard
 *               {@link https://moodle.org/user/profile.php?id=442195}
 *               {@link https://gjbarnard.co.uk}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

defined('MOODLE_INTERNAL') || die;

// Include header.
$sidepostdrawer = false;
require_once(dirname(__FILE__) . '/includes/header.php');
// Include secondary navigation.
require_once(dirname(__FILE__) . '/includes/secondarynav.php');
?>

<div id="maincontainer" class="container outercont">
    <?php
        echo $OUTPUT->get_news_ticker();
        echo $OUTPUT->page_navbar();
    ?>
    <div id="page-content" class="row">
        <div id="region-main-box" class="col-12">
            <section id="region-main">
            <?php
            echo $OUTPUT->course_content_header();
            if (!empty($secondarynavigation)) {
                echo $secondarynavigation;
            }
            echo $OUTPUT->activity_header();
            if (!empty($overflow)) {
                echo $overflow;
            }
            echo $OUTPUT->main_content();
            echo $OUTPUT->activity_navigation();
            echo $OUTPUT->course_content_footer();
            ?>
            </section>
        </div>
    </div>
</div>

<?php
if (empty($PAGE->layout_options['nofooter'])) {
    // Include footer.
    require_once(dirname(__FILE__) . '/includes/footer.php');
} else {
    require_once(dirname(__FILE__) . '/includes/nofooter.php');
}
