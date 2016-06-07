<?php

/**
 * Created by PhpStorm.
 * User: mohammadmohsin
 * Date: 27/05/2016
 * Time: 01:21
 */

namespace AppBundle\Model;
use \Symfony\Component\Validator\Constraints\DateTime;

use \Symfony\Component\Process\Process;

/**
 * CoreShow provides easy access to the all shows
 */

class CoreShow
{

    public function getShows($type) {
        if (date("I",time()) == 1)
            $UKlocaltime = gmdate("Hi",time() +3600);
        else
            $UKlocaltime = gmdate("Hi",time());

        $showLists = $this->getShowLists();
        $curentShowlists = [];
        if ($type == "C") {
            $curentShowlists = $this->getCurrentShows($showLists, $UKlocaltime);
        }
        if ($type == "N") {
            $curentShowlists = $this->getNextShows($showLists, $UKlocaltime);
        }

        if ($type == "P") {
            $curentShowlists = $this->getPreShows($showLists, $UKlocaltime);
        }

        return $curentShowlists;

    }

    /*
     * get the previous show lists
     *
     * return array
     */
    private function getPreShows($showLists, $UKlocaltime) {
        $currentlists = [];
        $i = 0;
        $arrayStartFrom = 0;
        foreach ($showLists as $row) {
            if (($row["endTime"] >= $UKlocaltime) && ($row["showTime"] <= $UKlocaltime)) {
                $arrayStartFrom = $i-1;
            }
            $i++;
        }

        $totalArrayElement = count($showLists); //exit;
        for ($i = $arrayStartFrom; $i > 0; $i--) {
            array_push($currentlists, $showLists[$i]);
        }

        for ($i =$totalArrayElement-1; $i> ($arrayStartFrom + 1); $i--) {
            array_push($currentlists, $showLists[$i]);
        }

        return $currentlists;
    }

    /*
     * get the next show list
     *
     * return array
     */
    private function getNextShows($showLists, $UKlocaltime) {
        $currentlists = [];
        $i = 0;
        $arrayStartFrom = 0;
        foreach ($showLists as $row) {
            if (($row["endTime"] >= $UKlocaltime) && ($row["showTime"] <= $UKlocaltime)) {
                $arrayStartFrom = $i+1;
            }
            $i++;
        }

        $totalArrayElement = count($showLists);
        for ($i = $arrayStartFrom; $i < $totalArrayElement; $i++) {
                array_push($currentlists, $showLists[$i]);
        }

        for ($i =0; $i< ($arrayStartFrom - 1); $i++) {
            array_push($currentlists, $showLists[$i]);
        }

        return $currentlists;
    }

    /*
     * get the current show
     *
     * return array
     */
    private function getCurrentShows($showLists, $UKlocaltime) {
        $currentlists = [];
        foreach ($showLists as $row) {
            if (($row["endTime"] >= $UKlocaltime) && ($row["showTime"] <= $UKlocaltime)) {
                array_push($currentlists, $row);
            }
        }
        return $currentlists;
    }

    /*
     * read the information from api
     *
     * return array
     */
    private function getShowLists() {

        $feed_url = 'http://bleb.org/tv/data/rss.php?ch=bbc1&daye=0';
        $content = file_get_contents($feed_url);
        $x = new \SimpleXmlElement($content);

        $mainInformation = [];
        foreach($x->channel->item as $program) {
            $timeTitle = explode(":", $program->title);
            $showDescription = trim($program->description);
            $showLink = trim($program->link);
            array_push($mainInformation, array("showTime" => trim($timeTitle[0]), 'showTitle' => trim($timeTitle[1]),
                        "showDescription" => $showDescription, "showLink" => $showLink));
        }

        $mainInformationDetails = [];
        for ($i =0; $i< (count($mainInformation)-1); $i++) {
            for ($j=$i+1; $j<($i+2); $j++ ) {
                $showStartTime = date("g:ia",strtotime($mainInformation[$i]["showTime"]));
                if (substr(explode(":",$showStartTime)[1],0,2) == "00") {
                    $showStartTime = date("ga",strtotime($mainInformation[$i]["showTime"]));
                }
                $showEndTime = date("g:ia",strtotime($mainInformation[$j]["showTime"]));
                if (substr(explode(":",$showEndTime)[1],0,2) == "00") {
                    $showEndTime = date("ga",strtotime($mainInformation[$j]["showTime"]));
                }

                $showTotalTime = round(abs(strtotime($showEndTime) - strtotime($showStartTime)) / 60,2). " minute";
                array_push($mainInformationDetails, array("showTime" => $mainInformation[$i]["showTime"],
                    "endTime" => $mainInformation[$j]["showTime"],
                    "showStartTime" => $showStartTime,
                    "showEndTime" => $showEndTime,
                    "showTotalTime" => $showTotalTime,
                    "showTitle" => $mainInformation[$i]["showTitle"],
                    "showDescription" => $mainInformation[$i]["showDescription"],
                    "showLink" => $mainInformation[$i]["showLink"]));

            }
        }

        return $mainInformationDetails;
    }

}