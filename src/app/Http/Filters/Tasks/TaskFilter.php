<?php

namespace App\Http\Filters\Tasks;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class TaskFilter extends AbstractFilter
{
    public const SEARCH = "search";
    public const DATE = "date";

    protected function getCallbacks(): array
    {
        return [
            self::SEARCH => [$this, "search"],
            self::DATE => [$this, "date"],
        ];
    }

    public function search(Builder $builder, $search)
    {
        $builder->where("title", "LIKE", "%{$search}%");
    }

    public function date(Builder $builder, $date)
    {
        if ($date === "new") $builder->orderByDesc("created_at");
        else $builder->orderBy("created_at");
    }
}