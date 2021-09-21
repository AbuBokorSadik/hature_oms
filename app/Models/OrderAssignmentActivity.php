<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderAssignmentActivity extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, 'status_id');
    }
}
