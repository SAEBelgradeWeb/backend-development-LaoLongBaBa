<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    /*
     homepage
    */
    public function home()
    {
        //cheack data from commodity table
        $commodity = App::get('database')->selectAll('commodity');
        return view('index', compact('commodity'));
    }

    /*
     add to cart
     $c_id Product ID
    */
    public function add_cart()
    {
 
        $commodity_id = $_GET['c_id'];

        $commodity = App::get('database')->selectOne('commodity', [], ['id' =>  $commodity_id]);
        if (!empty($_SESSION['cart'][$commodity_id])) {
            $commodity[0]->num = $_SESSION['cart'][$commodity_id][0]->num + 1; //if in the cart than product +1
            $_SESSION['cart'][$commodity_id] = $commodity;
        } else {
            $commodity[0]->num = 1;
        }
        $total = 0;
        $_SESSION['cart'][$commodity_id] = $commodity; //product save in the session
        return  view('cart_list', compact('total'));
    }
    /*
    cart page
     */
    public function cart_list()
    {
        $total = 0;
        return  view('cart_list', compact('total'));
    }
    /*
     Product +
    */
    public function plus_cart()
    {
        $c_id = $_GET['c_id'];
        $total = 0;
        $plus_num = $_SESSION['cart'][$c_id][0]->num + 1;
        $_SESSION['cart'][$c_id][0]->num = $plus_num;


        return  view('cart_list', compact('total'));
    }

    /*
    Products -
    */
    public function reduce_cart()
    {
        $c_id = $_GET['c_id'];
        $total = 0;
        if ($_SESSION['cart'][$c_id][0]->num <= 1) {
            $plus_num = 1;
            $_SESSION['cart'][$c_id][0]->num = $plus_num;
        } else {
            $plus_num = $_SESSION['cart'][$c_id][0]->num - 1;
            $_SESSION['cart'][$c_id][0]->num = $plus_num;
        }

        return  view('cart_list', compact('total'));
    }

    /*
     Products delete
    */
    public function delete_cart()
    {

        $c_id = $_GET['c_id'];
        $total = 0;
        unset($_SESSION['cart'][$c_id]);
        return  view('cart_list', compact('total'));
    }
}
