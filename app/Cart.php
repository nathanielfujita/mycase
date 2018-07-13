<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     public function users()
    {
        
         return $this->belongsToMany(User::class, 'carts', 'user_id', 'item_id')->withTimestamps();
    }
        
     public function addcart($id)
    {
     //既にカートに入っているかの確認
     $exist = $this->is_carting($id);

    if ($exist) {
        // 既にカートに入っていれば何もしない
        return false;
    } else {
        // カートに入っていればればカートに追加する
        $this->addcart()->attach($id);
        return true;
    }
}

    public function discart($id)
    {
    //既にカートに入っているかの確認
     $exist = $this->is_carting($id);

    
        $this->addcart()->detach($id);
        
    }
    
    
    public function is_carting($id) {
    return $this->is_carting()->where('item_id', $id)->exists();

    }
} 