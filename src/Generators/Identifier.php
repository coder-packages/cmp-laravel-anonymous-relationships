<?php

namespace Larapackages\AnonymousRelationships\Generators;

class Identifier
{
    protected $cache;

    public function generate($id)
    {
        if ($this->inCache($id)) {
            return $this->fromCache($id);
        }

        return $this->addToCache($id, hash('sha256', $id . config('app.key')));
    }

    public function addToCache($key, $value)
    {
        $this->cache[$key] = $value;

        return $value;
    }

    public function inCache($key)
    {
        return isset($this->cache[$key]);
    }

    public function fromCache($key)
    {
        return $this->cache[$key];
    }
}