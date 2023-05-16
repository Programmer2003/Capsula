<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class BlogFilter extends AbstractFilter
{
    public const CAPTION = 'caption';
    public const AUTHOR = 'author';

    protected function getCallbacks(): array
    {
        return [
            self::CAPTION => [$this, 'caption'],
            self::AUTHOR => [$this, 'author'],
        ];
    }

    public function caption(Builder $builder, $value)
    {
        $builder->where('caption', 'like', "%{$value}%");
    }

    public function author(Builder $builder, $value)
    {
        $builder->where('author', $value);
    }
}
