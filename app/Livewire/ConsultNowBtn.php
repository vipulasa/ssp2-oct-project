<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class ConsultNowBtn extends Component
{

    public $doctor;

    public function consultNow()
    {

        // check if the user is logged in
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // check if the user already has a cart with the same doctor and payment is not completed
        $cart = Cart::where('user_id', auth()->id())
            ->where('is_paid', 0)
            ->first();

        if ($cart) {
            $cart->update([
                'hospital_id' => $this->doctor->hospital_id,
                'user_id' => auth()->id(),
                'doctor_id' => $this->doctor->id,
                'consultation_fee' => $this->doctor->consultation_fee
            ]);
        } else {
            $cart = (new Cart())->create([
                'hospital_id' => $this->doctor->hospital_id,
                'user_id' => auth()->id(),
                'doctor_id' => $this->doctor->id,
                'consultation_fee' => $this->doctor->consultation_fee
            ]);
        }

        return redirect()->route('cart.index', $cart->id);

    }

    public function render()
    {
        return view('livewire.consult-now-btn');
    }
}
