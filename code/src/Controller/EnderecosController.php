<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 *
 * @method \App\Model\Entity\Endereco[] paginate($object = null, array $settings = [])
 */
class EnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $enderecos = $this->paginate($this->Enderecos);

        $this->set(compact('enderecos'));
        $this->set('_serialize', ['enderecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['Clientes', 'Vendas']
        ]);

        $this->set('endereco', $endereco);
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('Endereço salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Endereço não salvo'));
        }
        $clientes = $this->Enderecos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'clientes'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['Clientes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('Endereço salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Endereço não salvo'));
        }
        $clientes = $this->Enderecos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'clientes'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('Endereço salvo'));
        } else {
            $this->Flash->error(__('Endereço não salvo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
