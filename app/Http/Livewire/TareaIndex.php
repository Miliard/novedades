<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Livewire\WithPagination;

class TareaIndex extends Component
{
    use WithPagination;
    
    public $busquedad = '';
    public $pag

    public function render()
    {
        $tareas = $this->consulta();
        $params = [
            'tareas' => $tareas->get(),
        ];
        return view('livewire.tarea-index', $params);
    }

    private function consulta ()
    {
        $query = Tarea::orderByDesc('id');
        if ($this->busquedad != '')
        {
            $query->where('nombre', 'LIKE', '%' .$this->busquedad. '%');

        }
        return $query;
    }
}
