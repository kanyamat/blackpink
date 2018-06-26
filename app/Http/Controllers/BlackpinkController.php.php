<?php
namespace App\Http\Controllers;
       
use App\Models\sequents as sequents;
use App\Models\document_data as document_data;
use App\Models\sequentsteps as sequentsteps;
use App\Models\document_type as  document_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//////////////////////
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Storage;
//////////////////////
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
//use LINE\LINEBot\Event;
//use LINE\LINEBot\Event\BaseEvent;
//use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
use LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
use LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
use LINE\LINEBot\ImagemapActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder ;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
use LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;
class GetMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     // public function index(){
     //    $conn_string = "host=ec2-54-235-249-33.compute-1.amazonaws.com port=5432 dbname=d8hs21dt7982d1 user=fbkfmrzztwtyve password=3bc51779a47c036832502ba77117ce30c65a96edd6f99a6b0f69b854d7d12db7";
     //    $dbconn = pg_pconnect($conn_string);
            
     //      $user = 'Uc45702b2bf51da1426172a256add3792';
                   
     // }
     public function getmessage()
    {         
    
            $httpClient = new CurlHTTPClient('5uue/Iaje4MsiCr06+Ij21uRZO3TvMiVZIcF0LUM+aViLcFhWaurXa7xL+0+wTrKsX0FTI0Z210hN+ADKc+z/WD7l3659Kk5M14iFAUVbzI0fxjQoh8IhAtHZ7DaZWB4zOC4Ntpzdtlosbjdwxa0WQdB04t89/1O/w1cDnyilFU=');
            $bot = new LINEBot($httpClient, array('channelSecret' => 'c22a5a70e51809685e6e3a430b8d61c2
'));
            // คำสั่งรอรับการส่งค่ามาของ LINE Messaging API
            $content = file_get_contents('php://input');
            // แปลงข้อความรูปแบบ JSON  ให้อยู่ในโครงสร้างตัวแปร array
            $events = json_decode($content, true);
            if(!is_null($events)){
            // ถ้ามีค่า สร้างตัวแปรเก็บ replyToken ไว้ใช้งาน
            $replyToken  = $events['events'][0]['replyToken'];
            $user        = $events['events'][0]['source']['userId'];
           // $userMessage = $events['events'][0]['message']['text'];
            $typeMessage = $events['events'][0]['message']['type'];
            $idMessage   = $events['events'][0]['message']['id']; 
            }
            //$userMessage =  $typeMessage;
            // return $this->replymessage($replyToken,$userMessage,$case);
            // $case = 1;
            // return $this->replymessage($replyToken,$userMessage,$case);
                // $conn_string = "host=ec2-54-235-249-33.compute-1.amazonaws.com port=5432 dbname=d8hs21dt7982d1 user=fbkfmrzztwtyve password=3bc51779a47c036832502ba77117ce30c65a96edd6f99a6b0f69b854d7d12db7";
                // $dbconn = pg_pconnect($conn_string);
                // $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
                // $num = pg_num_rows($result);
                //     if($num==0)         
                //  {  
                //      $seqcode = '0000';
                //      $nextseqcode = '0000';             
                //      $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                //  }
      
                // $seqcode = $this->seqcode_select($user);
            $response = $this->bot->replyText($replyToken, 'hello!');

 }  
}