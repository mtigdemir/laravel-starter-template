<?php

class Seo extends  Way\Database\Model {
    
    protected $table = 'seo';

    public function seoble()
    {
        return $this->morphTo();
    }
}