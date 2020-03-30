<?php
	function set_validation_icon($field_name)
	{
		if ($_POST)
		{
			if (form_error($field_name)) {
				echo '<span class="glyphicon glyphicon-remove form-control"></span>';
			} else {
				echo '<span class="glyphicon glyphicon-ok form-control"></span>';
			}
		}
	}
	
	function set_validation_style($field)
	{
		if ($_POST)
		{
			if (is_array($field)) {
				$last_status = false;
				
				for ($i = 0; i < count($field); $i++)
				{
					if (form_error($field[$i]) || $last_status)
						$last_status = true;
					else
						$last_status = false;
				}
				
				if ($last_status)
					echo 'has-error';
				else
					echo 'has-success';
				
			} else {
				if (form_error($field))
						echo 'has-error';
					else
						echo 'has-success';
			}
		}
	}