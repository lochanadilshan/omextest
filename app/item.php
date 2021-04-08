<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=[
        'pTitle',
        'pDescription',
        'pPrice',
        'pAvailability',
        'pCategory',
        'pManufacturer',
        'pChipset',
        'pSize',
        'pResolution',
        'pScreenSize',
        'pPanelType',
        'pRefreshRate',
    ];
}
