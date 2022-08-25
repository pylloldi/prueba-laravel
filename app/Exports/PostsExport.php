<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


class PostsExport implements FromQuery
{
    use Exportable;

    public function __construct($by, $q, $category_id)
    {
        $this->by = $by;
        $this->q = $q;
        $this->category_id = $category_id;
    }

    public function query()
    {
        if(!$this->q && !$this->category_id)
        {
            return Post::query()->latest()
            ->take(20)
            ->with('user');           
        }
        else 
        {
            if($this->by == 'title') 
            {
                return Post::query()->select()
                    ->with('user')
                    ->where('title', 'like', $this->q .'%')
                    ->orWhere('description', 'like', $this->q .'%');                
            }
            else 
            {
                return Post::query()->where('category_id', '=', $this->category_id)
                ->with('category');                
            }
        }
        
    }
}
