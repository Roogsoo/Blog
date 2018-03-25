<h1>Posts</h1>
<h2><?=$post['post_subject']?></h2>
<p><?=$post['post_text']?></p>
<div><?=$post['post_created']?></div>
<a href="<?=BASE_URL?>tags/view/<?=$post['post_id']?>">Tags</a>

<h3>Comments:</h3>

<?foreach($comments as $comment):?>
    <div><?=$comment['comment']?></div>
<?endforeach?>
    <br><br><br>

        <textarea rows="3" cols="50" name="comment" form="usrform">
Comment...
        </textarea>
<br>
        <input type="submit">

<?foreach($tags as $tag):?>
   <!-- <a href ="#"><span class="label label-info">
    <?/*=$tag['tag_name']*/?></span></a>

    <div class="span8">

        <h2> <a href="<?/*=BASE_URL*/?>posts/view<?/*$post['post_subject']*/?>"><?/*=$post['post_subject']*/?></a></h2>
        <p><?/*=$post['post_text']*/?></p>

        <div>
            <span class="badge badge-success"><?/*=$post['post_created']*/?></span>  <span class="badge badge-success"><?/*=$post['user_id']*/?></span>
        </div>

    <   /div>-->
<?endforeach?>