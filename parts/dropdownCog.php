<div class="dropdown">
    <div class="cog">
        <img src="icons/setting-cog.png">
    </div>
    <div class="contents">
        <form action="delete.php" method="POST">
            <input name="id" type="hidden" value="<?php echo $vid["id"] ?>">
            <button class="btn btn-delete">
                <img class="delete" src="icons/delete.png">
            </button>
        </form>
        <a class="btn btn-update" href="update.php?id=<?php echo $vid["id"] ?>"><img class=" update"
                src="icons/update-icon.svg"></a>
        <a class="btn btn-view" href="view.php?id=<?php echo $vid["id"] ?>"><img class=" view"
                src="icons/view-icon.svg"></a>
    </div>
</div>