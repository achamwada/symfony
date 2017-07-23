<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23/7/2017
 * Time: 18:51
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class animalController extends Controller
{
    /**
     * @Route("/animal/{animalName}", name="single_animal")
     */
    public function startAction($animalName){
        $my_notes=["Volvo", "BMW", "Toyota"];
        return $html = $this->render("/animals/animal.html.twig",[
           "name"=> $animalName,
            "notes"=>$my_notes
        ]);


    }

    /**
     * @Route("/animal/{animalName}/notes", name="notes_route")
     * @Method("GET")
     */

    public function getData(){

        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://www.spotlight-trade.co.uk/sitemap_index.xml");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HEADER, 0);

        // $output contains the output string
        $output = curl_exec($ch);

        //$outp = json_encode($output, true);

        // close curl resource to free up system resources
        curl_close($ch);

        //return dump($output);

        $outpu = simplexml_load_string($output);

      return  $this->render("/curlstuff/thexml.html.twig",[
            "myxml"=>$outpu
        ]);
    }
}