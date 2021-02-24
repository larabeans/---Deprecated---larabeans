<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindStateByIdAction extends Action
{
    public function run(Request $request)
    {
        $state = Apiato::call('Location@FindStateByIdTask', [$request->id]);

        return $state;
    }
}
