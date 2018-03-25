<?php
/**
 * Created by PhpStorm.
 * User: Kristjan
 * Date: 25.03.2018
 * Time: 23:30
 */
namespace App;
class tags extends Controller
{
    function index()
    {
        $this->tags = get_all("SELECT * FROM tag");
        /*$this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count
                                    FROM post_tags NATURAL JOIN tag
                                    GROUP BY tag_id");*/
    }
    function view()
    {
        $post_id = $this->params[0];
        $this->post = get_first("SELECT * FROM post NATURAL JOIN users WHERE post_id='$post_id'");
        $this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
    }
}