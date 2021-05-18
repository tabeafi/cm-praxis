<?php

class partial_Navigation_Subnavigation_a945498d6264453a3325239f7702b31270da5047 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section SubnavigationItem
 */
public function section_1f48c9e3f0a5a0b24cdae8cd6ea6066950e450ee(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="subnav-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return '
                        <li class="subnav-divider"></li>
                    ';
};
$arguments96 = array();

$output95 .= '';

$output95 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                        <li class="subnav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['then'] = ' active';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '">
                            <a href="';
$array106 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array106)]);

$output100 .= '" id="subnav-item-';
$array107 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array107)]);

$output100 .= '" class="subnav-link"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array111);

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$output113 = '';

$output113 .= ' target="';
$array114 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array114)]);

$output113 .= '"';
$arguments108['then'] = $output113;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output100 .= ' title="';
$array115 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array115)]);

$output100 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                                    <span class="subnav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['image'] = NULL;
$arguments146['src'] = NULL;
$arguments146['class'] = NULL;
$arguments146['width'] = NULL;
$arguments146['height'] = NULL;
$array148 = array (
);$arguments146['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array148);
$array149 = array (
);$arguments146['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array149);
$array150 = array (
);$arguments146['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array150);

$output145 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                                            ';
return $output145;
};
$arguments143 = array();

$output142 .= '';

$output142 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['alt'] = NULL;
$arguments154['ismap'] = NULL;
$arguments154['longdesc'] = NULL;
$arguments154['usemap'] = NULL;
$arguments154['loading'] = NULL;
$arguments154['src'] = '';
$arguments154['treatIdAsReference'] = false;
$arguments154['image'] = NULL;
$arguments154['crop'] = NULL;
$arguments154['cropVariant'] = 'default';
$arguments154['fileExtension'] = NULL;
$arguments154['width'] = NULL;
$arguments154['height'] = NULL;
$arguments154['minWidth'] = NULL;
$arguments154['minHeight'] = NULL;
$arguments154['maxWidth'] = NULL;
$arguments154['maxHeight'] = NULL;
$arguments154['absolute'] = false;
// Rendering Array
$array156 = array();
$array156['loading'] = 'lazy';
$arguments154['additionalAttributes'] = $array156;
$array157 = array (
);$arguments154['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array157);
$array158 = array (
);$arguments154['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array158);
$array159 = array (
);$arguments154['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array159);
$array160 = array (
);$arguments154['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array160);
$array161 = array (
);$arguments154['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array161);

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                                            ';
return $output153;
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output142 .= '';

$output142 .= '
                                        ';
return $output142;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array140);
$array139['1'] = ' === svg';

$expression141 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['image'] = NULL;
$arguments125['src'] = NULL;
$arguments125['class'] = NULL;
$arguments125['width'] = NULL;
$arguments125['height'] = NULL;
$array127 = array (
);$arguments125['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array127);
$array128 = array (
);$arguments125['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array128);
$array129 = array (
);$arguments125['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array129);

$output124 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
                                            ';
return $output124;
};
$arguments122['__elseClosures'][] = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['alt'] = NULL;
$arguments131['ismap'] = NULL;
$arguments131['longdesc'] = NULL;
$arguments131['usemap'] = NULL;
$arguments131['loading'] = NULL;
$arguments131['src'] = '';
$arguments131['treatIdAsReference'] = false;
$arguments131['image'] = NULL;
$arguments131['crop'] = NULL;
$arguments131['cropVariant'] = 'default';
$arguments131['fileExtension'] = NULL;
$arguments131['width'] = NULL;
$arguments131['height'] = NULL;
$arguments131['minWidth'] = NULL;
$arguments131['minHeight'] = NULL;
$arguments131['maxWidth'] = NULL;
$arguments131['maxHeight'] = NULL;
$arguments131['absolute'] = false;
// Rendering Array
$array133 = array();
$array133['loading'] = 'lazy';
$arguments131['additionalAttributes'] = $array133;
$array134 = array (
);$arguments131['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array134);
$array135 = array (
);$arguments131['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array135);
$array136 = array (
);$arguments131['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array136);
$array137 = array (
);$arguments131['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array137);
$array138 = array (
);$arguments131['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array138);

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
                                            ';
return $output130;
};

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
                                    </span>
                                ';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output100 .= '
                                <span class="subnav-link-text">';
$array162 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array162)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = $renderChildrenClosure164;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output100 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['section'] = NULL;
$arguments174['partial'] = NULL;
$arguments174['delegate'] = NULL;
$arguments174['renderable'] = NULL;
$arguments174['arguments'] = array (
);
$arguments174['optional'] = false;
$arguments174['default'] = NULL;
$arguments174['contentAs'] = NULL;
$arguments174['debug'] = true;
$arguments174['section'] = 'SubnavigationItem';
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array177);
$array178 = array (
);$array176['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array178);
$arguments174['arguments'] = $array176;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
                            ';
return $output173;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array171);

$expression172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = $renderChildrenClosure169;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output100 .= '
                        </li>
                    ';
return $output100;
};
$arguments98 = array();
$arguments98['if'] = NULL;

$output95 .= '';

$output95 .= '
                ';
return $output95;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        <li class="subnav-divider"></li>
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="subnav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '">
                            <a href="';
$array19 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array19)]);

$output13 .= '" id="subnav-item-';
$array20 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array20)]);

$output13 .= '" class="subnav-link"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$output26 = '';

$output26 .= ' target="';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array27)]);

$output26 .= '"';
$arguments21['then'] = $output26;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output13 .= ' title="';
$array28 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array28)]);

$output13 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                    <span class="subnav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['image'] = NULL;
$arguments59['src'] = NULL;
$arguments59['class'] = NULL;
$arguments59['width'] = NULL;
$arguments59['height'] = NULL;
$array61 = array (
);$arguments59['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array61);
$array62 = array (
);$arguments59['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array62);
$array63 = array (
);$arguments59['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array63);

$output58 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
                                            ';
return $output58;
};
$arguments56 = array();

$output55 .= '';

$output55 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['alt'] = NULL;
$arguments67['ismap'] = NULL;
$arguments67['longdesc'] = NULL;
$arguments67['usemap'] = NULL;
$arguments67['loading'] = NULL;
$arguments67['src'] = '';
$arguments67['treatIdAsReference'] = false;
$arguments67['image'] = NULL;
$arguments67['crop'] = NULL;
$arguments67['cropVariant'] = 'default';
$arguments67['fileExtension'] = NULL;
$arguments67['width'] = NULL;
$arguments67['height'] = NULL;
$arguments67['minWidth'] = NULL;
$arguments67['minHeight'] = NULL;
$arguments67['maxWidth'] = NULL;
$arguments67['maxHeight'] = NULL;
$arguments67['absolute'] = false;
// Rendering Array
$array69 = array();
$array69['loading'] = 'lazy';
$arguments67['additionalAttributes'] = $array69;
$array70 = array (
);$arguments67['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array70);
$array71 = array (
);$arguments67['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array71);
$array72 = array (
);$arguments67['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array72);
$array73 = array (
);$arguments67['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array73);
$array74 = array (
);$arguments67['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array74);

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
                                            ';
return $output66;
};
$arguments64 = array();
$arguments64['if'] = NULL;

$output55 .= '';

$output55 .= '
                                        ';
return $output55;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array53);
$array52['1'] = ' === svg';

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['image'] = NULL;
$arguments38['src'] = NULL;
$arguments38['class'] = NULL;
$arguments38['width'] = NULL;
$arguments38['height'] = NULL;
$array40 = array (
);$arguments38['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array40);
$array41 = array (
);$arguments38['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array41);
$array42 = array (
);$arguments38['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array42);

$output37 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
                                            ';
return $output37;
};
$arguments35['__elseClosures'][] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['alt'] = NULL;
$arguments44['ismap'] = NULL;
$arguments44['longdesc'] = NULL;
$arguments44['usemap'] = NULL;
$arguments44['loading'] = NULL;
$arguments44['src'] = '';
$arguments44['treatIdAsReference'] = false;
$arguments44['image'] = NULL;
$arguments44['crop'] = NULL;
$arguments44['cropVariant'] = 'default';
$arguments44['fileExtension'] = NULL;
$arguments44['width'] = NULL;
$arguments44['height'] = NULL;
$arguments44['minWidth'] = NULL;
$arguments44['minHeight'] = NULL;
$arguments44['maxWidth'] = NULL;
$arguments44['maxHeight'] = NULL;
$arguments44['absolute'] = false;
// Rendering Array
$array46 = array();
$array46['loading'] = 'lazy';
$arguments44['additionalAttributes'] = $array46;
$array47 = array (
);$arguments44['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array47);
$array48 = array (
);$arguments44['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array48);
$array49 = array (
);$arguments44['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array49);
$array50 = array (
);$arguments44['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array50);
$array51 = array (
);$arguments44['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array51);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                                            ';
return $output43;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                                    </span>
                                ';
return $output34;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output13 .= '
                                <span class="subnav-link-text">';
$array75 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array75)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['section'] = NULL;
$arguments87['partial'] = NULL;
$arguments87['delegate'] = NULL;
$arguments87['renderable'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['optional'] = false;
$arguments87['default'] = NULL;
$arguments87['contentAs'] = NULL;
$arguments87['debug'] = true;
$arguments87['section'] = 'SubnavigationItem';
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array90);
$array91 = array (
);$array89['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array91);
$arguments87['arguments'] = $array89;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
                            ';
return $output86;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = $renderChildrenClosure82;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output179 = '';

$output179 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
    <nav class="frame frame-type-subnavigation frame-background-none frame-no-backgroundimage frame-space-before-none frame-space-after-none" role="navigation">
        <div class="frame-container">
            <div class="frame-inner">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['section'] = NULL;
$arguments186['partial'] = NULL;
$arguments186['delegate'] = NULL;
$arguments186['renderable'] = NULL;
$arguments186['arguments'] = array (
);
$arguments186['optional'] = false;
$arguments186['default'] = NULL;
$arguments186['contentAs'] = NULL;
$arguments186['debug'] = true;
$arguments186['section'] = 'SubnavigationItem';
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['menu'] = $renderingContext->getVariableProvider()->getByPath('subnavigation', $array189);
$array190 = array (
);$array188['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array190);
$arguments186['arguments'] = $array188;

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
            </div>
        </div>
    </nav>
';
return $output185;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('subnavigation', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments180['__thenClosure'] = $renderChildrenClosure181;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
        <ul class="subnav-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return '
                        <li class="subnav-divider"></li>
                    ';
};
$arguments289 = array();

$output288 .= '';

$output288 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                        <li class="subnav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array297);

$expression298 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);
$arguments294['then'] = ' active';

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '">
                            <a href="';
$array299 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array299)]);

$output293 .= '" id="subnav-item-';
$array300 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array300)]);

$output293 .= '" class="subnav-link"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['then'] = NULL;
$arguments301['else'] = NULL;
$arguments301['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array303 = array();
$array304 = array (
);$array303['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array304);

$expression305 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments301['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression305(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array303)
					),
					$renderingContext
				);
$output306 = '';

$output306 .= ' target="';
$array307 = array (
);
$output306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array307)]);

$output306 .= '"';
$arguments301['then'] = $output306;

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output293 .= ' title="';
$array308 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array308)]);

$output293 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                                    <span class="subnav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['image'] = NULL;
$arguments339['src'] = NULL;
$arguments339['class'] = NULL;
$arguments339['width'] = NULL;
$arguments339['height'] = NULL;
$array341 = array (
);$arguments339['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array341);
$array342 = array (
);$arguments339['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array342);
$array343 = array (
);$arguments339['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array343);

$output338 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '
                                            ';
return $output338;
};
$arguments336 = array();

$output335 .= '';

$output335 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['additionalAttributes'] = NULL;
$arguments347['data'] = NULL;
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['id'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$arguments347['alt'] = NULL;
$arguments347['ismap'] = NULL;
$arguments347['longdesc'] = NULL;
$arguments347['usemap'] = NULL;
$arguments347['loading'] = NULL;
$arguments347['src'] = '';
$arguments347['treatIdAsReference'] = false;
$arguments347['image'] = NULL;
$arguments347['crop'] = NULL;
$arguments347['cropVariant'] = 'default';
$arguments347['fileExtension'] = NULL;
$arguments347['width'] = NULL;
$arguments347['height'] = NULL;
$arguments347['minWidth'] = NULL;
$arguments347['minHeight'] = NULL;
$arguments347['maxWidth'] = NULL;
$arguments347['maxHeight'] = NULL;
$arguments347['absolute'] = false;
// Rendering Array
$array349 = array();
$array349['loading'] = 'lazy';
$arguments347['additionalAttributes'] = $array349;
$array350 = array (
);$arguments347['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array350);
$array351 = array (
);$arguments347['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array351);
$array352 = array (
);$arguments347['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array352);
$array353 = array (
);$arguments347['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array353);
$array354 = array (
);$arguments347['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array354);

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
                                            ';
return $output346;
};
$arguments344 = array();
$arguments344['if'] = NULL;

$output335 .= '';

$output335 .= '
                                        ';
return $output335;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array333);
$array332['1'] = ' === svg';

$expression334 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array332)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['image'] = NULL;
$arguments318['src'] = NULL;
$arguments318['class'] = NULL;
$arguments318['width'] = NULL;
$arguments318['height'] = NULL;
$array320 = array (
);$arguments318['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array320);
$array321 = array (
);$arguments318['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array321);
$array322 = array (
);$arguments318['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array322);

$output317 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
                                            ';
return $output317;
};
$arguments315['__elseClosures'][] = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['title'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['alt'] = NULL;
$arguments324['ismap'] = NULL;
$arguments324['longdesc'] = NULL;
$arguments324['usemap'] = NULL;
$arguments324['loading'] = NULL;
$arguments324['src'] = '';
$arguments324['treatIdAsReference'] = false;
$arguments324['image'] = NULL;
$arguments324['crop'] = NULL;
$arguments324['cropVariant'] = 'default';
$arguments324['fileExtension'] = NULL;
$arguments324['width'] = NULL;
$arguments324['height'] = NULL;
$arguments324['minWidth'] = NULL;
$arguments324['minHeight'] = NULL;
$arguments324['maxWidth'] = NULL;
$arguments324['maxHeight'] = NULL;
$arguments324['absolute'] = false;
// Rendering Array
$array326 = array();
$array326['loading'] = 'lazy';
$arguments324['additionalAttributes'] = $array326;
$array327 = array (
);$arguments324['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array327);
$array328 = array (
);$arguments324['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array328);
$array329 = array (
);$arguments324['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array329);
$array330 = array (
);$arguments324['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array330);
$array331 = array (
);$arguments324['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array331);

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
                                            ';
return $output323;
};

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
                                    </span>
                                ';
return $output314;
};
$arguments309 = array();
$arguments309['then'] = NULL;
$arguments309['else'] = NULL;
$arguments309['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array312);

$expression313 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments309['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);
$arguments309['__thenClosure'] = $renderChildrenClosure310;

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output293 .= '
                                <span class="subnav-link-text">';
$array355 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array355)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array359);

$expression360 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array358)
					),
					$renderingContext
				);
$arguments356['__thenClosure'] = $renderChildrenClosure357;

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output293 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['section'] = NULL;
$arguments367['partial'] = NULL;
$arguments367['delegate'] = NULL;
$arguments367['renderable'] = NULL;
$arguments367['arguments'] = array (
);
$arguments367['optional'] = false;
$arguments367['default'] = NULL;
$arguments367['contentAs'] = NULL;
$arguments367['debug'] = true;
$arguments367['section'] = 'SubnavigationItem';
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array370);
$array371 = array (
);$array369['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array371);
$arguments367['arguments'] = $array369;

$output366 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '
                            ';
return $output366;
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array364);

$expression365 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments361['__thenClosure'] = $renderChildrenClosure362;

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output293 .= '
                        </li>
                    ';
return $output293;
};
$arguments291 = array();
$arguments291['if'] = NULL;

$output288 .= '';

$output288 .= '
                ';
return $output288;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array286);

$expression287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        <li class="subnav-divider"></li>
                    ';
};
$arguments204['__elseClosures'][] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                        <li class="subnav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$arguments207['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array210 = array (
);$array209['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array210);

$expression211 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments207['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);
$arguments207['then'] = ' active';

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '">
                            <a href="';
$array212 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array212)]);

$output206 .= '" id="subnav-item-';
$array213 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array213)]);

$output206 .= '" class="subnav-link"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$arguments214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array217);

$expression218 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$output219 = '';

$output219 .= ' target="';
$array220 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array220)]);

$output219 .= '"';
$arguments214['then'] = $output219;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output206 .= ' title="';
$array221 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array221)]);

$output206 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                                    <span class="subnav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['image'] = NULL;
$arguments252['src'] = NULL;
$arguments252['class'] = NULL;
$arguments252['width'] = NULL;
$arguments252['height'] = NULL;
$array254 = array (
);$arguments252['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array254);
$array255 = array (
);$arguments252['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array255);
$array256 = array (
);$arguments252['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array256);

$output251 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
                                            ';
return $output251;
};
$arguments249 = array();

$output248 .= '';

$output248 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['class'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
$arguments260['alt'] = NULL;
$arguments260['ismap'] = NULL;
$arguments260['longdesc'] = NULL;
$arguments260['usemap'] = NULL;
$arguments260['loading'] = NULL;
$arguments260['src'] = '';
$arguments260['treatIdAsReference'] = false;
$arguments260['image'] = NULL;
$arguments260['crop'] = NULL;
$arguments260['cropVariant'] = 'default';
$arguments260['fileExtension'] = NULL;
$arguments260['width'] = NULL;
$arguments260['height'] = NULL;
$arguments260['minWidth'] = NULL;
$arguments260['minHeight'] = NULL;
$arguments260['maxWidth'] = NULL;
$arguments260['maxHeight'] = NULL;
$arguments260['absolute'] = false;
// Rendering Array
$array262 = array();
$array262['loading'] = 'lazy';
$arguments260['additionalAttributes'] = $array262;
$array263 = array (
);$arguments260['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array263);
$array264 = array (
);$arguments260['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array264);
$array265 = array (
);$arguments260['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array265);
$array266 = array (
);$arguments260['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array266);
$array267 = array (
);$arguments260['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array267);

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
                                            ';
return $output259;
};
$arguments257 = array();
$arguments257['if'] = NULL;

$output248 .= '';

$output248 .= '
                                        ';
return $output248;
};
$arguments228 = array();
$arguments228['then'] = NULL;
$arguments228['else'] = NULL;
$arguments228['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array246);
$array245['1'] = ' === svg';

$expression247 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments228['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments228['__thenClosure'] = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['image'] = NULL;
$arguments231['src'] = NULL;
$arguments231['class'] = NULL;
$arguments231['width'] = NULL;
$arguments231['height'] = NULL;
$array233 = array (
);$arguments231['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array233);
$array234 = array (
);$arguments231['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array234);
$array235 = array (
);$arguments231['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array235);

$output230 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
                                            ';
return $output230;
};
$arguments228['__elseClosures'][] = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
$arguments237['alt'] = NULL;
$arguments237['ismap'] = NULL;
$arguments237['longdesc'] = NULL;
$arguments237['usemap'] = NULL;
$arguments237['loading'] = NULL;
$arguments237['src'] = '';
$arguments237['treatIdAsReference'] = false;
$arguments237['image'] = NULL;
$arguments237['crop'] = NULL;
$arguments237['cropVariant'] = 'default';
$arguments237['fileExtension'] = NULL;
$arguments237['width'] = NULL;
$arguments237['height'] = NULL;
$arguments237['minWidth'] = NULL;
$arguments237['minHeight'] = NULL;
$arguments237['maxWidth'] = NULL;
$arguments237['maxHeight'] = NULL;
$arguments237['absolute'] = false;
// Rendering Array
$array239 = array();
$array239['loading'] = 'lazy';
$arguments237['additionalAttributes'] = $array239;
$array240 = array (
);$arguments237['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array240);
$array241 = array (
);$arguments237['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array241);
$array242 = array (
);$arguments237['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array242);
$array243 = array (
);$arguments237['width'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.width', $array243);
$array244 = array (
);$arguments237['height'] = $renderingContext->getVariableProvider()->getByPath('theme.subnavigation.icon.height', $array244);

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
                                            ';
return $output236;
};

$output227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                                    </span>
                                ';
return $output227;
};
$arguments222 = array();
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array225);

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments222['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output206 .= '
                                <span class="subnav-link-text">';
$array268 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array268)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = $renderChildrenClosure270;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output206 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['section'] = NULL;
$arguments280['partial'] = NULL;
$arguments280['delegate'] = NULL;
$arguments280['renderable'] = NULL;
$arguments280['arguments'] = array (
);
$arguments280['optional'] = false;
$arguments280['default'] = NULL;
$arguments280['contentAs'] = NULL;
$arguments280['debug'] = true;
$arguments280['section'] = 'SubnavigationItem';
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array283);
$array284 = array (
);$array282['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array284);
$arguments280['arguments'] = $array282;

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
                            ';
return $output279;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array277);

$expression278 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$arguments274['__thenClosure'] = $renderChildrenClosure275;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output206 .= '
                        </li>
                    ';
return $output206;
};

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
            ';
return $output203;
};
$arguments200 = array();
$arguments200['each'] = NULL;
$arguments200['as'] = NULL;
$arguments200['key'] = NULL;
$arguments200['reverse'] = false;
$arguments200['iteration'] = NULL;
$array202 = array (
);$arguments200['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array202);
$arguments200['as'] = 'item';

$output199 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
        </ul>
    ';
return $output199;
};
$arguments194 = array();
$arguments194['then'] = NULL;
$arguments194['else'] = NULL;
$arguments194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array197);

$expression198 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
$arguments194['__thenClosure'] = $renderChildrenClosure195;

$output193 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
';
return $output193;
};
$arguments191 = array();
$arguments191['name'] = NULL;
$arguments191['name'] = 'SubnavigationItem';

$output179 .= NULL;

$output179 .= '

';

return $output179;
}


}
#