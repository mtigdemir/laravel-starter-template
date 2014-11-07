<?php

/**
 * Seo
 *
 * @property-read \ $seoble
 * @property integer $id
 * @property integer $seoble_id
 * @property string $description
 * @property string $keywords
 * @property string $seoble_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Seo whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Seo whereSeobleId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Seo whereDescription($value) 
 * @method static \Illuminate\Database\Query\Builder|\Seo whereKeywords($value) 
 * @method static \Illuminate\Database\Query\Builder|\Seo whereSeobleType($value) 
 * @method static \Illuminate\Database\Query\Builder|\Seo whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Seo whereUpdatedAt($value) 
 */
class Seo extends  Way\Database\Model {
    
    protected $table = 'seo';

    public function seoble()
    {
        return $this->morphTo();
    }
}