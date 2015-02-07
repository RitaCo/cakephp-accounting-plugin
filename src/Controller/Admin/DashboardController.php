<?php
namespace Accunting\Controller\Admin;

use Accunting\Controller\AppController;

/**
 * Dashboard Controller
 *
 * @property RequirementsManager\Model\Table\DashboardTable $Dashboard
 */
class DashboardController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        
    }

    /**
     * View method
     *
     * @param string|null $id Dashboard id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException
     */
    public function view($id = null)
    {
        $dashboard = $this->Dashboard->get($id, [
        'contain' => []
        ]);
        $this->set('dashboard', $dashboard);
    }

    /**
     * Add method
     *
     * @return void
     */
    public function add()
    {
        $dashboard = $this->Dashboard->newEntity($this->request->data);
        if ($this->request->is('post')) {
            if ($this->Dashboard->save($dashboard)) {
                $this->Flash->success('The dashboard has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The dashboard could not be saved. Please, try again.');
            }
        }
        $this->set(compact('dashboard'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dashboard id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException
     */
    public function edit($id = null)
    {
        $dashboard = $this->Dashboard->get($id, [
        'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dashboard = $this->Dashboard->patchEntity($dashboard, $this->request->data);
            if ($this->Dashboard->save($dashboard)) {
                $this->Flash->success('The dashboard has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The dashboard could not be saved. Please, try again.');
            }
        }
        $this->set(compact('dashboard'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dashboard id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException
     */
    public function delete($id = null)
    {
        $dashboard = $this->Dashboard->get($id);
        $this->request->allowMethod(['post', 'delete']);
        if ($this->Dashboard->delete($dashboard)) {
            $this->Flash->success('The dashboard has been deleted.');
        } else {
            $this->Flash->error('The dashboard could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
