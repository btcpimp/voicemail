<div class="well well-info">
	<?php echo _("A timezone definition specifies how the Voicemail system announces the time.") ?>
	<?php echo  _("For example, the time a message was left will be announced according to the user's timezone on message playback.") ?><br />
	<b><?php echo _("Entries below will be written to Voicemail configuration as-is.") ?></b><br />
	<b><?php echo _("Please be sure to follow the format for timezone definitions described below.") ?></b>
</div>
<?php foreach ($settings as $key => $val) { ?>
		
			<?php echo $key ?>

				<input size='50' type='text' name='tz__<?php echo $key ?>' id='tz__<?php echo $key ?>' tabindex='1' value="<?php echo htmlentities($val) ?>" />
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type='checkbox' name='tzdel__<?php echo $key ?>' id='tzdel__<?php echo $key ?>' value='true' />
				&nbsp;&nbsp;
				<a href='#' class='info'><?php echo _("Delete") ?><span><?php echo $tooltips["tz"]["del"] ?></span></a>

	<?php } ?>

			

			<a href='#' class='info'>
				<?php echo _("New Name") ?><span><?php echo $tooltips["tz"]["name"] ?></span></a>

				<a href='#' class='info'><?php echo _("New Timezone Definition") ?><span><?php echo $tooltips["tz"]["def"] ?></span></a>

			<input size='10' type='text' name='tznew_name' id='tznew_name' tabindex='1' value='' />

			<input size='50' type='text' name='tznew_def' id='tznew_def' tabindex='1' value='' />
			<input type='submit' name='action' id='action' value='Submit' />

<div class="well well-info">
	<?php echo ("Timezone definition format is: ") ?>&nbsp;&nbsp;<b style='font-family:courier;'><?php echo ("timezone|values")?></b>
	<br /><br/><b><?php echo ("<i>Timezones</i> are listed in /usr/share/zoneinfo")?>
</div>

	<table class="table table-striped">

	<tr>
		<td style='max-width: 60px' colspan='2'>
			<b><?php echo ("The <i>values</i> supported in the timezone definition string include:")?></b>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo ("'filename'")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("The name of a sound file (the file name must be single-quoted)")?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo ("variable")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("A variable to be substituted (see below for supported variable values)")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px' colspan='2'>
			<b><?php echo ("Supported <i>variables</i>:")?></b>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("A or a") 	?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("Day of week (Saturday, Sunday, ...)")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("B or b or h")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("Month name (January, February, ...)")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("d or e") 	?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("numeric day of month (first, second, ..., thirty-first)")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("Y")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("Year")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("I or l") 	?>
		</td><td style='max-width: 60px' colspan='2'>
			<?php echo ("Hour, 12 hour clock")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("H")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("Hour, 24 hour clock (single digit hours preceded by \"oh\")")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("k")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("Hour, 24 hour clock (single digit hours NOT preceded by \"oh\")")?>
		</td>
	</tr>
	<tr>
		<td style='max-width: 60px'>
			<?php echo ("M")?>
		</td>
		<td style='max-width: 60px' colspan='2'>
			<?php echo ("Minute, with 00 pronounced as \"o'clock\"")?>
		</td></tr>
		<tr>
			<td style='max-width: 60px'>
				<?php echo ("N")?>
			</td>
			<td style='max-width: 60px' colspan='2'>
				<?php echo ("Minute, with 00 pronounced as \"hundred\" (US military time)")?>
			</td>
		</tr>
		<tr>
			<td style='max-width: 60px'>
				<?php echo ("P or p") 	?>
			</td>
			<td style='max-width: 60px' colspan='2'>
				<?php echo ("AM or PM")?>
			</td>
		</tr>
		<tr>
			<td style='max-width: 60px'>
				<?php echo ("Q")?>
			</td>
			<td style='max-width: 60px' colspan='2'>
				<?php echo ("\"today\", \"yesterday\" or ABdY")?>
			</td>
		</tr>
		<tr>
			<td style='max-width: 60px'>
				<?php echo ("q")?>
			</td>
			<td style='max-width: 60px' colspan='2'>
				<?php echo ("\"\" (for today), \"yesterday\", weekday, or ABdY")?>
			</td>
		</tr>
		<tr>
			<td style='max-width: 60px'>
				<?php echo ("R")?>
			</td>
			<td style='max-width: 60px' colspan='2'>
				<?php echo ("24 hour time, including minute")?>
			</td>
		</tr>
	</tr>
</table>