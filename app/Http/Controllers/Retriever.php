<?php

namespace App\Http\Controllers;

class Retriever extends Controller {

    public function index() {

        $cards = config('db-prodotti');

/* costruisco un array contenente solo i tipo, senza duplicati*/
        $flags = [];
        foreach ($cards as $item) {
            $currentFlag = $item['tipo'];
            if (!in_array($currentFlag, $flags)) {
                $flags[] = $item['tipo'];
            }
        }

        return view('prodotti', compact('cards', 'flags'));

    }

}
