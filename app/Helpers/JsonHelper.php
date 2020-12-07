<?php namespace App\Helpers;

class JsonHelper {
    public static function success($content)
    {
        return response()->json($content,200);
    }

    public static function successfullyAdded($content)
    {
        return response()->json($content,201);
    }

    public static function notFound(string $msg = 'Not found')
    {
        return response()->json(['msg' => $msg],404);
    }

    public static function noContent()
    {
        return response()->json(null, 204);
    }

    public static function validationErrors(\Illuminate\Validation\Validator $validator)
    {
        return response()->json($validator->errors(), 400);
    }
}
