<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * OsceSkills4 Controller
 *
 * @property \App\Model\Table\OsceSkills4Table $OsceSkills4
 */
class OsceSkills4Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Nursings']
        ];
        $osceSkills4 = $this->paginate($this->OsceSkills4);

        $this->set(compact('osceSkills4'));
        $this->set('_serialize', ['osceSkills4']);
    }

    /**
     * View method
     *
     * @param string|null $id Osce Skills4 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $osceSkills4 = $this->OsceSkills4->get($id, [
            'contain' => ['Nursings']
        ]);

        $this->set('osceSkills4', $osceSkills4);
        $this->set('_serialize', ['osceSkills4']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $osceSkills4 = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkills4 = $this->OsceSkills4->patchEntity($osceSkills4, $this->request->data);
            if ($this->OsceSkills4->save($osceSkills4)) {
                $this->Flash->success(__('The osce skills4 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The osce skills4 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->OsceSkills4->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('osceSkills4', 'nursings'));
        $this->set('_serialize', ['osceSkills4']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Osce Skills4 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $osceSkills4 = $this->OsceSkills4->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $osceSkills4 = $this->OsceSkills4->patchEntity($osceSkills4, $this->request->data);
            if ($this->OsceSkills4->save($osceSkills4)) {
                $this->Flash->success(__('The osce skills4 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The osce skills4 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->OsceSkills4->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('osceSkills4', 'nursings'));
        $this->set('_serialize', ['osceSkills4']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Osce Skills4 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $osceSkills4 = $this->OsceSkills4->get($id);
        if ($this->OsceSkills4->delete($osceSkills4)) {
            $this->Flash->success(__('The osce skills4 has been deleted.'));
        } else {
            $this->Flash->error(__('The osce skills4 could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


   public function Oskills($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

    

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>1]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }


    public function Oskills2($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        
      

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
       $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>2]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills3($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>3]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills4($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>4]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills5($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

    

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>5]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills6($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>6]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills7($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>7]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills8($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

    

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>4],['Question_sem'=>8]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills4->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills4']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills4']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills4']['osceSkill_sta4'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills4->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills4->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills4->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }
}
