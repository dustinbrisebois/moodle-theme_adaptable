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
 * Embedded
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

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php
echo $OUTPUT->standard_top_of_body_html();
$fakeblocks = $OUTPUT->blocks('side-pre', [], 'aside', true);
$hasfakeblocks = strpos($fakeblocks, 'data-block="_fake"') !== false;
?>
<div id="page-wrapper">
<?php
echo '<div id="page"';
if ($hasfakeblocks) {
    echo ' class="has-fake-blocks"';
}
echo '>';
if ($hasfakeblocks) {
    echo '<section class="embedded-blocks" aria-label="' . get_string('blocks') . '">';
    echo $fakeblocks;
    echo '</section>';
}
?>
        <section class="embedded-main">
            <?php echo $OUTPUT->main_content(); ?>
        </section>
    </div>
</div>
<?php
require_once(dirname(__FILE__) . '/includes/nofooter.php');
