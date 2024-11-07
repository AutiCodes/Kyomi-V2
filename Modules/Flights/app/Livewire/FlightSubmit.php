<?php

namespace Modules\Flights\Livewire;

use Livewire\Component;
use Modules\Users\Models\User;
use Modules\Flights\Models\Flight;
use Livewire\Attributes\Validate;

class FlightSubmit extends Component
{
    #[Validate('required|integer|max:25')]
    public $name = '';

    #[Validate('required|date|max:12')]
    public $date = '';

    #[Validate('required|max:6')]
    public $start_time = '';

    #[Validate('required|max:6')]
    public $end_time = '';

    #[Validate('required|integer|max:6')]
    public $model_type = '';

    #[Validate('required|integer|max:6')]
    public $power_type = '';

    #[Validarw('reuired|integer')]
    public $rechapcha_custom = '';

    public function store()
    {
        $this->validate();

        if (intval($this->rechapcha_custom) != 4) {
            session()->flash('error', 'Bot vraag incorrect!');
            return redirect('/flights/create')->with('error', 'Bot vraag incorrect!');
        }

        $flight = Flight::create([
            'date' => $this->date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time
        ]);
    }

    public function render()
    {
        return view('flights::livewire.flight-submit', [
            'users' => User::orderBy('name', 'DESC')->get(),
        ]);
    }
}
