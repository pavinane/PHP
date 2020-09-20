<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo "<h1> Fluent  Strings</h1>";  

        /* After Methods - It is return everything after the giving value in a string*/

        $slice = Str::of("Welcome to a Fluent page") ->after('Welcome to');
        echo $slice . '<br>';

        /*AfterLast - function returns everything after the last occurrence of the given value in a string */
        $slice2 = Str::of('App\Http\Controllers\FluentController')->afterLast('\\');
        echo $slice2 . '<br>';

        #String--Append method -> join the different words
        $string = Str::of('Hello')->append('World!');
        echo $string . '<br>';
        
        /*lower Method ->uppercaser  to convert lowercase */
        $result = Str::of('LARAVEL 8')-> lower();
        echo $result . '<br>';

        /*Replace */
        $replace = Str::of('Laravel 7.0')-> replace('7.0','8.0');
        echo $replace . '<br>';

        /* Title */
        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';

       /* Slug Method */
       $slug = Str::of('Laravel 8 Framework')->slug('-');
       echo $slug . '<br>';

       /*substr -> length parameter */
        $str = Str::of('Laravel Frameworks')->substr(8,5);
        echo $str . '<br>';

        /*Trim  */
        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2 . '<br>';

        /*Upper Method ->lowercase   to convert uppercaser */
        $str3 = Str::of('pavinane')-> upper();
        echo $str3 . '<br>';

    }
}
