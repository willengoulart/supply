<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Promocoes Controller
 *
 * @property \App\Model\Table\PromocoesTable $Promocoes
 *
 * @method \App\Model\Entity\Promoco[] paginate($object = null, array $settings = [])
 */
class PromocoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $promocoes = $this->paginate($this->Promocoes);

        $this->set(compact('promocoes'));
        $this->set('_serialize', ['promocoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Promoco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $promoco = $this->Promocoes->get($id, [
            'contain' => []
        ]);

        $this->set('promoco', $promoco);
        $this->set('_serialize', ['promoco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $promoco = $this->Promocoes->newEntity();
        if ($this->request->is('post')) {
            $promoco = $this->Promocoes->patchEntity($promoco, $this->request->getData());
            if ($this->Promocoes->save($promoco)) {
                $this->Flash->success(__('The promoco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The promoco could not be saved. Please, try again.'));
        }
        $this->set(compact('promoco'));
        $this->set('_serialize', ['promoco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Promoco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $promoco = $this->Promocoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $promoco = $this->Promocoes->patchEntity($promoco, $this->request->getData());
            if ($this->Promocoes->save($promoco)) {
                $this->Flash->success(__('The promoco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The promoco could not be saved. Please, try again.'));
        }
        $this->set(compact('promoco'));
        $this->set('_serialize', ['promoco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Promoco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $promoco = $this->Promocoes->get($id);
        if ($this->Promocoes->delete($promoco)) {
            $this->Flash->success(__('The promoco has been deleted.'));
        } else {
            $this->Flash->error(__('The promoco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
