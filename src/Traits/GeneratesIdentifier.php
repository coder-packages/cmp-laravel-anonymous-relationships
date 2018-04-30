<?php

namespace Larapackages\AnonymousRelationships\Traits;

use Larapackages\AnonymousRelationships\Generators\Identifier;

trait GeneratesIdentifier
{
	public function generateIdentifier($id)
	{
		return app(Identifier::class)->generate($id);
	}
}