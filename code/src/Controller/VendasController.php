<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendas Controller
 *
 * @property \App\Model\Table\VendasTable $Vendas
 *
 * @method \App\Model\Entity\Venda[] paginate($object = null, array $settings = [])
 */
class VendasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Enderecos']
        ];
        $vendas = $this->paginate($this->Vendas);

        $this->set(compact('vendas'));
        $this->set('_serialize', ['vendas']);
    }

    /**
     * View method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => ['Clientes', 'Enderecos']
        ]);

        $this->set('venda', $venda);
        $this->set('_serialize', ['venda']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venda = $this->Vendas->newEntity();
        if ($this->request->is('post')) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('Venda salva'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Venda não salva'));
        }
        $clientes = $this->Vendas->Clientes->find('list', ['limit' => 200]);
        $enderecos = $this->Vendas->Enderecos->find('list', ['limit' => 200]);
        $this->set(compact('venda', 'clientes', 'enderecos'));
        $this->set('_serialize', ['venda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('Venda salva'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Venda não salva'));
        }
        $clientes = $this->Vendas->Clientes->find('list', ['limit' => 200]);
        $enderecos = $this->Vendas->Enderecos->find('list', ['limit' => 200]);
        $this->set(compact('venda', 'clientes', 'enderecos'));
        $this->set('_serialize', ['venda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('Venda salva'));
        } else {
            $this->Flash->error(__('Venda não salva'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
