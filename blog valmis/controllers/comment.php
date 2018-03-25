<?php
/**
 * Created by PhpStorm.
 * User: Kristjan
 * Date: 25.03.2018
 * Time: 23:27
 */
namespace App;
class comment extends Controller
{
    function index()
    {
        $this->comment = get_all("SELECT * FROM comment");
        /*$this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count
                                    FROM post_tags NATURAL JOIN tag
                                    GROUP BY tag_id");*/
    }
    function view()
    {
        $post_id = $this->params[0];
        $this->post = get_first("SELECT * FROM post NATURAL JOIN users WHERE post_id='$post_id'");
        $this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
        $this->comments = get_all("SELECT * FROM post_comments NATURAL JOIN comment WHERE comment_id='$post_id'");
    }
}