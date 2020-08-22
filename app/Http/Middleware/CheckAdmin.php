<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Repositories\UserClienteRepository;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class CheckAdmin
{
        /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth, UserClienteRepository $userClienteRepository)
    {
        $this->auth = $auth;
        $this->userClienteRepository = $userClienteRepository;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @param  string|null  $field
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
     */
    public function handle($request, Closure $next, $guard = null)
    {   
        
        $nivel = $this->userClienteRepository->getNivel($this->auth->user()->id);
        
        if($nivel[0]->nivel == "admin"){
            return $next($request);
        }
        else{
            throw new AccessDeniedHttpException('Acesso Negado');
        }       
    }
}
