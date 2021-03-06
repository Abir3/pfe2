<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',
                    ['loginAction' => [
                        'controller' => 'Users',
                        'action' => 'login'
                     ],'authenticate' => [
                          'Form' => [
                            'fields' => [
                              'username' => 'email',
                              'password' => 'password',
                             ]
                           ]
                     ],'loginRedirect' => [
                         'controller' => 'Pages',
                         'action' => 'index'
                     ],
                ]);
    }
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    

    function beforeFilter(Event $event){

        $tables = ConnectionManager::get('default')->schemaCollection()->listTables();
        $this->Auth->allow(['index', 'view', 'display']);

        $this->set(compact('tables'));
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        $categories = TableRegistry::get('Categories');
        $cats = $categories->find('all',array('fields'=>array('Id','Title')))->toarray();

        $sections = TableRegistry::get('Sections');
        $sec = $sections->find('all',array('fields'=>array('Id','Title')))->toarray();


        $categories = array_column($cats, 'Title','Id');
        $sections = array_column($sec, 'Title','Id');
        $this->set('categories', $categories);
        $this->set('sections', $sections);
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);

        }
    }
}
