<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;


class Swagger extends Controller
{

/**
 * @SWG\Get(
 *   path="/movies",
 *  tags={"Movie"},
 *   summary="Movies list ",
 *   @SWG\Response(response=200, description="successful operation")
 * )
 *
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public  function index(){
        return response()->json(200);
    }
/**
 * @SWG\POST(
 *     path="/movie",
 *      tags={"Movie"},
 *     description="Return a Movie",
 *      summary="Create new Movie",
 *     @SWG\Parameter(
 *         name="title",
 *         in="query",
 *         type="string",
 *         description="The title of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="description",
 *         in="query",
 *         type="string",
 *         description="The description of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="image",
 *         in="query",
 *         type="string",
 *         description="The link of image",
 *         required=true,
 *     ),
 *     @SWG\Parameter(
 *         name="link_trailer",
 *         in="query",
 *         type="string",
 *         description="The link of youtube to movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="launcher",
 *         in="query",
 *         type="string",
 *         description="The launcher of movie",
 *         required=true,
 *     ),
 *     @SWG\Response(
 *         response=201,
 *         description="OK",
 *     ),
 *     @SWG\Response(
 *         response=400,
 *         description="ALL DATA IS REQUERID"
 *     ),@SWG\Parameter(
 *         name="Cast",
 *         in="query",
 *         type="string",
 *         description="The Casts of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="Rating",
 *         in="query",
 *         type="number",
 *         description="The Rating of movie",
 *         required=true,
 *     ),

 * )
 */
    public function create($data){
        return response()->json($data,200,$http_response_header);
    }
    /**
 * @SWG\PUT(
 *     path="/movie/{id}",
 *      tags={"Movie"},
 *     description="Return a Movie",
 *      summary="Update Movie",
 * * @SWG\Parameter(
 *         name="id",
 *         in="query",
 *         type="integer",
 *         description="id of movie",
 *         required=true,
 *     ),
 *     @SWG\Parameter(
 *         name="title",
 *         in="query",
 *         type="string",
 *         description="The title of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="description",
 *         in="query",
 *         type="string",
 *         description="The description of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="image",
 *         in="query",
 *         type="string",
 *         description="The link of image",
 *         required=true,
 *     ),
 *     @SWG\Parameter(
 *         name="link_trailer",
 *         in="query",
 *         type="string",
 *         description="The link of youtube to movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="launcher",
 *         in="query",
 *         type="string",
 *         description="The launcher of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="Cast",
 *         in="query",
 *         type="string",
 *         description="The Casts of movie",
 *         required=true,
 *     ),
 * @SWG\Parameter(
 *         name="Rating",
 *         in="query",
 *         type="number",
 *         description="The Rating of movie",
 *         required=true,
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @SWG\Response(
 *         response=400,
 *         description="ALL DATA IS REQUERID"
 *     ),
 * )
 */
/**
 * @SWG\DELETE(
 *   path="/movies/{id}",
 *  tags={"Movie"},
 *   summary="Delete Movies ",
 *   @SWG\Response(response=200, description="successful operation"),
 * * @SWG\Parameter(
 *         name="id",
 *         in="query",
 *         type="integer",
 *         description="id of movie",
 *         required=true,
 *     )
 * )
 *
 * Display a listing of the resource.
 *
 */
/**
 * @SWG\Get(
 *   path="/movie/{id}",
 *  tags={"Movie"},
 *   summary="Get Movies Id",
 *   @SWG\Response(response=200, description="successful operation"),
 *  * @SWG\Parameter(
 *         name="id",
 *         in="query",
 *         type="integer",
 *         description="id of movie",
 *         required=true,
 *     )
 * ),
 * 
 *
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
 }
