<?php
	/**
	 * The abstract QDraggableGen class defined here is
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
	 * update QCubed state variables. See the QDraggableBase 
	 * file, which contains code to interface between this generated file and QCubed.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QDraggable class file.
	 *
	 */

	/* Custom event classes for this control */
	
	
	/**
	 * This event is triggered when draggable is created.
	 */
	class QDraggable_CreateEvent extends QJqUiEvent {
		const EventName = 'dragcreate';
	}
	/**
	 * This event is triggered when dragging starts.
	 */
	class QDraggable_StartEvent extends QJqUiEvent {
		const EventName = 'dragstart';
	}
	/**
	 * This event is triggered when the mouse is moved during the dragging.
	 */
	class QDraggable_DragEvent extends QJqUiEvent {
		const EventName = 'drag';
	}
	/**
	 * This event is triggered when dragging stops.
	 */
	class QDraggable_StopEvent extends QJqUiEvent {
		const EventName = 'dragstop';
	}

	/* Custom "property" event classes for this control */

	/**
	 * @property boolean $Disabled Disables (true) or enables (false) the draggable. Can be set when
	 * 		initialising (first creating) the draggable.
	 * @property boolean $AddClasses If set to false, will prevent the ui-draggable class from being added. This
	 * 		may be desired as a performance optimization when calling .draggable() init
	 * 		on many hundreds of elements.
	 * @property mixed $AppendTo The element passed to or selected by the appendTo option will be used as
	 * 		the draggable helper's container during dragging. By default, the helper is
	 * 		appended to the same container as the draggable.
	 * @property string $Axis Constrains dragging to either the horizontal (x) or vertical (y) axis.
	 * 		Possible values: 'x', 'y'.
	 * @property mixed $Cancel Prevents dragging from starting on specified elements.
	 * @property mixed $ConnectToSortable Allows the draggable to be dropped onto the specified sortables. If this
	 * 		option is used (helper must be set to 'clone' in order to work flawlessly),
	 * 		a draggable can be dropped onto a sortable list and then becomes part of
	 * 		it.
	 * Note: Specifying this option as an array of selectors has been removed.
	 * @property mixed $Containment Constrains dragging to within the bounds of the specified element or
	 * 		region. Possible string values: 'parent', 'document', 'window', [x1, y1,
	 * 		x2, y2].
	 * @property string $Cursor The css cursor during the drag operation.
	 * @property mixed $CursorAt Sets the offset of the dragging helper relative to the mouse cursor.
	 * 		Coordinates can be given as a hash using a combination of one or two keys:
	 * 		{ top, left, right, bottom }.
	 * @property integer $Delay Time in milliseconds after mousedown until dragging should start. This
	 * 		option can be used to prevent unwanted drags when clicking on an element.
	 * @property integer $Distance Distance in pixels after mousedown the mouse must move before dragging
	 * 		should start. This option can be used to prevent unwanted drags when
	 * 		clicking on an element.
	 * @property array $Grid Snaps the dragging helper to a grid, every x and y pixels. Array values:
	 * 		[x, y]
	 * @property mixed $Handle If specified, restricts drag start click to the specified element(s).
	 * @property mixed $Helper Allows for a helper element to be used for dragging display. Possible
	 * 		values: 'original', 'clone', Function. If a function is specified, it must
	 * 		return a DOMElement.
	 * @property mixed $IframeFix Prevent iframes from capturing the mousemove events during a drag. Useful
	 * 		in combination with cursorAt, or in any case, if the mouse cursor is not
	 * 		over the helper. If set to true, transparent overlays will be placed over
	 * 		all iframes on the page. If a selector is supplied, the matched iframes
	 * 		will have an overlay placed over them.
	 * @property double $Opacity Opacity for the helper while being dragged.
	 * @property boolean $RefreshPositions If set to true, all droppable positions are calculated on every mousemove.
	 * 		Caution: This solves issues on highly dynamic pages, but dramatically
	 * 		decreases performance.
	 * @property mixed $Revert If set to true, the element will return to its start position when dragging
	 * 		stops. Possible string values: 'valid', 'invalid'. If set to invalid,
	 * 		revert will only occur if the draggable has not been dropped on a
	 * 		droppable. For valid, it's the other way around.
	 * @property integer $RevertDuration The duration of the revert animation, in milliseconds. Ignored if revert is
	 * 		false.
	 * @property string $Scope Used to group sets of draggable and droppable items, in addition to
	 * 		droppable's accept option. A draggable with the same scope value as a
	 * 		droppable will be accepted by the droppable.
	 * @property boolean $Scroll If set to true, container auto-scrolls while dragging.
	 * @property integer $ScrollSensitivity Distance in pixels from the edge of the viewport after which the viewport
	 * 		should scroll. Distance is relative to pointer, not the draggable.
	 * @property integer $ScrollSpeed The speed at which the window should scroll once the mouse pointer gets
	 * 		within the scrollSensitivity distance.
	 * @property mixed $Snap If set to a selector or to true (equivalent to '.ui-draggable'), the
	 * 		draggable will snap to the edges of the selected elements when near an edge
	 * 		of the element.
	 * @property string $SnapMode Determines which edges of snap elements the draggable will snap to. Ignored
	 * 		if snap is false. Possible values: 'inner', 'outer', 'both'
	 * @property integer $SnapTolerance The distance in pixels from the snap element edges at which snapping should
	 * 		occur. Ignored if snap is false.
	 * @property mixed $Stack Controls the z-Index of the set of elements that match the selector, always
	 * 		brings to front the dragged item. Very useful in things like window
	 * 		managers.
	 * @property integer $ZIndex z-index for the helper while being dragged.
	 */

	abstract class QDraggableGen extends QControl	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var boolean */
		protected $blnAddClasses = null;
		/** @var mixed */
		protected $mixAppendTo = null;
		/** @var string */
		protected $strAxis = null;
		/** @var mixed */
		protected $mixCancel = null;
		/** @var mixed */
		protected $mixConnectToSortable = null;
		/** @var mixed */
		protected $mixContainment = null;
		/** @var string */
		protected $strCursor = null;
		/** @var mixed */
		protected $mixCursorAt = null;
		/** @var integer */
		protected $intDelay;
		/** @var integer */
		protected $intDistance = null;
		/** @var array */
		protected $arrGrid = null;
		/** @var mixed */
		protected $mixHandle = null;
		/** @var mixed */
		protected $mixHelper = null;
		/** @var mixed */
		protected $mixIframeFix = null;
		/** @var double */
		protected $fltOpacity = null;
		/** @var boolean */
		protected $blnRefreshPositions = null;
		/** @var mixed */
		protected $mixRevert = null;
		/** @var integer */
		protected $intRevertDuration = null;
		/** @var string */
		protected $strScope = null;
		/** @var boolean */
		protected $blnScroll = null;
		/** @var integer */
		protected $intScrollSensitivity = null;
		/** @var integer */
		protected $intScrollSpeed = null;
		/** @var mixed */
		protected $mixSnap = null;
		/** @var string */
		protected $strSnapMode = null;
		/** @var integer */
		protected $intSnapTolerance = null;
		/** @var mixed */
		protected $mixStack = null;
		/** @var integer */
		protected $intZIndex = null;
		
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
			$strJqOptions .= $this->makeJsProperty('AddClasses', 'addClasses');
			$strJqOptions .= $this->makeJsProperty('AppendTo', 'appendTo');
			$strJqOptions .= $this->makeJsProperty('Axis', 'axis');
			$strJqOptions .= $this->makeJsProperty('Cancel', 'cancel');
			$strJqOptions .= $this->makeJsProperty('ConnectToSortable', 'connectToSortable');
			$strJqOptions .= $this->makeJsProperty('Containment', 'containment');
			$strJqOptions .= $this->makeJsProperty('Cursor', 'cursor');
			$strJqOptions .= $this->makeJsProperty('CursorAt', 'cursorAt');
			$strJqOptions .= $this->makeJsProperty('Delay', 'delay');
			$strJqOptions .= $this->makeJsProperty('Distance', 'distance');
			$strJqOptions .= $this->makeJsProperty('Grid', 'grid');
			$strJqOptions .= $this->makeJsProperty('Handle', 'handle');
			$strJqOptions .= $this->makeJsProperty('Helper', 'helper');
			$strJqOptions .= $this->makeJsProperty('IframeFix', 'iframeFix');
			$strJqOptions .= $this->makeJsProperty('Opacity', 'opacity');
			$strJqOptions .= $this->makeJsProperty('RefreshPositions', 'refreshPositions');
			$strJqOptions .= $this->makeJsProperty('Revert', 'revert');
			$strJqOptions .= $this->makeJsProperty('RevertDuration', 'revertDuration');
			$strJqOptions .= $this->makeJsProperty('Scope', 'scope');
			$strJqOptions .= $this->makeJsProperty('Scroll', 'scroll');
			$strJqOptions .= $this->makeJsProperty('ScrollSensitivity', 'scrollSensitivity');
			$strJqOptions .= $this->makeJsProperty('ScrollSpeed', 'scrollSpeed');
			$strJqOptions .= $this->makeJsProperty('Snap', 'snap');
			$strJqOptions .= $this->makeJsProperty('SnapMode', 'snapMode');
			$strJqOptions .= $this->makeJsProperty('SnapTolerance', 'snapTolerance');
			$strJqOptions .= $this->makeJsProperty('Stack', 'stack');
			$strJqOptions .= $this->makeJsProperty('ZIndex', 'zIndex');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}

		public function getJqControlId() {
			return $this->ControlId;
		}

		public function getJqSetupFunction() {
			return 'draggable';
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
		 * Remove the draggable functionality completely. This will return the element
		 * back to its pre-init state.
		 */
		public function Destroy() {
			$this->CallJqUiMethod("destroy");
		}
		/**
		 * Disable the draggable.
		 */
		public function Disable() {
			$this->CallJqUiMethod("disable");
		}
		/**
		 * Enable the draggable.
		 */
		public function Enable() {
			$this->CallJqUiMethod("enable");
		}
		/**
		 * Get or set any draggable option. If no value is specified, will act as a
		 * getter.
		 * @param $optionName
		 * @param $value
		 */
		public function Option($optionName, $value = null) {
			$this->CallJqUiMethod("option", $optionName, $value);
		}
		/**
		 * Set multiple draggable options at once by providing an options object.
		 * @param $options
		 */
		public function Option1($options) {
			$this->CallJqUiMethod("option", $options);
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Disabled': return $this->blnDisabled;
				case 'AddClasses': return $this->blnAddClasses;
				case 'AppendTo': return $this->mixAppendTo;
				case 'Axis': return $this->strAxis;
				case 'Cancel': return $this->mixCancel;
				case 'ConnectToSortable': return $this->mixConnectToSortable;
				case 'Containment': return $this->mixContainment;
				case 'Cursor': return $this->strCursor;
				case 'CursorAt': return $this->mixCursorAt;
				case 'Delay': return $this->intDelay;
				case 'Distance': return $this->intDistance;
				case 'Grid': return $this->arrGrid;
				case 'Handle': return $this->mixHandle;
				case 'Helper': return $this->mixHelper;
				case 'IframeFix': return $this->mixIframeFix;
				case 'Opacity': return $this->fltOpacity;
				case 'RefreshPositions': return $this->blnRefreshPositions;
				case 'Revert': return $this->mixRevert;
				case 'RevertDuration': return $this->intRevertDuration;
				case 'Scope': return $this->strScope;
				case 'Scroll': return $this->blnScroll;
				case 'ScrollSensitivity': return $this->intScrollSensitivity;
				case 'ScrollSpeed': return $this->intScrollSpeed;
				case 'Snap': return $this->mixSnap;
				case 'SnapMode': return $this->strSnapMode;
				case 'SnapTolerance': return $this->intSnapTolerance;
				case 'Stack': return $this->mixStack;
				case 'ZIndex': return $this->intZIndex;
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

				case 'AddClasses':
					try {
						$this->blnAddClasses = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'addClasses', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppendTo':
					$this->mixAppendTo = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'appendTo', $mixValue);
					}
					break;

				case 'Axis':
					try {
						$this->strAxis = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'axis', $mixValue);
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

				case 'ConnectToSortable':
					$this->mixConnectToSortable = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'connectToSortable', $mixValue);
					}
					break;

				case 'Containment':
					$this->mixContainment = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'containment', $mixValue);
					}
					break;

				case 'Cursor':
					try {
						$this->strCursor = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'cursor', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CursorAt':
					$this->mixCursorAt = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'cursorAt', $mixValue);
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

				case 'Handle':
					$this->mixHandle = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'handle', $mixValue);
					}
					break;

				case 'Helper':
					$this->mixHelper = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'helper', $mixValue);
					}
					break;

				case 'IframeFix':
					$this->mixIframeFix = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'iframeFix', $mixValue);
					}
					break;

				case 'Opacity':
					try {
						$this->fltOpacity = QType::Cast($mixValue, QType::Float);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'opacity', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefreshPositions':
					try {
						$this->blnRefreshPositions = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'refreshPositions', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Revert':
					$this->mixRevert = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'revert', $mixValue);
					}
					break;

				case 'RevertDuration':
					try {
						$this->intRevertDuration = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'revertDuration', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scope':
					try {
						$this->strScope = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scope', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scroll':
					try {
						$this->blnScroll = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scroll', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollSensitivity':
					try {
						$this->intScrollSensitivity = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scrollSensitivity', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollSpeed':
					try {
						$this->intScrollSpeed = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scrollSpeed', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Snap':
					$this->mixSnap = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'snap', $mixValue);
					}
					break;

				case 'SnapMode':
					try {
						$this->strSnapMode = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'snapMode', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SnapTolerance':
					try {
						$this->intSnapTolerance = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'snapTolerance', $mixValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Stack':
					$this->mixStack = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'stack', $mixValue);
					}
					break;

				case 'ZIndex':
					try {
						$this->intZIndex = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'zIndex', $mixValue);
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
