# Laravel anonymous relationships in eloquent

**Install package** 

```
composer require larapackages/anonymous-relationships
```

**Add trait in the model**

```
use Larapackages\AnonymousRelationships\Traits\GeneratesIdentifier;

class User
{
	use GeneratesIdentifier;
}
```

**Add method to your model**

```
public function getIdentifierAttribute()
{
    return $this->generateIdentifier($this->id);
}
```

**Add relationship like this**

```
// has many relation
public function addresses()
{
    return $this->hasMany(Address::class, 'user_id', 'identifier');
}

// has one relation
public function address()
{
    return $this->hasOne(Address::class, 'user_id', 'identifier');
}
```


