<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
.contcet_main{width:600px; padding:2px 0px 8px 8px; border:1px solid #cecece; margin-top:10px;}
.contect_head{margin:0px; padding-top:2px; font-size:16px; font-weight:bold;}
.contect_left{margin:0px; padding-top:4px; width:280px; border-right:0px solid #CCCCCC;}
.contect_txt{font-size:12px;}
.contect_num{font-size:12px; padding-top:8px; font-weight:bold;}
.contect_mail{padding-top:8px; font-size:12px;}
.contect_mail a{text-decoration:underline;  color:#0000FF; font-weight:bold;}
.cotect_right{width:500px; padding-top:15px; margin-top:18px; border-top:1px solid #ccc;}
.contect_input_nm{font-size:12px; font-weight:bold; padding-top:6px;}
.inptut{width:240px; padding-top:6px;}
.star{float:none;}
</style>

</head>
<body>

<div class="contcet_main">
<div class="contect_head">Contact us</div>
<div class="contect_left">
<div class="contect_txt">We will love to here from you. You can reach us at</div>
<div class="contect_num">0120 479 2800</div>
<!--<div class="contect_mail"><a href="#">onamsupport@getit.co.in</a></div>-->
<div class="contect_num">A-13, Sector-63, Noida, Uttar Pradesh </div>
</div>
<div class="cotect_right">
<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
		<fieldset style="border:none;"> 
			<div style="font-size:14px; font-weight:bold; margin-bottom:4px;">Get In Touch</div>
			<dl>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_name'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_name'); ?></div>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_email'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_email'); ?></div>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_subject'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_subject'); ?></div>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_message'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_message'); ?></div>
				<?php 	if ($this->params->get('show_email_copy')){ ?>
						<div style="font-size:12px; padding:2px 0px;"><?php echo $this->form->getLabel('contact_email_copy'); ?></div>
						<dd><?php echo $this->form->getInput('contact_email_copy'); ?></dd>
				<?php 	} ?>
			<?php //Dynamically load any additional fields from plugins. ?>
			     <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			          <?php if ($fieldset->name != 'contact'):?>
			               <?php $fields = $this->form->getFieldset($fieldset->name);?>
			               <?php foreach($fields as $field): ?>
			                    <?php if ($field->hidden): ?>
			                         <?php echo $field->input;?>
			                    <?php else:?>
			                         <dt>
			                            <?php echo $field->label; ?>
			                            <?php if (!$field->required && $field->type != "Spacer"): ?>
			                               <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
			                            <?php endif; ?>
			                         </dt>
			                         <dd><?php echo $field->input;?></dd>
			                    <?php endif;?>
			               <?php endforeach;?>
			          <?php endif ?>
			     <?php endforeach;?>
				<dt></dt>
				<dd><button class="button validate" type="submit" style="background:#000000; padding:5px; color:#FFFFFF"><?php echo "Submit" ?></button>
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
					<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</dd>
			</dl>
		</fieldset>
	</form>
</div>

</div>
<div class="clr"></div>
</div>

</body>
</html>>


