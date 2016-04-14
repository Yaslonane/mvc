<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.04.16
 * Time: 15:14
 */

class News{

    /*
     * Return single news item with specified id
     * @param integer $id
     */
    public static function getNewsItemById($id){
        //запрос к БД
    }

    /*
     * return an array of news items
     */
    public static function getNewsList(){

        $host = 'localhost';
        $dbname = 'mvc_site';
        $user = 'root';
        $password = 'root';
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->exec('SET NAMES utf8'); //задаём кодировку ввода/вывода БД


        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content '
                . 'FROM news '
                . 'ORDER BY date DESC '
                . 'LIMIT 10 ');

        $i = 0;
        while($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }
}

?>