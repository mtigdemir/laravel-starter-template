<?php

class Seo extends Eloquent {
    
    protected $table = 'seo';

    public function seoble()
    {
        return $this->morphTo();
    }
}