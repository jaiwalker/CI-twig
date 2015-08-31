<?php
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'third_party/Twig/lib/Twig');
/**
 *
 * @author JaiKora <kora.jayaram@gmail.com>
 * @gihub  -  https://github.com/jaiwalker
 */
class customExtension  extends Twig_Extension
{
    
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    function getName()
    {
       return "customExtension";
    }

    public function getFilters()
    {
        return array(
           'asset'      => new Twig_Filter_Method($this,'twig_asset_filter'),
        );
    }

    function twig_asset_filter($path)
    {
        return 'assets/'.$path;
    }


}