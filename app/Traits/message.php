<?php

namespace  App\Traits;
trait message {

    public $type_danger = 0;
    public $type_success = 1;
    public $type_warning = 2;
    public $type_info = 3;

    /**
     * Redirect to a named route with a message
     * @param mixed $type type of message
     * @param mixed $message message content
     * @param mixed $to Named route to redirect to
     * @return mixed
     */
    function messageRedirect($type,$message, $to)
    {
        $messageContent = [
            'type' => $type,
            'message' => $message
        ];

        return redirect()->route($to)->with('overmsg', $messageContent);
    }
}
