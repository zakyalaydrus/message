<?php
namespace mzakyalaydrus\message;
use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider{
    public function boot()
    {
        // require __DIR__.'/routes/routes.php';
    }

    public function register()
    {
        $this->app->bind('message', function(){
            return new Message();
        });
    }
}