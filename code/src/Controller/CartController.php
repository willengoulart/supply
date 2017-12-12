<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cart Controller
 *
 *
 * @method \App\Model\Entity\Cart[] paginate($object = null, array $settings = [])
 */
class CartController extends AppController
{
	
	public function initialize(){
		parent::initialize();
		$this->Auth->allow();
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
    	$this->loadModel('Produtos');
    	$ids = [];
    	if($this->request->session()->check('Cart'))
    		$ids = $this->request->session()->read('Cart');
    	if(!empty($ids)){
    		$produtos = $this->Produtos->find()->where(['id IN'=>$this->request->session()->read('Cart')]);
    	}else{
    		$produtos = [];
    	}
    	$this->set('produtos', $produtos);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {
    	$this->request->session()->write('Cart.'.$id, $id);
        $this->Flash->success(__('Produto adicionado ao carrinho!'));
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    	$this->request->session()->delete('Cart.'.$id);
    	$this->Flash->success(__('Produto removido do carrinho!'));
    	return $this->redirect(['action' => 'index']);
    }
}
