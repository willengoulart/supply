<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 *
 * @method \App\Model\Entity\Produto[] paginate($object = null, array $settings = [])
 */
class ProdutosController extends AppController
{

	public function initialize(){
		parent::initialize();
		$this->Auth->allow('view');
	}
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias']
        ];
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
        $this->set('_serialize', ['produtos']);
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => ['Categorias']
        ]);

        $this->set('produto', $produto);
        $this->set('_serialize', ['produto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
            	if(!empty($this->request->getData('img_arquivo'))){
            		$file = $this->request->getData('img_arquivo');
            		move_uploaded_file ($file['tmp_name'], WWW_ROOT.'files'.DS.'produtos'.DS.$produto->id.'.png');
            		$produto->image = WWW_ROOT.'files'.DS.'produtos'.DS.$produto->id.'.png';
            		$this->Produtos->save($produto);
            	}
                $this->Flash->success(__('Produto salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Produto não salvo'));
        }
        $categorias = $this->Produtos->Categorias->find('list', ['limit' => 200]);
        $promocoes = $this->Produtos->Promocoes->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'categorias', 'promocoes'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
            	if(!empty($this->request->getData('img_arquivo'))){
            		$file = $this->request->getData('img_arquivo');
            		move_uploaded_file ($file['tmp_name'], WWW_ROOT.'files'.DS.'produtos'.DS.$produto->id.'.png');
            		$produto->image = 'files'.DS.'produtos'.DS.$produto->id.'.png';
            		$this->Produtos->save($produto);
            	}
                $this->Flash->success(__('Produto salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Produto não salvo'));
        }
        $categorias = $this->Produtos->Categorias->find('list', ['limit' => 200]);
        $promocoes = $this->Produtos->Promocoes->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'categorias', 'promocoes'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('Produto salvo'));
        } else {
            $this->Flash->error(__('Produto não salvo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
