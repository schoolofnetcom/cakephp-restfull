<?php


namespace App\Controller\Api\V1;

use App\Controller\Api\V1\AppController;

class PropertiesController extends AppController
{
    use \Crud\Controller\ControllerTrait;

    public function view($id = null)
    {
        $this->Crud->on('beforeFind', function(\Cake\Event\Event $event) {
            $event->subject()->query->contain(['PropertiesTypes', 'Districts']);
        });
        return $this->Crud->execute();
    }
}