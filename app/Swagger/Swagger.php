<?php

namespace App\Swagger;

/**

 *
 * @OA\OpenApi(
 *   @OA\Server(
 *      url="/api/v1",
 *      description="Documentations Travel Planner"
 *   ),
 *   @OA\Info(
 *      title="Documentations Travel Planner",
 *      version="1.0.0",
 *   ),
 * )
 *

 *
 * @OA\SecurityScheme(
 *     type="http",
 *     description="Login with email and password to get the authentication token",
 *     name="Token Based",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="bearerAuth",
 * )

*/

class Swagger
{
}