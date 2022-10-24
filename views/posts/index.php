<?php include('views/partials/header.php')?>
    <a href="/posts/new" class="button is-primary">New Post</a>
    <table class="table is-fullwidth is-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><?=$post->id?></td>
                    <td><?=$post->title?></td>
                    <td><?=$post->created_at->format('Y-m-d H:i:s');?></td>
                    <td><?=$post->updated_at->format('Y-m-d H:i:s');?></td>
                    <td>
                        <div class="field has-addons">
                            <p class="control">
                                <button class="button is-link">
                                    <span>View</span>
                                </button>
                            </p>
                            <p class="control">
                                <a class="button is-warning" href="/posts/edit?id=<?=$post->id?>">
                                    <span>Edit</span>
                                </a>
                            </p>
                            <p class="control">
                                <a class="button is-danger" href="/posts/delete?id=<?=$post->id?>">
                                    <span>Delete</span>
                                </a>
                            </p>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include('views/partials/footer.php')?>