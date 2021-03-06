<?php
/**
 * @package     RedSHOP.Frontend
 * @subpackage  Template
 *
 * @copyright   Copyright (C) 2008 - 2017 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

/**
 * $displayData extract
 *
 * @param   string  $extraFieldLabel  Extra field label
 * @param   string  $extraFieldValue  Extra field value
 */
extract($displayData);
?>
<?php if (!empty($extraFieldValue)): ?>
	<?php if ($sendMail) : ?>
	<tr>
		<td><b><?php echo $extraFieldLabel; ?></b></td>
		<td><?php echo implode(', ', $extraFieldValue); ?></td>
	</tr>
	<?php else: ?>
	<div class="row">
	<label class="col-xs-5"><?php echo $extraFieldLabel; ?></label>
	<div class="col-xs-7"><?php echo implode(', ', $extraFieldValue); ?></div>
</div>
	<?php endif; ?>
<?php endif; ?>
