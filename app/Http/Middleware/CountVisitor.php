<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\VisitorStat;

class CountVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('visitor_counted')) {

            $visitor = VisitorStat::first();

            if (!$visitor) {

                $visitor = VisitorStat::create([
                    'total_visitors' => 1
                ]);

            } else {

                $visitor->increment('total_visitors');

            }

            session()->put('visitor_counted', true);
        }

        return $next($request);
    }
}