			if ($this-><?= $strControlId ?>) $this-><?= $strControlId ?>->SelectedValue = $this-><?= $strObjectName ?>-><?= $objColumn->PropertyName ?>;
			if ($this-><?= $strLabelId ?>) $this-><?= $strLabelId ?>->Text = ($this-><?= $strObjectName ?>-><?= $objColumn->PropertyName ?>) ? <?= $objColumn->Reference->VariableType ?>::$NameArray[$this-><?= $strObjectName ?>-><?= $objColumn->PropertyName ?>] : null;