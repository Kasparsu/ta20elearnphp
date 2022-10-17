<?php include('views/partials/header.php')?>
    <form action="/posts/edit?id=<?=$post->id?>" method="POST">
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" placeholder="Title..." name="title" value="<?=$post->title?>">
            </div>
        </div>
        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea class="textarea" placeholder="Write something cool..." name="body"><?=$post->body?></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-primary" value="Update">
            </div>
        </div>
    </form>
<?php include('views/partials/footer.php')?>