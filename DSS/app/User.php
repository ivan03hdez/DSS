<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use Sortable;
    protected $sortable = ['id','name', 'email', 'password','role','phone','address','image'];
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','phone','address','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function cart() {
        return $this->hasOne('App\ShoppingCart');
    }
    public function favLists() {
        return $this->hasMany('App\FavoriteList');
    }
    public function orders() {
        return $this->hasMany('App\Order');
    }
    public function numberOfLists($userId){
        $count = FavoriteList::where('user_id',$userId)->get('id')->count();
        return $count;
    }
    public function numberOfOrders($userId){
        $count = Order::where('user_id',$userId)->get('id')->count();
        return $count;
    }
}
