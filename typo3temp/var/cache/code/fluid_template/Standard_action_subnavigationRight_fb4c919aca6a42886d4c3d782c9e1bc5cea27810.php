<?php

class Standard_action_subnavigationRight_fb4c919aca6a42886d4c3d782c9e1bc5cea27810 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$array5 = array (
);$array3['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array5);
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array10);
$array9['colPos'] = 8;
$array11 = array (
);$array9['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array11);
$arguments7['data'] = $array9;
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <div class="section-column subnav-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['debug'] = true;
$arguments12['partial'] = 'Navigation/Subnavigation';
$arguments12['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
                </div>
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['data'] = NULL;
$arguments15['typoscriptObjectPath'] = NULL;
$arguments15['currentValueKey'] = NULL;
$arguments15['table'] = '';
$arguments15['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array18);
$array17['colPos'] = 0;
$array19 = array (
);$array17['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array19);
$arguments15['data'] = $array17;
$renderChildrenClosure16 = ($arguments15['data'] !== null) ? function() use ($arguments15) { return $arguments15['data']; } : $renderChildrenClosure16;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
                </main>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['data'] = NULL;
$arguments20['typoscriptObjectPath'] = NULL;
$arguments20['currentValueKey'] = NULL;
$arguments20['table'] = '';
$arguments20['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array23);
$array22['colPos'] = 9;
$array24 = array (
);$array22['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array24);
$arguments20['data'] = $array22;
$renderChildrenClosure21 = ($arguments20['data'] !== null) ? function() use ($arguments20) { return $arguments20['data']; } : $renderChildrenClosure21;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output6 .= '

';

return $output6;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['section'] = NULL;
$arguments26['partial'] = NULL;
$arguments26['delegate'] = NULL;
$arguments26['renderable'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['optional'] = false;
$arguments26['default'] = NULL;
$arguments26['contentAs'] = NULL;
$arguments26['debug'] = true;
$arguments26['partial'] = 'Structure/FooterContent';
$arguments26['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '

';

return $output25;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output29 = '';

$output29 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'Default';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output29 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['data'] = NULL;
$arguments35['typoscriptObjectPath'] = NULL;
$arguments35['currentValueKey'] = NULL;
$arguments35['table'] = '';
$arguments35['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array38);
$array37['colPos'] = 3;
$array39 = array (
);$array37['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array39);
$arguments35['data'] = $array37;
$renderChildrenClosure36 = ($arguments35['data'] !== null) ? function() use ($arguments35) { return $arguments35['data']; } : $renderChildrenClosure36;
$output34 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '

';
return $output34;
};
$arguments32 = array();
$arguments32['name'] = NULL;
$arguments32['name'] = 'Border';

$output29 .= NULL;

$output29 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['data'] = NULL;
$arguments43['typoscriptObjectPath'] = NULL;
$arguments43['currentValueKey'] = NULL;
$arguments43['table'] = '';
$arguments43['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array46);
$array45['colPos'] = 8;
$array47 = array (
);$array45['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array47);
$arguments43['data'] = $array45;
$renderChildrenClosure44 = ($arguments43['data'] !== null) ? function() use ($arguments43) { return $arguments43['data']; } : $renderChildrenClosure44;
$output42 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <div class="section-column subnav-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['partial'] = 'Navigation/Subnavigation';
$arguments48['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output42 .= '
                </div>
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['data'] = NULL;
$arguments51['typoscriptObjectPath'] = NULL;
$arguments51['currentValueKey'] = NULL;
$arguments51['table'] = '';
$arguments51['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array54);
$array53['colPos'] = 0;
$array55 = array (
);$array53['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array55);
$arguments51['data'] = $array53;
$renderChildrenClosure52 = ($arguments51['data'] !== null) ? function() use ($arguments51) { return $arguments51['data']; } : $renderChildrenClosure52;
$output42 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output42 .= '
                </main>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['data'] = NULL;
$arguments56['typoscriptObjectPath'] = NULL;
$arguments56['currentValueKey'] = NULL;
$arguments56['table'] = '';
$arguments56['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array59);
$array58['colPos'] = 9;
$array60 = array (
);$array58['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array60);
$arguments56['data'] = $array58;
$renderChildrenClosure57 = ($arguments56['data'] !== null) ? function() use ($arguments56) { return $arguments56['data']; } : $renderChildrenClosure57;
$output42 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output42 .= '

';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'Main';

$output29 .= NULL;

$output29 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['renderable'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['debug'] = true;
$arguments64['partial'] = 'Structure/FooterContent';
$arguments64['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '

';
return $output63;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['name'] = 'Footer';

$output29 .= NULL;

$output29 .= '

';

return $output29;
}


}
#