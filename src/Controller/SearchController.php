<?php


namespace App\Controller;



use Google_Client;
use Google_Service_YouTube;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/", methods={"POST", "GET"})
     * @throws \Google_Exception
     */
    public function searchKeyWord(PaginatorInterface $paginator, Request $request): Response {
//        $newResponse = new JsonResponse(null);

        if ($request->isXmlHttpRequest()) {
            $keyWord = $request->request->get("keyword");

            $API_key    = "AIzaSyBIRHsG9s1VXeJyb1ar3dIwy1xfevRJkSw";

            $channelID  = "UCcgqSM4YEo5vVQpqwN-MaNw";

            $maxResults = 50;

            $httpClient = HttpClient::create();
            if ($keyWord == null)
                $response = $httpClient->request('GET', "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID."&maxResults=12"."&key=".$API_key);
            else
                $response = $httpClient->request('GET', "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID."&q=".$keyWord."&maxResults=".$maxResults."&key=".$API_key);
            $videoList = json_decode($response->getContent());
            //        $videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID."&maxResults=".$maxResults."&key=".$API_key));
//        print_r($videoList);

            $arr = array();
            foreach($videoList->items as $item){

                if(isset($item->id->videoId)){

//                echo $item->snippet->title;
                    array_push($arr, $item->snippet);

                }

            }

            $newResponse = new JsonResponse($arr);
            return $newResponse;
        } else {
            return $this->render('homepage.html.twig');
        }
//        else {
//            // TODO
//
//            $API_key    = "AIzaSyDUgtlyMhJju5icFIwqyXOBr1JtJ2z2hrQ";
//
//            $order = "date";
//
//            $channelID  = "UCkRfArvrzheW2E7b6SVT7vQ";
//
//            $maxResults = 12;
//            $resultsPerPage = 2;
//            $curPage = $request->query->getInt('page', 1);
//
//            $httpClient = HttpClient::create();
//            $response = $httpClient->request('GET', "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID."&maxResults=".$maxResults."&key=".$API_key."&order=".$order);
//            $videoList = json_decode($response->getContent());
//            //        $videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID."&maxResults=".$maxResults."&key=".$API_key));
////        print_r($videoList);
//
//            $arr = array();
//            $index = 0;
//            foreach($videoList->items as $item){
//
//                if(isset($item->id->videoId)){
//
////                echo $item->snippet->title;
//                    if ($index < $curPage * $resultsPerPage && $index >= ($curPage - 1) * $resultsPerPage) {
//                        array_push($arr, $item->snippet);
//                        $index++;
//                    }
//
//                }
//
//            }
//
//            $pagination = $paginator->paginate($arr, $curPage, 1);
//
//            return $this->render('homepage.html.twig', [
//                'pagination' => $pagination,
//                'videos' => $arr
//            ]);
//        }
    }
}