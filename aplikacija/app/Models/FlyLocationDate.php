<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @property string $laikas
 * @property string $vieta
 * @property string $busena
 */
class FlyLocationDate extends Model
{
    use HasFactory;

    protected $table = 'fly_location_date';
    protected $guarded = [];
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\FlyLocationDate  $flylocationdate
 * @return Response
 */

