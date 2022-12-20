<?php
<#assign licenseFirst = "/* ">
<#assign licensePrefix = " * ">
<#assign licenseLast = " */">
<#include "${project.licensePath}">

<#if namespace?? && namespace?length &gt; 0>
namespace ${namespace};
</#if>

use Yii;
use yii\console\Controller;

/**
 * Description of ${name}
 *
 * @author ${user}
 */
class ${name} extends Controller
{
    public function actionIndex()
    {
        echo "${name}/index\n";
        return true;
    }
    
    //put your code here
}
