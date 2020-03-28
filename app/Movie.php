<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* @OA\Info(title="API Movie EL LIDER", version="1.0")
*
* @OA\Server(url="http://swagger.local")
*/
class Movie extends Model
{
      /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
}
