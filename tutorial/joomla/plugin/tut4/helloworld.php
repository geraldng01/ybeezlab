<?php

// no direct access
defined('_JEXEC') or die;

class plgContentHelloworld extends JPlugin
{
    public function onContentAfterTitle($context, &$article, &$params, $limitstart)
        {
				if($this->params->get('alt-text'))
                        return $this->params->get('alt-text') . " : " . $this->params->get('color') . " : " . $this->params->get('font-size');
                else
                        return "<p>Hello World!</p>";
        }
}

?>