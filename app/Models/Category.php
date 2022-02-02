<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema()
 */

class Category extends Model
{
    use HasFactory;

    /**
     * id
     * @var int
     * @OA\Property(
     *   type="int",
     *   description="unique, incremented automatically",
     *   example=1,
     *   readOnly=true
     * )
     */
    private $id;

    /**
     * name
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="required, max length 255",
     *   example="name1"
     * )
     */
    private $name;

    /**
     * slug
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="required, max length 255",
     *   example="slug-1"
     * )
     */
    private $slug;

    /**
     * created_at
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="not required, auto-generated",
     *   example="2020-01-01 00:00:00",
     *   readOnly=true,
     *   format="date-time",
     *   example="2020-01-01 00:00:00"
     * )
     */
    private $created_at;

    /**
     * updated_at
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="not required, auto-generated",
     *   example="2020-01-01 00:00:00",
     *   readOnly=true,
     *   format="date-time",
     *   example="2020-01-01 00:00:00"
     * )
     */
    private $updated_at;

    public function articles()
    {
        return $this->hasMany('App/Models/Article');
    }
}
