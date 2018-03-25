<h1>Posts</h1>

<?foreach($posts as $post):?>

    <div class="span8">

        <h2> <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?><?$post['post_subject']?>"><?=$post['post_subject']?></a></h2>
         <p><?=$post['post_text']?></p>

            <div>
                 <span class="badge badge-success"><?=$post['post_created']?></span>  <span class="badge badge-success"><?=$post['user_id']?></span>
            </div>

    </div>



<?endforeach?>



