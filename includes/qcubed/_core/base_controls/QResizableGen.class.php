<?php
	/**
	 * The abstract QResizableGen class defined here is
	 * code-generated and contains options, events and methods scraped from the
	 * JQuery UI documentation Web site. It is not generated by the typical
	 * codegen process, but rather is generated periodically by the core QCubed
	 * team and checked in. However, the code to generate this file is
	 * in the assets/_core/php/_devetools/jquery_ui_gen/jq_control_gen.php file
	 * and you can regenerate the files if you need to.
	 *
	 * The comments in this file are taken from the JQuery UI site, so they do
	 * not always make sense with regard to QCubed. They are simply provided
	 * as reference. Note that this is very low-level code, and does not always
	 * update QCubed state variables. See the QResizableBase 
	 * file, which contains code to interface between this generated file and QCubed.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QResizable class file.
	 *
	 */

	/* Custom event classes for this control */
	
	
	/**
	 * This event is triggered when resizable is created.
	 */
	class QResizable_CreateEvent extends QJqUiEvent {
		const EventName = 'resizecreate';
	}
	/**
	 * This event is triggered at the start of a resize operation.
	 */
	class QResizable_StartEvent extends QJqUiEvent {
		const EventName = 'resizestart';
	}
	/**
	 * This event is triggered during the resize, on the drag of the resize
	 * 		handler.
	 */
	class QResizable_ResizeEvent extends QJqUiEvent {
		const EventName = 'resize';
	}
	/**
	 * This event is triggered at the end of a resize operation.
	 */
	class QResizable_StopEvent extends QJqUiEvent {
		const EventName = 'resizestop';
	}

	/* Custom "property" event classes for this control */

	/**
	 * @property boolean $Disabled Disables (true) or enables (false) the resizable. Can be set when
	 * 		initialising (first creating) the resizable.
	 * @property mixed $AlsoResize Resize these elements synchronous when resizing.
	 * @property boolean $Animate Animates to the final size after resizing.
	 * @property mixed $AnimateDuration Duration time for animating, in milliseconds. Other possible values:
	 * 		'slow', 'normal', 'fast'.
	 * @property string $AnimateEasing Easing effect for animating.
	 * @property mixed $AspectRatio If set to true, resizing is constrained by the original aspect ratio.
	 * 		Otherwise a custom aspect ratio can be specified, such as 9 / 16, or 0.5.
	 * @property boolean $AutoHide If set to true, automatically hides the handles except when the mouse
	 * 		hovers over the element.
	 * @property mixed $Cancel Prevents resizing if you start on elements matching the selector.
	 * @property mixed $Containment Constrains resizing to within the bounds of the specified element. Possible
	 * 		values: 'parent', 'document', a DOMElement, or a Selector.
	 * @property integer $Delay Tolerance, in milliseconds, for when resizing should start. If specified,
	 * 		resizing will not start until after mouse is moved beyond duration. This
	 * 		can help prevent unintended resizing when clicking on an element.
	 * @property integer $Distance Tolerance, in pixels, for when resizing should start. If specified,
	 * 		resizing will not start until after mouse is moved beyond distance. This
	 * 		can help prevent unintended resizing when clicking on an element.
	 * @property boolean $Ghost If set to true, a semi-transparent helper element is shown for resizing.
	 * @property array $Grid Snaps the resizing element to a grid, every x and y pixels. Array values:
	 * 		[x, y]
	 * @property mixed $Handles If specified as a string, should be a comma-split list of any of the
	 * 		following: 'n, e, s, w, ne, se, sw, nw, all'. The necessary handles will be
	 * 		auto-generated by the plugin.
	 * If specified as an object, the following keys
	 * 		are supported: { n, e, s, w, ne, se, sw, nw }. The value of any specified
	 * 		should be a jQuery selector matching the child element of the resizable to
	 * 		use as that handle. If the handle is not a child of the resizable, you can
	 * 		pass in the DOMElement or a valid jQuery object directly.
	 * @property string $Helper This is the css class that will be added to a proxy element to outline the
	 * 		resize during the drag of the resize handle. Once the resize is complete,
	 * 		the original element is sized.
	 * @property integer $MaxHeight This is the maximum height the resizable should be allowed to resize to.
	 * @property integer $MaxWidth This is the maximum width the resizable should be allowed to resize to.
	 * @property integer $MinHeight This is the minimum height the resizable should be allowed to resize to.
	 * @property integer $MinWidth This is the minimum width the resizable should be allowed to resize to.
	 */

	abstract class QResizableGen extends QControl	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var mixed */
		protected $mixAlsoResize = null;
		/** @var boolean */
		protected $blnAnimate = null;
		/** @var mixed */
		protected $mixAnimateDuration = null;
		/** @var string */
		protected $strAnimateEasing = null;
		/** @var mixed */
		protected $mixAspectRatio = null;
		/** @var boolean */
		protected $blnAutoHide = null;
		/** @var mixed */
		protected $mixCancel = null;
		/** @var mixed */
		protected $mixContainment = null;
		/** @var integer */
		protected $intDelay;
		/** @var integer */
		protected $intDistance = null;
		/** @var boolean */
		protected $blnGhost = null;
		/** @var array */
		protected $arrGrid = null;
		/** @var mixed */
		protected $mixHandles = null;
		/** @var string */
		protected $strHelper = null;
		/** @var integer */
		protected $intMaxHeight = null;
		/** @var integer */
		protected $intMaxWidth = null;
		/** @var integer */
		protected $intMinHeight = null;
		/** @var integer */
		protected $intMinWidth = null;
		
		protected function makeJsProperty($strProp, $strKey) {
			$objValue = $this->$strProp;
			if (null === $objValue) {
				return '';
			}

			return $strKey . ': ' . JavaScriptHelper::toJsObject($objValue) . ', ';
		}

		protected function makeJqOptions() {
			$strJqOptions = '';
			$strJqOptions .= $this->makeJsProperty('Disabled', 'disabled');
			$strJqOptions .= $this->makeJsProperty('AlsoResize', 'alsoResize');
			$strJqOptions .= $this->makeJsProperty('Animate', 'animate');
			$strJqOptions .= $this->makeJsProperty('AnimateDuration', 'animateDuration');
			$strJqOptions .= $this->makeJsProperty('AnimateEasing', 'animateEasing');
			$strJqOptions .= $this->makeJsProperty('AspectRatio', 'aspectRatio');
			$strJqOptions .= $this->makeJsProperty('AutoHide', 'autoHide');
			$strJqOptions .= $this->makeJsProperty('Cancel', 'cancel');
			$strJqOptions .= $this->makeJsProperty('Containment', 'containment');
			$strJqOptions .= $this->makeJsProperty('Delay', 'delay');
			$strJqOptions .= $this->makeJsProperty('Distance', 'distance');
			$strJqOptions .= $this->makeJsProperty('Ghost', 'ghost');
			$strJqOptions .= $this->makeJsProperty('Grid', 'grid');
			$strJqOptions .= $this->makeJsProperty('Handles', 'handles');
			$strJqOptions .= $this->makeJsProperty('Helper', 'helper');
			$strJqOptions .= $this->makeJsProperty('MaxHeight', 'maxHeight');
			$strJqOptions .= $this->makeJsProperty('MaxWidth', 'maxWidth');
			$strJqOptions .= $this->makeJsProperty('MinHeight', 'minHeight');
			$strJqOptions .= $this->makeJsProperty('MinWidth', 'minWidth');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}

		public function getJqControlId() {
			return $this->ControlId;
		}

		public function getJqSetupFunction() {
			return 'resizable';
		}

		public function GetControlJavaScript() {
			return sprintf('jQuery("#%s").%s({%s})', $this->getJqControlId(), $this->getJqSetupFunction(), $this->makeJqOptions());
		}

		public function GetEndScript() {
			return  $this->GetControlJavaScript() . '; ' . parent::GetEndScript();
		}
		
		/**
		 * Call a JQuery UI Method on the object. Takes variable number of arguments.
		 * 
		 * @param string $strMethodName the method name to call
		 * @internal param $mixed [optional] $mixParam1
		 * @internal param $mixed [optional] $mixParam2
		 */
		protected function CallJqUiMethod($strMethodName /*, ... */) {
			$args = func_get_args();

			$strArgs = JavaScriptHelper::toJsObject($args);
			$strJs = sprintf('jQuery("#%s").%s(%s)',
				$this->getJqControlId(),
				$this->getJqSetupFunction(),
				substr($strArgs, 1, strlen($strArgs)-2));	// params without brackets
			QApplication::ExecuteJavaScript($strJs);
		}


		/**
		 * Remove the resizable functionality completely. This will return the element
		 * back to its pre-init state.
		 */
		public function Destroy() {
			$this->CallJqUiMethod("destroy");
		}
		/**
		 * Disable the resizable.
		 */
		public function Disable() {
			$this->CallJqUiMethod("disable");
		}
		/**
		 * Enable the resizable.
		 */
		public function Enable() {
			$this->CallJqUiMethod("enable");
		}
		/**
		 * Get or set any resizable option. If no value is specified, will act as a
		 * getter.
		 * @param $optionName
		 * @param $value
		 */
		public function Option($optionName, $value = null) {
			$this->CallJqUiMethod("option", $optionName, $value);
		}
		/**
		 * Set multiple resizable options at once by providing an options object.
		 * @param $options
		 */
		public function Option1($options) {
			$this->CallJqUiMethod("option", $options);
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Disabled': return $this->blnDisabled;
				case 'AlsoResize': return $this->mixAlsoResize;
				case 'Animate': return $this->blnAnimate;
				case 'AnimateDuration': return $this->mixAnimateDuration;
				case 'AnimateEasing': return $this->strAnimateEasing;
				case 'AspectRatio': return $this->mixAspectRatio;
				case 'AutoHide': return $this->blnAutoHide;
				case 'Cancel': return $this->mixCancel;
				case 'Containment': return $this->mixContainment;
				case 'Delay': return $this->intDelay;
				case 'Distance': return $this->intDistance;
				case 'Ghost': return $this->blnGhost;
				case 'Grid': return $this->arrGrid;
				case 'Handles': return $this->mixHandles;
				case 'Helper': return $this->strHelper;
				case 'MaxHeight': return $this->intMaxHeight;
				case 'MaxWidth': return $this->intMaxWidth;
				case 'MinHeight': return $this->intMinHeight;
				case 'MinWidth': return $this->intMinWidth;
				default: 
					try { 
						return parent::__get($strName); 
					} catch (QCallerException $objExc) { 
						$objExc->IncrementOffset(); 
						throw $objExc; 
					}
			}
		}

		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				case 'Disabled':
					try {
						$this->blnDisabled = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'disabled', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AlsoResize':
					$this->mixAlsoResize = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'alsoResize', $mixValue);
					}
					break;

				case 'Animate':
					try {
						$this->blnAnimate = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'animate', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AnimateDuration':
					$this->mixAnimateDuration = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'animateDuration', $mixValue);
					}
					break;

				case 'AnimateEasing':
					try {
						$this->strAnimateEasing = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'animateEasing', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AspectRatio':
					$this->mixAspectRatio = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'aspectRatio', $mixValue);
					}
					break;

				case 'AutoHide':
					try {
						$this->blnAutoHide = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'autoHide', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cancel':
					$this->mixCancel = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'cancel', $mixValue);
					}
					break;

				case 'Containment':
					$this->mixContainment = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'containment', $mixValue);
					}
					break;

				case 'Delay':
					try {
						$this->intDelay = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'delay', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Distance':
					try {
						$this->intDistance = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'distance', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ghost':
					try {
						$this->blnGhost = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'ghost', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grid':
					try {
						$this->arrGrid = QType::Cast($mixValue, QType::ArrayType);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'grid', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Handles':
					$this->mixHandles = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'handles', $mixValue);
					}
					break;

				case 'Helper':
					try {
						$this->strHelper = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'helper', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxHeight':
					try {
						$this->intMaxHeight = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'maxHeight', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxWidth':
					try {
						$this->intMaxWidth = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'maxWidth', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MinHeight':
					try {
						$this->intMinHeight = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'minHeight', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MinWidth':
					try {
						$this->intMinWidth = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'minWidth', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				case 'Enabled':
					$this->Disabled = !$mixValue;	// Tie in standard QCubed functionality
					parent::__set($strName, $mixValue);
					break;
					
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
