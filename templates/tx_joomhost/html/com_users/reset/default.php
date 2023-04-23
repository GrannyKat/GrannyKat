<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
?>
<div class="reset-area text-center reset<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>




	<div class="row vh-center">
		<div class="col-md-6 col-md-offset-3">
			<div class="login-box-wraper text-left">


				<h2 class="title text-center box-title"><?php echo JText::_('COM_USERS_RESET_TITLE')?></h2>

				<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="">
					<?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
						<fieldset>
							<p><?php echo JText::_($fieldset->label); ?></p>
							<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
								<div class="control-group">
									<div class="control-label">
										<?php echo $field->label; ?>
									</div>
									<div class="controls">
										<?php echo $field->input; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</fieldset>
					<?php endforeach; ?>

					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JSUBMIT'); ?></button>
						</div>
					</div>
					<?php echo JHtml::_('form.token'); ?>
				</form>


			</div>
		</div>
	</div>

</div>
