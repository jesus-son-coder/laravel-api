<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *    title="API Booking LesCollectionneurs",
 *     description="Welcome to les Collectionneurs Webservices interface documentation The following documentation has been produced in order to facilitate the integration of our Webservices. This is dedicated to the technical team of our partners who want to be connected to our Hôtels & Restaurants.",
 *    version="1.0.0",
 *       @OA\Contact(
 *          email="support@lescollectionneurs.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 *  @OA\Server(
 *      url="http://127.0.0.1:3800",
 *      description="Demo API Server"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
