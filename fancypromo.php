<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class FancyPromo extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'fancypromo';
        $this->tab = 'others';
        $this->version = '1.1.0';
        $this->author = 'darwin';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('FancyPromo');
        $this->description = $this->l('');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall');
        $this->ps_versions_compliancy = array('min' => '1.6.0.4', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {

        return parent::install() &&
            $this->registerHook('displayLeftColumnProduct');
    }

    public function uninstall()
    {
       

        return parent::uninstall();
    }

    

  

   

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookdisplayLeftColumnProduct()
    {
        // $this->context->controller->addJS($this->_path.'/views/js/front.js');
        //$this->context->controller->addCSS($this->_path.'/views/css/front.css');

        $id_customer = $this->context->customer->id;

        $customergroup = Customer::getDefaultGroupId((int)$id_customer);
       
        if($customergroup == 6){ 
             return $this->display(__FILE__, 'views/templates/front/column.tpl');
        }

       
       
    }
}
