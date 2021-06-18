<?php

namespace App\Http\Livewire\Traits;

trait InteractWithModalTrait
{
	protected function openModal(string $form, $params = [], ?string $modalSize = null)
	{
		$this->emitTo('components.modal-component', 'showModal', $form, $params, $modalSize);
	}

	protected function closeModal()
	{
		$this->emitTo('components.modal-component', 'closeModal');
		$this->closeDeleteModal();
	}

	public function closeDeleteModal()
	{
		$this->emitTo('components.delete-modal', 'closeModal');
	}

	protected function deleteModal($modal)
	{
		$params = [
			'id' => $modal->id,
			'className' => get_class($modal)
		];
		$this->emitTo('components.delete-modal', 'deleteModal', $params);
	}
}
