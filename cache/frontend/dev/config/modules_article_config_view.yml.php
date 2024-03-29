<?php
// auto-generated by sfViewConfigHandler
// date: 2012/03/07 01:01:28
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addStylesheet('bootstrap-responsive.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());


