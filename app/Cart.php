<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $comics = null;
    public $totalCartQuantity = 0;
    public $totalCartPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {


            $this->comics = $oldCart->comics;
            $this->totalCartQuantity = $oldCart->totalCartQuantity;
            $this->totalCartPrice = $oldCart->totalCartPrice;
        }
    }

    public function addComic($item , $id)
    {
        $storedItem = ['item' => $item , 'qty' => 0, 'price' => $item->price ];
        if ($this->comics){
            if (array_key_exists($id,$this->comics)){
                $storedItem = $this->comics[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->comics[$id] = $storedItem;
        $this->totalCartPrice += $item->price;
        $this->totalCartQuantity++;
    }
}
