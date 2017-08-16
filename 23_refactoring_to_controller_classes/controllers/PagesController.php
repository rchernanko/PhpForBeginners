<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');
        return view('homepage', compact($users));
        //Pretty cool function (compact!)...
        //Is the equivalent of doing this : [ 'users' => $users ]
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

//For now, we will create the view function in the bootstrap.php file.
//But if we were to have a lot of helper functions like this, we could put them all in a separate
//helper function file + autoload it