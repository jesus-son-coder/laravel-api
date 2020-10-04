<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @SWG\Swagger(
 *     basePath="",
 *     schemes={"http", "https"},
 *     host=L5_SWAGGER_CONST_HOST,
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Booking API LesCollectionneurs",
 *         description="Welcome to les Collectionneurs Webservices interface documentation The following documentation has been produced in order to facilitate the integration of our Webservices. This is dedicated to the technical team of our partners who want to be connected to our Hôtels & Restaurants.",
 *         @SWG\Contact(
 *             email="support@lescollectionneurs.com"
 *         ),
 *     )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
