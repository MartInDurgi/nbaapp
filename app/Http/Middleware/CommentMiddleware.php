<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $needles = ['hate', 'stupid', 'idiot'];
        foreach ($needles as $needle) {
            if (str_contains($request->content, $needle)) {
                return redirect('/teams/' . $request->team_id)->withErrors('You cant use forbiden words (' . $needle . ')');
            }
        }

        return $next($request);
    }
}
