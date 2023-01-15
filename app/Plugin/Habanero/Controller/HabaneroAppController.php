<?php

/**
 * Front Slot App Controller
 *
 * Handles Slot App Actions
 *
 * @package    Slot.Controller
 * @author     
 * @copyright  
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: @package_version@
 * @link       
 */
App::uses('AppController', 'Controller');

class HabaneroAppController extends AppController {

    /**
     * Controller name
     * @var $name string
     */
    public $name = 'HabaneroApp';

    /**
     * Paginate
     * @var array
     */
    public $paginate = array();

    /**
     * Models
     * @var array
     */
    public $uses = array('Habanero.Habanero', 'Habanero.HabaneroGames', 'Habanero.HabaneroLogs', 'Habanero.HabaneroAppModel', 'IntGames.IntGame', 'IntGames.IntBrand', 'IntGames.IntCategory', 'Currency', 'Language','User');

    /**
     * Called before the controller action.
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->plugin = 'Habanero';
        Configure::load($this->plugin . '.' . $this->plugin);

        if (Configure::read($this->plugin . '.Config') == 0)
            throw new Exception('Config not found', 500);
        $this->config = Configure::read($this->plugin . '.Config');
    }

}