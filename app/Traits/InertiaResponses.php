<?php

namespace App\Traits;

use App\Enums\ResponseEvent;

trait InertiaResponses
{
    /**
     * This returns a success redirect response for inertia
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function success(string $message, ?array $data = null, ResponseEvent $event = ResponseEvent::Default)
    {
        return redirect()->back()->with([
            'message' => $message,
            'data' => $data,
            'event' => $event->value,
        ]);
    }

    /**
     * This returns an error redirect response for inertia
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function error(string $message, array $errors = [], ?string $route = null)
    {
        $redirect = $route ? redirect()->route($route)->withErrors([
            'message' => $message,
            ...$errors,
        ]) :
        redirect()->back()->withErrors([
            'message' => $message,
            ...$errors,
        ]);

        return $redirect;
    }

    /**
     * This returns an error redirect response for inertia and also reporting an exception.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function serverError(string $message, \Throwable $th, array $errors = [], ?string $route = null)
    {
        logger($th);

        $message = match (true) {
            $th instanceof \App\Exceptions\CustomException => $th->getMessage(),
            $th instanceof \InvalidArgumentException => $th->getMessage(),
            $th instanceof \Illuminate\Database\Eloquent\ModelNotFoundException => $th->getMessage(),
            default => $message,
        };

        return $this->error($message, $errors, $route);
    }

    // method success(string $message, array $data = null)
}
