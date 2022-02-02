<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema()
 */

class Article extends Model
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
     * title
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="required, max length 255",
     *   example="title1"
     * )
     */
    private $title;

    /**
     * description
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="required, max length 255",
     *   example="description1"
     * )
     */
    private $description;

    /**
     * category_id
     * @var int
     * @OA\Property(
     *   type="int",
     *   description="not required, foreign key to category",
     *   example=1
     * )
     */
    private $category_id;

    /**
     * body
     * @var string
     * @OA\Property(
     *   type="string",
     *   description="required, max length 5000",
     *   example="This is an article body."
     * )
     */
    private $body;

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

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
