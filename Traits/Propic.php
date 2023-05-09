<?php

trait Propic {

    protected $image_url;

    public function getPictureUrl(){
        return $this->image_url;
    }

    public function setPictureUrl($url){
        if(!str_contains($url, 'http')){
                throw Exception("L'url deve inizare con http");
        } else {
            $this->image_url = $url;
        }
    }

}