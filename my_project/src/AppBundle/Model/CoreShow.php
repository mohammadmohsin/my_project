<?php

/**
 * Created by PhpStorm.
 * User: mohammadmohsin
 * Date: 27/05/2016
 * Time: 01:21
 */

namespace AppBundle\Model;
use \Symfony\Component\Process\Process;

/**
 * CoreShow provides easy access to the all shows
 */

class CoreShow
{

    public function getShows() {

        $feed_url = 'http://bleb.org/tv/data/rss.php?ch=bbc1&daye=0';
        $content = file_get_contents($feed_url);
        $x = new \SimpleXmlElement($content);
        $previousShow = array();
        $currentShow = array();
        $nextShow = array();
        $tShow = array();
        //echo "<ul>";
        $currentTime = intval(date("Hi"));
        $currentShowTime = $currentTime;
        $currentShowTitle = "";
        $showTimeDiff = 0;
        $preStartTime = 0;
        $sStart = "";

        foreach($x->channel->item as $program) {
            //echo "<li><a href='$program->link' title='$program->title'>" . $program->title . "</a></li>";
            $timeSet = explode(":", $program->title);
            $showTimex = intval(trim($timeSet[0]));

            $endtime = trim($timeSet[0]);
            /*echo date("h:i",strtotime($endtime)); //exit;
            if (($endtime == '0600') && ($preStartTime == '0000')) {
                echo 4; //
                echo $showTimex; echo $currentTime;
            }
*/
            //if (date("h:i",strtotime($showTimex)) > date("h:i",strtotime($currentTime)) ) {
            if ($showTimex > $currentTime) {
                $total_show_time = $endtime - $preStartTime;
                if ($preStartTime > 0) {
                    array_push($nextShow, [$sStart => array("start_time" => $sStart, 'end_time' => $endtime,
                        "total_minutes" => $total_show_time,
                        "title" => $sTitle, "description" => $sDescription,
                        "link" => $sLink)]);
                    $sStart = $endtime;
                    $sTitle = trim($timeSet[1]);
                    $sDescription = trim($program->description);
                    $sLink = trim($program->link);

                } else {
                    $sStart = $endtime;
                    $sTitle = trim($timeSet[1]);
                    $sDescription = trim($program->description);
                    $sLink = trim($program->link);
                }


                $preStartTime = $endtime;

            } else {
                $endtime;
                echo $preStartTime;
                echo "<br />" . 9999 ."<br />";
                $total_show_time = date("h:i",strtotime($endtime)) - date("h:i",strtotime($preStartTime));
                //exit;
                if ($preStartTime > 0) {
                    echo 9999;
                    array_push($previousShow, [$sStart => array("start_time" => $sStart, 'end_time' => $endtime,
                        "total_minutes" => $total_show_time,
                        "title" => $sTitle, "description" => $sDescription,
                        "link" => $sLink)]);
                    $sStart = $endtime;
                    $sTitle = trim($timeSet[1]);
                    $sDescription = trim($program->description);
                    $sLink = trim($program->link);

                } else {
                    echo 2;
                    $sStart = $endtime;
                    $sTitle = trim($timeSet[1]);
                    $sDescription = trim($program->description);
                    $sLink = trim($program->link);
                }
                echo $preStartTime = $endtime;

            }

        }
        //var_dump($tShow); exit;
        echo "----" .$preStartTime . "----";
        //$previousShow = array_diff_key($previousShow, [trim($timeSet[0])]);

        array_push($tShow, [$sStart => array("start_time" => $sStart, 'end_time' => $endtime,
            "total_minutes" => $total_show_time,
            "title" => $sTitle, "description" => $sDescription,
            "link" => $sLink)]);
        $sStart = $endtime;
        $sTitle = trim($timeSet[1]);
        $sDescription = trim($program->description);
        $sLink = trim($program->link);

        echo "</ul>";
        echo "<pre>";
        var_dump($previousShow);
        var_dump($tShow);
        var_dump($nextShow);
        exit;
       /* echo "<br />";
        echo "--------------------------------------------------------------------------------";
        var_dump($currentShow);
        echo "<br />";
        //echo $currentShowTitle;
        echo "<br />";
        echo "--------------------------------------------------------------------------------";
        var_dump($previousShow);

        $shows = 1;*/
        var_dump($currentShow);
        return $currentShow;
    }

}