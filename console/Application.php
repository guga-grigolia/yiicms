<?php
/**
 * User: zura
 * Date: 3/1/19
 * Time: 1:18 PM
 */

namespace intermundia\yiicms\console;

use intermundia\yiicms\models\BaseModel;
use intermundia\yiicms\models\ContentTree;
use intermundia\yiicms\traits\MultiDomainTrait;

/**
 * Class Application
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package intermundia\yiicms\base
 */
class Application extends \yii\console\Application
{
    use MultiDomainTrait;
    /**
     * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
     * @var ContentTree
     */
    public $websiteContentTree = null;
    public $pageContentTree = null;
    public $websiteMasterLanguage = null;
    public $websiteKey = null;

    /**
     * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
     * @var BaseModel[]
     */
    public $baseModelObjects = [];
}