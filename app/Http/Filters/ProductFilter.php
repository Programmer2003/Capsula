<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const MIN_PRICE = 'min';
    public const MAX_PRICE = 'max';
    public const CATEGORY_ID = 'category_id';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::MIN_PRICE => [$this, 'minPrice'],
            self::MAX_PRICE => [$this, 'maxPrice'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function minPrice(Builder $builder, $value)
    {
        $builder->where('price', '>=', $value);
    }

    public function maxPrice(Builder $builder, $value)
    {
        $builder->where('price', '<=', $value);
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
