<?php

declare(strict_types=1);

namespace Somuoki\Support\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Somuoki\Support\Validators\UniqueWithValidator;
use Illuminate\Support\Facades\Validator as ValidatorFacade;
use Illuminate\Support\Facades\Lang;

class SupportServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        // Add strip_tags validation rule
        Validator::extend('strip_tags', function ($attribute, $value) {
            return is_string($value) && strip_tags($value) === $value;
        }, Lang::get('validation.invalid_strip_tags'));

        // Add time offset validation rule
        Validator::extend('timeoffset', function ($attribute, $value) {
            return array_key_exists($value, timeoffsets());
        }, Lang::get('validation.invalid_timeoffset'));

        Collection::macro('similar', function (Collection $newCollection) {
            $currentItems = $this instanceof Collection ? $this->toArray() : (array) $this;
            $newItems = $newCollection->toArray();
            return empty(array_diff($currentItems, $newItems)) &&
                   empty(array_diff($newItems, $currentItems));
        });

        // Add support for unique_with validator
        ValidatorFacade::extend('unique_with', UniqueWithValidator::class.'@validateUniqueWith', Lang::get('validation.unique_with'));
        ValidatorFacade::replacer('unique_with', function () {
            return call_user_func_array([new UniqueWithValidator(), 'replaceUniqueWith'], func_get_args());
        });
    }
}
