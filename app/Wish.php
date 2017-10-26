<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    //
    public $comics = null;
    public $totalWishQuantity = 0;
    public $totalWishPrice = 0;

    public function __construct($oldWish)
    {
        if ($oldWish) {


            $this->comics = $oldWish->comics;
            $this->totalWishQuantity = $oldWish->totalWishQuantity;
            $this->totalWishPrice = $oldWish->totalWishPrice;
        }
    }

    public function addWish($item , $id)
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
        $this->totalWishPrice += $item->price;
        $this->totalWishQuantity++;
    }
}
