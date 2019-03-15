<?php

namespace App\Constracts\Eloquent;

interface BaseRepository {

    public function all();
    
    public function create($data = []);

    public function find($id);

    public function fill($id);

    public function destroy($id);
}