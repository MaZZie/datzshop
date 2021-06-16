<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ModalComponent extends Component
{
    public bool $isOpen = false;
    public $opacity = '0';
    public string $type = '';
    public array $params = [];
    public string $modalSize = 'md:max-w-xl';

    protected $listeners = [
        'showModal' => 'open',
        'closeModal' => 'close',
        'deleteModal' => 'delete',
    ];

    public function open(string $type, array $params = [], ?string $modalSize = null)
    {
        dd("Welcome to the open modal");
        $this->isOpen = true;
        $this->type = $type;
        $this->params = $params;
        $this->opacity = 100;

        if($modalSize){
            $this->modalSize = $modalSize;
        }
    }

    public function delete($params, string $form = 'admin.forms.base-delete-form')
    {
        return $this->open($form, $params);
    }

    public function close()
    {
        $this->opacity = 0;
        $this->isOpen = false;
    }
    
    public function render()
    {
        return view('livewire.components.modal-component');
    }
}
