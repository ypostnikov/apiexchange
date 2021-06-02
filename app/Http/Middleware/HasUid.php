<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class HasUid
 * @package App\Http\Middleware
 */
class HasUid
{

    /**
     * @param $req
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle($req, Closure $next)
    {
        $uid = trim($req->get('uid'));
        if (!$uid) {
            return response()->json(['res' => 'not found uid']);
        }
        return $next($req);
    }

}
