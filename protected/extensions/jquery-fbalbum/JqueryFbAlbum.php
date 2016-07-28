<?php
/**
 * @author Bryan Jayson Tan <admin@bryantan.info>
 * @link http://bryantan.info
 * @date 1/8/13
 * @time 2:50 PM
 */
class JqueryFbAlbum extends CWidget
{
    public $id;

    /**
     * The Id of the Facebook page. Can be the Id or the username
     * @var string
     */
    public $pageId;

    /**
     * Ids of the albums you don't want to display. e.g. array('352683711441378','196199743756443')
     * @var array
     */
    public $exclude=array();

    /**
     * Parameters for the lightbox plugin. Please check http://leandrovieira.com/projects/jquery/lightbox/
     * @var array
     */
    public $lbOptions=array();

    /**
     * FB Album jquery options
     * @var array
     */
    public $options=array();

    /**
     * the tag where the album will be rendered
     * @var string
     */
    public $tag='div';

    /**
     * the options of the tag
     * @var array
     */
    public $tagOptions=array();

    /**
     * default to true
     * @var bool
     */
    public $enableFBScript=true;

    /**
     * language of the FB Scripts
     * @see facebook developer for more info
     * @var string
     */
    public $fbLanguage='en_EN';

    private $_assetsUrl=null;

    public function init(){
        parent::init();

        if (!$this->id){
            $this->id=$this->getId();
        }
        if (!$this->pageId){
            throw new CException('Page ID cannot be empty!');
        }
        $this->assignLightboxOptions();

        $this->getAssetsUrl();
    }

    public function run(){
        $cs = Yii::app()->getClientScript();

        $this->options['pageId']=$this->pageId;
        $this->options['exclude']=$this->exclude;

        $options=CJSON::encode($this->options);

        $cs = Yii::app()->getClientScript();
        $cs->registerScript(__CLASS__,"jQuery('#{$this->id}').fbalbum({$options})");

        $this->tagOptions['id']=$this->id;
        echo CHtml::tag($this->tag,$this->tagOptions);
    }

    /**
     * get assets URL
     */
    public function getAssetsUrl(){
        if ($this->_assetsUrl===null){
            $this->_assetsUrl = Yii::app()->assetManager->publish(dirname(__FILE__).'/assets',false,-1,YII_DEBUG);

            $cs = Yii::app()->getClientScript();
            $cs->registerCoreScript('jquery');
            // register fb album script
            $cs->registerScriptFile($this->_assetsUrl.'/js/jquery.fb-album.modify.js');
            $cs->registerCssFile($this->_assetsUrl.'/css/jquery.fb-album.css');

            $this->registerLightboxScript();
            $this->registerFBScript();
        }
        return $this->_assetsUrl;
    }

    /**
     * assign lightbox default options
     */
    protected function assignLightboxOptions(){
        if (!isset($this->lbOptions['imageBtnPrev'])){
            $this->lbOptions['imageBtnPrev']=$this->assetsUrl.'/images/lightbox-btn-prev.gif';
        }
        if (!isset($this->lbOptions['imageBtnNext'])){
            $this->lbOptions['imageBtnNext']=$this->assetsUrl.'/images/lightbox-btn-next.gif';
        }
        if (!isset($this->lbOptions['imageBlank'])){
            $this->lbOptions['imageBlank']=$this->assetsUrl.'/images/lightbox-blank.gif';
        }
        if (!isset($this->lbOptions['imageLoading'])){
            $this->lbOptions['imageLoading']=$this->assetsUrl.'/images/lightbox-ico-loading.gif';
        }
        if (!isset($this->lbOptions['imageBtnClose'])){
            $this->lbOptions['imageBtnClose']=$this->assetsUrl.'/images/lightbox-btn-close.gif';
        }
        if (!isset($this->lbOptions['fixedNavigation'])){
            $this->lbOptions['fixedNavigation']=false;
        }

        $this->options['lb']=$this->lbOptions;
    }

    /**
     * register lightbox script
     */
    protected function registerLightboxScript(){
        $cs = Yii::app()->getClientScript();
        // register lightbox script
        $cs->registerScriptFile($this->_assetsUrl.'/js/jquery.lightbox-0.5.pack.js');
        $cs->registerCssFile($this->_assetsUrl.'/css/jquery.lightbox-0.5.css');
    }

    /**
     * register facebook script
     */
    protected function registerFBScript(){
        $cs = Yii::app()->getClientScript();
        if ($this->enableFBScript===true){
            $cs->registerScriptFile("http://connect.facebook.net/{$this->fbLanguage}/all.js");
        }else{
        }
    }
}